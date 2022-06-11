<?php include('db.php') ?>
<?php
	if (isset($_POST['g-recaptcha-response'])) {
		$data=[];
    $secret_key = '6LfqLuEZAAAAABUQ22qlA7d-V4xB9LBZrb1Hl2z6';

    $response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.'&response='.$_POST['g-recaptcha-response']);

    $response_data = json_decode($response);
		if($_POST['type']==='login'){
			$email = e($_POST['email']);

	    $password = e($_POST['password']);

	    $password = md5($password);

	    $email_cheke = mysqli_query($db, "SELECT * FROM users_1 WHERE email='$email'  LIMIT 1");

	    if(!$response_data->success){
	      $captcha_error = "Captcha баталгаажуулалт амжилтгүй болсон";
	    }else{
	      $captcha_error = true;
	    }
	    if (mysqli_num_rows($email_cheke) == 1){
	      $email_error= true;
	      $pass_cheke = mysqli_query($db, "SELECT * FROM users_1 WHERE email='$email' AND password='$password' LIMIT 1");
	      if (mysqli_num_rows($pass_cheke) == 1){
	        $pass_error=true;
	      }else{
	        $pass_error="Нууц үг буруу";
	      }
	    }else{
	      $email_error = "И-мэйл бүртгэгдээгүй байна";
	      $pass_error = "Нууц үг буруу";
	    }
	    $errors = array(
	     'email'  => $email_error,
	     'pass'  => $pass_error,
	     'captcha'  => $captcha_error,
	    );
	    if($email_error === true && $pass_error === true && $captcha_error === true){
	      $logged_in_user = mysqli_fetch_assoc($pass_cheke);
	      $_SESSION['user_mms'] = $logged_in_user;
	      $success =true;
	    }else {
	      $success =false;
	    }
	    $data = array(
	     'success'  => $success,
	     'errors'   => $errors,
	    );
		}
		if($_POST['type']==='reg'){
			if(!$response_data->success){
	      $captcha_error = "Captcha баталгаажуулалт амжилтгүй болсон";
	    }else{
	      $captcha_error = true;
	    }
			 $email = $_POST['email'];
			$email_cheke = mysqli_query($db, "SELECT * FROM users_1 WHERE email='$email'  LIMIT 1");
			if (mysqli_num_rows($email_cheke) == 1){
				$email_error = "И-мэйл бүртгэлтэй байна";
				$success =false;
			}else{
					$email_error =true;
					if($captcha_error){
							$username = $_POST['username'];
							$password_1 =$_POST['password'];
					  	$password = md5($password_1);
							function user_id_rand($length = 10) {
									return substr(str_shuffle(str_repeat($x='0123456789', ceil($length/strlen($x)) )),1,$length);
							}
							$user_id = user_id_rand();
							$query = "INSERT INTO users_1 ( user_id,username, email, user_type, password,phone,photo,fb_id,end_date,start_date,f_name,l_name,bio,r_email,email_active,fb_name)
										VALUES('$user_id','$username', '$email', 'user', '$password','0','img_null','fb_null','$time_short','$time_short','','','','',0,'')";
							mysqli_query($db, $query);
							mail_v1($email,'','Бүртгэл үүслээ.');
							$success =true;
					}else{
						$success =false;
					}
			}
			$errors = array(
	     'email'  => $email_error,
	     'captcha'  => $captcha_error,
	    );
			$data = array(
	     'success'  => $success,
	     'errors'   => $errors,
	    );




		}

   echo json_encode($data);
	}

  function e($val){
    global $db;
    return mysqli_real_escape_string($db, trim($val));
  }

?>
