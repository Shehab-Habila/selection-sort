<?php

/*

Shehab-Habila

Selection sort
----------------

*/

$values = array(5, 14, 78, 9, 6, 4, 11, 19, 80, 0, 50, 20, 55);
$valuesNum = count($values);
$start = 0;
$end = $valuesNum-1;
$minStart = 0;

echo "UnSorted:<br>";
print_r($values);
/*
echo "<br><br>Sorting:<br>";
*/
while($minStart <= $end){
    $smallestValue = $values[$minStart];
    while($start < $end){
        $checkedValue = $values[$start+1];
        if($checkedValue < $smallestValue){
            $smallestValue = $checkedValue;
            $smallestValueIndex = $start+1;
        }
        if($start == $end-1){
            if ($smallestValue==$values[$minStart]){}
            else {
                $minStartValue = $values[$minStart];
                unset($values[$minStart]);
                array_splice($values, $minStart, 0, $smallestValue);
                unset($values[$smallestValueIndex]);
                array_splice($values, $smallestValueIndex, 0, $minStartValue);
                /*
                print_r($values);
                echo "<br>";
                */
            }
        }
        $start++;
    }
    $minStart++;
    $start = $minStart;
}

echo "<br><br>Sorted:<br>";
print_r($values);
