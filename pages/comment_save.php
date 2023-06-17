<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "comment";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

		$name=$_POST['fullname'];
		$companyname=$_POST['companyname'];
		$address=$_POST['address'];
		$comment=$_POST['comment'];

		$sql = "INSERT INTO comments (Full_Name, Company_Name, Contact_Address, comment)
VALUES ('$name', '$companyname', '$address','$comment')";

if ($conn->query($sql) === TRUE) {
  echo "<script>
  alert('Your comment is successfuly sent. Thank you for your comment');</script>";
  echo "<script>document.location='Contact.php'</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>