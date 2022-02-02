<?php

    session_start();
    require_once 'models/db_connect.php'; 
	include 'order_header.html';
	    if (isset($_POST["add"])){
        if (isset($_SESSION["cart"])){
            $item_array_id = array_column($_SESSION["cart"],"product_id");
            if (!in_array($_GET["id"],$item_array_id)){
                $count = count($_SESSION["cart"]);
                $item_array = array(
                    'product_id' => $_GET["id"],
                    'item_name' => $_POST["hidden_name"],
                    'product_price' => $_POST["hidden_price"],
                    'item_quantity' => $_POST["quantity"],
                );
                $_SESSION["cart"][$count] = $item_array;
                echo '<script>window.location="Cart.php"</script>';
            }else{
                echo '<script>alert("Product is already Added to Cart")</script>';
                echo '<script>window.location="Cart.php"</script>';
            }
        }else{
            $item_array = array(
                'product_id' => $_GET["id"],
                'item_name' => $_POST["hidden_name"],
                'product_price' => $_POST["hidden_price"],
                'item_quantity' => $_POST["quantity"],
            );
            $_SESSION["cart"][0] = $item_array;
        }
    }

    if (isset($_GET["action"])){
        if ($_GET["action"] == "delete"){
            foreach ($_SESSION["cart"] as $keys => $value){
                if ($value["product_id"] == $_GET["id"]){
                    unset($_SESSION["cart"][$keys]);
                    echo '<script>alert("Product has been Removed...!")</script>';
                    echo '<script>window.location="Cart.php"</script>';
                }
            }
        }
    }
	
?>

<html>
    <head>
<title>Food </title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
 <link rel='stylesheet' type='text/css' href='styles/orderstyle.css'>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
</head>
<body>
    <div class="title">
<h3>Feeling hungry!<br>Order here</h3>
</div>
    <div class="container">
        <?php
        $query = "SELECT * from food";
        $result= getResult($query);
        if(mysqli_num_rows($result) > 0 ){
            while($row = mysqli_fetch_array($result))
            {
				?>
                <div class="menu">
               <form method="Post"  action="order.php?action=add&id=<?php echo $row["id"]?>"> 
                <div>

                    <img src="<?php echo $row["fimage"];?>" class="img" width="290" height="270">
                    <h4 class="text-info">Item: <?php echo $row["foodname"]?> </h4>
                    <h4 class="text-info">Price: ৳<?php echo $row["foodprice"]?> </h4> 
                    <h4 class="text-info">Details:<?php echo $row["fdescription"]?> </h4> 
                    <input type="number" name="quantity" min="1" max="10" class="form-control" value="1" style="width:55px">
                    <input type="hidden" name="hidden_name"  value="<?php echo $row["foodname"];?>">
                    <input type="hidden" name="hidden_price"  value="<?php echo $row["foodprice"];?>">
                    <input type="submit" name="add" style="margin-top:5px;" class="btn btn-success" value="Add to cart">
                    </div>
                    </form>
                    </div>
                <?php
                }
        }
        ?>
		<div style="clear: both"></div>
        <h3 class="title2">Shopping Cart Details</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
                <th width="30%">Product Name</th>
                <th width="10%">Quantity</th>
                <th width="13%">Price Details</th>
                <th width="10%">Total Price</th>
                <th width="17%">Remove Item</th>
            </tr>

            <?php
                if(!empty($_SESSION["cart"])){
                    $total = 0;
                    foreach ($_SESSION["cart"] as $key => $value) {
                        ?>
                        <tr>
                            <td><?php echo $value["item_name"]; ?></td>
                            <td><?php echo $value["item_quantity"]; ?></td>
                            <td>$ <?php echo $value["product_price"]; ?></td>
                            <td>
                                $ <?php echo number_format($value["item_quantity"] * $value["product_price"], 2); ?></td>
                            <td><a href="Cart.php?action=delete&id=<?php echo $value["product_id"]; ?>"><span
                                        class="text-danger">Remove Item</span></a></td>

                        </tr>
                        <?php
                        $total = $total + ($value["item_quantity"] * $value["product_price"]);
                    }
                        ?>
                        <tr>
                            <td colspan="3" align="right">Total</td>
                            <th align="right">$ <?php echo number_format($total, 2); ?></th>
                            <td></td>
                        </tr>
                        <?php
                    }
                ?>
        
    </div>
	 
   
    </table>
    </div>
	   </div>
	      </div>
	
</body>
</html>