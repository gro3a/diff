<?php

$a = $_GET[a];
$b = $_GET[b];

if (strlen($a) == false) {
        $result['Result'] = 'a is empty!';
        $result['Status'] = 'not OK!';
    }
    elseif (strlen($b) == false) {
        $result['Result'] = 'b is empty!';
        $result['Status'] = 'not OK!';

    }
    elseif (ctype_digit($a) == false) {
        $result['Result'] = 'a is not a digit!';
        $result['Status'] = 'not OK!';
    }
    elseif (ctype_digit($b) == false) {
        $result['Result'] = 'b is not a digit!';
        $result['Status'] = 'not OK!';
    }
    
    else {
        $result['Result'] = $a - $b;
        $result['Status'] = 'Ok.';
    }

echo json_encode($result);

?>


