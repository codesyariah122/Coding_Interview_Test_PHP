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
				$jumlah = $_REQUEST['jumlah'];
				if(empty($jumlah)):
			?>

			<h1>
				<font color="firebrick">Silahkan Memasukan Jumlah Bintang</font>
			</h1>

			<?php else: ?>
				<h4>
					<font color="tomato">
						Jumlah Bintang : <?=$jumlah ?>
					</font>
				</h4>
				<?php
					$star = $jumlah;
					for($a=$star; $a > 0; $a--):
						for($b=$star; $b >= $a; $b--):
							echo "*";
						endfor;
						echo "<br/>";
					endfor;
				?>

			<?php endif; ?>

		<?php endif; ?>
	</fieldset>

</body>
</html>