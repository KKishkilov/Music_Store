<?php

class Artists extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('artist_model');
    }

    public function index()
    {
        $this->generateView('artists',[]);
    }

    public function preview($id)
    {
        $info = $this->artist_model->getArtistInfoByID($id);
        $this->generateView('about_artist',[
            'artist' => $info,
        ]);
    }
}
