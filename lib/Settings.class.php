<?php

class Settings {
	
	/** Array of settings */
	private static $settings = array();

	/**
	 * Return a value in $settings array for the specified key, 
	 * null if the key does not exists.
	 * @param string key the key for the value to be returned
	 */
	public static function get($key){
		if (isset(self::$settings[$key])) {
			return self::$settings[$key];
		}
		return null;
	}

	/**
	 * Sets a new value in the settings array for the specified key
	 * @param string key the key of the setting
	 * @param mixed value the value for the setting
	 */
	public static function set($key, $value) {
		self::$settings[$key] = $value;
	}
}