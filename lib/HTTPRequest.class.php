<?php


class HTTPRequest extends ApplicationComponent
{
    /**
     * Gets data from the cookie with specified key
	 *
	 * @param string $key key of the cookie
	 * @return the content of the cookie if it is set, null otherwise
	 */
    public function cookieData($key)
    {
        return isset($_COOKIE[$key]) ? $_COOKIE[$key] : null;
    }

    /** 
     * Checks if the cookie exists
	 *
	 * @param string $key key of the cookie
	 * @return TRUE if cookie exists, FALSE otherwise
	 */
    public function cookieExists($key)
    {
        return isset($_COOKIE[$key]);
    }

    /**
     * Try to reach the content of the $_GET param 
	 *
	 * @param string $key key of the GET param to reach
	 * @return content of GET if isset, null otherwise
	 */
    public function getData($key)
    {
        return isset($_GET[$key]) ? $_GET[$key] : null;
    }

    /** 
     * Checks if GET parameter exists
	 *
	 * @param string $key key of the GET param to check
	 * @return TRUE if GET is isset, FALSE otherwise
	 */
    public function getExists($key)
    {
        return isset($_GET[$key]);
    }

    /**
     * Try to reach the content of the $_POST param 
	 *
	 * @param string $key key of the POST param to reach
	 * @return content of POST if isset, null otherwise
	 */
    public function postData($key)
    {
        return isset($_POST[$key]) ? $_POST[$key] : null;
    }

    /** 
     * Checks if POST parameter exists
	 *
	 * @param string $key key of the POST param to check
	 * @return TRUE if POST is isset, FALSE otherwise
	 */
    public function postExists($key)
    {
        return isset($_POST[$key]);
    }

    /** Returns the url requested by the user
	 *
	 * @return string the url requested by the user
	 */
    public function requestURI()
    {
        return $_SERVER['REQUEST_URI'];
    }

    /** 
     * Add new value to $_GET
	 *
	 * @param string $key key of the param
	 * @param mixed $value value of the param
	 */
    public function setGet($key, $value)
    {
        $_GET[$key] = $value;
    }

	/** 
     * Add new value to $_POST
	 *
	 * @param string $key key of the param
	 * @param mixed $value value of the param
	 */
    public function setPost($key, $value)
    {
        $_POST[$key] = $value;
    }
}