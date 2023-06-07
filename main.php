<?php


require_once __DIR__ . '/student.php';
require_once __DIR__ . '/course.php';
require_once __DIR__ . '/manger.php';


$course1 = new \Course\Course(1,"HTML");
$course2 = new \Course\Course(2,"CSS");
$course3 = new \Course\Course(3,"PHP");

$student1 = new \Student\Student(1,"Saeed-Nassir","saeedalghrbawy@gmail.com");
$student2 = new \Student\Student(2,"Khader-Meqdad","KaderMeqdad@gmail.com");
$student3 = new \Student\Student(3,"Osama-Jaber","OsamaJaber@gmail.com");

echo '<pre>';

$student1->addCourse($course1);
$student1->addCourse($course3);
$student2->addCourse($course1);
$student2->addCourse($course2);
$student3->addCourse($course3);
$student3->addCourse($course2);

//$student3->removeCourse($course2);

$manger = new \Manger\Manger();


$manger->addStudent($student1);
$manger->addStudent($student2);
$manger->addStudent($student3);

//$manger->updateStudent($student2->getId(),"Ali","ali@gmail.com");
//$manger->deleteStudent($student1->getId());


// Test :

//print_r($student1->getCourse());
//print_r($student2->getCourse());
//print_r($student3->getCourse());
//echo "Get Student By Id : \n" ;
//print_r($manger->getStudent(2));

echo "\n-Get student By id: {$student1->getId()}\n\n";
print_r($manger->getStudent($student1->getId()));
echo "\n\n\n";


echo "-Get student By id: {$student2->getId()}\n\n";
print_r($manger->getStudent($student2->getId()));
echo "\n\n\n";

echo "-Get student By id: {$student3->getId()}\n\n";
print_r($manger->getStudent($student3->getId()));
echo "\n\n\n";

echo "-Updating student By id: {$student3->getId()} with old name: {$student3->getName()} and old email: {$student3->getEmail()}\n\n";
$manger->updateStudent($student3->getId(), "Mousa", "Mousa@gmail.com");
print_r($manger->getStudent($student3->getId()));
echo "\n\n\n";

echo "-Deleting student By id: {$student2->getId()}\n\n";
$manger->deleteStudent($student2->getId());
print_r($manger->getStudent($student2->getId()));
echo "\n\n\n";

echo "\n\n- Read Log File : \n\n";
readfile("log.txt");

echo '</pre>';







