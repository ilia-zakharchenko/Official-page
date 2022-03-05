<?

	$name = $_POST['name'];
	$email = $_POST['email'];

	$dbh = new PDO('mysql:host=localhost;dbname=cy70845_db', 'cy70845_db', 'cy70845_db');
	$stmt = $dbh->prepare("INSERT INTO `order`(`time`, name, email)
		VALUES (NOW(), :name, :email)");
	$stmt->bindParam(':name', $name);
	$stmt->bindParam(':email', $email);
	$stmt->execute();

	echo '1';
