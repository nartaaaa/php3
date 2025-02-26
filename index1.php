<?php

$age=15;
if(($age < 12) && ($age > 20)){
    echo "you are a tenager";
}
else{
    echo "you are an adult";
}


$num = 0;

if($num < 0){
    echo "kdxjk";
}elseif($num == 0){
    echo "vlera e numrit eshte 0";
}
else{
    echo "vlera e numrit eshte pozitiv";
}

echo '<br>';

// $money = 4;

// if($money < 4){
//     echo "nnnn";
// }elseif($money == 4){
//     echo "shuma juaj eshte 4 euro";
// }
// else{
//     echo "shuma juaj eshte pozitive";
// }

// echo '<br>';

// $mosha = 17;

// if(($mosha > 17) && ($mosha < 19)){
//     echo "you are a child";
// }
// else{
//     echo "you can drive";
// }

// $var1= 13;
// $var2= 31;

// if($var1 > $var2){
//     echo "ti je i rritur";
// }elseif($var2 < $var1){
//     echo "ti je nje femije";
// }
// else{
//     echo "keni dallim ne moshe";
// }

$day = "Monday";
switch($day){
    case 'Monday':
        echo "its monday";
        break;
        case 'Tuesday':
            echo "its tuesday";
            break;
            case 'Wednesday':
                echo "its wednesday";
                break;
                case 'Thursday':
                    echo "its thursday";
                    break;
                    case 'Friday':
                        echo "its friday";
                        break;
                        case 'Saturday':
                            echo "its saturday";
                            break;
                            case 'Sunday':
                                echo "its sunday";
                                break;

                                default:
                                echo "invalid day";
                                break;
                                /
}