<?php namespace Cinema\Http\Controllers;
class PruebaController extends Controller {

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return 'welcome desde el controlador';
	}

	public function nombre($nombre)
	{
		return 'mi nombre es: '.$nombre;
	}
}
