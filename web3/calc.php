<html>
<head><title>Calculation Result</title></head>
<body>
    <?php
        # test if input is_numeric
        if(isset($_POST['val1']) and is_numeric($_POST['val1']) and 
           isset($_POST['val2']) and is_numeric($_POST['val2'])){
            $val1 = $_POST['val1'];
            $val2 = $_POST['val2'];
            # test if calc is not null
            if(isset($_POST['calc']) and !empty($_POST['calc'])){
                $calc = $_POST['calc'];
                # switch statement for value of calc
                switch($calc){
                    case 'add': $result = $val1 + $val2; break;
                    case 'sub': $result = $val1 - $val2; break;
                    case 'mul': $result = $val1 * $val2; break;
                    case 'div': $result = $val1 / $val2; break;
                    default: echo "invalid";
                } 
                echo "Calculation result: $result";
            } else {echo "Operator is missing, please choose an operator";}
        } else {echo "Invalid entry - please retry"; }
    ?>
</body>
</html>