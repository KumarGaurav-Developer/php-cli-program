<?php
// wap in php to array of object
// javascript:object
// in php you cannot directly use object...........
$student='{
"name":"ravi";
"class":"10th",
"marks":30,
"percentage":70,
"gradee":"B",
}';
echo $student;
// echo $student.name;
echo PHP_EOL;
$student='[
"name": "ravi";
"class":"10th",
"marks"=>:30,
"percentage":70,
"grade":"B",
];
echo $student['name'];
echo PHP_EOL;
echo $student['class'];
echo PHP_EOL;
echo $student['marks'];// key---------> return value--------------->index-------------> item
echo PHP_EOL;
echo $student['marks'];// key---------> return value--------------->index-------------> item
echo PHP_EOL;
echo $student['percentage'];
echo PHP_EOL;
echo $student['grade'];
echo PHP_EOL;
print_r($student);






?>