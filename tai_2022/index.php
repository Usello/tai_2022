<?php
    include "./database/bd.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $objBD = new BD();
    $objBD->conn();
    $result = $objBD->select();
    foreach ($result as $item){
        echo "ID".$item['id']." Nome: ".$item['nome'] ."<br>";
    }

    if (!empty($_POST)){
        echo "Salvar";
        var_dump($_POST);
        $objBD->inserir($_POST);
        
    }
?>
<h2>Formulário cliente</h2>
<form action="index.php" method="post">
    <label>Nome</label>
    <input type="text" name="nome"/>

    <label>Telefone</label>
    <input type="text" name="telefone"/>

    <label>CPF</label>
    <input type="text" name="cpf"/>

    <input type="submit" value="Salvar"/>
</form>
</body>
</html>
