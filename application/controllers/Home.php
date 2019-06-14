<?php

class Home extends CI_Controller
{
    /**
     * Index method for home controller
     */
    public function index()
    {
        $homeArtists = $this->database->get('artists')->result();
        $this->generateView('home',[
            'artists' => $homeArtists
        ]);
    }
}