<?php
include('db_connect/db.php');	
require("auth.php");

	$Log_Id=$_SESSION['SESS_DELIVERY_ID'];
?>	
<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>
<div class="grid_10">
    <div class="box round first grid">   
        <div class="block">        
            <table class="data display datatable" id="example">
            <thead>
                <tr>
                    <th>Serial No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Message</th>
                    <th>Date</th>
                    <th>Reply</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
		   <?php
				$result = $db->prepare("select * from  tbl_message where Log_Id='$Log_Id'");
				$result->execute();
				for($i=1; $row = $result->fetch(); $i++)
					{
					echo"<tr>";						
						echo"<td>".$i."</td>";
						echo"<td>".$row["name"]."</td>";
						echo"<td>".$row["email"]."</td>";
						echo"<td>".$row["phone"]."</td>";	
						echo"<td>".$row["msge"]."</td>";	
						echo"<td>".$row["date"]."</td>";	
						echo"<td>".$row["reply"]."</td>";
						echo"<td>".$row["rdate"]."</td>";	
						echo"</tr>";										
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

  

 <?php include 'inc/footer.php'; ?>
