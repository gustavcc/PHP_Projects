<?php
require_once("cabecalho.php");
require_once("../actions/listarPessoas.php");
?>
<main>

<section id="section-2">

<h1>Lista de pessoas</h1>

<?php
    if(!isset($listaPessoas)){
        echo "Nenhum registro encontrado.";
    }else{
        echo "<table border='1px'>" . "<tr><th>ID</th><th>Nome</th><th>Email</th><th>Editar</th><th>Excluir</th></tr>";
        foreach($listaPessoas as $pessoa){
            $nome = $pessoa['nome'];
            $id = $pessoa['id_pessoa'];
            $email = $pessoa['email'];
            echo "<tr><td>$id</td><td>{$nome}</td><td>{$email}</td><td>Edit</td><td>Delete</td></tr>";
        }
        echo "</table>";
    }
?>

</section>
</main>
</body>
</html>