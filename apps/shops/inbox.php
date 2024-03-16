<?php
include('db_connect/db.php');	
require("auth.php");

	$Log_Id=$_SESSION['SESS_SHOPS_ID'];
	$result = $db->prepare("select * from  tbl_shops where log_user ='$Log_Id'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
		{						
			$suplr=$row["name"];
		}
?>
<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>

<div class="grid_10">
    <div class="box round first grid">
        <h2>Orders</h2>
     
        <div class="block">        
            <table class="data display datatable" id="example">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Order Date</th>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Cust. ID</th>
                    <th>Address</th>
                    <th>Delivery</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            	<?php
					$result = $db->prepare("select * from  tbl_order where suplr='$suplr' ORDER BY date DESC");
					$result->execute();
					for($i=1; $row = $result->fetch(); $i++)
					{
						$productId = $row['productId'];
					?>
           				<tr class="odd gradeX">
							<td><?php echo $row['id']; ?></td>
							<td><?php echo $row['date']; ?></td>
							<td><?php echo $row['productName']; ?></td>
							<td><?php echo $row['quantity']; ?></td>
							<td>Rs. <?php echo $row['price']; ?></td>
							<td><?php echo $row['cmrId']; ?></td>
							<td><a href="customer.php?custId=<?php echo $row['cmrId']; ?>">View Details</a></td>
                            <td><?php echo $row['dst']; ?></td>
							<?php 

							if ($row['status'] == '0') { ?>
							<td><a href="action/productShifted.php?shiftid=<?php echo $row['id']; ?>">Shifted</a></td>	
							<?php }elseif($row['status'] == '1'){?>
								<td>Pending</td>
							<?php } else{ ?>
								<td><a href="action/delProductShifted.php?delproid=<?php echo $row['id']; ?>">Remove</a></td>
						<?php } ?>
						</tr>
                  <?php
					}
				  ?>
            </tbody>
        </table>
       </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        setupLeftMenu();

        $('.datatable').dataTable();
        setSidebarHeight();
    });
</script>
<?php include 'inc/footer.php';?>
