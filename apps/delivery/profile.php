<?php
include('db_connect/db.php');	
require("auth.php");

	$Log_Id=$_SESSION['SESS_DELIVERY_ID'];
	$result = $db->prepare("select * from  tbl_delivery where log_user ='$Log_Id'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
		{						
			$name=$row["name"];
			$address=$row["address"];
			$city=$row["city"];
			$country=$row["country"];
			$zip=$row["zip"];
			$phone=$row["phone"];
			$email=$row["email"];
			$password=$row["password"];
		}
?>
<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Profile Update</h2>
        <div class="block">   
         <form action="action/profile_update.php" method="post" enctype="multipart/form-data">
            <table class="form">
                <tr>
                    <td>
                        <label>Name</label>
                    </td>
                    <td>
                        <input type="hidden" name="Log_Id" value="<?php echo $Log_Id;?>" />
                        <input type="text" name="name" value="<?php echo $name;?>" class="medium" />
                    </td>
                </tr>				
				 <tr>
                    <td style="vertical-align: top; padding-top: 9px;">
                        <label>Address</label>
                    </td>
                    <td>
                        <textarea class="tinymce" name="address">
                            
                            <?php echo $address;?>

                        </textarea>
                    </td>
                </tr>
				<tr>
                    <td>
                        <label>City</label>
                    </td>
                    <td>
                        <input type="text" name="city" class="medium" value="<?php echo $city;?>"/>
                    </td>
                </tr>
            	<tr>
                    <td>
                        <label>State</label>
                    </td>
                    <td>
                        <input type="text" name="country" class="medium" value="<?php echo $country;?>"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Pincode</label>
                    </td>
                    <td>
                        <input type="text" name="zip" class="medium" value="<?php echo $zip;?>"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Contact No</label>
                    </td>
                    <td>
                        <input type="text" name="phone" class="medium" value="<?php echo $phone;?>"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Email</label>
                    </td>
                    <td>
                        <input type="email" name="email" class="medium" value="<?php echo $email;?>"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Password</label>
                    </td>
                    <td>
                        <input type="password" name="password" class="medium" value="<?php echo $password;?>"/>
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


