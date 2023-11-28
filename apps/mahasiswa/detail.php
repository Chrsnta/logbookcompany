<?php 
    include '../../config/database.php';
    include '../../config/function.php';
    $id_mahasiswa=$_POST["id_mahasiswa"];
    $sql="SELECT * FROM tbl_mahasiswa WHERE id_mahasiswa=$id_mahasiswa LIMIT 1";
    $hasil=mysqli_query($kon,$sql);
    $data = mysqli_fetch_array($hasil); 
?>

<table class="table">
    <tbody>
        <tr>
            <td>Nama Lengkap</td>
            <td width="75%">: <?php echo $data['nama'];?></td>
        </tr>
        <tr>
            <td>ID Karyawan</td>
            <td width="75%">: <?php echo $data['nim'];?></td>
        </tr>
        <tr>
            <td>Departmen</td>
            <td width="75%">: <?php echo $data['universitas'];?></td>
        </tr>
        <tr>
            <td>No Telp</td>
            <td width="75%">: <?php echo $data['no_telp'];?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td width="75%">: <?php echo $data['alamat'];?></td>
        </tr>
    </tbody>
</table>