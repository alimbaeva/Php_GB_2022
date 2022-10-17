<?php

$pdo = new PDO('sqlite:database.db', null, null, [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);


class Student
{
    private int $id;
    private string $name;

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }
}

$statement = $pdo->prepare('SELECT * FROM `students` ');
$statement->execute();
$statement->setFetchMode(PDO::FETCH_CLASS, "Student");
$student = $statement->fetch();
var_dump($student);