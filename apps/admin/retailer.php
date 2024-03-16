<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>All Retails</h2>
        <div class="block">        
            <table class="data display datatable" id="example">
            <thead>
                <tr>
                    <th>Serial No.</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Pincode</th>
                    <th>Certificate</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
				<?php 
					 $query = "select * from tbl_customer";
             		 $msg = $db->select($query);
					 $i = 0;
					 while ($result = $msg->fetch_assoc()) 
					 {
						$i++;
					?>
                    	<tr class="odd gradeX">
							<td><?php echo $i;?></td>
                            <td><?php echo $result['name'];?></td>
                            <td><?php echo $result['phone'];?></td>
                            <td><?php echo $result['email'];?></td>
                            <td><?php echo $result['address'];?></td>
                            <td><?php echo $result['zip'];?></td>  
                            <td><a href="../shops/cert/<?php echo $result['photo'];?>" download target="_blank">Download</a></td>  
                               <td><a onclick="return confirm('Are you sure to delete!')" href="del_retailer.php?id=<?php echo $result['id'];?>">Delete</a></td>                          
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

  

 <?php include 'inc/footer.php'; ?>
