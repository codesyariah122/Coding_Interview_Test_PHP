<h1>Form Pembayaran</h1>
<form action="index.php" method="POST">
	<?php $jml_team = $_REQUEST['jml_team'];?>
	<label for="pembayaran">Jumlah Pembayaran</label>
	<input type="number" name="pembayaran" id="pembayaran">
	<br><br>
	<?php for($i = 1; $i <= $jml_team; $i++):?>
	<!-- add team to project -->
	<label for="name-<?=$i ?>">Nama Team <?=$i; ?></label>
	<input type="text" name="name[]" id="name-<?=$i?>">
	<br><br>
	<?php endfor; ?>
	<button type="submit" name="enter_project">Enter</button>
</form>

