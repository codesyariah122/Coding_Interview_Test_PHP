<!DOCTYPE html>
<html>
<head>
	<title>Soal-1</title>


</head>
<body>

	<fieldset>
	<?php if(!isset($_POST['submit2'])): ?>
		<div id="form1">
			<form action="" method="post">
				<ul>
					<li>
						<label for="baris">Input jumlah baris</label>
						<input type="number" id="baris" name="baris">
					</li>
					<li>
						<label for="kolom">Input jumlah kolom</label>
						<input type="number" name="kolom" id="kolom">
					</li>
					<li>
						<button type="submit" name="submit1">Submit</button>
					</li>
				</ul>
			</form>
		</div>
	<?php endif; ?>

		<div id="form2">
			<form action="" method="post">
				<ul>
					<?php
					if(isset($_POST['submit1'])):
						$baris = $_POST['baris'];
						$kolom = $_POST['kolom'];
						if(!empty($baris) && !empty($kolom)):
					?>
						<table>
						<?php for($i=1; $i <=$baris; $i++):?>
							<tr>
							<?php for($j=1; $j<=$kolom; $j++):?>
								<td>
								<label><?=$i.'.'.$j?>: </label>
								<input type='text' name='input[]'>
								<input type="hidden" value="<?=$i.'.'.$j?>" name="value[]">
								<?php // echo $i.$j; ?>
								</td>
							<?php endfor;?>
						<?php endfor;?>

						</table>
						<button type='submit' name='submit2'>Submit</button>
						<?php else: ?>
							<h1>Anda belum mengisi inputan</h1>
						<?php endif; ?>
					<?php endif;?>
				</ul>
			</form>
		</div>


		<div id="result">
			<?php  if(isset($_POST['submit2'])):?>
				<fieldset>
					<legend>Result Soal-1</legend>
					<?php
						$input = $_POST['input'];
						$val = $_POST['value'];
						// echo count($val);
						if($input <= 1):
							echo "<h1>Anda belum mengisi input kedua</h1>";
						else:
						?>
						<ul>
						<?php for($i = 0; $i < count($input); $i++):?>
							<?php if($input[$i] == ""): ?>
								<h1>Ulangi lagi</h1>
								<a href="soal1.php">Ulangi</a>
								<?php break; ?>
								<?php endif; ?>
							<li><b><?=$val[$i].' : ';?><?=$input[$i]?></b></li>
						<?php endfor;?>
						</ul>
						<?php endif;?>
				</fieldset>
			<?php endif;?>

		</div>

	</fieldset>


	<style type="text/css">
		ul li {
			list-style: none;
		}
		input {
			margin-bottom: 2rem;
			margin-left: .7rem;
		}
		#form1{
			margin-bottom: 5rem;
		}

		#form2{
			display: flex;
			justify-content: center;
		}

		#result{
			margin-top: 7rem;
		}
	</style>



</body>
</html>