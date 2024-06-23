<?php
class GradeConverter {
    private $numericGrade;

    public function __construct($numericGrade) {
        $this->numericGrade = $numericGrade;
    }

    public function convert() {
        if ($this->numericGrade >= 90) {
            return "A";
        } elseif ($this->numericGrade >= 80) {
            return "B";
        } elseif ($this->numericGrade >= 70) {
            return "C";
        } elseif ($this->numericGrade >= 60) {
            return "D";
        } else {
            return "E";
        }
    }
}

// Get numeric grade from the form
$numericGrade = $_POST['numericGrade'];

// Create GradeConverter object and convert
$gradeConverter = new GradeConverter($numericGrade);
$letterGrade = $gradeConverter->convert();

// Redirect to index.php with the letter grade
header('Location: index.php?grade=' . $letterGrade);
?>
