<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Inbox</h2>
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
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
				<?php 
					 $query = "select * from tbl_message";
             		 $msg = $db->select($query);
					 $i = 0;
					 while ($result = $msg->fetch_assoc()) 
					 {
						$i++;
					?>
                    	<tr class="odd gradeX">
							<td><?php echo $i;?></td>
                            <td><?php echo $result['name'];?></td>
                            <td><?php echo $result['email'];?></td>
                            <td><?php echo $result['phone'];?></td>
                            <td><?php echo $result['msge'];?></td>
                            <td><?php echo $result['date'];?></td>
                            <td><?php echo $result['reply'];?></td>
                            <td><?php echo $result['rdate'];?></td>
                        <?php
							if($result['reply']=="")
							{
						?>
                            <td>
                            <a href="message_send.php?msg_id=<?php echo $result['msg_id'];?>" class="btn btn-cart">Send</a>
                            </td>
                          <?php
							}
							else
							{
						  ?>
                          <td>Send</td>
                          <?php
							}
						  ?>
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
