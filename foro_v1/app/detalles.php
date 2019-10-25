<?php
	function detallar() {
		$contenido="";
		$numeropalabras = str_word_count($_POST['txtasunto']);
		$longtxt = strlen($_POST['txtasunto']);
		$arraypalabras = explode(" ",$_POST['txtasunto']);
		$palMasRepetida = $arraypalabras[0];
		$long = count($arraypalabras);
		$cont1 = 0;
		$contmax = 0;
		
		//----------------Para sacar la palabra más repetida----------------------
		for( $i = 0 ; $i < $long ; $i++) {
			$masTemporal = $arraypalabras[$i];
			for ($j = $i ; $j <  $long ; $j++) {
				if ($masTemporal == $arraypalabras[$j]) {
					$cont1++;
				}
			}
			if ($cont1 > $contmax) {
				$contmax = $cont1;
				$palMasRepetida = $masTemporal;
			}	
			$cont1 = 0;		
		}
		
		//----------------Para sacar la letra más repetida----------------------
		$letra = "";
		$maximo = 0;
		$texto = $_POST['txtasunto'];
		$abecedario = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','ñ','o','p','q','r','s','t','u','v','w','x','y','z'];				
		for($i = 0; $i < count($abecedario); $i++){
			if(substr_count($texto, $abecedario[$i])>$maximo){
					$maximo = $maximo + substr_count($texto, $abecedario[$i]);
					$letra =  $abecedario[$i];
				}
		}
		
		
		echo "Detalles:";
		$contenido = "<table border = '1px'>
						<tr>
							<td>Longitud del texto(en caracteres):</td>
							<td>$longtxt</td>
						</tr>
						<tr>
							<td>Numero de palabras:</td> 
							<td>$numeropalabras</td>
						</tr>
						<tr>
							<td>La letra más repetida es:</td>
							<td>$letra con $maximo repetidos.</td>
						</tr>
						<tr>
							<td>Palabra mas repetida : </td>
							<td>La palabra que más se repite es $palMasRepetida con $contmax repetidos.</td>
						</tr>
						<br>"
						;
						
		return $contenido;
	}
	echo detallar();

?>