<?php namespace App\Controllers;
use App\Models\PostModel;
class Home extends BaseController
{
	
	public $data;
	/**
	 * Class constructor.
	 */
	public function __construct()
	{
		
		$this->data = [];
	}
	public function index()
	{
		echo "Home";
		
		
	}

	//--------------------------------------------------------------------

}