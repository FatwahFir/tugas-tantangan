<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate URL</title>
</head>
<body>
<!--  todo    -->
</body>
</html>

<?php
    $jumlahYangDiinginkan = 1000;
    $file = fopen('url.txt', 'a');
    for($i = 1; $i<=$jumlahYangDiinginkan; $i++){
        fwrite($file,"toko-proyek.org/upload/gambar/".$i.".jpg"."\n");
    }
    fclose($file);
    echo "file TXT berhasil di-generate";
?>
