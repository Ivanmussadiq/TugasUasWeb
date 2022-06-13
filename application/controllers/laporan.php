<?php

class Laporan Extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_laporan');
        $this->load->helper('tgl_indo_helper');
    }

    public function peminjaman()
    {
        $tgl_awal = $this->input->post('tgl_awal');
        $tgl_akhir = $this->input->post('tgl_akhir');

        $this->session->userdata('tanggal_awal', $tgl_awal);
        $this->session->userdata('tanggal_akhir', $tgl_akhir);

        if (empty($tgl_awal) || empty($tgl_akhir)) {
            $isi['content'] = 'laporan/v_peminjaman';
            $isi['judul'] = 'Laporan Peminjaman';
            $isi['data'] = $this->m_laporan->getAlldata();
        }else{
            $isi['content'] = 'laporan/v_peminjaman';
            $isi['judul'] = 'Laporan Peminjaman';
            $isi['data'] = $this->m_laporan->filterData($tgl_awal, $tgl_akhir);
        }
        $this->load->view('v_dashboard', $isi);

    }

    public function refresh()
    {
        $isi['content'] = 'laporan/v_peminjaman';
        $isi['judul'] = 'Laporan Peminjaman';
        $isi['data'] = $this->m_laporan->getAlldata();
        $this->load->view('v_dashboard', $isi);
    }
}