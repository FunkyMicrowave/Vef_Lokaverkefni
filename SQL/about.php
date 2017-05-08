<?php if (isset($_POST['text'])) {
              session_start();
	include "connection.php";
      $new = $_POST['text'];
      $email = $_SESSION['email'];
    try {
        $sql = "UPDATE users
                SET about = :text
                WHERE email = :email;";
        $query = $pdo->prepare($sql);
        $query->execute( array( ':text'=>$new, ':email'=>$email ) );
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (Exception $e) {
		echo "Ekki tókst að skrá gögnin". "<br>" . $e->getMessage();
	}
  }
          header("Refresh: 2; URL=../index.php");
?>