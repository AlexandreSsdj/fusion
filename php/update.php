<?php

$id = intval($_REQUEST['id']);
$matricula = $_REQUEST['matricula'];
$nomecompleto = $_REQUEST['nomecompleto'];
$telefone = $_REQUEST['telefone'];
//$ativo = $_REQUEST['ativo'];
$dataadimissao = $_REQUEST['dataadimissao'];
$tipocontrato = $_REQUEST['tipocontrato'];

include 'conn.php';

$ativo = 1;
$dataadimissao = explode("/", $dataadimissao);
$dataadimissao = $dataadimissao[2]."/".$dataadimissao[0]."/".$dataadimissao[1];

$sql = "update motorista set matricula='$matricula',nomecompleto='$nomecompleto',telefone='$telefone',ativo='$ativo',dataadimissao='$dataadimissao',tipocontrato='$tipocontrato' where id=$id";
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array('success'=>true));
} else {
	echo json_encode(array('msg'=>'Erro ao atualizar dados.'));
}
?>