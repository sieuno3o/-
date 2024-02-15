<?php
  include_once("connect.php");

  mysqli_set_charset($conn, "utf8"); // 한글
  $visitor_name= $_POST["visitor_name"];
  $comment = $_POST["comment"];

  echo "추가할 방명록 작성자: {$visitor_name} 코멘트: {$comment}";

  $sql = "insert into register (visitor_name, comment) values('$visitor_name','$comment')";

  if($conn->query($sql)) echo "<h3>방명록 등록 성공</h3>";
  else "방명록 등록 실패"  

?>