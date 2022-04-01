<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Meu Curriculo Online</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Cormorant+SC&display=swap');
		@import url('https://fonts.googleapis.com/css2?family=Coda&family=Cormorant+SC&display=swap');
		body{
			background-image: url(img/image1.jpg);
			size: 30vh;
			background-repeat: no-repeat;
			background-color: #10044c;
			margin: 0 0 0 0px;
		}
		label{
			width: 100px;
			border: 1px;
			text-align: right;
			color:white;
			display: inline-block;
			font-family: 'Cormorant SC';
			font-size: 20px;
		}
		input[type=text]{
			width: 500px;
			border: 1px;
			text-align: left;
			display: inline-block;
		}
		form{
			margin: 0 0 0 50px;
			text-align: left;
		}
		.escolaridade1{
			font-size: 12px;
			text-align:left;
			width: 150px;
			font-family: 'Coda'; 
		}
		#titulo{
			font-family: 'Coda';
			font-style: normal;
			font-weight: 400;
			font-size: 24px;
			line-height: 34px;
			color: black;
			margin: 10px;
			color: white;
		}
		#navbar{
			padding: 5px;
			margin: 0px;
			width: 221,5vh;
			height: 90px;
			top: 15px;
			left: 0px;
			opacity: 78%;
			border-radius: 0 0 15% 15%;
			background: #473B9D;
		}
		h1{
			text-align: center;
			font-family: 'Cormorant SC';
			font-style: normal;
			font-weight: 400;
			font-size: 36px;
			line-height: 44px;
			color: #FFFFFF;
		}
		h2{
			text-align: center;
			color: white;
		}
		h4{
			color: white;
			font-family: 'Cormorant SC';
		}
		ul{
			width: 600px;
			list-style-type: none;
			columns: 3;
			font-size: 1px;
		}
		.b1{
			font-family: 'Coda';
			font-style: normal;
			font-weight: 400;
			margin: 0 0 0 10px;
			font-size: 24px;
			line-height: 34px;
			color: red;
			width: 40px;
			display: inline-block;
			text-align: center;		
		}
		textarea{
			margin: 10px;
			width: 650px;
			height: 200px;
		}
		button{
			width: 316px;
			height: 43px;
			left: 221px;
			top: 1684px;
			background: #39124B;
			color: white;
			font-family: 'Coda';
			font-style: normal;
			font-weight: 400;
			font-size: 24px;
			line-height: 34px;
			text-align: center;
			border-color: #39124b;
			margin: 100px 0;

		}
		.n1{
			text-align: center;
			border-color: #39124b;
		}
	</style>
</head>
<body>
	<div id="navbar">
		<h1>Curriculo Online</h1>
	</div>
	<form method="POST" action="curriculo.php">
		<h2 id="titulo">Insira Seus Dados</h2>
		<label for="nome">Nome: </label>
		<input required  type="text" name="nome">
		<b class="b1">*</b>
		<br>
		<label for="idade">Idade: </label>
		<input required type="text" name="idade">
		<b class="b1">*</b>
		<br>
		<label for="endereco">Endereço: </label>
		<input required type="text" name="endereco">
		<b class="b1">*</b>
		<br>
		<label>Escolaridade: </label>
		<b class="b1">*</b>
		<br>
		<ul>
			<li>
				<input required type="radio" value="Analfabeto" name="escolaridade">
				<label for="escolaridade" class="escolaridade1">Analfabeto</label>
			</li>
			<li>
				<input required type="radio" value="Médio - Incompleto" name="escolaridade">
				<label for="escolaridade" class="escolaridade1">Médio - Incompleto</label>
			</li>
			<li>
				<input required type="radio" value="Superior" name="escolaridade">
				<label for="escolaridade" class="escolaridade1">Superior</label>
			</li>
			<li>
				<input required type="radio" value="Fundamental - Incompleto" name="escolaridade">
				<label for="escolaridade" class="escolaridade1">Fundamental - Incompleto</label>
			</li>
			<li>
				<input required type="radio" value="Médio" name="escolaridade">
				<label for="escolaridade" class="escolaridade1">Médio</label>
			</li>
			<li>
				<input required type="radio" value="Pós" name="escolaridade">
				<label for="escolaridade" class="escolaridade1">Pós</label>
			</li>
			<li>
				<input required type="radio" value="Fundamental" name="escolaridade">
				<label for="escolaridade" class="escolaridade1">Fundamental</label>
			</li>
			<li>
				<input required type="radio" value="Superior - Incompleto" name="escolaridade">
				<label for="escolaridade" class="escolaridade1">Superior - Incompleto</label>
			</li>
			<li>
				<input required type="radio" value="Doutorado" name="escolaridade">
				<label for="escolaridade" class="escolaridade1">Doutorado</label>
			</li>
		</ul>
		<label for="objetivo">Objetivo: </label>
		<b class="b1">*</b><br>
		<textarea required name="objetivo" placeholder="Digite Seu Objetivo de Forma Clara e Direta"></textarea>
		<br>
		<label for="experiencia">Experiência: </label>
		<br>
		<textarea name="experiencia" placeholder="Exemplo: Estúdio de Design Tipográfico 
Designer Gráfico Júnior 
• Encarregada de fazer imagens para layouts offline e online. 
• Editei fotos para clientes, revistas e posts de redes sociais. 
• Organização de arquivos."></textarea><br>
		<label for="cursos">Cursos e Certificados: </label>
		<br>
		<textarea placeholder="" name="cursos"></textarea>
		<br>
		<label>Habilidade: </label>
		<br>
		<textarea for="habilidade" placeholder=""></textarea>
		<h2 id="titulo">Contato</h2>
		<label for="email">Email: </label>
		<input required type="email" name="email"><b class="b1">*</b>
		<br>
		<br>
		<label for="telefone">Telefone: </label>
		<input required type="text" name="telefone">
		<b class="b1">*</b>
		<br>
		<br>
		<label for="site">Site: </label>
		<input type="text" name="site">
		<br>
		<br>
		<div class="n1">
			<button>Gerar Currículo</button>
		</div>
	</form>
</body>
</html>