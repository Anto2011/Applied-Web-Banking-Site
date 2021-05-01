<?php
    $date = DateTime::createFromFormat('m/d/Y g:ia', "10/31/2012 7:30pm");
    echo $date->format('U');
?>
<br><br>
<?php
    date_default_timezone_set('Jamaica'); 
    echo "The time is " . date("h:i:sa");
?>
<br><br>
<?php
    date_default_timezone_set('Jamaica'); 
    $currentDateTime = date('h:i:sa');
    echo $currentDateTime;
?>