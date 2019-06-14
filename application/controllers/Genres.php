<?php

class Genres extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->generateView('genres',[]);
    }
}
