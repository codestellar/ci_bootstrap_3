<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * AdminGroups Controller with Swagger annotations
 * Reference: https://github.com/zircote/swagger-php/
 */
class AdminGroups extends API_Controller {
	/**
	 * @SWG\Get(
	 * 	path="/admingroups",
	 * 	tags={"admingroups"},
	 * 	summary="List out admin groups",
	 * 	@SWG\Parameter(
	 * 		in="header",
	 * 		name="X-API-KEY",
	 * 		description="API Key",
	 * 		required=false,
	 * 		type="string"
	 * 	),
	 * 	@SWG\Response(
	 * 		response="200",
	 * 		description="List of admin groups",
	 * 		@SWG\Schema(type="array", @SWG\Items(ref="#/definitions/DemoUser"))
	 * 	)
	 * )
	 */
	public function index_get()
	{
		$data = $this->admin_groups
			->select('id, name, description')
			->get_all();
		$this->response($data);
	}
}
