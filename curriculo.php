<?php
if ($_POST) {
    // code...
    $dados = array(
    'nome' => $_POST['nome'],
    'idade' => $_POST['idade'],
    'endereco' => $_POST['endereco'],
    'objetivo' => $_POST['objetivo'],
    'telefone' => $_POST['telefone'],
    'email' => $_POST['email'],
    'escolaridade' => $_POST['escolaridade'],
);
}
$habilidade = (isset($_POST['habilidade'])) ? $_POST['habilidade'] : "";
$cursos = (isset($_POST['cursos'])) ? $_POST['cursos'] : "";
$site = (isset($_POST['site'])) ? $_POST['site'] : "";
$experiencia = (isset($_POST['experiencia'])) ? $_POST['experiencia'] : "";
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Currículo</title>
    <link rel="stylesheet" type="text/css" href="css/modelo1.css">
</head>
<body>
    <main>
        <section class="lateral">
            <h1><?= $dados['nome'];?></h1>
            <h3>Idade: <?= $dados['idade'];?></h3>
            <h3>Escolaridade: <?= $dados['escolaridade'];?></h3>
        </section>
        <section class="principal">
            <h2>Objetivo</h2>            
            <p><?= $dados['objetivo']; ?></p>           
            <h2>Formação</h2>
            <p><?= $cursos; ?></p>
            <h2>Experiência</h2>
            <p><?= $experiencia; ?></p>         
            <h2>Contato</h2>
            <ul class="lista-topicos">
                <li>
                    <div>
                        <h4>Endereço:</h4>
                        <p><?= $dados['endereco']; ?></p>
                    </div>
                </li>
                <li>
                    <div>
                        <div>
                            <h4>Telefone:</h4>
                            <p><?= $dados['telefone']; ?></p>
                        </div>
                    </div>
                </li>
                <li>
                    <div>
                        <div>
                            <h4>Email:</h4>
                            <p><?= $dados['email']; ?></p>
                        </div>
                    </div>
                </li>
                <li>
                    <div>
                        <div>
                            <h4>Site:</h4>
                            <p><?= $site; ?></p>
                        </div>
                    </div>
                </li>
            </ul>
        </section>
    </main>
    <script>
        window.print();
    </script>
</body>
</html>