<?php require_once(dirname(__FILE__).'./method_class.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Hallo World</title>

	<style type="text/css">
		details{
			cursor: pointer;
		}
		.percent{
			font-size: 21px;
			color:#fff;
			background: tomato;
		}
		.payout li{
			font-size: 21px;
			list-style: none;
		}
	</style>
</head>
<body>

<fieldset>
	<legend>PHP NATIVE CODE</legend>
	<h1>Basic OOP</h1>
	<p>Create form request bonus project</p>
	<?php if(!isset($_REQUEST['enter_project'])): ?>
		<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
			<label for="project_name">Project Name</label>
			<input type="text" name="project_name" id="project_name">
			<br><br>
			<label for="jml_team">Jumlah Team</label>
			<input type="number" name="jml_team" id="jml_team">
			<br><br>
			<button type="submit" name="enter">ENTER</button>
		</form>
	<?php endif; ?>

	<?php
	if(isset($_REQUEST['enter'])):
		if(!empty($_REQUEST['project_name']) && !empty($_REQUEST['jml_team'])):
			$data = [
				'project_name' => $_REQUEST['project_name'],
				'jml_team' => (int)$_REQUEST['jml_team']
			];
	?>

	<?php require_once(dirname(__FILE__).'./form_project.php'); ?>

	<?php endif;endif;?>

</fieldset>

<fieldset>
	<legend>
		<summary>Process Hasil</summary>
	</legend>

	<?php
	if(isset($_REQUEST['enter_project'])){
		if(!empty($_REQUEST['payout']) &&!empty($_REQUEST['team_name'])):
			$MyMethod = new Method($_REQUEST);
			$MyMethod->Project_Bonus();
	?>
	<?php else: ?>

			<h1>Silahkan isi form project terlebih dahulu</h1>

	<?php endif;}?>


</fieldset>


</body>
</html>