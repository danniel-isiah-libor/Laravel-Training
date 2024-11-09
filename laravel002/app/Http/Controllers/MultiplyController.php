<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class MultiplyController extends Controller
{
    public function index($number)
    {
        $table = "<table border='1'>";

        /**
         *
         * <table>
         * <tr>
         *     <td>1</td>
         *     <td>2</td>
         *      <td>3</td>
         *      <td>4</td>
         *      <td>5</td>
         * </tr>
         *
         * <tr>
         *     <td>2</td>
         *     <td>4</td>
         *      <td>6</td>
         *      <td>8</td>
         *      <td>10</td>
         * </tr>
         */

        for ($x = 1; $x <= $number; $x++) {
            $table = $table . "<tr>";

            for ($y = 1; $y <= $number; $y++) {
                $table = $table . "<td>" . ($x * $y) . "</td>";
            }

            $table = $table . "</tr>";
        }

        $table = $table . "</table>";

        return $table;
    }
}
