<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MultiplicationController extends Controller
{ 
    public function showNum($number){
        $table = "<table border='1'>";

        for($x = 1; $x <= $number; $x++){
            $table = $table . "<tr>";
            for($y = 1; $y <= $number; $y++){
                $table = $table . "<td>" . ($x * $y) . "</td>";
            }
            $table = $table . "</tr>";
        }
        $table = $table . "</table>";
        return $table;
    }
}
