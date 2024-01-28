<?php

$localName ='localhost';
$usuarioName = 'root';
$senha = '';
$database = 'test';

$conexao = new mysqli($localName, $usuarioName, $senha, $database);

if($conexao -> errno){
    die("falha na conexão com o banco de dados".$mysqli -> errno);
}/*$conexao = new mysqli ("localhost", "root", "", "resistro");
$insere = "INSERT INTO alunos (nome, endereço, turma, turno)
Values  ('Glaucio', 'Av. das Américas', '1101', 'manhã')";
$insere1 = "INSERT INTO alunos (nome, endereço, turma, turno)
Values ( 'Alexandre', 'Av. das Américas', '1101', 'tarde')";
$insere2 = "INSERT INTO alunos (nome, endereço, turma, turno)
Values ( 'Lucinaldo', 'Av. das Américas', '1101', 'tarde')";
$sql_query = ($insere) or die ("Não foi possível executar a inserção.");
$sql_query = ($insere1) or die ("Não foi possível executar a inserção.");
$sql_query = ($insere2) or die ("Não foi possível executar a inserção.");
$delete = "DELETE * FROM alunos WHERE turno = 'tarde'";


$sql_query = ($delete);
echo (" todos os alunos do turno da tarde foram excluídos.");

*/?>