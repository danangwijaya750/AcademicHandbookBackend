<?php
include 'connection.php';
$id=$_GET['id'];
$sql = "SELECT course.id, course.name as matakuliah, course_for.sks as sks, course_for.semester as semester FROM course_for INNER JOIN course on course_for.course_id=course.id WHERE course_for.pordi_id=$id";
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