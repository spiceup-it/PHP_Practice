<?php

// change the folder name of this page inside 1.php

echo 'username:'. $_POST["username"] ."<br>";
echo 'password:'. $_POST["password"] ."<br>";
if(($_POST["username"]==="mark") && ($_POST["password"]==="pass"))
{
	echo "UserName and Password are Correct";

}
else{
	echo "Worng Credentials";
}
?> 


