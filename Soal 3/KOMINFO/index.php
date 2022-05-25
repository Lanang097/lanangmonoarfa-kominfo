<?php
 $sumber = 'https://d6b6-182-23-95-60.ngrok.io/buku';
 $konten = file_get_contents($sumber);
 $data = json_decode($konten, true);
?>

<!DOCTYPE html>
<html>
<head>
 <title>Menampilkan data json</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" href="../css/style.css">
 <style>
  table {
   width: 100%;
  }
  table tr td {
   padding: 1rem;
  }
 </style>
</head>
<body>
  <div class="card-body">
      <center><h3>Data Buku</h3></center>
  </div>
 <table class="table table-dark table-striped">
  <tr>
   <th>No</th>
   <th>Judul</th>
   <th>Pengarang</th>
   <th>Penerbit</th>
   <th>Tahun</th>
   <th>ISBN</th>
  </tr>
  <?php
   for($a=0; $a < count($data); $a++)
   {
    print "<tr>";
    print "<td>".$a."</td>";
    print "<td>".$data[$a]['judul']."</td>";
    print "<td>".$data[$a]['pengarang']."</td>";
    print "<td>".$data[$a]['penerbit']."</td>";
    print "<td>".$data[$a]['tahun']."</td>";
    print "<td>".$data[$a]['isbn']."</td>";
    print "</tr>";
   }
  ?>
 </table>
</body>
</html>
