<?php
include 'connection.php';
$id=$_GET['id'];
$sql = "SELECT schedule.id, course.name as course_name, lecturer.name as lecture_name, schedule.day_schedule,schedule.time_schedule from schedule INNER JOIN lecturer on schedule.lecture_id = lecturer.id INNER join course on schedule.course_id=course.id INNER JOIN class on schedule.class_id=class.id WHERE class.id = 1 ORDER BY schedule.id ASC";
$result = mysqli_query($koneksi,$sql);
$data=array();
if(mysqli_num_rows($result) > 0){
    while ($row = mysqli_fetch_assoc($result)){
        $data[]=$row;
    }
    echo json_encode(['result'=>$data]);
}else{
    echo json_encode(['result'=>$data]);
}
?>