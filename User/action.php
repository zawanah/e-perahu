<?php
//action.php
include('server.php');
if(isset($_POST["action"]))
{
 if($_POST["action"] == "update_time")
 {
  $query = "
  UPDATE login_details 
  SET last_activity = :last_activity 
  WHERE login_details_id = :login_details_id
  ";
  $statement = $connect->prepare($query);
  $statement->execute(
   array(
    'last_activity'  => date("Y-m-d H:i:s", STRTOTIME(date('h:i:sa'))),
    'login_details_id' => $_SESSION["login_id"]
   )
  );
 }
 if($_POST["action"] == "fetch_data")
 {
  $output = '';
  $query = "
  SELECT login_details.id, driver.email FROM login_details 
  INNER JOIN driver
  ON driver.id = login_details.id 
  WHERE last_activity > DATE_SUB(NOW(), INTERVAL 5 SECOND)
  ";
  $statement = $connect->prepare($query);
  $statement->execute();
  $result = $statement->fetchAll();
  $count = $statement->rowCount();
  $output .= '
  <div class="table-responsive">
   <div align="right">
    '.$count.' Users Online
   </div>
   <table class="table table-bordered table-striped">
    <tr>
     <th>No.</th>
     <th>Email ID</th>
    </tr>
  ';

  $i = 0;
  foreach($result as $row)
  {
   $i = $i + 1;
   $output .= '
   <tr> 
    <td>'.$i.'</td>
    <td>'.$row["email"].'</td>
   </tr>
   ';
  }
  $output .= '</table></div>';
  echo $output;
 }
}



?>