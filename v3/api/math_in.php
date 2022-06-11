<?php include('../serverV1.php'); ?>
<?php

 if(isset($_GET['e'])){

      $orders = array( );
      $id_1=$_GET['e'];
      $order_y = mysqli_query($db, "SELECT * FROM sent_math WHERE bod_id = $id_1 ");
       while ($row_2 = mysqli_fetch_array($order_y)) {
         $rt = (int)$row_2['id']; $rt1 = $row_2['user_id'];
         $userset = mysqli_query($db, "SELECT * FROM users_1 WHERE user_id =$rt1 limit 1 ");
         $name="";
         while ($row_3 = mysqli_fetch_array($userset)) {   $name = $row_3['username']; }
         $order_data = array(
           'OrderID' => $rt,
           'user' => $name,
           'user_id' => $rt1,
           'date' => $row_2['tdate'],
           'file_url' => $row_2['file_url'],
         );
         array_push($orders,$order_data);
       }
   echo json_encode($orders);
 }else{
   $order_w = mysqli_query($db, "SELECT * FROM math_7 WHERE user = $user_id");
   $data_all = array();

    while ($row = mysqli_fetch_array($order_w)) {
      $orders = array( ); $data = array( );
      $id_1=(int)$row['id'];
      $order_y = mysqli_query($db, "SELECT * FROM sent_math WHERE bod_id = $id_1 ");
       while ($row_2 = mysqli_fetch_array($order_y)) {
         $rt = (int)$row_2['id']; $rt1 = $row_2['user_id'];
         $userset = mysqli_query($db, "SELECT * FROM users_1 WHERE user_id =$rt1 limit 1 ");
         $name="";
         while ($row_3 = mysqli_fetch_array($userset)) {   $name = $row_3['username']; }
         $order_data = array(
           'OrderID' => $rt,
           'user' => $name,
           'date' => $row_2['tdate'],
           'file_url' => $row_2['file_url'],
         );
         array_push($orders,$order_data);
       }
      $data = array(
        "RecordID"=> $id_1,
        "title"=> $row['title'],
        "date"=> $row['date_t'],
        "Orders"=> $orders
         );
   array_push($data_all,$data);
    }
   echo json_encode($data_all);
 }
// $data_all = array();
// $orders = array();
// $order = array(
//   'OrderID' => 1,
//   'user' => "togtokh",
//   'date' => "2020-10-10",
//   'file_url' => 1,
//  );
//
//  array_push($orders,$order);
// $data = array(
//         "RecordID"=> 1,
//         "title"=> "bod1",
//         "date"=> "2020-10-10",
//         "Orders"=> $orders
//     );
//
// array_push($data_all,$data);
// if(isset($_GET['e'])){
//   echo json_encode($orders);
// }else{
//   echo json_encode($data_all);
// }
 ?>
