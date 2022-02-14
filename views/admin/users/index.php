<html>
<body>
<h1>Admin/Users</h1>
<?php
if(isset($_SESSION["logged_in"]) && $_SESSION["logged_in"])
    echo "I kyqur";
else
    echo "Kyqu!"
?>
</body>
</html>
