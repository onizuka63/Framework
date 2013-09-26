<?php

class HTTPResponse extends ApplicationComponent
{
    /** The page to display */
    protected $page;

    /** 
     * Add a specific header to the response
	 *
	 * @param string header the header
	 */
    public function addHeader($header)
    {
        header($header);
    }

    /**
     * Redirect the user to the specified location
	 *
	 * @param string location the url the user will be redirected to
	 */
    public function redirect($location)
    {
        header('Location: '. $location);
        exit;
    }

    /** 
     * Redirect the user to the 404 error page
	 */
    public function redirect404()
    {
        $this->page = new Page($this->app);
        $this->page->setContentFile(dirname($_SERVER['SCRIPT_FILENAME']).'/../apps/'.$this->app->name().'/templates/errors/404.php');

        $this->addHeader('HTTP/1.0 404 Not Found');

        $this->send();
    }

    /**
	 * Send the generated page to the user
	 */
    public function send()
    {
        exit($this->page->getGeneratedPage());
    }

    /** 
     * Set the page to display
	 *
	 * @param Page page the page to display
	 */
    public function setPage(Page $page)
    {
        $this->page = $page;
    }

    /** 
     * define a new cookie 
	 *
	 * @param string name name of the cookie
	 * @param string value value of the cookie
	 * @param int expire expiration date of the cookie
	 * @param string path the path where the cookie will be stored
	 * @param <type> $domain
	 * @param <type> $secure
	 * @param <type> $httpOnly
	 */
    public function setCookie($name, $value = '', $expire = 0, $path = null, $domain = null, $secure = false, $httpOnly = true)
    {
        setcookie($name, $value, $expire, $path, $domain, $secure, $httpOnly);
    }
}