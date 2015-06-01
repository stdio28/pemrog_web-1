<html>

<body>


<?php
$nmie = $_POST['jmie'];
$nm_mie= $_POST['Mie_Goreng'];

$npop_mie = $_POST['jpmie'];

$nshampo = $_POST['jshampo'];
$nsabun = $_POST['jsabun'];



if (isset($_POST['Mie_Goreng']))

{

    echo "".$_POST['Mie_Goreng']."<br>";
    echo "Harga        : Rp " .$harga[0]=(4000 * $nmie);
    echo "<br><p>";
}

if (isset($_POST['Pop_Mie']))
 {  
    echo "".$_POST['Pop_Mie']."<br>";
    echo "Harga        : Rp " .$harga[1]=10000 * $npop_mie;
    echo "<br><p>";
}
if (isset($_POST['Shampo']))
 {  
    echo "".$_POST['Shampo']."<br>";
    echo "Harga        : Rp " .$harga[2]=17000 * $nshampo;
    echo "<br><p>";;
}
if (isset($_POST['Sabun']))
 {  
    echo "".$_POST['Sabun']."<br>";
    echo "Harga        : Rp " .$harga[3]=20000 * $nsabun;
    echo "<br><p>";
}




$jum_bayar=array_sum($harga); 
echo "Total Bayar Anda Sebesar = Rp $jum_bayar <br>";

?>



<table width="463" border="1">
  <tr>
    <td width="31">No</td>
    <td width="43">Barang</td>
    <td width="85">Harga Satuan</td>
    <td width="67">Vol</td>
    <td width="203">Sub Total</td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td> <?php echo "$nm_mie"; ?> </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>

    <td><?php echo "$nm_mie"; ?></td>
  </tr>
  
  
  
</table>

<p>
<p>
<p>
<form id="form1" name="form1" method="" action="index.php">
  <label>
  <input type="submit" name="Back" id="Back" value="Kembali" />
  </label>
</form>
<p>







</body>



</html>