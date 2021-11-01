<?php
class Process {
	public $input;

	public function PostProcess($request)
	{
		var_dump($request); die;
	}

	public function Bintang($data){
		$star = (int)$data;
		echo '<h1><font color="tomato">Jumlah : '.$star.'</font></h1>';
		for($i=$star; $i > 0;$i--){
			for($j=$star; $j >= $i; $j--){
				// echo $star.'<br/>';
				echo '*';
			}
			echo '<br/>';
		}
	}
}