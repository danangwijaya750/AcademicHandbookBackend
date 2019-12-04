<?php
include 'connection.php';
$id=$_GET['id'];
$sql = "SELECT lecturer.id as id,lecturer.nip as nip, lecturer.nidn as nidn, lecturer.name as name, lecturer.email as email,lecturer.phone as phone, lecturer.photo as photo, lecturer.gender as gender, prodi.name as prodi_name from lecturer inner join lecture_prodi on lecturer.id = lecture_prodi.id_dosen join prodi on lecture_prodi.id_prodi = prodi.id where lecture_prodi.id_prodi=$id ";
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