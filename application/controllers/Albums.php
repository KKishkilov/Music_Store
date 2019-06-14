<?php

class Albums extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->generateView('albums',[]);
    }
}
