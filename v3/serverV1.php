<?php
  include('db.php');
    @$user_id=$_SESSION['user_mms']['user_id'];
    if(isset($_GET['del_post'])){
    	$rt_id=$_GET['del_post'];
    	mysqli_query($db, "DELETE FROM news WHERE id=$rt_id");
    	$_SESSION['alert_del']="true";
      header("location: APanel/news_del.php");
    }
    if(isset($_GET['del_ewent'])){
    	$rt_id=$_GET['del_ewent'];
    	mysqli_query($db, "DELETE FROM ewent WHERE id=$rt_id");
    	$_SESSION['alert_del']="true";
      header("location: APanel/ewent_del.php");
    }
    if (isset($_POST['pay_user'])) {
      $img = mysqli_real_escape_string($db, $_POST['bc_image']);
    	$color = mysqli_real_escape_string($db, $_POST['bc_color']);
      $sql = "UPDATE web_data SET bc_color ='$color', bc_image ='$img'  WHERE id=1";
    	mysqli_query($db, $sql);
    	header("location: APanel/menu.php");
    }
  if (isset($_POST['save-post'])) {
  	$title_mon = mysqli_real_escape_string($db, $_POST['title_mon']);
  	$body_mon = htmlentities(mysqli_real_escape_string($db, $_POST['body_mon']));
  	$title_en = mysqli_real_escape_string($db, $_POST['title_en']);
  	$body_en = htmlentities(mysqli_real_escape_string($db, $_POST['body_en']));
  	$img = mysqli_real_escape_string($db, $_POST['img']);
  	$sql = "INSERT INTO news (title_mon, body_mon,title_en, body_en,photo, time_s,user) VALUES ('$title_mon', '$body_mon','$title_en', '$body_en','$img', '$time_short', '$user_id')";
  	mysqli_query($db, $sql);
    $_SESSION['alert']="true";
  	header("location: APanel/news.php");
  }
  if (isset($_POST['up-post'])) {
    $post = mysqli_real_escape_string($db, $_POST['post_id']);
  	$title_mon = mysqli_real_escape_string($db, $_POST['title_mon']);
  	$body_mon = htmlentities(mysqli_real_escape_string($db, $_POST['body_mon']));
  	$title_en = mysqli_real_escape_string($db, $_POST['title_en']);
  	$body_en = htmlentities(mysqli_real_escape_string($db, $_POST['body_en']));
  	$img = mysqli_real_escape_string($db, $_POST['img']);
    $sql = "UPDATE news SET title_mon='$title_mon', body_mon ='$body_mon' ,title_en ='$title_en', body_en ='$body_en',photo ='$img', time_s ='$time_short',user ='$user_id' WHERE id=$post";
  	mysqli_query($db, $sql);
    $_SESSION['alert']="true";
  	header("location: APanel/news_del.php");
  }
  if (isset($_POST['save-math'])) {
  	$title_mon = mysqli_real_escape_string($db, $_POST['title']);
  	$body_mon = htmlentities(mysqli_real_escape_string($db, $_POST['body']));

  	$sql = "INSERT INTO math_7 (title, body,date_t,user) VALUES ('$title_mon', '$body_mon','$time_short','$user_id')";
  	mysqli_query($db, $sql);
  	header("location: APanel/insert_math.php");
  }
  if (isset($_POST['up-ewent'])) {
    $post = mysqli_real_escape_string($db, $_POST['post_id']);
  	$title_mon = mysqli_real_escape_string($db, $_POST['title_mon']);
  	$body_mon = htmlentities(mysqli_real_escape_string($db, $_POST['body_mon']));
  	$title_en = mysqli_real_escape_string($db, $_POST['title_en']);
  	$body_en = htmlentities(mysqli_real_escape_string($db, $_POST['body_en']));
  	$img = mysqli_real_escape_string($db, $_POST['img']);
    $end_time = mysqli_real_escape_string($db, $_POST['end_time']);
    $sql = "UPDATE ewent SET title_mon='$title_mon', body_mon ='$body_mon' ,title_en ='$title_en', body_en ='$body_en',photo ='$img', time_s ='$time_short',user ='$user_id' ,end_time ='$end_time' WHERE id=$post";
  	mysqli_query($db, $sql);
    $_SESSION['alert']="true";
  	header("location: APanel/ewent_del.php");
  }
  if (isset($_POST['save-ewent'])) {
    $title_mon = mysqli_real_escape_string($db, $_POST['title_mon']);
    $body_mon = htmlentities(mysqli_real_escape_string($db, $_POST['body_mon']));
    $title_en = mysqli_real_escape_string($db, $_POST['title_en']);
    $body_en = htmlentities(mysqli_real_escape_string($db, $_POST['body_en']));
    $end_time = mysqli_real_escape_string($db, $_POST['end_time']);
    $img = mysqli_real_escape_string($db, $_POST['img']);
    $sql = "INSERT INTO ewent (title_mon, body_mon,title_en, body_en,photo, time_s,user,end_time) VALUES ('$title_mon', '$body_mon','$title_en', '$body_en','$img', '$time_short', '$user_id','$end_time')";
    mysqli_query($db, $sql);
    $_SESSION['alert']="true";
    header("location: APanel/ewent.php");
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
 $re_imgae = mysqli_query($db, "SELECT * FROM web_data WHERE id=1");
 while ($row = mysqli_fetch_array($re_imgae )) {
   $bc_color=$row['bc_color'];
   $bc_image=$row['bc_image'];
 }
if(isset($_GET['lan'])){
	if($_GET['lan']=='mon'){
		$_SESSION['Language']='mon_name';
	}else if($_GET['lan']=='en'){
		$_SESSION['Language']='en_name';
	}else{
		$_SESSION['Language']='en_name';
	}
}else{
  if(!isset($_SESSION['Language'])){
    $_SESSION['Language']='en_name';
  }
}
$lan=$_SESSION['Language'];
$data = array( );
$results = mysqli_query($db, "SELECT * FROM menu");
while ($row = mysqli_fetch_array($results)) {
  $one_id=$row['id'];
  $record = mysqli_query($db, "SELECT * FROM sub_menu WHERE key_id=$one_id");
  if (@mysqli_num_rows($record) >= 1 ){
    $min_data = array( );
    array_push($min_data,$row[$lan]);
    while ($row = mysqli_fetch_array($record )) { array_push($min_data,$row[$lan]); }
    array_push($data,$min_data);
  } else {   array_push($data,$row[$lan]);  }
}
$menu_val= $data;
$count_members= mysqli_query($db, "SELECT * FROM members  ");
$count_members=(mysqli_num_rows($count_members));
$count_suppliers= mysqli_query($db, "SELECT * FROM suppliers  ");
$count_suppliers=(mysqli_num_rows($count_suppliers));
$photos = array(
  'home' => $bc_image,
  'color'=> $bc_color,
);
$about_lan = array(
  'about' => 'ABOUT SULD UNITED LLC',
  'about_in' => 'Suld United LLC specializes in different automotive sectors in Commercial, Passenger Cars and Mining Sectors.<br>
    SuldUnited LLC is the first company in Mongolia to provide Management advice for the Automotive companies. <br>We supply our cooperating companies not only with the spare parts, but we also provide all the additional Database, Strategies, Management, Solutions to support our clients.' ,
  'company'=> 'COMPANY STRUCTURE' ,
  'company_in'=> array($suld_t_l= array('MAINTENANCE SERVICE FOR TRUCK AND TRAILERS','BPW SERVICE PARTNER','CARRIER TRANSICOLD SERVICE STATION'),$suld_t_l= array(' DOMESTIC TRANSPORTATION'),$suld_t_l= array(' E-COMMERSES','ONLINE STORE'),$suld_t_l= array(' ALL TYPE DIESEL','ENGINE/GEARBOX REPAIR AND OVERHAUL','DELPHI DIESEL SERVICE WOLF OIL')),
  'c_time_line' => 'COMPANY TIMELINE',
  'c_time_line_in'=>array(
    'Established partnership: ShoppyAutomotive LLC. Developing online store (www.Autoparts.mn) for Mongolian aftermarket. United Mongolian workshops and spare part dealers under Nexus Auto',
    'Establishing Partnership: Carrier Transicold, NEXUS member, Dinex, Clas tools, Hengst filtration, Mahle, FP Diesel, SKF, DRIV, Valeo, Meyle',
    'Establishing Partnership: BPW, FEBI BILSTEIN, Delphi Technologies Establishment: Mining heavy vehicle maintenance center',
    'Official distributor of: WAS (Poland), SHELL, MERITOR HVS, Se-M Rubber Metal Co (Turkey) Established: Warehouse for spare parts, Second maintenance center Acquired: Suld Logistics LLC',
    'Established our maintenance center Cooperation with: ARMTEK',
    'Started supplying spare parts for trucks and trailers',
    'We started by importing Euro Trucks into Mongolian market'
  ),
  'we_are_do'=>array(
    'WHAT WE DO',
    'SULD UNITED – is Fleet Management Company that operates in range of functions:',
    'Maintenance management',
    'Spare parts management / Supply / Wholesale',
    'Vehicle telematics (tracking and diagnostics)',
    'We also provide various training for technical departments for our customers'
  ),
  'how_we_do'=>array(
    'HOW WE DO',
  ),
  'contact_add'=>'Ulaanbaatar city, Bayangol District, 4th khoroo, Tegsh undrakh Center, Room 304, "Suld United" LLC Улаанбаатар хот, Баянгол дүүрэг, 4-р хороо Тэгш -Ундрах төв 304 тоот, "Сүлд Юнайтед" ХХК',
  'start_3'=>array('АЛСЫН ХАРАА','ЭРХЭМ ЗОРИЛГО','ҮНЭТ ЗҮЙЛС'),
  'start_3_in'=>array(
    'Олон жилийн туршлагатай, өндөр түвшний мэргэжлийн боловсон хүчинд тулгуурласан хамгийн шилдэг зэрэглэлийн үйлчилгээтэй тэргүүлэгч компани байх.',
    'Хэрэглэгчдийн хэрэгцээг чанарын өндөр түвшинд бүтээгдсэн бүтээгдэхүүн үйлчилгээгээр хангаж салбартаа ямагт шилдэг нь байж Монгол улсынхаа хөгжилд хувь нэмрээ оруулах явдал юм.',
    'Манай компани удаан хугацаанд амжилттай ажиллах үндэс нь Хүн, хариуцлага Чадвар, бүтээлч байдал Шударга байх, нэгдмэл байх'
  ),
);
$news_ewent = array(
  'News',
  'Read more',
  'Academy',
  'Ewent'
 );

$en_ar = array(
  'login' => 'Login',
  'home'=>'Home',
  'members'=>'Journal of Society',
  'suppliers'=>'Membership	',
  'about'=>'About',
  'contact'=>'Contact',
  'web_dev'=>'Website development',
  'search'=>'Search',
  'about_page' =>$about_lan,
  'photos'=> $photos,
  'news_e_a'=>$news_ewent,
  'menu_val' => $menu_val,


);
$mon_ar = array(
  'login' => 'Нэвтрэх',
   'home'=>'Нүүр',
   'members'=>'Нийгэмлэгийн сэтгүүл',
   'suppliers'=>'Гишүүнчлэл',
   'about'=>'Тухай',
   'contact'=>'Холбоо барих',
   'web_dev'=>'Вэб сайт хөгжүүлэлт',
   'search'=>'Хайх',
   'about_page' =>$about_lan,
   'photos'=> $photos,
   'news_e_a'=>$news_ewent,
   'menu_val' => $menu_val,

 );
$lang = array('mon_name' =>$mon_ar ,'en_name'=>$en_ar );


 ?>
