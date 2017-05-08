<?php 
if (!session_id()) {
    session_start();
}
if (!$_SESSION['logon']) {
    header("Location:index.php");
    die();
}
    include "connection.php";
    $text = $_POST['text'];
    $id = $_SESSION['id'];
	try {
		$sql = "INSERT INTO chat (text, idUser) VALUES (:text,:id);";
        $query = $pdo->prepare($sql);
        $query->execute( array( ':text'=>$text, ':id'=>$id ) );
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (Exception $e) {
		echo "Ekki tókst að ná í gögnin". "<br>" . $e->getMessage();
	}
header("Location: http://178.62.46.222");
 ?>