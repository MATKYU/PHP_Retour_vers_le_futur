<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Back To The Future</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="title">
            <h1>Back To The Future</h1>
        </div>
    </header>
    <main>
        <div class="counter">
            <?php

            // ------------------------------------------------------------------------------------ 
            // TEST 
            // $presentTimeString = 'Oct 21 2015 04:29 PM';
            // $destinationTimeString = 'Oct 21 2015 04:06 PM';

            // $presentTime = DateTime::createFromFormat('M d Y A h:i', $presentTimeString );
            // ------------------------------------------------------------------------------------ 

            $presentTime = (new DateTime())->setDate(2015, 10, 21)->setTime(04, 29);
            $destinationTime = (new DateTime())->setDate(2066, 10, 21)->setTime(06, 20);
            $interval = $presentTime->diff($destinationTime);

            // Format = Month Day Year Am/PM hour Min 

            ?>

            <p>Départ : <?= $presentTime->format('M d Y A h:i') . '</br>' . '</br>'; ?></p>

            <p>Destination : <?= $destinationTime->format('M d Y A h:i') . '</br>' . '</br>'; ?></p>

            <p>Différence de Voyage : <?= $interval->format('%M %d %Y A %h:%i') . '</br>' . '</br>'; ?></p>

        </div>
    </main>


</body>

</html>