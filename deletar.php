<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir</title>
    <link rel="stylesheet" href="../estilos/style.css">
</head>
<body>

<?php 
include "../conexao.php";

$id = $_GET['id'] ?? '';
$sql = "DELETE FROM `bebidas` WHERE id = $id";

$dados = mysqli_query($conn , $sql);

?>
    <h1>Deletar Bebida</h1>
    <br>
    <h3>Confirme se deseja deletar este produto</h3>
    <form action="excluir_cadastro.php" method="POST">
        <p>
            <input type="hidden" name="nome" required value="<?php echo $linha ['nome']?>">
       
            <input type="hidden" name="quantidade" required value="<?php echo $linha ['quantidade']?>">
       
            <input type="hidden" name="estoque" required value="<?php echo $linha ['estoque']?>">
            
            <input type="hidden" name="data" required value="<?php echo $linha ['data']?>">
        </p>
        
            <section>
                <input id="excluir" type="submit" value="EXCLUIR">
                <input type = "hidden" name = "id" value = "<?php echo $linha ['id']?>">
            </section>
    </form>
</body>
</html>