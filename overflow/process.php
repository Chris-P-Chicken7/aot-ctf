<?php 
if (isset($_POST['num'])) {
    $num = $_POST['num'];
    if ($num = -104) {
        echo "flag{ch4ds_ch00se_5urvey_corps}";
    } else {
        echo "wrong number";
    }

}