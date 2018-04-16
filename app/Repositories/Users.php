<?php

namespace Cinema\Repositories;


use Cinema\Repositories\Users;
use Illuminate\Http\Request;
/**
* 
*/
class Users extends GuzzleHttpRequest
{

	
	public function all()
		{
		return $this->get('users');    
		}

	public function find($id)
		{

		return $this->get("users/{$id}");
		}
}