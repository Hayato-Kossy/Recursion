<?php
class Student {
    public $studentId;
    public $firstName;
    public $lastName;
    public $gradeLevel;

    function __construct(string $studentId, string $firstName, string $lastName, int $gradeLevel) {
        $this->studentId = $studentId;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->gradeLevel = $gradeLevel;
    }

    function getStudentInfo(): string{
        return $this->studentId.': '. $this->firstName .' '. $this->lastName .'('. $this->gradeLevel . 'gr)';
    }
}

class Classroom {
    public $students;
    public $courseName;
    public $teacher;

    function __construct(array $students, string $courseName, string $teacher) {
        $this->students = $students;
        $this->courseName = $courseName;
        $this->teacher = $teacher;
    }

    function getClassIdentity(): string{
        return $this->courseName . " managed by " . $this->teacher;
    }

    function getNumberOfStudents(): int{
        return count($this->students);
    }
}

function printHonorStudents(array $school){
    $school_number = count($school);
    for ($i = 0; $i < $school_number; $i++) {
        for ($j = 0; $j < $school[$i]->getNumberOfStudents(); $j++){
            if ($school[$i]->students[$j]->gradeLevel >= 10) echo $school[$i]->students[$j]->getStudentInfo() . " from " . $school[$i]->teacher . "'s class" . PHP_EOL;
        }
    }
}

$classroom1 = new Classroom([new Student("AC-343424", "James", "Smith", 6), new Student("AC-343428", "Maria", "Garcia", 5),new Student("AC-343434", "Robert", "Johnson", 3),new Student("AC-343454","Danny", "Robertson",10)], "Algebra II", "Emily Theodore");

$classroom2 = new Classroom([new Student("AC-340014","Kent", "Carter",9), new Student("AC-340024","Isaiah", "Chambers",10),new Student("AC-340018","Leta", "Ferguson",7)], "English", "Daniel Pherb");

$school = [$classroom1, $classroom2];
printHonorStudents($school);