<?php
  include('db.php');
    @$user_id=$_SESSION['user_mms']['user_id'];
  if (isset($_POST['save-post'])) {
  	$title_mon = mysqli_real_escape_string($db, $_POST['title_mon']);
  	$body_mon = htmlentities(mysqli_real_escape_string($db, $_POST['body_mon']));
  	$title_en = mysqli_real_escape_string($db, $_POST['title_en']);
  	$body_en = htmlentities(mysqli_real_escape_string($db, $_POST['body_en']));
  	$img = mysqli_real_escape_string($db, $_POST['img']);
  	$sql = "INSERT INTO post (title_mon, body_mon,title_en, body_en,photo, time_s,user) VALUES ('$title_mon', '$body_mon','$title_en', '$body_en','$img', '$time_short', '$user_id')";
  	mysqli_query($db, $sql);
  	header("location: APanel/insert_post.php");
  }
  if (isset($_POST['up-post'])) {
    $post = mysqli_real_escape_string($db, $_POST['post_id']);
  	$title_mon = mysqli_real_escape_string($db, $_POST['title_mon']);
  	$body_mon = htmlentities(mysqli_real_escape_string($db, $_POST['body_mon']));
  	$title_en = mysqli_real_escape_string($db, $_POST['title_en']);
  	$body_en = htmlentities(mysqli_real_escape_string($db, $_POST['body_en']));
  	$img = mysqli_real_escape_string($db, $_POST['img']);
    $sql = "UPDATE post SET title_mon='$title_mon', body_mon ='$body_mon' ,title_en ='$title_en', body_en ='$body_en',photo ='$img', time_s ='$time_short',user ='$user_id' WHERE id=$post";
  	mysqli_query($db, $sql);
  	header("location: APanel/del_post.php");
  }
  if (isset($_POST['save-math'])) {
  	$title_mon = mysqli_real_escape_string($db, $_POST['title']);
  	$body_mon = htmlentities(mysqli_real_escape_string($db, $_POST['body']));

  	$sql = "INSERT INTO math_7 (title, body,date_t,user) VALUES ('$title_mon', '$body_mon','$time_short','$user_id')";
  	mysqli_query($db, $sql);
  	header("location: APanel/insert_math.php");
  }

  function resizeImage($resourceType,$image_width,$image_height,$resizeWidth,$resizeHeight) {
      // $resizeWidth = 100;
      // $resizeHeight = 100;
      $imageLayer = imagecreatetruecolor($resizeWidth,$resizeHeight);
      imagecopyresampled($imageLayer,$resourceType,0,0,0,0,$resizeWidth,$resizeHeight, $image_width,$image_height);
      return $imageLayer;
  }



  if(isset($_FILES["imageFile"]) ||  isset($_POST["size_type"]) ) {
    $imageProcess = 0;
      if(is_array($_FILES)) {
          $var_1 = $_POST['size_type'];
          $new_width =intval(substr($var_1,0, -6 ));
          $new_height =intval(substr($var_1, 6 ));
          $fileName = $_FILES['imageFile']['tmp_name'];
          $sourceProperties = getimagesize($fileName);
          $resizeFileName = time();
          $uploadPath = "./uploads/";
          $fileExt = pathinfo($_FILES['imageFile']['name'], PATHINFO_EXTENSION);
          $uploadImageType = $sourceProperties[2];
          $sourceImageWidth = $sourceProperties[0];
          $sourceImageHeight = $sourceProperties[1];
          switch ($uploadImageType) {
              case IMAGETYPE_JPEG:
                  $resourceType = imagecreatefromjpeg($fileName);
                  $imageLayer = resizeImage($resourceType,$sourceImageWidth,$sourceImageHeight,$new_width,$new_height);
                  imagejpeg($imageLayer,$uploadPath."thump_".$resizeFileName.'.'. $fileExt);
                  break;

              case IMAGETYPE_GIF:
                  $resourceType = imagecreatefromgif($fileName);
                  $imageLayer = resizeImage($resourceType,$sourceImageWidth,$sourceImageHeight,$new_width,$new_height);
                  imagegif($imageLayer,$uploadPath."thump_".$resizeFileName.'.'. $fileExt);
                  break;

              case IMAGETYPE_PNG:
                  $resourceType = imagecreatefrompng($fileName);
                  $imageLayer = resizeImage($resourceType,$sourceImageWidth,$sourceImageHeight,$new_width,$new_height);
                  imagepng($imageLayer,$uploadPath."thump_".$resizeFileName.'.'. $fileExt);
                  break;

              default:
                  $imageProcess = 0;
                  break;
          }

          $imageProcess = 1;
      }
      if($imageProcess==1){
        $lol_o="thump_".$resizeFileName.'.'. $fileExt;
        $tr="INSERT INTO web_photo (photo_name,img_size,user,up_date) VALUES('$lol_o','$var_1','$user_id','$time_short')";
            mysqli_query($db,$tr );
        $data = array(
         'success'  => true,
         'image_url' => $lol_o,
         'image_size' => $var_1
        );


      } else{
        $data = array(
         'success'  => false
        );

      }
      $imageProcess = 0;
       echo json_encode($data);


  }
  if(isset($_FILES["fileToUpload"])) {
    $target_dir = "uploads/".$_POST["file_type"]."/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $error="";
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
      $error .="Зураг байна. тусдаа өөр цэс бий . ";
      $uploadOk = 0;
    } else {
      $uploadOk = 1;
    }
    if (file_exists($target_file)) {
      $error .="Энэ файл аль хэдийн байна";
      $uploadOk = 0;
    }
    if ($_FILES["fileToUpload"]["size"] > 41943039) {
      $error .="Энэ файл хэт өдөр хэмжээтэй байна.";
      $uploadOk = 0;
    }
    if ($uploadOk == 0) {
      $data = array(
       'success'  => false,
       'errors' => $error
      );
    } else {
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $data = array(
         'success'  => true,
         'errors' => "". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " файлыг байршуулсан."
        );
        $name=$target_dir.htmlspecialchars( basename( $_FILES["fileToUpload"]["name"]));
        $icon =$_POST["file_type"];
        $tr="INSERT INTO web_file (file_name,icon,user,up_date) VALUES('$name','$icon','$user_id','$time_short')";
            mysqli_query($db,$tr );

      } else {
        $data = array(
         'success'  => false,
         'errors' => "Уучлаарай, таны файлыг байршуулахад алдаа гарлаа."
        );
      }
    }
    echo json_encode($data);
  }
  function tolson(){
    GLOBAL $time_short;
    // echo substr($_SESSION['user_mms']['end_date'], 0, 4)."<br>";
    // echo substr($_SESSION['user_mms']['end_date'], 5, 2)."<br>";
    // echo substr($_SESSION['user_mms']['end_date'], 8, 2)."<br>";
    // echo substr($time_short, 0, 4)."<br>";
    // echo substr($time_short, 5, 2)."<br>";
    // echo substr($time_short, 8, 2)."<br>";
   if(substr($_SESSION['user_mms']['end_date'], 0, 4)-substr($time_short, 0, 4)<0){
     return false;
   }else if(substr($_SESSION['user_mms']['end_date'], 0, 4)-substr($time_short, 0, 4)==0){
     if(substr($_SESSION['user_mms']['end_date'], 5, 2)-substr($time_short, 5, 2)>0){
       return true;
     }else if (substr($_SESSION['user_mms']['end_date'], 5, 2)-substr($time_short, 5, 2)==0) {
       if(substr($_SESSION['user_mms']['end_date'], 8, 2)-substr($time_short, 8, 2)<=0){
         return false;
       }else{
         return true;
       }
     }else{
        return false;
     }
   }else{
     return true;
   }
  }
  function tolson_in($in_date){
    GLOBAL $time_short;
    // echo substr($in_date, 0, 4)."<br>";
    // echo substr($in_date, 5, 2)."<br>";
    // echo substr($in_date, 8, 2)."<br>";
    // echo substr($time_short, 0, 4)."<br>";
    // echo substr($time_short, 5, 2)."<br>";
    // echo substr($time_short, 8, 2)."<br>";
   if(substr($in_date, 0, 4)-substr($time_short, 0, 4)<0){
     return false;
   }else if(substr($in_date, 0, 4)-substr($time_short, 0, 4)==0){
     if(substr($in_date, 5, 2)-substr($time_short, 5, 2)>0){
       return true;
     }else if (substr($in_date, 5, 2)-substr($time_short, 5, 2)==0) {
       if(substr($in_date, 8, 2)-substr($time_short, 8, 2)<=0){
         return false;
       }else{
         return true;
       }
     }else{
        return false;
     }
   }else{
     return true;
   }
  }
  $en_name_menu = "";
	$mon_name_menu = "";
	$url_menu = "";
	$id_menu = 0;
	$update_menu = false;
	$en_name_menu_sub = "";
	$mon_name_menu_sub = "";
	$url_menu_sub = "";
	$id_menu_sub = 0;
	$update_menu_sub = false;

	if (isset($_POST['save_menu'])) {
		$en_name = $_POST['en_name_menu'];
		$mon_name = $_POST['mon_name_menu'];
		$url = $_POST['url_menu'];

		mysqli_query($db, "INSERT INTO menu (en_name,mon_name,url) VALUES ('$en_name', '$mon_name','$url')");
		$_SESSION['message'] = "Шинэ үндсэн цэс";
header('location: APanel/menu.php');
	}
   if(isset($_POST['pay_user'])){
      $in_date=$_POST['duusah_date'];
      $g_utga=$_POST['utga'];
      $pay_pay=$_POST['dun'];
      $set_user =$_POST['user_id'];
       mysqli_query($db, "INSERT INTO gishuunchlel (user_id,admin_id,in_date,add_date,g_utga,pay_pay) VALUES ($set_user, $user_id,'$time_short','$in_date','$g_utga','$pay_pay')");
       mysqli_query($db, "UPDATE users_1 SET end_date='$in_date',user_type='co_user' WHERE user_id=$set_user");
       $_SESSION['message'] = "Төлөлт хийгдсэн";
    header('location: APanel/menu.php');
    }


	if (isset($_POST['update_menu'])) {
		$id = $_POST['id_menu'];
		$en_name = $_POST['en_name_menu'];
		$mon_name = $_POST['mon_name_menu'];
		$url = $_POST['url_menu'];

		mysqli_query($db, "UPDATE menu SET en_name='$en_name', mon_name='$mon_name' ,url='$url' WHERE id=$id");
		$_SESSION['message'] = "Үндсэн цэс засагдлаа";
header('location: APanel/menu.php');
	}

