
<?php 

// ------------------------------------------------------------------------------------ 
// TEST 
// $presentTimeString = 'Oct 21 2015 04:29 PM';
// $destinationTimeString = 'Oct 21 2015 04:06 PM';

// $presentTime = DateTime::createFromFormat('M d Y A h:i', $presentTimeString );
// ------------------------------------------------------------------------------------ 

// $presentTime = (new DateTime())->setDate(2015, 10, 21)->setTime(04, 29);
// $destinationTime = (new DateTime())->setDate(2066, 10, 21)->setTime(06, 20);


// Format = Month Day Year Am/PM hour Min 

// echo $presentTime->format('M d Y A h:i') . '</br>' . '</br>';

// echo $destinationTime->format('M d Y A h:i');

// echo $presentTime;

// var_dump($presentTime);

// ------------------------------------------------------------------------------------ 

// $diff = (array) date_diff($presentTime, $destinationTime);

// echo '<pre>'.print_r($diff,1).'</pre>';

// echo $diff['days'];

// ------------------------------------------------------------------------------------ 
// echo '</br>' . '</br>';

// $interval = $presentTime->diff($destinationTime);
// // echo $interval->format('%R%a days') . '</br>';
// echo $interval->format('%M %d %Y A %h:%i') . '</br>' . '</br>';