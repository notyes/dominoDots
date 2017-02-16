<!DOCTYPE html>
<html>
<head>
    <title>1502 Domino Dots</title>
</head>
<body>
    <form  method="get" accept-charset="utf-8">
        <input type="number" name="number" value="" placeholder="" autofocus>
        <button>sent</button>
    </form>
    
    <?php  

    if ( ! empty( $_GET['number'] ) ) {
        
        $n = $_GET['number'];
        $numberMain = array_combine(range(1,$n),range(1,$n));
        $count = 0;
        foreach ($numberMain as $key => $value) {
            $a = array_fill(0, $value+1, $value);
            echo '<pre>';
            print_r( $a );
            echo '</pre>';
            foreach ($a as $key => $value) {
                $count += ($key + $value);
            }
        }
        echo "<br>";
        echo 'Domino Dots ['.$n.'] :: '.$count;
    }

    ?>

</body>
</html>