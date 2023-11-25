
<!DOCTYPE html>
<html>
<head>
	<title>Order Page</title>
</head>
<body>
	<form method="POST" action="../Controller/TakeOrderAction.php">
    <table  width="500px">
	    <tr>
            <td>
                <table width="500px">
                    <tr>
						<td align="Left">
                <h3><b>Take Order</b></h3>
            </td>
            <td align="Right">
                <a href="../Controller/TakeOrderAction">Take Order</a> |
                <a href="OrderHistory.php">Show All Order</a>
            </td>
                    </tr>
                    </table>
            </td>
        </tr>
        
        <tr>
			<h1>Take Food Order Form</h1>
			<table>
			<tr>
					<td>Customer Name</td>
					<td><input type="text" name="cname"> </td>
					
				</tr>

				<tr>
					<td>Itemname</td>
					<td><input type="text" name="itemname"> </td>
					
				</tr>
				
				<tr>
					<td>Quantity</td>
					<td><input type="number" name="quantity"></td>
				</tr>
				
				<tr>
					<td>Price</td>
					<td><input type="text" name="price"></td>
				</tr>

				<tr>
					<td><input type="submit" name="submit" value="Order Confirm"></td>
				</tr>

			</table>
            </td>
        </tr>
       
    </table>

		
	</form>
</body>
</html>
<?php include '../View/footer.php' ?>