<?php
  $today = date("Y-m-d H:i:s");
  echo $today;
  echo "\n";

  echo "Maria DB 연결 테스트";
  $conn = mysqli_connect("localhost","root","1234","1st_project");
  if(mysqli_connect_errno()){
  echo "Mariadb connect failure:".mysqli_connect_error();
  }
  echo "\n";

  $sql = "select * from member_info";

  $result = $conn->query($sql); 

  if(isset($result) && $result->num_rows>0)
  {
    while($row = $result->fetch_assoc())
    {
      echo $row['id']."번 팀원\n";
      echo "이름:".$row['name']."\n";
      echo "MTBI:".$row['mbti']."\n";
    }
  } else echo "검색된 데이터가 없습니다.";
?>