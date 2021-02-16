<?php
//Class for Home
class Home extends Controller{
	protected function Index(){
		//Calling HomeModel class
		$viewmodel = new HomeModel();
		$this->returnView($viewmodel->Index(), true);
	}
}