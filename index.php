<html>
<head>
</head>
<body>
    <h2>Form Hitung Luas Bujursangkar dan Volume Kubus Dengan PHP</h2>
    <h3>Isi Data:</h3>
    <form action="./" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Sisi</td>
                <td>:</td>
                <td><input type="text" name="sisi" required ></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="Hitung"></td>
            </tr>
        </table>
    </form>
        <?php
            if(isset($_POST['submit'])){
                $sisi    =$_POST['sisi'];
				
				echo "Diketahui :<br />";
				echo "Sisi = $sisi<br />";
				echo "<br />";
				echo "Diketahui :<br />";
				echo "Luas Bujursangkar<br />";
				echo "Volume Kubus<br />";
				echo "<br />";
				echo "Penyelesaian : <br />";
				
              // menghitung luas bujursangkar
                $luas_bujursangkar=$sisi*$sisi;
				
                echo "Luas bujursangkar<br />";
				echo "Rumus : A = s x s</br>";
				echo "Jawabannya :<br />";
				echo "= [ s x s ]<br />";
				echo "= $sisi x $sisi<br />";
				echo "= $luas_bujursangkar</br>";
				echo "<br />";
				// menghitung volume kubus
				$volume_kubus=$sisi*$sisi*$sisi;
				
				echo "Volume kubus<br />";
				echo "Rumus : V = s x s x s</br>";
				echo "Jawabannya :<br />";
				echo "= [ s x s x s ]<br />";
				echo "= $sisi x $sisi x $sisi<br />";
				echo "= $volume_kubus";
            }
        ?>
<?php  
  
$url = $_SERVER['REQUEST_URI'];  
  
header("Refresh: 15; URL=$url");  
  
?> 

</body>
</html>