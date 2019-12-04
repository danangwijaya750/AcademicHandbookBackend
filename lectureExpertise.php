<?php
include 'connection.php';
$id=$_GET['id'];
$sql = "SELECT expertise.name as expertises from lecture_expertises INNER JOIN expertise on lecture_expertises.expertise_id =expertise.id INNER JOIN lecturer on lecture_expertises.lecture_id=lecturer.id WHERE lecturer.id=$id";
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