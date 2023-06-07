<?php

namespace Manger;

require_once __DIR__ . '/student.php';
require_once __DIR__ . '/loggable.php';

class Manger
{

    use \Loggable\Loggable;

    public $students;

    public function __construct()
    {
        $this->students = array();
    }

    public function addStudent($student)
    {
        if ($student instanceof \Student\Student) {
            $id = $student->getId();
            $this->students[$id] = $student;
            $this->log("Added   student By id: {$id} and name: {$student->getName()}");
        }
    }

    public function getStudent($id)
    {
        if (array_key_exists($id, $this->students)) {
            return $this->students[$id];
        } else {
            echo "Not Found Student By Id {$id}!";
        }
    }

    public function updateStudent($id, $name, $email)
    {
        if (array_key_exists($id, $this->students)) {
            $student = $this->students[$id];
            $student->setName($name);
            $student->setEmail($email);
            $this->log("Updated student By id: {$id} and name: {$student->getName()}");
        }else {
            return "Not Found Student By Id {$id}!";
        }

        /*foreach ($this->students as $value) {
            if ($id === $value->id) {
                $student = $this->students[$id];
                $student->setName($name);
                $student->setEmail($email);
                $this->log("Updated student with id: {$id} and name: {$student->getName()}");
       
            }
        }*/
    }


    public function deleteStudent($id)
    {
        if (array_key_exists($id, $this->students)) {
        
            $student = $this->students[$id];
            unset($this->students[$id]);
            echo "Deleted Successfully By Id {$id} !\n";
            $this->log("Deleted student By id: {$id} and name: {$student->getName()}");
        }else{
            echo "Not Found Student By Id {$id}!";
        }


        /*foreach ($this->students as $value) {
            if ($id === $value->id) {
                $student = $this->students[$id];
                unset($this->students[$id]);
                echo "Deleted Successfully By Id {$id} !\n";
                $this->log("Deleted student with id: {$id} and name: {$student->getName()}");
            }
        }*/

    }
}
