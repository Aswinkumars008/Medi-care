<?php
include('db_connect/db.php');	
require("auth.php");

	$productId=$_GET['productId'];
	$result = $db->prepare("select * from  tbl_product where productId ='$productId'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
		{						
			$productName=$row["productName"];
			$body=$row["body"];
			$price=$row["price"];
			$image=$row["image"];
		}
?>
<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Update Product</h2>
        <div class="block">   
         <form action="action/product_update.php" method="post" enctype="multipart/form-data">
            <table class="form">
               
                <tr>
                    <td>
                        <label>Name</label>
                    </td>
                    <td>
                        <input type="hidden" name="productId"  value="<?php echo $productId;?>"/>
                        <input type="text" name="productName"  value="<?php echo $productName;?>"  class="medium" />
                    </td>
                </tr>
				<tr>
                    <td>
                        <label>Category</label>
                    </td>
                    <td>
                        <select id="select" name="catId">
                            <?php
								$result = $db->prepare("SELECT * from tbl_category");
								$result->execute();
								$row_count =  $result->rowcount();
								for($i=0; $rows = $result->fetch(); $i++)
								{
								?>
                                <option value="<?php echo $rows['catId'];?>"><?php echo $rows['catName'];?></option>
                                <?php
								}
							?>	 
                        </select>
                    </td>
                </tr>
				<tr>
                    <td>
                        <label>Brand</label>
                    </td>
                    <td>
                        <select id="select" name="brandId">
                             <?php
								$result = $db->prepare("SELECT * from tbl_brand");
								$result->execute();
								$row_count =  $result->rowcount();
								for($i=0; $rows = $result->fetch(); $i++)
								{
								?>
                                 <option value="<?php echo $rows['brandId'];?>"><?php echo $rows['brandName'];?></option>
                                <?php
								}
							?>	                          
                        </select>
                    </td>
                </tr>
				
				 <tr>
                    <td style="vertical-align: top; padding-top: 9px;">
                        <label>Description</label>
                    </td>
                    <td>
                        <textarea class="tinymce" name="body">
                            
                            <?php echo $body;?>

                        </textarea>
                    </td>
                </tr>
				<tr>
                    <td>
                        <label>Price</label>
                    </td>
                    <td>
                        <input type="text" name="price" class="medium" value="<?php echo $price;?>"/>
                    </td>
                </tr>
            
                <tr>
                    <td>
                        <label>Upload Image</label>
                    </td>
                    <td>
                         <img src="../admin/<?php echo $image ;?>" height="80px" width="200px" > <br/>
                        <input type="file" name="image" />
                    </td>
                </tr>
				
				<tr>
                    <td>
                        <label>Product Type</label>
                    </td>
                    <td>
                        <select id="select" name="type">
                            <option value="0">Featured</option>
                            <option value="1">General</option>  
                        </select>
                    </td>
                </tr>

				<tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" Value="Update" />
                    </td>
                </tr>
            </table>
            </form>

        </div>
    </div>
</div>
<!-- Load TinyMCE -->
<script src="js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        setupTinyMCE();
        setDatePicker('date-picker');
        $('input[type="checkbox"]').fancybutton();
        $('input[type="radio"]').fancybutton();
    });
</script>
<!-- Load TinyMCE -->
<?php include 'inc/footer.php';?>


