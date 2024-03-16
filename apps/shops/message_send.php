<?php
include('db_connect/db.php');	
require("auth.php");

	$Log_Id=$_SESSION['SESS_SHOPS_ID'];
	$result = $db->prepare("select * from  tbl_shops where log_user ='$Log_Id'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
		{						
			$name=$row["name"];
			$phone=$row["phone"];
			$email=$row["email"];
		}
?>
<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Send Message</h2>
        <div class="block"> 
         <form action="action/message_save.php" method="post" enctype="multipart/form-data">
            <table class="form">
                <tr>
                    <td>
                        <label>Name</label>
                    </td>
                    <td>
                    	 <input type="hidden" name="Log_Id" value="<?php echo $Log_Id;?>" />
                        <input type="text" name="name" value="<?php echo $name;?>" class="medium" readonly />
                    </td>
                </tr>	
                 <tr>
                    <td>
                        <label>Contact No</label>
                    </td>
                    <td>
                        <input type="text" name="phone" value="<?php echo $phone;?>" class="medium" readonly />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Email</label>
                    </td>
                    <td>
                        <input type="email" name="email" value="<?php echo $email;?>" class="medium" readonly />
                    </td>
                </tr>	
                 <tr>
                    <td>
                        <label>Date</label>
                    </td>
                    <td>
                        <input type="text" name="date"  class="medium" value="<?php echo date("d-m-Y");?>" readonly />
                    </td>
                </tr>			
				 <tr>
                    <td style="vertical-align: top; padding-top: 9px;">
                        <label>Message</label>
                    </td>
                    <td>
                        <textarea class="tinymce" name="msge"></textarea>
                    </td>
                </tr>				

				<tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" Value="Send" />
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


