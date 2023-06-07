<?php

namespace Student;

require_once __DIR__ . '/course.php';

class Student
{

    public readonly int $id;
    public string $name;
    public string $email;
    public $courses;

    public function __construct($id, $name, $email)
    {

        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->courses = [];
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getCourse()
    {
        return $this->courses;
    }

    public function addCourse($course)
    {
        if ($course instanceof \Course\Course) {
            array_push($this->courses, $course);
            echo "\nAdded Course By Name \"{$course->name}\" To Student \"{$this->getName()}\"!\n";
        } else {
            echo 'Warning : Please enter object from class Course!';
        }
    }

    public function removeCourse($course)
    {

        if ($course instanceof \Course\Course) {

            $index = array_search($course, $this->courses);

            if ($index !== false) {
                unset($this->courses[$index]);
            }
        } else {
            echo 'Warning : Please enter object from class Course!';
        }
    }
}
