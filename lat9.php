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
echo "Cetak Nama Bulan ";
echo $variabel_bulan[2];

?>

<select>
<?php foreach ($variable_bulan as $month) {?>
	<option value="<?php echo $month;?>"<?php echo $month;?> </option>
	<?php } ?>
<select>
	<select> 
<?php for ($thn=1980; $thn <=date("Y"); $thn++){?>
<option value="<?php echo $thn; ?>"><?php echo $thn; ?> </option> 
<?php } ?> 
</select>

</body>
</html>