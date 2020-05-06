<?php
	include "koneksi.php";

	$nim = $_GET['nim'];
	$matkul = $_GET['matkul'];
	$cari = $_GET['cari'];

	if($matkul=="all"){
	    $query = mysqli_query($mysqli, "SELECT * FROM tb_mhs");
	}
	else if($matkul<>"all"){
	    $query = mysqli_query($mysqli, "SELECT * FROM tb_mhs WHERE matkul = '$matkul'");
	}
	?>
	<?php
	include "koneksi.php";
	$no = 1;
	while($data = mysqli_fetch_array($query)){
	?>
	<tr>
	    <td><?php echo $no++; ?></td>
	    <td><?php echo $data['nim']; ?></td>
	    <td><?php echo $data['nama']; ?></td>
	    <td><?php echo $data['matkul']; ?></td>
	    <td><?php echo $data['alamat']; ?></td>
	</tr>
<?php } ?>