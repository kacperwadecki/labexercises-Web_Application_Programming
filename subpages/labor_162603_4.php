<?php
    $nr_indeksu='162603';
    $nrGrupy='4';

    echo 'Jan Kowalski '.$nr_indeksu. ' grupa '.$nrGrupy.' <br/><br/>';

    echo 'Zastosowanie metody include() <br />';

    include 'include.php';

    echo "To jest: $color $fruit <br/> <br/>";

    echo 'Zastosowanie metody require_once() <br />';

    require_once('require_once.php');

    echo "To jest: $car $model <br/><br/>";

    echo 'Zastosowanie metody if, else, else if, switch <br />';

    $number1 = 5;
    $number2 = 5;

    if($number1 < $number2) {
        echo "$number1 jest mniejsza";
    }
    else if($number1 > $number2) {
        echo "$number1 jest wieksze";
    }
    else{
        echo "Liczby są równe";
    }

    echo "<br/>";

    $pick = 2;

    switch($pick) {
        case 0:
            echo "To jest $pick";
            break;
        case 1:
            echo "To jest $pick";
            break;
        case 2:
            echo "To jest $pick";
            break;
    }

    echo '<br/><br/> Zastosowanie metody while(), for() <br/>';

    $i = 1;
    while ($i <= 10) {
        echo "$i, ";
        $i++;
    }

    echo "<br>";

    for ($i = 1; $i <= 10; $i++) {
        echo "$i, ";
    }
    echo "<br><br>";

?>

<html>
    <body>
        <a href="labor_162603_4.php?imie=Jan&nazwisko=Kowalski">Test</a>
    </body>

    <?php 
        echo '</br>Typy zmiennych $_GET, $_POST, $_SESSION';

        if(isset($_GET['imie']) && isset($_GET['nazwisko'])){
            echo "<br>Imie: " . $_GET['imie'] . " Nazwisko: " . $_GET['nazwisko'];
        }
    ?>
</html>

<html>
    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            Imie: <input type="text" name="name">
            <button type="submit">Submit</button>
        </form>
             
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['name'];
            if (empty($name)) {
                echo "Name is empty";
            } else {
                echo $name;
            }
            }
        ?>
    </body>
</html>

<?php
    session_start();
?>

<html>
    <body>
        
    <?php
        $_SESSION["car"] = "fiat";
        $_SESSION["color"] = "red";
        
        echo "Samochód: " . $_SESSION["car"] . "<br>";
        echo "Kolor: " . $_SESSION["color"] . "<br>";
    ?>
            
    </body>
</html>

