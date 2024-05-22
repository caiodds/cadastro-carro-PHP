<?php
include("config.php");
$sql = "SELECT * FROM carros";
    $res = $con->query($sql);
    $qtd = $res->num_rows;
    if ($qtd > 0) {
            print "<table class='table table-hover table-striped table-bordered' >";
            print"<tr>";
            print"<th>Id</th>";
            print"<th>Modelos</th>";
            print"<th>placa</th>";
            print"</tr>";
        while ($row = $res->fetch_object()) {
            print"<tr>";
            print"<td>".$row->id."</td>";
            print"<td>".$row->modelo."</td>";
            print"<td>".$row->placa."</td>";
            print"<td>
            </td>";
            print"</tr>";
        }
        print"</table>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Veiculos Cadastrados</title>
</head>
<body>

</body>
</html>