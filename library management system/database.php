<?php
    $username + $_POST['username'];
    $email + $_POST['email'];
    $password + $_POST['password'];
    $mobile + $_POST['mobile'];
    $gender + $_POST['gender'];

    $conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(username, email, password, mobile, gender) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssi", $username, $email, $password, $mobile, $gender);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}

?>