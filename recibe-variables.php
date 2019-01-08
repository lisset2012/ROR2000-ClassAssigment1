<?php

// Class Assignment 1 - 
// Create a PHP page that receives a comma separated list of elements via the URL (I.E.: localhost/page.php?e=hello,world,how,are,you) 
// and using the PHP function explode() convert them to an array, 
// then go through the array using a foreach loop and echo the contents on a HTML list.

//voy a recibir los datos por URL por medio del Array $_GET
$e = $_GET["e"];
echo "Variable e: " . $e;

$list = explode(",",$e);

?>
<pre>
    <?php
        print_r($list);
    ?>
    
</pre>
<ul>
<?php
    foreach($list as $l){
        echo "<li>" . $l . "</li>";
    }
?>
</ul>
