<?php

class Home extends mainController{

    public function starterSession(){
        if ( empty($_SESSION) ) {
            session_start();
        }
    }

    public function logOut(){
        session_start();
        $_SESSION['username'] = '';
        $_SESSION['password'] = '';
        unset($_SESSION['username']);
        unset($_SESSION['password']);
        session_unset();
        session_destroy();
        header("Location:".BASE_URL);
    }

    public function logCheck(){
        session_start();
        if ($_SESSION['username'] == '' && $_SESSION['password'] == '') {
            header('Location:'.BASE_URL);
        }
    }

    // controller halaman index
    public function index(){
        $this->logCheck();
        $data = [
            "jumlahMasuk" => $this->countDisposisiMasuk(),
            "jumlahKeluar" => $this->countDisposisiKeluar(),
            "title" => "Welcome",
            "user" => $_SESSION['username']
        ];

        $this->view('templates/headerUser', $data);
        $this->view('user/index', $data);
        $this->view('templates/footer');

    }

    public function countDisposisiKeluar(){
        // session_start();
        
        if( !empty( $data['user'] = $this->model('User_model_keluar')->getAllDisposisi() ) ){
            // print_r($data['user']);
            foreach ($data['user'] as $b) {
                $id_status[] = $b['id_status'];
            }
            // print_r($id_status);
            $jumlah = array_count_values($id_status);
            // echo "halo";
            // print_R($jumlah);
            if ( !empty($jumlah[1]) ) {
                $data['jumlahKeluar'] = $jumlah[1];
            }
            else{
                $data['jumlahKeluar'] = 0;
            }

            return $data['jumlahKeluar'];
        }

    }

    public function countDisposisiMasuk(){
        // session_start();
        if( !empty($data['user'] = $this->model('User_model')->getAllDisposisi()) ){
            // print_r($data['user']);
            foreach ($data['user'] as $b) {
                $id_status[] = $b['id_status'];
            }
            // print_r($id_status);
            $jumlah = array_count_values($id_status);
            // echo "halo";
            // print_R($jumlah);
            if ( !empty($jumlah[1]) ) {
                $data['jumlahMasuk'] = $jumlah[1];
            }
            else{
                $data['jumlahMasuk'] = 0;
            }

            return $data['jumlahMasuk'];
        }
        else{
            $data['jumlahMasuk'] = 0;
        }
    }
    
    public function disposisiMasuk(){
        if (!isset($_SESSION)) {
            session_start();
        }
        $data['title'] = 'Home';
        $data['user'] = $this->model('User_model')->getAllDisposisi();
        // print_r($data['user']);
        $data['allStatus'] = $this->model('user_model')->allStatus();
        // deklarasiin variable untuk jadi sebuah array
        $id_jenis_disposisi = [];
        $suratAsal = [];
        $perihal_surat_masuk = [];
        $listUser = [];
        $jenisSurat = [];
        
        foreach ($data['user'] as $a) {
            $id_jenis_disposisi[] = $this->model('user_model')->getJenisDisposisi($a);
            $suratAsal[] = $this->model('user_model')->getDataSurat($a);
            $perihal_surat_masuk[] = $this->model('user_model')->getDataSurat($a);
            $listUser[] = $this->model('user_model')->getUser($a);
            $status[] = $this->model('user_model')->getStatus($a['id_status']);
            $jenisSurat[] = $this->model('user_model')->getJenisSurat($a['id_jenis_surat']);
            // print_r($a['id_status']);
            // $statusUser[] = $this->model('user_model')->getStatus($a['id_s'])
        }
        $data['title'] = "Disposisi Masuk";
        $data['jumlahMasuk'] = $this->countDisposisiMasuk();
        $data['jumlahKeluar'] = $this->countDisposisiKeluar();
        $data['status'] = $status;
        $data['perihal'] = $perihal_surat_masuk;
        $data['suratAsal'] = $suratAsal;
        $data['jenis_disposisi'] =$id_jenis_disposisi;
        $data['listUser'] =$listUser;
        $data['jenisSurat'] = $jenisSurat;
        // $data['test'] = $this->model('User_model')->getUser();
        $this->view('templates/headerUser', $data);
        $this->view('user/disposisiSuratMasuk', $data);
        $this->view('templates/footer');
    }

    public function disposisiKeluar(){
        if (!isset($_SESSION)) {
            session_start();
        }
        $data['title'] = 'Home';
        $data['user'] = $this->model('User_model_keluar')->getAllDisposisi();
        $data['allStatus'] = $this->model('user_model_keluar')->allStatus();
        // deklarasiin variable untuk jadi sebuah array
        $id_jenis_disposisi = [];
        $suratAsal = [];
        $perihal_surat_masuk = [];
        $listUser = [];
        $jenisSurat = [];
        // print_R($data['user']);
        foreach ($data['user'] as $a) {
            $id_jenis_disposisi[] = $this->model('user_model_keluar')->getJenisDisposisi($a);
            $suratAsal[] = $this->model('user_model_keluar')->getDataSurat($a);
            $perihal_surat_masuk[] = $this->model('user_model_keluar')->getDataSurat($a);
            $listUser[] = $this->model('user_model_keluar')->getUser($a);
            $status[] = $this->model('user_model_keluar')->getStatus($a['id_status']);
            $jenisSurat[] = $this->model('user_model_keluar')->getJenisSurat($a['id_jenis_surat']);
            $id_status[] = $a['id_status'];
            // print_r($a['id_status']);
            // $statusUser[] = $this->model('user_model')->getStatus($a['id_s'])
        }
        
        $data['jumlahMasuk'] = $this->countDisposisiMasuk();
        $data['jumlahKeluar'] = $this->countDisposisiKeluar();
        $data['title'] = "Disposisi Keluar";
        $data['status'] = $status;
        $data['perihal'] = $perihal_surat_masuk;
        $data['suratAsal'] = $suratAsal;
        $data['jenis_disposisi'] =$id_jenis_disposisi;
        $data['listUser'] =$listUser;
        $data['jenisSurat'] = $jenisSurat;
        // $data['test'] = $this->model('User_model')->getUser();
        $this->view('templates/headerUser', $data);
        $this->view('user/disposisiSuratKeluar', $data);
        $this->view('templates/footer');
    }

    // update status
    public function updateStatus($id_surat, $modelName, $method){
        // print_r($id_surat);
        // print_r($modelName);
        // die();
        
        if ( isset($_POST['submit']) ) {
            session_start();
            if ( $this->model($modelName)->updateStatus($_POST['status'], $id_surat) > 0 ) {
                $this->$method(); 
            }
        }
    }

    public function showProfile(){

        $this->starterSession();
        
        if ( isset($_POST['submit']) ) {
            if ($this->model('userDataModel')->updateUser() > 0) {
                $this->logOut();
                // echo "halo";
            }
            else{
                header("Location: " . BASE_URL . "Home/showProfile");
            }
        }
        else{
            // echo "yes";
            $user = $_SESSION['username'];
            // print_r($user);
            // $data['user'] = $user;
            $data['user'] = $this->model('userDataModel')->getUserDataByUsername($user);
            $data['title'] = "Profile";
            $data['jumlahKeluar'] = $this->countDisposisiKeluar();
            $data['jumlahMasuk'] = $this->countDisposisiMasuk();
    
            $this->view('templates/headerUser', $data);
            $this->view('user/profile', $data);
            $this->view('templates/footer', $data);
        }
    }



}

?>