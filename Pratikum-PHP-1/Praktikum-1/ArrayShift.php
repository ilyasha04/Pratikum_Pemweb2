<!DOCTYPE html>
<html lang="en">

<body>

    <?php
    $team = ["Ilyasha", "Arum", "Afghan", "Yusuf"];
    array_shift($team);
    foreach ($team as $orang) {
        echo $orang . '<br/>';
    }
    ?>

</body>

</html>