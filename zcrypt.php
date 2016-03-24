function zCrypt($string){
			$alfabeto = 256;
			$tamanho = 4;
			$fora = 32;

			$crypt = '';
			$decrypt = '';

			for($i = 0; $i < strlen($string); $i++){
				$cod = ord($string[$i]);
				$novocod = $cod + $tamanho;
				$novocod = $novocod % $alfabeto;
				if($novocod >= 0 && $novocod < $fora){
					$crypt += $fora;
				}
				$crypt .= chr($novocod);
			}
			echo "iTmZxB0T ~> Crypt Hash: ". $crypt . "</br>";
		}
		function zDecrypt($hash){
			$alfabeto = 256;
			$tamanho = 4;
			$fora = 32;

			$crypt = '';
			$decrypt = '';
			for($i = 0; $i < strlen($hash); $i++){
				$key = ord($hash[$i]);
				$novoCod = $key - $tamanho;

				if($novoCod >= 0 && $novoCod < $fora){
					$decrypt -= $fora;
				}
				if($novoCod < 0){
					$novoCod = $alfabeto + $novoCod;
				}
				$decrypt .= chr($novoCod);
			}
			echo "iTmZxB0T ~> Decrypt Hash: ".$decrypt."</br>";
		}
