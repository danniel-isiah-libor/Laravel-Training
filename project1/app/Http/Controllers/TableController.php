<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller
{
    public function show($num=1){
        $n = $num;
        $t=1;
        $html="<table border = 1>";
        for ($i=1; $i <= $num; $i++) { 
            $html.="<tr>";
            for ($a=1; $a <= $n; $a++) { 
                $t = $a*$i;
                $html .= "<td>$t</td>";
            }
            $html .= "</tr>";
        }
        $html .="</table>";
        return $html;
    }
}
