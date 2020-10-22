<?php
	for($i=1; $i<=20; $i++){
	$nota=rand(1,20);
	
		if($nota<8){
			echo "REPROVADO ";
		}
		elseif ($nota>=8 && $nota<9.4) {
			echo "ADMITIDO no exame ";
		}
		else {
			echo "APROVADO ";
		}
		echo 'A nota do aluno <span style="color:#0000cc">'.$i. '</span> é <span style="color:0000cc">' .$nota. '</span><br>';
	}
?>