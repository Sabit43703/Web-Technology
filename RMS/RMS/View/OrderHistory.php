<?php

$json = file_get_contents('../Model/Orderlist.json');
$array = json_decode($json);
?>
                <a href="PlaceOrder.php">Take Order</a> |
                <a href="OrderHistory.php">Order history</a>

<div>
    <center>
    <table>
        <thead>
        <tr>
            <th>Customer Name</th>
            <th>Item Name</th>
            <th>Quantity</th>
            <th>Price</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($array as $order): ?>
            <tr>
                <td> <?= $order->cname; ?> </td>
                <td> <?= $order->itemname; ?> </td>
                <td> <?= $order->quantity; ?> </td>
                <td> <?= $order->price; ?> </td>
            </tr>
        <?php endforeach;; ?>
        </tbody>
    </table>
    </center>
</div>
<br><br>

<?php include '../View/footer.php' ?>