

  <link rel="stylesheet" type="text/css" href="<?php echo asset_url(); ?>admin/assets/css/jquery.dataTables.min.css"/>

<script type="text/javascript" src="<?php echo asset_url(); ?>admin/assets/js/jquery.dataTables.min.js"></script>

  <script> 
 $(document).ready(function() {
    $('.display').DataTable();
} );
  </script>
        <section id="main-content">
          <section class="wrapper">

        
  <div style="overflow: auto; padding: 10px 15px 10px 15px; border:2px solid #bbbbbb; border-radius: 5px; margin: 20px;">

  <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                 <th>Jobs Post Id</th>
                 <th>Title</th>
                <th>Posting Date</th>
                <th>Job Type</th>
                <th>Action</th>

            </tr>
        </thead>
       <!--  <tfoot>
            <tr>
                <th>Service</th>
                <th>Grade</th>
                <th>Length</th>
                <th>Delivery Date</th>
                <th>Date</th>
                <th>Total Price</th>
            </tr>
        </tfoot> -->
     `
        <tbody><?php foreach ($jobs as  $row) {
        ?>
            <tr>
               <td><a href="<?php echo base_url().'admin/jobDetails/'.$row['jobs_post_id']; ?>"><?php echo $row['jobs_post_id']; ?></a></td>
               <td><a href="<?php echo base_url().'admin/jobDetails/'.$row['jobs_post_id']; ?>"><?php echo $row['jobs_post_title']; ?></a></td>

                 <td><?php echo $row['jobs_post_date']; ?></td>

                <td><?php echo $row['jobs_post_jobtype']; ?></td>


                <td> <a onclick="return confirm('Are you sure you want to update Post job ?')" href="<?php echo base_url().'admin/update/'.$row['jobs_post_id']; ?>">Update</a>
                     /<a onclick="return confirm(' Are you sure you want to Delete post job?')" href="<?php echo base_url().'admin/delete/'.$row['jobs_post_id']?>">Delete </a></td>


            </tr>
           <?php } ?>
        </tbody>
    </table>
</div>
</section></section>