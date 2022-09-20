<html>
<head><title>Your Favorite</title></head>
<body>
    <?php
       
        if(isset($_POST['username']) and strlen($_POST['username']) > 0 ){
                $username = $_POST['username'];
                echo "Thanks for your selection $username <br>";
            if(isset($_POST['color']) and strlen($_POST['color']) > 0 
                and isset($_POST['dish']) and strlen($_POST['dish']) > 0 )
            {
                $color = $_POST['color'];
                $dish = $_POST['dish'];
                echo "You really enjoy $dish <br> -especially with a nice $color wine";
            }
            else { echo "Something's missing, please check your selections again"; }
        } 
        else { echo "Please type your username"; }
    ?>
</body>
</html>