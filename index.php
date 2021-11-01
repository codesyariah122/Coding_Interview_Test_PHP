<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
</head>
<body>

	<fieldset>
		<legend>Form Input</legend>
	<?php if(!isset($_REQUEST['form1']) && !isset($_REQUEST['enter_project'])): ?>
		<!-- form pertama -->
		<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
			<label for="name_project">Nama Project</label>
			<input type="text" name="name_project" id="name">
			<br><br>

			<label for="team">Jumlah Team</label>
			<input type="number" name="jml_team" id="team">
			<br><br>
			<button type="submit" name="form1">Enter</button>
		</form>
	<?php endif; ?>

		<!-- Form 2 -->
		<?php  if(isset($_REQUEST['form1'])):?>
			<ul>
				<li>
					<h3>
						<font color="tomato">
							<strong>Nama Project : <?=$_REQUEST['name_project'] ?></strong>
						</font>
					</h3>
				</li>
				<li>
					<h4>
						<font color="green">
							<strong>
								Jumlah Team : <?=$_REQUEST['jml_team'] ?>
							</strong>
						</font>
					</h4>
				</li>
				<li>
					<?php require_once('form_payout.php'); ?>
				</li>
			</ul>
		<?php endif; ?>
	</fieldset>

	<fieldset>
		<legend>Hasil Project & Pembayaran Bonus</legend>
		<?php if(isset($_REQUEST['enter_project'])): ?>

		<?php
			$jumlah = $_REQUEST['pembayaran'];
			$total_team = $_REQUEST['name'];
			$percentage = floor(100 / count($total_team));
			$pembayaran = ($jumlah / count($total_team));
			$check = (floor(100 / count($total_team) + 1) * count($total_team) == 100 ) ? 'Pembagian : '. $percentage.'%' : 'Sepertinya pembagian belum merata';

			echo $check;
		?>

		<h1>Jumlah Pembayaran Project :
			<strong>
				Rp. <?=$jumlah ?>
			</strong>
		</h1>

		<?php for($i=0; $i <= count($total_team)-1; $i++):?>
			<ul style="list-style:none;text-transform: capitalize;">
				<li>
					Nama : <strong>
						<?=$total_team[$i] ?>
					</strong>
				</li>
				<li>
					Bonus : <strong>
						<?=$percentage ?>%
					</strong>
				</li>
				<li>
					Pembayaran : <strong>
						Rp. <?=number_format(floor($pembayaran), 2) ?>
					</strong>
				</li>
			</ul>
		<?php endfor; ?>

	<?php endif; ?>
	</fieldset>

</body>
</html>