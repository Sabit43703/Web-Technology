
<style>
table, th, td {
  border: 0.5px solid black;
}
</style>

<div>
    <p>
        <a href="Dashboard.php">Back</a>
    </p>
    <center>
    <table>
        <thead>
        <tr>
            <th>Customer_Name</th>
            <th>Item_Name</th>
            <th>Service System</th>
            <th>Payment_Type</th>
            <th>Amount</th>
            <th>Comment</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $json = file_get_contents('../Model/Recordpaymentlist.json');
$a = json_decode($json, true);
if(count($a) != 0){
	foreach ($a as $product) {
        	?>
<tr>
  <td> <?php echo $product['Customer_Name']; ?> </td>
         <td> <?php    echo $product['Item_Name'];?></td>
        <td>  <?php    echo $product['Service System'];?></td>
        <td>  <?php   echo $product['Paymnet_Type'];?></td>
        <td>  <?php    echo $product['Amount'];?></td>
        <td>  <?php    echo $product['Comment'];?></td>

       
    </tr>    
          
        <?php
        }
    }
        ?>
        </tbody>
    </table>
    </center>
</div>

<?php include '../View/footer.php' ?>