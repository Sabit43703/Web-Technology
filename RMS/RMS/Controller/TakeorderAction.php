<?php 
 if(isset($_POST["submit"])){

                $current_data = file_get_contents('../Model/Orderlist.json');  
                $array_data = json_decode($current_data, true);
                $extra = array(  
                     'cname'     =>   $_POST["cname"],
                     'itemname'       =>     $_POST["itemname"],
                     'quantity'    =>     $_POST["quantity"], 
                     'price' =>   $_POST["price"]

                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data, JSON_PRETTY_PRINT);  
                if(file_put_contents('../Model/Orderlist.json', $final_data))  
                {  
                     echo $message = "Food Add Successfully";  
                     header("location: ../View/OrderHistory.php");
                }   
           else  
           {  
                $error = 'JSON File not exits';  
           }
        }
 ?>  