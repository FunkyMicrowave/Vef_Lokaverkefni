<?php
  if (isset($_POST['newName'])) {
              session_start();
	include "connection.php";
      $new = $_POST['newName'];
      $email = $_SESSION['email'];
    try {
        $sql = "UPDATE users
                SET name = :newName
                WHERE email = :email;";
        $query = $pdo->prepare($sql);
        $query->execute( array( ':newName'=>$new, ':email'=>$email ) );
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (Exception $e) {
		echo "Ekki tókst að skrá gögnin". "<br>" . $e->getMessage();
	}
  }
          header("Refresh: 0; URL=../index.php");
?>