<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta | Deye </title>
    <link rel="shortcut icon" href="../imgs/logodeyefundo.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/garantiaConsultada.css">
    <link rel="stylesheet" href="../css/all.css">
    
<body>

<?php



    include_once('config-main.php');

  //  $name = $_GET['name'];



// restante do código para inserir no banco de dados

    
$opening_case_date = date("d/m/Y");


$snEspecifico = $_GET['sn-consult'];


$result = mysqli_query($conexao, "SELECT * FROM garantias WHERE 
CASENUMBER LIKE '%$snEspecifico%' OR
PRIORITY LIKE '%$snEspecifico%' OR
NAME LIKE '%$snEspecifico%' OR
STATUS LIKE '%$snEspecifico%' OR
REPLACEORFIX LIKE '%$snEspecifico%' OR
CASEORIGIN LIKE '%$snEspecifico%' OR
RESPONSIBLEENGINEER LIKE '%$snEspecifico%' OR
DISTRIBUTOR LIKE '%$snEspecifico%' OR
MODEL LIKE '%$snEspecifico%' OR
SN LIKE '%$snEspecifico%' OR
FAULT LIKE '%$snEspecifico%' OR
COMMENTS LIKE '%$snEspecifico%' OR
OPENINGCASEDATE LIKE '%$snEspecifico%' OR
FREIGHTPAYER LIKE '%$snEspecifico%' OR
REASONTODISAPPROVE LIKE '%$snEspecifico%' OR
APPROVALDATE LIKE '%$snEspecifico%' OR
APPROVAL LIKE '%$snEspecifico%' OR
DAYSENDBYCUSTOMER LIKE '%$snEspecifico%' OR
INVOICE LIKE '%$snEspecifico%' OR
SENTBACKUP LIKE '%$snEspecifico%' OR
CUSTOMERRETURNDATE LIKE '%$snEspecifico%' OR
RETURNINVOICE LIKE '%$snEspecifico%' OR
TRACKING LIKE '%$snEspecifico%' OR
SEPARATED LIKE '%$snEspecifico%' OR
DATEOFSEPARATIONREQUEST LIKE '%$snEspecifico%' OR
RECEIVINGDATE LIKE '%$snEspecifico%' OR
REPAIRTECHNICIAN LIKE '%$snEspecifico%' OR
REPAIRED LIKE '%$snEspecifico%' OR
REPAIRDATE LIKE '%$snEspecifico%' OR
WAITINGBOARD LIKE '%$snEspecifico%' OR
LIMITCASEDATE LIKE '%$snEspecifico%' OR
MISSINGDAYS LIKE '%$snEspecifico%' OR
controlformaintenance LIKE '%$snEspecifico%' OR
testes LIKE '%$snEspecifico%'"


         );
         if ($result->num_rows > 0) {
            echo '<table class="result-consult-table">';
            echo '<tr>';
            echo ' <tr> <th>PASTA </th>';
            echo ' <th>Case Number</th> ';
            echo '<th>Priority</th>';
            echo '<th>Name</th>';
            echo '<th>Status</th>';
            echo '<th>Replace/Fix</th>';
            echo '<th>Case Origin</th>';
            echo '<th>Responsible Engineer</th>';
            echo '<th>Distributor</th>';
            echo '<th>Model</th>';
            echo '<th>SN <br>  </th>  '; 
            echo '<th>Fault</th>';
            echo '<th>Comments</th>';
            echo '<th>Opening Case Date</th>';
            echo '<th>Freight Payer</th>';
            echo '<th>Reason to Disapprove</th>';
            echo '<th>Approval Date</th>';
            echo '<th>Approval</th>';
            echo '<th>Days Sent by Customer</th>';
            echo '<th>Invoice</th>';
            echo '<th>Sent Backup</th>';
            echo '<th>Customer Return Date</th>';
            echo '<th>Return Invoice</th>';
            echo '<th>Tracking</th>';
            echo '<th>Separated</th>';
            echo '<th>Date of Separation Request</th>';
            echo '<th>Receiving Date</th>';
            echo '<th>Repair Technician</th>';
            echo '<th>Repaired</th>';
            echo '<th>Repair Date</th>';
            echo '<th>Waiting Board</th>';
            echo '<th>Limit Case Date</th>';
            echo '<th>Missing Days</th>';
            echo '<th>Control for Maintenance</th>';

            echo '</tr>';
        
            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td><a target="_blank" href="' . $row["testes"] . '">PASTA</a></td>';


                echo '<td>' . $row["CASENUMBER"] . '</td>';
                echo '<td>' . $row["PRIORITY"] . '</td>';
                echo '<td>' . $row["NAME"] . '</td>';
                echo '<td>' . $row["STATUS"] . '</td>';
                echo '<td>' . $row["REPLACEORFIX"] . '</td>';
                echo '<td>' . $row["CASEORIGIN"] . '</td>';
                echo '<td>' . $row["RESPONSIBLEENGINEER"] . '</td>';
                echo '<td>' . $row["DISTRIBUTOR"] . '</td>';
                echo '<td>' . $row["MODEL"] . '</td>';
                echo '<td>' . $row["SN"] . '</td>';
                echo '<td>' . $row["FAULT"] . '</td>';
                echo '<td>' . $row["COMMENTS"] . '</td>';
                echo '<td>' . $row["OPENINGCASEDATE"] . '</td>';
                echo '<td>' . $row["FREIGHTPAYER"] . '</td>';
                echo '<td>' . $row["REASONTODISAPPROVE"] . '</td>';
                echo '<td>' . $row["APPROVALDATE"] . '</td>';
                echo '<td>' . $row["APPROVAL"] . '</td>';
                echo '<td>' . $row["DAYSENDBYCUSTOMER"] . '</td>';
                echo '<td>' . $row["INVOICE"] . '</td>';
                echo '<td>' . $row["SENTBACKUP"] . '</td>';
                echo '<td>' . $row["CUSTOMERRETURNDATE"] . '</td>';
                echo '<td>' . $row["RETURNINVOICE"] . '</td>';
                echo '<td>' . $row["TRACKING"] . '</td>';
                echo '<td>' . $row["SEPARATED"] . '</td>';
                echo '<td>' . $row["DATEOFSEPARATIONREQUEST"] . '</td>';
                echo '<td>' . $row["RECEIVINGDATE"] . '</td>';
                echo '<td>' . $row["REPAIRTECHNICIAN"] . '</td>';
                echo '<td>' . $row["REPAIRED"] . '</td>';
                echo '<td>' . $row["REPAIRDATE"] . '</td>';
                echo '<td>' . $row["WAITINGBOARD"] . '</td>';
                echo '<td>' . $row["LIMITCASEDATE"] . '</td>';
                echo '<td>' . $row["MISSINGDAYS"] . '</td>';
                echo '<td>' . $row["controlformaintenance"] . '</td>';


                echo '</tr>';
            }
        }
        
        else{
            echo "Nenhum resultado encontrado <br>";
        }
            echo '</table>';
         




    
  //  echo "garantia aberta";
  

  // Utilize os valores obtidos conforme necessário


  
 
  
?>

<a href="../php/consultarGarantia.html"> 
    <button>Voltar</button>
</a>


</body>
</html>