<?php
    echo '  hello  ' , 3.1 , ' = ' , 3.1 . '<br>';

    $name = 18;
    echo var_dump($name).'<br>';
    echo $name . '<br>';

    $color  =[
        'red' => 'do',
        'blue' => 'xanh',
        'green' => 'xanh la',
        'vang' => 'yellow'
    ];

    //print_r($color);
    echo $color['green'];

    foreach($color as $key => $value){
        echo "$key : $value".'<br>';
    }

    function hello($name){
        echo "hello $name".'<br>';
    }

    hello("An");

    $ok = function ($a , $b){
        return $a * $b;
    };
    echo $ok(5,6).'<br>';

    $ok2 = fn($a , $b) => $a + $b;
    echo $ok2(6,7);

    print_r($_SERVER).'<br>';

?>

<h1>okok</h1>

<h2><?php echo 'okokok';?></h2>