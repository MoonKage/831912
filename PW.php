<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Atividade 01 - 831.912</title>
</head>
<body>
	<!DOCTYPE html>
		<div class="formulario" >
			<form name="formulario" method="post">
				<h1>Atividade 01 - 831.912</h1>
				<label for = "cod1" id = "cod1"> 
					<h4>Codigo do aluno:</h4>
				</label>
				<input name = "cod2" placeholder = "Digite o Codigo" type = "number"><br>

				<label for = "name1">
					<h4>Informe o nome do arquivo:</h4>
				</label>

				<input name = "name2" placeholder = "Digite o Nome do Arquivo" type = "text"><br>
				<label for = "text1">
					<h4>Informe um texto:</h4>
				</label>

				<textarea id = "but" placeholde = "Digite seu Texto" cols = "100" rows = "5"></textarea><br>
				<button name = "botao" type = "submit" onclick = "<?php Documento();?>">
					<h4>Clique Para Gerar o Arquivo</h4>
				</button>
			</form>
		</div>
		<?php
		function Documento() {
			$arquivo = fopen("archive.txt","a");
			$file = fopen("diretorio.txt", "a");
			if ($file == false) die ("Pasta não gerada");
			if ($arquivo == false) die ("Arquivo não gerado.");
			Folder();
			$text = fgets($_POST["but"]);
			fwrite($arquivo, $text);
			fclose($arquivo);
		}
		function Folder() {
			$file = fopen("diretorio.txt", "a") or die("Pasta não gerada");
			echo fputs($file, $_POST["but"]);
			fclose($file);
		}
		?>
	
	</body>
</html>