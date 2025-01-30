<?php

// Run Program
prompt();

// Collect Grade
function prompt() {
    $valid = false;
    while(!$valid) {
        $gradeNumber = readline("Enter the current grade: ");
        $valid = verifyInput($gradeNumber);
    }
    $gradeLetter = calcGrade($gradeNumber);
    echo "Letter grade is: " . $gradeLetter . "\n";
    echo "Today's date is: " . date('Y-m-d') . "\n";
}

// Verify Input is in Range
function verifyInput($gradeNumber){
    // Is number?
    if (!is_numeric($gradeNumber)) {
        echo "Please enter a numeric value.\n";
        return false;
    }
    else {
        if (!ctype_digit($gradeNumber)) {
            echo "Number must be a whole integer.\n";
            return false;
        }
    }

    // In range?
    if (($gradeNumber < 0) || ($gradeNumber > 100)) {
        echo "Grade must be between (or be) 0 to 100.\n";
        return false;
    }

    return true;
}

// Determine Grade
function calcGrade($gradeNumber) {
    if (($gradeNumber  >= 90) && ($gradeNumber <= 100)) {
        return "A";
    }
    else if (($gradeNumber <= 89) && ($gradeNumber >= 80)) {
        return "B";
    }
    else if (($gradeNumber <= 79) && ($gradeNumber >= 70)) {
        return "C";
    }
    else if (($gradeNumber <= 69) && ($gradeNumber >= 60)) {
        return "D";
    }
    else if (($gradeNumber <= 59) && ($gradeNumber >= 0)) {
        return "F";
    }
}

?>