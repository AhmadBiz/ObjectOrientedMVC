<?php 
class homeController extends controller{
	protected function index(){
	    $viewmodel = new homeModel();
	    $this->returnView($viewmodel->Index(), true);
    }
}
