<?php
 include('../../db.php');
 $output = '';
 $sql = "SELECT * FROM members  ORDER BY id DESC";
 $result = mysqli_query($db, $sql);
 $output .= '
      <div class="table-responsive">
           <table class="table table-bordered">
                <tr>
                     <th width="5%">Дугаар</th>
                     <th width="10%">Зураг</th>
                     <th width="20%">Холбоос</th>
                     <th width="20%">Нэр</th>
                     <th width="20%">Мэдээлэл</th>
                     <th width="10%">Төрөл</th>
                     <th width="5%">Устгах</th>
                </tr>';
 $rows = mysqli_num_rows($result);
 if($rows > 0)
 {
   $couner_m=0;
      while($row = mysqli_fetch_array($result))
      {
        $couner_m++;
           $output .= '
                <tr>
                     <td>'.$couner_m.'</td>
                     <td class="img_in" data-id="'.$row["id"].'" contenteditable>'.$row["img"].'</td>
                     <td class="url" data-id="'.$row["id"].'" contenteditable>'.$row["url"].'</td>
                     <td class="name" data-id="'.$row["id"].'" contenteditable>'.$row["name"].'</td>
                     <td class="body_in" data-id="'.$row["id"].'" contenteditable>'.$row["body"].'</td>
                     <td class="add_row" data-id="'.$row["id"].'" contenteditable>'.$row["add_row"].'</td>
                     <td><button type="button" name="delete_btn" data-id="'.$row["id"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>
                </tr>
           ';

      }
      $output .= '
           <tr>
                <td></td>
                <td id="img" contenteditable></td>
                <td id="url" contenteditable></td>
                <td id="name" contenteditable></td>
                <td id="body" contenteditable></td>
                <td id="add_row" contenteditable></td>
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>
           </tr>
      ';
 }
 else
 {
      $output .= '
      <tr>
           <td></td>
           <td id="img" contenteditable></td>
           <td id="url" contenteditable></td>
           <td id="name" contenteditable></td>
           <td id="body" contenteditable></td>
           <td id="add_row" contenteditable></td>
           <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>
      </tr>';
 }
 $output .= '</table>
      </div>';
 echo $output;
 ?>
