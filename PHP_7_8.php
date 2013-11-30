<html>
    <p>
    <?php
    // Create an array and push on the names
    // of your closest family and friends
    $names = array();
    array_push($names, "Reds", "Marinos", "Frontale", "Antlers");
    // Sort the list
    sort($names);
    // Randomly select a winner!
    $number = rand(0, count($names) - 1);
    // Print the winner's name in ALL CAPS
    print strtoupper($names[$number]);
    ?>
    </p>
</html>