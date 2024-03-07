<?php  


if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['pno'])) {
	include 'db.php';

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$name = validate($_POST['name']);
	$email = validate($_POST['email']);
    $pno = validate($_POST['pno']);

	if (empty($name) || empty($email) || empty($pno)) {
		header("Location: donate1.php");
	}else {

		$sql = "INSERT INTO test(name, email, pno) VALUES('$name', '$email', '$pno')";
		$res = mysqli_query($conn, $sql);

	}

}else {
	header("Location: donate1.php");
}

?>

<?php
header("Location: https://donate.stripe.com/test_9AQ14T17S8qR6BO144");
exit();
?>