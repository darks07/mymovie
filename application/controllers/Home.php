<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $this->load->view('home_view');
    }

    public function search_movie($name = '')
    {
        header('Content-Type: application/json');
        $this->load->model('Mod_movie');
        $getMovie = $this->Mod_movie->get_movie($name);
        echo json_encode($getMovie);
    }

    public function detail_movie($movie_id = '')
    {
        header('Content-Type: application/json');
        $this->load->model('Mod_movie');
        $getDetailMovie = $this->Mod_movie->detail_movie($movie_id);
        echo json_encode($getDetailMovie);
    }
}
