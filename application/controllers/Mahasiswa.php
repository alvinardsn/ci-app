<?php

class Mahasiswa extends CI_Controller
{
    // pemanggilan database yang hanya digunakan hanya pada controller
    // pemanggilan ini juga berlaku pada fungsi atau metode pada CI seperti model

    // public function __construct()
    // {
    //     parent::__construct(); // aturan CI untuk menjalankan fungsi construct di fungsi parent CI_Controller
    //     $this->load->database();
    // }

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model'); // load models Mahasiswa_model
        $this->load->library('form_validation'); // form validasi dari CI
    }

    public function index()
    {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa(); // pengambilan data dari models Mahasoswa_model

        if ($this->input->post('keyword')) {
            $data['mahasiswa'] = $this->Mahasiswa_model->cariDataMahasiswa(); // akan dijalankan apabila terdapat inputan dari cari
        }
        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Mahasiswa';

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('npm', 'NPM', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('mahasiswa/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Mahasiswa_model->tambahDataMahasiswa(); // menjalankan method tambah data di file mahasiswa model
            $this->session->set_flashdata('flash', 'ditambahkan'); // untuk membuat notifikasi dengan menggunakan flashdata yg menggunakan 2 parameter yaitu nama dan isi
            redirect('mahasiswa'); // fungsi untuk memindahkan user ke controller. contoh cotroller yg digunakan adalah halaman mahasiswa.php
        }
    }

    public function hapus($id)
    {
        $this->Mahasiswa_model->hapusDataMahasiswa($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('mahasiswa');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data Mahasiswa';
        $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data Mahasiswa';
        $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
        $data['fakultas'] = [
            'Teknik', 'Psikologi', 'Hukum', 'Ilmu Komunikasi', 'PGSD', 'Ekonomi', 'Ilmu Komputer'
        ];

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('npm', 'NPM', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('mahasiswa/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Mahasiswa_model->ubahDataMahasiswa();
            $this->session->set_flashdata('flash', 'diubah');
            redirect('mahasiswa');
        }
    }
}
