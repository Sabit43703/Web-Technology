<?php


$json = file_get_contents('../Model/Review.json');
$array = json_decode($json);
?>
<style>
table, th, td {
  border: 0.5px solid black;
}
</style>

<div>
<br><br><br>
    <h1 style="text-align: center;">Customer Review</h1>
<br><br><br>
    <center>
    <table>
        <thead>
        <tr>
            <th>User Name</th>
            <th>Item Name</th>
            <th>Review</th>
        </tr>
        </thead>
        <tbody>
        <?php
        for ($i = 0; $i < count($array); $i++) {
            echo "<tr>";
            echo "<td>{$array[$i]->Username}</td>";
            echo "<td>{$array[$i]->ItemName}</td>";
            echo "<td>{$array[$i]->CustomerReview}</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
    </center>
</div>

<?php include '../View/footer.php' ?>