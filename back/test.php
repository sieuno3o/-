<?php
  include_once("connect.php");

  mysqli_set_charset($conn, "utf8"); // 한글
  $sql = "select * from register";
  $result = $conn->query($sql); 

  if(isset($result) && $result->num_rows>0)
  {
    while($row = $result->fetch_assoc())
    {
      echo "name:".$row['visitor_name']."<br>";
      echo "comment:".$row['comment']."<br>";
      echo "<br>";
    }
  } else echo "검색된 데이터가 없습니다.";
?>