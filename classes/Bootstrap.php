<?php
class bootstrap{
	private $controller;
	private $action;
	private $request;

	public function __construct($request){
		$this->request = $request;
		//controller is the part right after php.dev
		if($this->request['controller']==''){
			$this->controller = 'home';
		}else{
			$this->controller = $this->request['controller']; //make it equal to itself
		}
		if($this->request['action'] == ''){ //action is what comes after the controller --> register
			$this->action = 'index';
		}else{
			$this->action = $this->request['controller'];
		}
	}

	public function createController(){
		// check class
		if(class_exists($this->controller)){
			$parents = class_parents($this->controller);
			//check extend
			if(in_array("controller", $parents)){
				if(method_exists($this->controller, $this->action)){
					return new $this->controller($this->action, $this->request);
				}else{
					echo '<h1>method does not exist</h1>';
					return;
				}
			}else{
				echo '<h1>base controller not found</h1>';
				return;
			}
		}else{
			echo '<h1>controller class does not exist</h1>';
			return;
		}
	}

}
?>