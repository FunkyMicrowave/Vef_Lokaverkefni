<?php 
	try {
		$sql = "SELECT * FROM users WHERE id = " . $_SESSION['id'] . ";";
		$result = $pdo ->query($sql);
		
	} catch (Exception $e) {
		echo "Ekki tókst að ná í gögnin". "<br>" . $e->getMessage();
	}
	// fetch() sækir eina röð í einu frá database.
	while($row = $result -> fetch()){
		$einstaklingur[] = array($row['id'], $row['name'], $row['email'], $row['image'], $row['about']);
	}

try {
		$sql = "SELECT * FROM users WHERE id != " . $_SESSION['id'] . ";";
		$result = $pdo ->query($sql);
		
	} catch (Exception $e) {
		echo "Ekki tókst að ná í gögnin". "<br>" . $e->getMessage();
	}
	// fetch() sækir eina röð í einu frá database.
	while($row = $result -> fetch()){
		$einstaklingurinn[] = array($row['id'], $row['name'], $row['email'], $row['image'], $row['about']);
	}
echo "<div class='Book'>";
            echo "<h1>Accounts</h1>";
foreach ($einstaklingur as $entry) {
        echo "<div class='Pocket'><h2>" . $entry[1];
            if ($entry[3] == ''){
                echo "<img src='https://cdn1.iconfinder.com/data/icons/social-messaging-productivity-1-1/128/gender-male-3-512.png'>";
            }
            else{
                echo "<img src='" . $entry[3] . "'>";
            }
            echo "</h2><h5>" . $entry[2] ."</h5>";
            echo "<form name='myForm1' id='myForm1' action='SQL/about.php' method='post'><textarea id='chatboxid' maxlength='750' type='text' name='text'>";
            echo $entry[4];
            echo "</textarea><input id='chatbox2' type='submit' value='Enter'></form></div>";  
    }
    foreach ($einstaklingurinn as $entry) {
        echo "<div class='Pocket'><h2>" . $entry[1];
            if ($entry[3] == ''){
                echo "<img src='https://cdn1.iconfinder.com/data/icons/social-messaging-productivity-1-1/128/gender-male-3-512.png'>";
            }
            else{
                echo "<img src='" . $entry[3] . "'>";
            }
            echo "</h2><h5 style='color: #BBB;'>_</h5>";
            echo "<p id='about'>" . $entry[4] . "</p></div>";   
    }
echo "</div>"
?>