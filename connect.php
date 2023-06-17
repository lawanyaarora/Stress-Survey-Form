<?php
  $firstname = $_POST['firstname'];
  $middlename = $_POST['middlename'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $areacode = $_POST['areacode'];
  $Phonenumber = $_POST['Phonenumber'];
  $dob = $_POST['dob'];
  $gender = $_POST['gender'];
  $ques1 = $_POST['ques1'];
  $ques2 = $_POST['ques2'];
  $ques3 = $_POST['ques3'];
  $ques4 = $_POST['ques4'];
  $ques5 = $_POST['ques5'];
  $ques6 = $_POST['ques6'];
  $ques7 = $_POST['ques7'];
  $ques8 = $_POST['ques8'];
  $ques9 = $_POST['ques9'];
  $ques10 = $_POST['ques10'];
  
  //database connection
  $conn = new mysqli('localhost', 'root', '', 'login_info');
  if($conn->connect_error){
    die('Connection failed : ' .$conn->connect_error);
  }
  else{
    $stmt = $conn->prepare("insert into info(firstname, middlename, lastname, email, areacode, Phonenumber, dob, gender, ques1, ques2, ques3, ques4, ques5, ques6, ques7, ques8, ques9, ques10)
    values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?)");
    $stmt->bind_param("ssssiissssssssssss", $firstname, $middlename, $lastname, $email, $areacode, $Phonenumber, $dob, $gender, $ques1, $ques2, $ques3, $ques4, $ques5, $ques6, $ques7, $ques8, $ques9, $ques10);
    $stmt->execute();
    echo "<a href='data.php'</a>";
    echo "registered successfully....";
    $stmt->close();
    $conn->close();
  }

 ?>
