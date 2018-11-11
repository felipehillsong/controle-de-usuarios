<?php
require 'config.php'
?>
<a href="adicionar.php">Adicionar Novo Usuário</a>
<table border="0" width="100%">
<tr>
    <th>Nome</th>
    <th>E-mail</th>
    <th>Ações</th>
</tr>
<?php
$sql = "SELECT * FROM usuarios";
$sql = $pdo->query($sql);
if($sql->rowCount() > 0){
    foreach($sql->fetchAll() as $usuarios){
        echo '<tr>';
        echo '<td>'.$usuarios['nome'].'</td>';
        echo '<td>'.$usuarios['email'].'</td>';
        echo '<td><a href="editar.php?id='.$usuarios['id'].'">Editar</a> - <a href="excluir.php?id='.$usuarios['id'].'">Excluir</a></td>';
        echo '</tr>';
    }
}
?>
</table>