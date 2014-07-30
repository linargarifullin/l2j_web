<?php

class AccountController extends \BaseController {


	/**
	 * Initialize Account Controller instance.
	 */
	public function __construct()
	{
		$this->app_settings 	= Config::get('app_settings');
	}

	/**
	 * Display the registration form.
	 *
	 * @return Response
	 */
	public function getRegister()
	{
		return View::make('account/registration', [
			'app' 			=> $this->app_settings,
			'page_title' 	=> 'Account Registration']);
	}

	/**
	 * Register new user.
	 *
	 * @return Response
	 */
	public function postRegister()
	{
		return View::make('account/registration', [
			'app' 			=> $this->app_settings,
			'page_title' 	=> 'Account Registration complete!'
		]);
	}

}
