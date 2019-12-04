<?php
include 'connection.php';
$param=$_GET['param'];
$sql = "SELECT konten_pedoman.id as id, konten_pedoman.title, konten_pedoman.konten, jenis_pedoman.name as jenis from konten_pedoman inner join jenis_pedoman on konten_pedoman.id_jenis_pedoman = jenis_pedoman.id where jenis_pedoman.name like '%$param%' or konten_pedoman.title like '%$param%' or konten_pedoman.konten like '%$param%'";
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