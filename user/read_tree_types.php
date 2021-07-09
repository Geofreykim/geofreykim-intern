<<?php 
require('nema.php');

$results = $sql_connection->query("SELECT ID, TYPE_NAME FROM tree_types ORDER BY ID ASC");

foreach ($results as $key => $value) {
    $id = $value["ID"];
    $name = $value["TYPE_NAME"];

    echo "
    <tr>

    <td> $id </td>
    <td> $name </td>
    </tr>
    ";
}
 
