<?php 
	try {
		$sql = "SELECT users.id, chat.text, users.name, users.image, chat.idUser
        FROM chat
        INNER JOIN users ON chat.idUser=users.id
        ORDER BY chat.id DESC;";
		$result = $pdo ->query($sql);
		
	} catch (Exception $e) {
		echo "Ekki tókst að ná í gögnin". "<br>" . $e->getMessage();
	}
	// fetch() sækir eina röð í einu frá database.
	while($row = $result -> fetch()){
		$chat[] = array($row['id'], $row['text'], $row['name'], $row['image']);
	}
 ?>