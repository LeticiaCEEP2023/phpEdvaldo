<?php
// Aqui vou conectar ao banco de dados 

$hostname ="10.209.67.224"; 
$username ="root"; 
$password ="";
$dbname ="empregados";

$conexao = mysqli_connect($hostname, $username, $password, $dbname) or die("Não foi possível fazer a conexão ao banco de dados.");

?>
<form method = "GET">
    <label>Nome<label><br/>
    <input type = "text" name = "nome" />
    <input type = "submit" value = "Salvar" />
    <br />
</form>
<?php
//aqui vou salvar dados na minha base de dados

//mysqli_select_db($dbnome)

/*vou fazer uma pesquisa no banco de dados
empregados e mostrar os dados*/

$sql = "SELECT nome, id FROM empregado ORDER BY id DESC LIMIT 0,6";

$resultado = mysqli_query($conexao, $sql);

if($resultado){
    while($linha = mysqli_fetch_array($resultado)){
        echo $linha["id"]." - ".$linha["nome"]."<br>";
    }
}
?>