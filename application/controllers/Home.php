<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $this->load->model('Mod_movie');
        $getMovie = $this->Mod_movie->get_movie();

        // lempar ke view
        $this->load->view('home_view');
    }
}
