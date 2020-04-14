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

        $data['title'] = 'Detail User';
        $data['mhs'] = $this->model('User_model')->getAllUserById($id);
        $this->view('templates/header', $data);
        $this->view('admin/detail', $data);
        $this->view('templates/header');
       }

    public function deleteUser($id){
        $data['usr'] = $this->model('User_model')->deleteUsr($id);
        // return $this->index();
        header("Location: " . BASE_URL . "Admin");
       }
}


?>