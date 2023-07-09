
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Deye </title>
    <link rel="stylesheet" href="../css/alterarGarantia.css">
    <link rel="stylesheet" href="../css/all.css">
    <link rel="shortcut icon" href="../imgs/logodeyefundo.png" type="image/x-icon">
    <script src="../js/alterarGarantia.js"></script>
</head>
<body>  
<?php
include_once('config-main.php');

$opening_case_date = date("d/m/Y");

$casenumberAlter = $_POST["casenumber-alter"];
$novoValor = $_POST["novo-valor"];
$optAlter = $_POST["opt-alter"];

$result = mysqli_query($conexao, "UPDATE GARANTIAS SET $optAlter = '$novoValor' WHERE casenumber = '$casenumberAlter'");

/* if ($result) {
    echo '<table class="result-consult-table">';
    echo '<tr>';
    echo '<th>PASTA </th>';
    echo '<th>Case Number</th> ';
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
        echo '<td><a href="' . $row["testes"] . '">PASTA</a></td>';
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
        echo '<td>' .$row["REASONTODISAPPROVE"] . '</td>';
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


echo '</table>';
   */

    echo "Linha alterada - Favor Consultar"
?>

    
</body>
</html>