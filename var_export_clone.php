<pre>
<?php 

$users = [
    'achour' => [
        'Name' => 'Achour',
        'age' => 23,
        'Hobbies' => ['Programming','Guitar','Driving','Eating']
    ]

]; 

$spacex = 0;

function myfunction($array,$space = 0){
    global $spacex;
    $spacex = $space;
    spacer($space);
    echo "array ( <br />";
    foreach ($array as $key => $value){
        $key = (is_string($key)) ? "'$key' => " : " $key => ";
        if(is_array($value)){
            $space++;
            spacer($space);
            echo $key,' <br />';
            myfunction($value,$space);
            $space = $space - 1;
        }else{
            spacer($spacex);
            $value = (is_string($value)) ? "'$value'" : $value;
            echo "$key $value, <br />";
        }
    }
    echo spacer($space),"), <br />";
}
function spacer($spaces){
    for($i=1; $i <= $spaces; $i++){
        echo "  ";
    }
}


echo "MY FUNCTION OUTPUT <br />"; 
myfunction($users);
echo "var_export OUTPUT <BR />";
var_export($users);
?>

</pre>
