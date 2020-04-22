<?php 


/*DIMANA PROSES GUNANYA UNTUK MELAKUAKN HAL SEPERTI CRUD*/
 

class Proses extends mainController
{

	public function register(){
		$validate = $this->model('registerModel')->validateRegister();
		if (!empty($validate)) {
			$data['notif'] = '<p style="color:red>Username already used</p>';
			$this->view('Register/Register', $data);
			$this->view('templates/footer');
		}

		else{
			$add = $this->model('registerModel')->register($_POST);
			
			if ($add > 0) {
				
				header('Location: '.BASE_URL.'login/login');
				exit();
			}
			else{
				
				header('Location: '.BASE_URL.'register/register');
				exit(); 
			}
		}
		
	}
    
}
