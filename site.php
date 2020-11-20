<?php

    // $array = [2, 3, 1, 19, 18, 12, 7, 18, 22, 32, 20, 11, 8, 5];
    $array = [32, 42, 11, 21, 5, 10, 2, 18, 5, 12];

    function processArray($unsignedArray) {

        $uptrend = false;
        $downtrend = false;
        $index = -1;

        foreach($unsignedArray as $key => $arr) {

            //Check to see the it's not over the array index
            if(count($unsignedArray) > $key+1) {

                //Downtrend condition
                if($arr > $unsignedArray[$key + 1] && $unsignedArray[$key + 1] > $unsignedArray[$key + 2]) {
                    $downtrend = true;
                    $index = $key;
                    break;

                    //Uptrend condition
                } elseif($arr < $unsignedArray[$key + 1] && $unsignedArray[$key + 1] < $unsignedArray[$key + 2]) {
                    $uptrend = true;
                    $index = $key;
                    break;
                }
            }
        }

        return [
            'uptrend' => $uptrend,
            'downtrend' => $downtrend,
            'index' => $index,
        ];

    }

    var_dump(processArray($array));

    die("End of process...");

?>