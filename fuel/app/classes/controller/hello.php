<?php
 
class Controller_Hello extends Controller
{
	public function action_index()
	{
		$view_params = array();
		$view_params['name'] = 'hello!!';
		return Response::forge(View::forge('hello',$view_params));
	}
}