<?php

class M_squrity extends CI_Model{

    public function getSqurity()
    {
        $username = $this->session->userdata('username');
        if (empty($username)){
            $this->session->sess_destroy();
            redirect('login');
        }
    }
}