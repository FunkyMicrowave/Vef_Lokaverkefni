<?php
  if (isset($_POST['newImage'])) {
              session_start();
	include "connection.php";
      $new = $_POST['newImage'];
      $email = $_SESSION['email'];
    try {
        $sql = "UPDATE users
                SET image = :newImage
                WHERE email = :email;";
        $query = $pdo->prepare($sql);
        $query->execute( array( ':newImage'=>$new, ':email'=>$email ) );
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (Exception $e) {
		echo "Ekki tókst að skrá gögnin". "<br>" . $e->getMessage();
	}
  }
          header("Refresh: 0; URL=../index.php");
?>