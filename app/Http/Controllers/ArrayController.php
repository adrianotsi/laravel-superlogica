<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArrayController extends Controller
{
    public function index()
    {
        //1
        $array = array();

        //2
        for ($i = 0; $i <= 7; $i++) {
            $array[] = rand(0, 14);
        }

        //3
        print_r($array[3]);

        //4
        $arrayString = implode(",", $array);

        //5
        $newArray = explode(',', $arrayString);


        //6
        if (in_array(14, $newArray)) {
            echo "Existe o valor 14 no array";
        }

        //7
        $previousValue = null;
        foreach ($newArray as $key => $val) {
            if ($val < $previousValue) {
                unset($newArray[$key]);
            }
            $previousValue = $val;
        }

        //8
        array_pop($newArray);

        //9
        count($newArray);

        //10
        array_reverse($newArray);
    }
}
