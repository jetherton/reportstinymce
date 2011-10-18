<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Reports TinyMCE - sets up the hooks
 *
 * @author	   John Etherton
 * @package	   Reports TinyMCE
 */

class reportstinymce {
	
	/**
	 * Registers the main event add method
	 */
	public function __construct()
	{
	
		// Hook into routing
		Event::add('system.pre_controller', array($this, 'add'));
		
	}
	
	/**
	 * Adds all the events to the main Ushahidi application
	 */
	public function add()
	{
		//if dealing with the
		if(Router::$controller == "reports")
		{
			Event::add('ushahidi_action.header_scripts', array($this, '_add_to_submit'));		
			Event::add('ushahidi_action.header_scripts_admin', array($this, '_add_to_edit'));	
		}		
	}
	
	/**
	 * Add the JS to the backend so the /admin/reports/edit page has the tinyMCE editor
	 */
	public function _add_to_edit()
	{
			$view = new View('reportstinymce/reportstinymce_js');
			$view->width = "380";
			$view->render(true);
	}
	
	/**
	 * Add the JS to the frontend so the /reports/submit page has the tinyMCE editor
	 */
	public function _add_to_submit()
	{
			$view = new View('reportstinymce/reportstinymce_js');
			$view->width = "420";
			$view->render(true);
	}
	
	
}//end class

new reportstinymce;