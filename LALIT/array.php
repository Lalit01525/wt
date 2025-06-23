<?php 
echo "Array:"; 
echo "<br>"; 
$user = [ 
    [ 
        'name' => 'Kunal', 
        'Email' => 'Kuanl@gmail.com', 
        'Age' => 19 
    ], 
    [ 
        'name' => 'Rudra', 
        'Email' => 'Rudra@gmail.com', 
        'Age' => 18 
    ] 
]; 

foreach ($user as $x) { 
     echo $x['name']; echo "<br>";     
     echo $x['Email']; echo "<br>";     
     echo $x['Age']; echo "<br>";     
     echo "<br>"; 
} 
?>
