<?php
	//recebendo os dados do formulário via $_POST
	$emprego = $_POST["emprego"];
	$nome = $_POST["nome"];
	$endereco = $_POST["endereco"];
	$numero = $_POST["numero"];
	$nacionalidade = $_POST["nacionalidade"];
	$naturalidade = $_POST["naturalidade"];
	$data = $_POST["data"];
	$RG = $_POST["RG"];
	$CPF = $_POST["CPF"];
	$estadocivil = $_POST["estadocivil"];
	$vctemfilhos = $_POST["vctemfilhos"];
	$estado = $_POST["estado"];
	$cidade = $_POST["cidade"];
	$sexo = $_POST["sexo"];
	$telefonefixo = $_POST["telefonefixo"];
	$celular = $_POST["celular"];
	$email = $_POST["email"];
	$objetivo = $_POST["objetivo"];
	$formacaoacademicacurso = $_POST["formacaoacademicacurso"];
	$situacaodocurso = $_POST["situacaodocurso"];
	$instituicaoformacaoacad = $_POST["instituicaoformacaoacad"];
	$formacaomesanoinio = $_POST["formacaomesanoinio"];
	$formacaomesanosaida = $_POST["formacaomesanosaida"];
	$empresa = $_POST["empresa"];
	$cargo = $_POST["cargo"];
	$iniciaexp = $_POST["iniciaexp"];
	$situacaodoemprego = $_POST["situacaodoemprego"];
	$saidaaexp = $_POST["saidaaexp"];
	$principaisatividades = $_POST["principaisatividades"];
	$qualificacaocurso = $_POST["qualificacaocurso"];
	$instiuicaoqualificacao = $_POST["instiuicaoqualificacao"];
	$datainicioqualificacao = $_POST["datainicioqualificacao"];
	$qualificacaoprofconcluido = $_POST["qualificacaoprofconcluido"];
	$datafinalqualificacao = $_POST["datafinalqualificacao"];
	$informacaoadicional = $_POST["informacaoadicional"];




	
	//exibir os dados na página de resposta: imprime.php

	echo "<center><h1> $nome</h1></center>";
	echo "
		<center><p>  Tenho $data,  sou $nacionalidade, de $naturalidade <br>
		 Moro em $endereco, $numero, $cidade, $estado, $celular, $email </p>
		 
		</center>

	<br><br>
	<fieldset>
		<legend>
	<h3>OBJETIVO</H3>
		</legend>
	 Meu objetivo na empresa é $objetivo
	</fieldset>
<hr>
	

			<fieldset>
				<legend>
					<h3>FORMAÇÃO ACADÊMICA</h3>
				</legend>
			Curso: $formacaoacademicacurso &nbsp &nbsp &nbsp &nbsp Instituição: 
			$instituicaoformacaoacad <br>
			Início em: $formacaomesanoinio &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Situação atual:$situacaodocurso  &nbsp &nbsp $formacaomesanosaida
			</fieldset>

			<fieldset>
				<legend>
					<h3>EXPERIÊNCIA PROFISSIONAL</h3>
				</legend>
			Empresa: $empresa &nbsp &nbsp &nbsp &nbsp Cargo: 
			$cargo <br>
			Início em: $iniciaexp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Situação atual: 
			$situacaodoemprego  $saidaaexp <br>
			Principais atividades desempenhadas no cargo: $principaisatividades
			</fieldset>

			
			<fieldset>
				<legend>
					<h3>QUALIFICAÇÕES PROFISSIONAIS</h3>
				</legend>
			Curso: $qualificacaocurso &nbsp &nbsp &nbsp &nbsp Instituicao: 
			$instiuicaoqualificacao <br>
			Início em: $datainicioqualificacao &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Situação atual: 
			$qualificacaoprofconcluido  $datafinalqualificacao
			</fieldset>

			<fieldset>
				<legend>
					<h3>INFORMAÇÕES ADICIONAIS</h3>
				</legend>
			$informacaoadicional
			</fieldset>
	";

?>

<!DOCTYPE html>
<html>
<head>
	<title>RESULTADO</title>
	<meta charset="utf-8">
	<script type="text/javascript">
        function print_page() {
            var ButtonControl = document.getElementById("btnprint");
            ButtonControl.style.visibility = "hidden";
            window.print();
        }
    </script>
</head>
<body>
		<br><br><br>
		<div style="text-align: center;">
		 <input type="button" id="btnprint" value="Imprimir Currículo" onclick="print_page()" />
		 </div>
</body>
</html>