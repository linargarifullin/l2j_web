<?php

class HomeController extends BaseController {


	/**
	 * Initialize Account Controller instance.
	 */
	public function __construct()
	{
		$this->app_settings 	= Config::get('app_settings');
	}

	/**
	 * Display the home page.
	 *
	 * @return Response
	 */
	public function showHome()
	{
		return View::make('home', [
			'app' 			=> $this->app_settings,
			'page_title' 	=> 'Home'
		]);
	}

}
