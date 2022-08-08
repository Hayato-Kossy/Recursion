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
        return $this->studentId.': '. $this->firstName .' '. $this->lastName .'('. $this->gradeLevel . 'gr)' . PHP_EOL;
    }
}

$student1 = new Student("AC-343424", "James", "Smith", 6);
echo $student1->getStudentInfo();


$student2 = new Student("AC-343428", "Maria", "Garcia", 5);
echo $student2->getStudentInfo();

$student3 = new Student("AC-343434", "Robert", "Johnson", 3);
echo $student3->getStudentInfo();