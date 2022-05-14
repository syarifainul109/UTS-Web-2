<?php
    if(isset($_POST['simpan'])) {
        
        $fileName = 'db.html';
        
        $file = fopen($fileName, "w");
        
        $content = '
        <center>
            <h1>Data Pemantauan Covid19 Wilayah '.$_POST['wilayah'].'</h1>
            <h2>Per '.date('d M Y H:i:s').'</h2>
            <h3>'.$_POST['nama'].' / '.$_POST['nim'].'</h3>
        </center>
        <table class="table" width="100%" border="1">
            <thead>
                <tr>
                    <th>Positif</th>
                    <th>Dirawat</th>
                    <th>Sembuh</th>
                    <th>Meninggal</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>'.$_POST['positif'].'</td>
                    <td>'.$_POST['dirawat'].'</td>
                    <td>'.$_POST['sembuh'].'</td>
                    <td>'.$_POST['meninggal'].'</td>
                </tr>
            </tbody>
        </table>
        ';
        
        fwrite($file, $content);
        fclose($file);
    }

    header("location: tampil.php");