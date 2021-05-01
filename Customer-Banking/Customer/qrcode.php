<?php

    include('phpqrcode/qrlib.php');

    // text output  
    $codeContents = urldecode('https://undraw.co/illustrations');
    
    // generating
    $text = QRcode::text($codeContents);
    $raw = join("<br/>", $text);
    
    $raw = strtr($raw, array(
        '0' => '<span style="color:white">&#9608;&#9608;</span>',
        '1' => '&#9608;&#9608;'
    ));
    
    // displaying
    
    echo '<tt style="font-size:7px">'.$raw.'</tt>';

    
?>