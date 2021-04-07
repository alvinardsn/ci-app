<?php

class Peoples extends CI_Controller
{
    // pemanggilan database yang hanya digunakan hanya pada controller
    // pemanggilan ini juga berlaku pada fungsi atau metode pada CI seperti model

    // public function __construct()
    // {
    //     parent::__construct(); // aturan CI untuk menjalankan fungsi construct di fungsi parent CI_Controller
    //     $this->load->database();
    // }


    public function index()
    {
        $data['judul'] = 'List Of Peoples';
        $this->load->model('Peoples_model');

        // style pagination ada di folder config pagination.php
        // load Pagination
        $this->load->library('pagination');

        // ambil data keyword
        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        // config pagination
        $this->db->like('name', $data['keyword']); // query terakhir untuk pencarian
        $this->db->or_like('email', $data['keyword']);  // query terakhir untuk pencarian
        $this->db->from('peoples');
        $config['total_rows'] = $this->db->count_all_results(); // method menghitung berapa baris pada query terakhir
        $config['per_page'] = 8; // untuk menampilkan data berapa banyak

        // initialize pagination
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3); // menggambil data per halaman 12 menggunakan segment url
        $data['peoples'] = $this->Peoples_model->getPeoples($config['per_page'], $data['start'], $data['keyword']);

        $this->load->view('templates/header', $data);
        $this->load->view('peoples/index', $data);
        $this->load->view('templates/footer');
    }
}
