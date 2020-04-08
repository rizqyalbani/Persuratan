<?php

class User extends mainController
{
    public function index(){
        $data['title']='Data User';
        $data['usr']=$this->model('User_model')->getAllUser();
        $this->view("templates/header");
        $this->view("admin/showUser");
        $this->view("templates/footer");
    }

    public function detail($id){

        $data['title'] = 'Detail Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMhasiswaById($id);
        $this->view('templates/header', $data);
        $this->view('admin/detail', $data);
        $this->view('templates/header');
       }

    public function hapus($id){
        $data['mhs'] = $this->model('Mahasiswa_model')->deleteMhs($id);
        // return $this->index();
        header("Location: " . BASE_URL . "Admin");
       }
}


?>