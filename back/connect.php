<?php
  //DB 연결
  $conn = mysqli_connect("localhost","root","1234","1st_project");
  mysqli_set_charset($conn, "utf8"); // 추가
  if(mysqli_connect_errno()){
  echo "Mariadb connect failure:".mysqli_connect_error();
  }
?>