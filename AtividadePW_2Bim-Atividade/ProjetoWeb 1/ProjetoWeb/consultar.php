<?php
require_once $_SERVER['DOCUMENT_ROOT'].'ATIVIDADEPW_2BIM-ATIVIDADE/controller/pessoaController.php'
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tela de Consulta</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Consulta</h2>
        <table class ="table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Celular</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $pessoaController = new PessoaController();
                    $pessoas = $pessoaController->listar();
                    foreach($pessoas as $pessoa){
                ?>
                    <tr>
                        <th><?php echo $pessoa['nome']; ?></th>
                        <th><?php echo $pessoa['telefone']; ?></th>
                        <th><?php echo $pessoa['celular']; ?></th>
                        <th><a href="editar.php?id= <?php echo $pessoa['id']; ?>">editar</a></th>
                    </tr>    
                <?php  } ?> 
            </tbody>
        </table>
    </div>
</body>
</html>