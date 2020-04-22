<?php
    class userDataModel{

        private $db, $tbl = "tbl_user";

        public function __CONSTRUCT(){
            $this->db = new Database;
        }

        public function getUserDataByUsername($data){
            print_r($data);
                $this->db->query("SELECT * FROM $this->tbl WHERE nama = :nama"); //apa ga gila pake function tuh
                $this->db->bind('nama', $data);
                // print_r($binded);
                return $this->db->singleResult();
        }

        public function updateUser(){
            // query buat get password
            $id = $_POST['id_user'];
            if($_POST['password'] == ""){
                $query = "UPDATE $this->tbl SET nip = :nip, nama = :nama WHERE id_user = '$id' ";
                $this->db->query($query);
                $this->db->bind('nip', $_POST['nip']);
                $this->db->bind('nama', $_POST['nama']);
                $this->db->execute();
                return $this->db->rowCount();
            }
            else{
                $query = "UPDATE $this->tbl SET nip = :nip, nama = :nama, password = :pass WHERE id_user = '$id' ";
                print_r($_POST);
                $this->db->query($query);
                $this->db->bind('nip', $_POST['nip']);
                $this->db->bind('nama', $_POST['nama']);
                $this->db->bind('pass', $_POST['password']);
                $this->db->execute();
                return $this->db->rowCount();
            }
        }

    }
?>