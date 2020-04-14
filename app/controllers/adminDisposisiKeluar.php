<?php
    class adminDisposisiKeluar extends mainController{

        public function index(){
            $this->logCheck();
            $data = [
                "title" => "Persuratan"
            ];

            $this->view("templates/header", $data);
            $this->view("admin/index");
            $this->view("templates/footer");
        }

        // login check
        public function logCheck(){
            session_start();
            if ($_SESSION['username'] == '' && $_SESSION['password'] == '') {
                header('Location:'.BASE_URL);
            }
        }

        public function disposisi($id){
            $data = [
                "surat_keluar" => $this->model("suratKeluarModel")->getSuratKeluarById($id), //memanggil method di dalam model
                "jDisposisi" => $this->model("jenisDisposisiModel")->getJenis(), //memanggil method di dalam model
                "user"  => $this->model("User_model")->getAllUser($id),
                "process" => "adminDisposisiKeluar/addDisposisi"
            ];
            $this->view("templates/header", $data);
            $this->view("admin/disposisiSuratKeluar", $data);
            $this->view("templates/footer");
        }

        // function buat show disposisi
        public function lihatDisposisiSuratKeluar($id){
            if ($this->model('disposisiSuratKeluarModel')->getValidateDisposisi($id) > 0) {

                $data['disposisi'] = $this->model('disposisiSuratKeluarModel')->getDisposisi($id);
                // deklarasi array untuk menampung data
                $asal = [];
                $jenis = [];
                $user = [];
                $status = [];
                foreach ($data['disposisi'] as $disposisi) {
                    $asal[] =  $this->model('disposisiSuratKeluarModel')->getAsalDisposisis($this->model('disposisiSuratKeluarModel')->getDisposisi($id));
                    $user[] = $this->model('disposisiSuratKeluarModel')->getUser($disposisi['id_user']);
                    $jenis[] = $this->model('disposisiSuratKeluarModel')->getJenisDisposisis($disposisi['id_jenis_disposisi']);
                    $status[] = $this->model('disposisiSuratKeluarModel')->getStatus($disposisi['id_status']);
                }  
                $data["asal"] = $asal;
                $data["jenis"] = $jenis;
                $data["title"] = "Disposisi Surat Keluar";
                $data["id_surat"] = $id;
                $data["user"] = $user;
                $data['status'] = $status;
                // print_r($perihal);                                  
                // var_dump($data['disposisi']);

                $this->view('templates/header', $data);
                $this->view('admin/lihatDisposisiSuratKeluar',$data);
                $this->view('templates/footer', $data);
        }

        else{
            $this->logCheck();
            $data = [
                "surat_keluar" => $this->model("suratKeluarModel")->getSuratKeluarById($id), //memanggil method di dalam model
                "jDisposisi" => $this->model("jenisDisposisiModel")->getJenis(), //memanggil method di dalam model
                "user"  => $this->model("User_model")->getAllUser(),
                "process" => "adminDisposisiKeluar/addDisposisi",
                "title" => "Add Disposisi"
            ];
            $this->view("templates/header", $data);
            $this->view("admin/disposisiSuratKeluar", $data);
            $this->view("templates/footer");
            }
        }

        public function addDataSuratKeluar(){
            $this->logCheck();
            $data = [
                "title" => "Tambah Surat Keluar",
                "process" => "admin/AddDataSuratKeluar",
                "judul" => "Tambah Surat Keluar",
                "surat" => $this->model("suratKeluarModel")->getAllSuratKeluar()
            ];

            $this->view("templates/header", $data);
            $this->view("admin/addDataSuratKeluar", $data);
            $this->view("templates/footer");
            // var_dump($_POST);
            if( !empty($_POST) ){
                if($this->model("suratKeluarModel")->addSuratKeluar($_POST) > 0){
                    header("Location: " . BASE_URL . "admin/addDataSuratKeluar");
                }
            //end of if
            }
        //end of addDataSuratKeluar
        }

        public function addDisposisi(){
            $this->logCheck();
            if( !empty($_POST) ){
                if($this->model("disposisiSuratKeluarModel")->addDisposisi($_POST) > 0){
                    header("Location: " . BASE_URL . "adminDisposisiKeluar/addDataSuratKeluar");
                }
            //end of if
            }
        }

        public function updateDisposisiKeluar($id){
            $data['disposisi'] = $this->model('disposisiSuratKeluarModel')->getDisposisi($id);
                // deklarasi array untuk menampung data
                $asal = [];
                $jenis = [];
                $user = [];
                $status = [];
                foreach ($data['disposisi'] as $disposisi) {
                    $asal[] =  $this->model('disposisiSuratKeluarModel')->getAsalDisposisis($this->model('disposisiSuratKeluarModel')->getDisposisi($id));
                    $user[] = $this->model('disposisiSuratKeluarModel')->getUser($disposisi['id_user']);
                    $jenis[] = $this->model('disposisiSuratKeluarModel')->getJenisDisposisis($disposisi['id_jenis_disposisi']);
                    $status[] = $this->model('disposisiSuratKeluarModel')->getStatus($disposisi['id_status']);
                }  
                $data["asal"] = $asal;
                $data["jenis"] = $jenis;
                $data["title"] = "Disposisi Surat Keluar";
                $data["id_surat"] = $id;
                $data["user"] = $user;
                $data['status'] = $status;
                // print_r($perihal);                                  
                // var_dump($data['disposisi']);

                $this->view('templates/header', $data);
                $this->view('admin/lihatDisposisiSuratKeluar',$data);
                $this->view('templates/footer', $data);
        }

        public function updateDataDisposisi($id){
            if(isset($_POST)){
                if ($this->model("disposisiSuratKeluarModel")->updateDisposisiKeluar($id) > 0 ) {
                    $this->lihatDisposisiSuratKeluar ($_POST["id_surat_keluar"]);
                }
                else{
                    $notif = "<script>alert('failed to update')</script>";
                    $this->showFailedUpdate($notif, "registerModel", "admin/showRegisterAdmin");
                }
            }
        }
    }
?>