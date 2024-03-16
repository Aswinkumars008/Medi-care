<?php
include('db_connect/db.php');	
require("auth.php");

	$Log_Id=$_SESSION['SESS_DELIVERY_ID'];
	$result = $db->prepare("select * from  tbl_delivery where log_user ='$Log_Id'");
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
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
            	<?php
					$result = $db->prepare("select * from  tbl_order where dst='Delivered' ORDER BY date DESC");
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
