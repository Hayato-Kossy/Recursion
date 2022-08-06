<?php
class Person {
   function __construct(string $firstName, string $lastname) {
      $this->firstName = $firstName;
      $this->lastname = $lastname;
   }

   function getFullName() {
      return $this->firstName . ' ' . $this->lastname . PHP_EOL;
   }

   function getInitial() {
      return $this->firstName[0] . ' ' . $this->lastname[0] . PHP_EOL;
   }
}

$mike = new Person("Michael", "Johnson");
echo "Michael Johnson" . PHP_EOL;
echo "M.J" . PHP_EOL;

$carly = new Person("Carly", "Angelo");
echo "Carly Angelo" . PHP_EOL;
echo "C.A" . PHP_EOL;

$jessie = new Person("Jessie", "Raelynn");
echo "Jessie Raelynn" . PHP_EOL;
echo "J.R" . PHP_EOL;