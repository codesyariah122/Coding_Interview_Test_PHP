<?php require_once 'process.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
</head>
<body>

	<fieldset>
		<legend>Form Input</legend>

		<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
			<label for="jumlah">
				Masukan Jumlah Bintang
			</label>
			<input type="number" name="jumlah" autofocus="on">

			<br>

			<button type="submit" name="enter">ENTER</button>
		</form>

	</fieldset>

	<fieldset>
		<legend>Hasil Bintang</legend>

		<?php if(isset($_REQUEST['enter'])): ?>

			<?php
			if(!empty($_REQUEST['jumlah'])):
				$star = $_REQUEST['jumlah'];
				$Bintang = new Process;
				$Bintang->Bintang($star);
			endif;
			?>

		<?php endif; ?>
	</fieldset>

</body>
</html>