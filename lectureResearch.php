<?php
include 'connection.php';
$id=$_GET['id'];
$sql = "SELECT lecturer_research.id,lecturer_research.title as title, lecturer_research.date_research, lecturer_research.file as file FROM lecturer_research INNER JOIN lecturer on lecturer_research.id=lecturer.id WHERE lecturer.id=$id";
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