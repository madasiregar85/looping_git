<?php
$variabel_bulan = array ("Januari",
						 "Februari",
						 "Maret",
						 "April",
						 "Mei",
						 "Juni",
						 "Juli",
						 "Agustus",
						 "September",
						 "Oktober",
						 "Nopember",
						 "Desember");
/*echo "Cetak Nama Bulan ";*/
/*echo $variabel_bulan[2];*/

?>

<select>
<?php foreach ($variabel_bulan as $month) {?>
	<option value="<?php echo $month;?>"><?php echo $month;?> </option>
	<?php } ?>
<select>

<select name="thn"> 
<?php for ($thn=1980; $thn <=date("Y"); $thn++){?>
<option value="<?php echo $thn; ?>"><?php echo $thn; ?> </option> 
<?php } ?> 
</select>


<select> name="tgl"
<?php for ($tgl=1; $tgl <=31; $tgl++) { ?>

<option value="<?php echo $tgl; ?>"><?php echo $tgl; ?></option>

<?php }?>

</select>

<input type="submit" name="submit" value="submit">

</form>

<?php 

if(!empty($_POST['submit'])){

$thn = $_POST['thn'];
$tgl = $_POST['tgl'];

echo $thn;
echo "<br>";
echo $tgl;
}
?>

</body>
</html>