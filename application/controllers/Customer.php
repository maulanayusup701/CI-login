<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        echo 'Selamat datang ' . $data['user']['firstname'] . $data['user']['lastname'];
    }
}
