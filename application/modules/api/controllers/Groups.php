<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Groups Controller with Swagger annotations
 * Reference: https://github.com/zircote/swagger-php/
 */
class Groups extends API_Controller {
	/**
	 * @SWG\Get(
	 * 	path="/groups",
	 * 	tags={"groups"},
	 * 	summary="List out groups",
	 * 	@SWG\Parameter(
	 * 		in="header",
	 * 		name="X-API-KEY",
	 * 		description="API Key",
	 * 		required=false,
	 * 		type="string"
	 * 	),
	 * 	@SWG\Response(
	 * 		response="200",
	 * 		description="List of groups",
	 * 		@SWG\Schema(type="array", @SWG\Items(ref="#/definitions/DemoUser"))
	 * 	)
	 * )
	 */
	public function index_get()
	{
		$data = $this->groups
			->select('id, name, description')
			->get_all();
		$this->response($data);
	}
}
