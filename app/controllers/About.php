<?php

class About extends Controller {
    public function index ($nama = "Monkey D Luffy" , $pekerjaan = "Emperors of the sea" , $umur = 19) {
        $data['nama'] = $nama;
        $data['umur'] = $umur;
        $data['pekerjaan'] = $pekerjaan;
        $data['judul'] = "about me";
        $this->view('template/header' , $data);
        $this->view ('about/index', $data);
        $this->view('template/footer');
    }

    public function page(){
        $data['judul'] = "pages";
        $this->view('template/header', $data);
        $this->view('about/page');
        $this->view('template/footer');
    }
}