<?php

namespace Loggable;


trait Loggable{

    public function log($message) {
        $file = fopen("log.txt", "a"); 
        fwrite($file, /*date("Y-m-d H:i:s") . " - " .*/ $message . "\n");
        fclose($file);
    }

}