if (isset($_GET['del_menu'])) {
	$id = $_GET['del_menu'];
	mysqli_query($db, "DELETE FROM menu WHERE id=$id");
	$_SESSION['message'] = "Үндсэн цэс устлаа";;
}

if (isset($_POST['save_menu_sub'])) {
	$en_name = $_POST['en_name_menu_sub'];
	$mon_name = $_POST['mon_name_menu_sub'];
	$url = $_POST['url_menu_sub'];
	$key_id = $_POST['key_id_menu_sub'];

	mysqli_query($db, "INSERT INTO sub_menu (en_name,mon_name,url,key_id) VALUES ('$en_name', '$mon_name','$url','$key_id')");
	$_SESSION['message'] = "Шинэ цэс ";
header('location: APanel/menu.php');
}


if (isset($_POST['update_menu_sub'])) {
	$id = $_POST['id_menu_sub'];
	$en_name = $_POST['en_name_menu_sub'];
	$mon_name = $_POST['mon_name_menu_sub'];
	$url = $_POST['url_menu_sub'];
	$key_id = $_POST['key_id_menu_sub'];

	mysqli_query($db, "UPDATE sub_menu SET en_name='$en_name', mon_name='$mon_name' ,url='$url',key_id='$key_id' WHERE id=$id");
	$_SESSION['message'] = "Цэс шинэчлэгдлээ";
header('location: APanel/menu.php');
}

if (isset($_GET['del_menu_sub'])) {
$id = $_GET['del_menu_sub'];
mysqli_query($db, "DELETE FROM sub_menu WHERE id=$id");
$_SESSION['message'] = "Цэс устлаа";
}
function isLoggedIn()
{
  if (isset($_SESSION['user_mms'])) {
    return true;
  }else{
    return false;
  }
}

function isAdmin()
{
  if (isset($_SESSION['user_mms']) && $_SESSION['user_mms']['user_type'] == 'admin' || isset($_SESSION['user_mms']) && $_SESSION['user_mms']['user_type'] == 'god' ) {
    return true;
  }else{
    return false;
  }
}
function isGOD()
{
  if (isset($_SESSION['user_mms']) && $_SESSION['user_mms']['user_type'] == 'god' ) {
    return true;
  }else{
    return false;
  }
}
 ?>
