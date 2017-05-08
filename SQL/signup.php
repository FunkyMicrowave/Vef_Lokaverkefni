<?php
if (isset($_POST['email'])) {
    include "connection.php";
      $name = $_POST['name'];
      $pass = $_POST['pass'];
      $email = $_POST['email'];
    try {
        $sql = "INSERT INTO users (name, email, pass) VALUES (:name,:email,:pass);";
        $query = $pdo->prepare($sql);
        $query->execute( array( ':name'=>$name, ':email'=>$email, ':pass'=>$pass ) );
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<h1>You will be redirected and have to log in with the new account</h1>";
	} catch (Exception $e) {
		echo "<h1>Ekki tókst að skrá gögnin, gæti verið að þetta email sé núþegar í notkun</h1>";
	}
    header( "refresh:3;url=http://178.62.46.222");
  }

else{
    echo "<h1>Something went wrong</h1>";
    header( "refresh:2;url=http://178.62.46.222");
}
?>