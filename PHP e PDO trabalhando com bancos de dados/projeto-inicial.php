<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$student = new Student(
    null,
    'Ana Barreto',
    new \DateTimeImmutable('1994-03-27')

);

echo $student->age();
