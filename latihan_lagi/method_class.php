<?php

class Method {
	private $input;

	public function __construct($input)
	{
		$this->input = $input;
	}

	public function Project_Bonus()
	{
		$payout = (int)$this->input['payout'];
		$team = $this->input['team_name'];
		$percentage = floor(100/count($team));
		$check_mod = $percentage % 2;
		if($check_mod == 1){
			$check = (($percentage * count($team) + 1 ) == 100 ) ? 'Pembagian bonus : '.$percentage.'%<br/>' : 'Sepertinya pembagian belum merata';
		}else{
			$check = (($percentage * count($team) ) == 100 ) ? 'Pembagian bonus : '.$percentage.'%<br/>' : 'Sepertinya pembagian belum merata';
		}
		$result = number_format($payout / count($team));
		echo "<p class='percent'>{$check}</p>";
		$i = 0;
		do{
			echo "
				<ul class='payout'>
					<li>
						{$team[$i]} : Rp. {$result}
					</li>
				</ul>
			";
			$i++;
		}while($i < count($team));
	}
}