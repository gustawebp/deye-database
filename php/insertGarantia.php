<?php
include_once('config-main.php');

$opening_case_date = date("d/m/Y");

$priority = $_GET['priority'];
$name = $_GET['name'];
$engineer = $_GET['combo_field'];
$replace_or_fix = $_GET['replace_or_fix'];
$case_origin = $_GET['case_origin'];
$distributor = $_GET['combo_distribuitor'];
$model = $_GET['model_combo'];
$sn = $_GET['sn'];
$fault = $_GET['fault_combo'];
$comments = $_GET['comments'];
$testes = $_GET['testes'];
$status = "WATING FOR APROVAL";
$limitcasedate = date('d/m/Y', strtotime('+30 days'));



$result = mysqli_query($conexao, "INSERT INTO garantias (priority, name, STATUS, REPLACEORFIX, CASEORIGIN, RESPONSIBLEENGINEER, DISTRIBUTOR, MODEL, SN, FAULT, COMMENTS,OPENINGCASEDATE, LIMITCASEDATE, testes) 
VALUES ('$priority', '$name', '$status', '$replace_or_fix', '$case_origin', '$engineer', '$distributor', '$model', '$sn', '$fault', '$comments', '$opening_case_date', '$limitcasedate' , '$testes')");

// Utilize os valores obtidos conforme necessário

// Exemplo de exibição dos valores
echo "PRIORITY: $priority <br>";
echo "NAME: $name <br>";
echo "SELECT AN ENGINEER: $engineer <br>";
echo "REPLACE OR FIX?: $replace_or_fix <br>";
echo "CASE ORIGIN: $case_origin <br>";
echo "SELECT A DISTRIBUITOR: $distributor <br>";
echo "Selecione um modelo: $model <br>";
echo "SN: $sn <br>";
echo "SELECT A FAULT: $fault <br>";
echo "COMMENTS: $comments <br>";
echo "$opening_case_date <br>";
echo '<a href="../dashboard.html"><button>Sair</button></a>';
?>
