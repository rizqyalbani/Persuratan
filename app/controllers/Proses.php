<?php 


/*DIMANA PROSES GUNANYA UNTUK MELAKUAKN HAL SEPERTI CRUD*/
 

class Proses extends mainController
{

	public function register(){
		$validate = $this->model('registerModel')->validateRegister();
		// print_r($validate);
		if (!empty($validate)) {
			print_r($validate);
			$data['notif'] = '<p style="color:red">Username already used</p>';
			$this->view('Register/Register', $data);
			$this->view('templates/footer');
		}

		else{
			echo "halo";
			$add = $this->model('registerModel')->register($_POST);
			
			if ($add > 0) {
				
				header('Location: '.BASE_URL.'login/login');
				// exit();
			}
			else{
				
				header('Location: '.BASE_URL.'register/register');
				// exit(); 
			}
		}
		
	}
    
}
