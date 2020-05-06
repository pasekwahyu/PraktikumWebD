<!DOCTYPE html>
<?php
include_once("koneksi.php");
?>
<html lang="en">
<head>
    <title>MAHASISWA</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
   <div class="container">
   <h1>MAHASISWA</h1>
   <center>
    <div class="header">
        <table style="border-style:none; margin-left:0px;">
            <tr>
                <td>
                    <select id="nim" class="boxSelect">
                        <option value="asc">Sorting berdasar NIM</option>
                        <option value="asc">Urut Ascending</option>
                        <option value="desc">Urut Descending</option>
                    </select>
                </td>
                <td>
                    <select id="matkul" class="boxSelect">
                        <option value="all">Filter berdasarkan mata kuliah</option>
                        <option value="Analisis Numerik">Analisis Numerik</option>
                        <option value="Basis Data">Basis Data</option>
                        <option value="Bahasa Inggris Dasar">Bahasa Inggris Dasar</option>
                        <option value="Etika">Etika</option>
                        <option value="Matematika Diskrit">Matematika Diskrit</option>
                        <option value="Matematika Diskrit 2">Matematika Diskrit 2</option>
                        <option value="Pengantar AI">Pengantar AI</option>
                    </select>
                </td>    
            </tr>
        </table>
    </div>
    </center>
    <center>
    <td>
         <input type="text" id="cari" name="cari" placeholder="Pencarian...">
    </td>
        <table border="1" cellpadding="8px">
        <thead>
        <tr>
            <th>No.</th>
            <th>NIM</th>
            <th>Nama Mahasiswa</th>
            <th>Mata Kuliah</th>
            <th>Alamat</th>
        </tr>
        </thead>
        <tbody id="table">
            <?php 
            include "koneksi.php";
            $query= mysqli_query($mysqli, "SELECT * FROM tb_mhs") or die(mysql_error());
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
    </tbody>
    </table>
    <a href="home.html"><button class="button">Home</button></a>
</center>
    </div> 
</body>
<script src="jquery.js"></script>
<script>
    $(document).ready(function(){
        $("#cari").keyup(function(){
            var cari = $("#cari").val();
            var nim = $("#nim").val();
            var matkul = $("#matkul").val();
            if(cari !=""){
                $.ajax({
                type:"get",
                url:"search.php",
                data:"cari="+cari+"&nim="+nim+"&matkul="+matkul,
                success: function(data){
                    $("#table").html(data);
                }
                });
            }
            else{
                $.ajax({
                url:"search.php",
                data:"cari="+cari+"&nim="+nim+"&matkul="+matkul,
                cache:false,
                success: function(msg){
                    $("#table").html(msg);
                }
                }); 
            }
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#matkul").change(function(){
            var cari = $("#cari").val();
            var nim = $("#nim").val();
            var matkul = $("#matkul").val();
            $.ajax({
                type:"get",
                url:"filter.php",
                data:"cari="+cari+"&nim="+nim+"&matkul="+matkul,
                success: function(data){
                    $("#table").html(data);
                }
            })
        })
    })
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#nim").change(function(){
            var cari = $("#cari").val();
            var nim = $("#nim").val();
            var matkul = $("#matkul").val();
            $.ajax({
                type:"get",
                url:"Nim.php",
                data:"cari="+cari+"&nim="+nim+"&matkul="+matkul,
                success: function(data){
                    $("#table").html(data);
                }
            })
        })
    })
</script>
</html>