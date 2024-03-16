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
        <h2>Product List</h2>
        <div class="block"> 
            <table class="data display datatable" id="example">
			<thead>
				<tr>
					<th>SL</th>
					<th>Product Name</th>
					<th>Category</th>
					<th>Brand</th>
					<th>Description</th>
					<th>Price</th>
					<th>Image</th>
					<th>Type</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
            <?php
				$result = $db->prepare("select * from  tbl_product where suplr='$suplr'");
				$result->execute();
				for($i=1; $row = $result->fetch(); $i++)
					{
					$productId = $row['productId'];
					echo"<tr>";						
						echo"<td>".$i."</td>";
						echo"<td>".$row["productName"]."</td>";
						echo"<td>".$row["catId"]."</td>";
						echo"<td>".$row["brandId"]."</td>";	
						echo"<td>".substr($row["body"],0,50)."</td>";	
						echo"<td>".$row["price"]."</td>";	
						?>
                        <td>
                        	<img src="../admin/<?php echo $row["image"];?>" width="30" height="30" style="border-radius:100px;">
                        </td>
                        <?php
						echo"<td>".$row["type"]."</td>";	
						?>
                         <td>
                       		 <a href="productedit.php<?php echo '?productId='.$productId; ?>" class=" btn btn-sm btn-info">&nbsp;Edit</a>
                        </td>
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
