<?php

/*
 * Complete the gradingStudents function below.
 */
function gradingStudents($grades) {
    /*
     * Write your code here.
     */
     $result = array();
      foreach ($grades as $index => $grade) {
        if($grade >= 0 && $grade <= 100){
            if($grade < 38){
                $result[] = $grade;
            }else{
                $div = intdiv($grade,5);
                $mod = $grade % 5;
                if($mod != 0){ //not complete div
                    $next_mult_five = ($div+1) * 5;
                }else{
                    //multiple of 5
                    $next_mult_five = $grade + 5;
                }
                if(abs($next_mult_five - $grade) < 3){
                    $result[] = $next_mult_five;
                }else{
                    $result[] = $grade;
                }
            }
        }
    }
    return $result;
}

$grades = [40,67,73,38,33,40];

$result = gradingStudents($grades);