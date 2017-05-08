<div class="chatRammi">
<div class="chatHeader">
    <h2>Chat</h2>
</div> 
 
  <div id="Container">
      <div id="View" onunload="unloadP(window.location.href + '#View')" onload="loadP(window.location.href + '#View')">
    <?php 
     foreach ($chat as $entry) {
			echo "<div>";
            if ($entry[3] == ''){
                echo "<img src='https://cdn1.iconfinder.com/data/icons/social-messaging-productivity-1-1/128/gender-male-3-512.png'>";
            }
            else{
                echo "<img src='" . $entry[3] . "'>";
            }
         if ($entry[0] == $_SESSION['id']){
            echo "<p style='background: lightblue; float: right; margin-top: 5px;'>" . $entry[1] . "</p><h5>" . $entry[2] . "</h5></div>";
         }
         else{
            echo "<p>" . $entry[1] . "</p><h5>" . $entry[2] . "</h5></div>";
         }
		}
       ?>
   </div>
  </div>
   
    <div class="chatInput">
        <form name="myForm" id="myForm" action="SQL/Skrifa.php" method="post">
            <textarea id="chatbox" autofocus maxlength="750" Placeholder="Enter text here" type="text" name="text"></textarea>
            <input id="chatbox1" type="submit" value="Enter">
        </form>
    </div>
</div>