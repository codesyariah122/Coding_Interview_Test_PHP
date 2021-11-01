<h1><font color="salmon"><?=$data['project_name'] ?></font></h1>
<p>Input team project</p>
<form action="index.php" method="post">
	<label for="payout">Payout</label>
	<input type="number" name="payout" id="payout">
	<br><br><br>
	<?php for($i=1;$i<=$data['jml_team']; $i++): ?>
		<label for="team_name">Team Name</label>
		<input type="text" name="team_name[]" id="team_name">
		<br><br>
	<?php endfor; ?>
	<button type="submit" name="enter_project">ENTER PROJECT</button>
</form>
