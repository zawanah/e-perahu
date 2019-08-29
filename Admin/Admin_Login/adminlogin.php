<?php
  $connect = new mysqli('localhost','root','','adminlogin');


  if($connect->connect_error){
  die('connection failed bruh');
  }else
  echo'connect worked';

  $username=$_POST['username'];
  $password=$_POST['password'];

$sql="SELECT name FROM users WHERE username='$username' AND password='$password' ";

$result= $connect->query($sql);

if($result-> num_rows>0){

  while ($row=$result->fetch_assoc()){

      echo "Admin name is: ". $row["name"];
    }

  }







?>
