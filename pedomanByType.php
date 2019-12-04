<?php
include 'connection.php';
$id=$_GET['id'];
$sql = "SELECT konten_pedoman.id as id, konten_pedoman.title, konten_pedoman.konten, jenis_pedoman.name as jenis from konten_pedoman inner join jenis_pedoman on konten_pedoman.id_jenis_pedoman = jenis_pedoman.id where jenis_pedoman.id=$id";
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