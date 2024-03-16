<?php
include('db_connect/db.php');	
require("auth.php");

	$Log_Id=$_SESSION['SESS_SHOPS_ID'];
	$result = $db->prepare("select * from  tbl_shops where log_user ='$Log_Id'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
		{						
			$suplr=$row["name"];
			$address=$row["address"];
			$phone=$row["phone"];
		}
?>
<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Add New Product</h2>
        <div class="block"> 
         <form action="action/product_save.php" method="post" enctype="multipart/form-data">
            <table class="form">
               
                <tr>
                    <td>
                        <label>Name</label>
                    </td>
                    <td>
                        <input type="text" name="productName" placeholder="Enter Product Name..." class="medium" />
                        <input type="hidden" name="suplr" value="<?php echo $suplr;?>"/>
                        <input type="hidden" name="address" value="<?php echo $address;?>"/>
                        <input type="hidden" name="phone" value="<?php echo $phone;?>"/>
                    </td>
                </tr>
				<tr>
                    <td>
                        <label>Category</label>
                    </td>
                    <td>
                        <select id="select" name="catId">
                            <option>Select Category</option>
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
                            <option>Select Brand</option>
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
                        <textarea class="tinymce" name="body"></textarea>
                    </td>
                </tr>
				<tr>
                    <td>
                        <label>Price</label>
                    </td>
                    <td>
                        <input type="text" name="price" placeholder="Enter Price..." class="medium" />
                    </td>
                </tr>
            
                <tr>
                    <td>
                        <label>Upload Image</label>
                    </td>
                    <td>
                        <input type="file" name="image" />
                    </td>
                </tr>
				
				<tr>
                    <td>
                        <label>Product Type</label>
                    </td>
                    <td>
                        <select id="select" name="type">
                            <option>Select Type</option>
                            <option value="0">Featured</option>
                            <option value="1">General</option>
                        </select>
                    </td>
                </tr>

				<tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" Value="Save" />
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


