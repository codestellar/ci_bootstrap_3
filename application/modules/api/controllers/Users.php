<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Users Controller with Swagger annotations
 * Reference: https://github.com/zircote/swagger-php/
 */
class Users extends API_Controller {
	/**
	 * @SWG\Get(
	 * 	path="/users",
	 * 	tags={"users"},
	 * 	summary="List out users",
	 * 	@SWG\Parameter(
	 * 		in="header",
	 * 		name="X-API-KEY",
	 * 		description="API Key",
	 * 		required=false,
	 * 		type="string"
	 * 	),
	 * 	@SWG\Response(
	 * 		response="200",
	 * 		description="List of users",
	 * 		@SWG\Schema(type="array", @SWG\Items(ref="#/definitions/User"))
	 * 	)
	 * )
	 */
	public function index_get()
	{
		$data = $this->users
			->select('id, username, email, active, first_name, last_name')
			->get_all();
		$this->response($data);
	}

}
