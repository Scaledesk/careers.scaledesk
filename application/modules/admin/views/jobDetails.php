<?php
/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 3/19/2016
 * Time: 2:27 PM
 */
?>
<?php
/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 3/19/2016
 * Time: 1:46 PM
 */


?>

<div class="container" style="padding-top:70px; ">

    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">

                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" class="form-control" id="title" value="<?php echo $post[0]['jobs_post_title']; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea name="description" rows="6" class="form-control" readonly ><?php echo $post[0]['jobs_post_description']; ?></textarea>
                   <!-- <input type="text" name="description" class="form-control" id="description" value="<?php /*echo $post[0]['jobs_post_description']; */?>" readonly>-->
                </div>
                <div class="form-group">
                    <label for="location">Location:</label>
                    <input type="text" name="location" class="form-control" id="location" value="<?php echo $post[0]['jobs_post_location']; ?>" readonly>
                </div><div class="form-group">
                    <label for="jobType">Job Type:</label>
                    <input type="text" name="jobType" class="form-control" id="jobType" value="<?php echo $post[0]['jobs_post_jobtype']; ?>" readonly>
                </div><div class="form-group">
                    <label for="education">Education:</label>
                    <input type="text" name="education" class="form-control" id="education" value="<?php echo $post[0]['jobs_post_education']; ?>" readonly>
                </div><div class="form-group">
                    <label for="experience">Experience:</label>
                    <input type="text" name="experience" class="form-control" id="experience" value="<?php echo $post[0]['jobs_post_experience']; ?>" readonly>
                </div>

                <?php /*print_r($post); */?>
                <button type="button" class="btn btn-default"><a onclick="return confirm('Are you sure you want to update Post job ?')" href="<?php echo base_url().'admin/update/'.$post[0]['jobs_post_id']; ?>""> Update</a></button>
            <button type="button" class="btn btn-default"><a onclick="return confirm(' Are you sure you want to Delete post job?')" href="<?php echo base_url().'admin/delete/'.$post[0]['jobs_post_id']; ?>""> Delete</a></button>
        </div> </div>
</div>

