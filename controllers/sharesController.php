<?php
class sharesController extends controller{
    protected function index(){
        $viewmodel = new sharesModel();
        $this->returnView($viewmodel->Index(), true);
    }
}