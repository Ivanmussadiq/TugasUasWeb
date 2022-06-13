<?php

class dashboard extends CI_Controller{

    public function index()
    {
         $this->m_squrity->getSqurity();
         $isi ['content']   = 'v_home';
         $isi ['judul']     = 'dashboard';

         $this->load->model('m_dashboard');
         $isi['anggota'] = $this->m_dashboard->countAnggota();
         $isi['buku'] = $this->m_dashboard->countBuku();
         $isi['pinjam'] = $this->m_dashboard->countPinjam();
         $isi['kembali'] = $this->m_dashboard->countKembali();
         $this->load->view('v_dashboard',$isi);
    }
}