<?php

class Application {

	/**
	 * Run the application
	 */
	public function run() {
		echo Settings::get('app.name');
	}

}