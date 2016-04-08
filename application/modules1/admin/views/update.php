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
            <form role="form" action="<?php echo base_url().'admin/update/'.$post[0]['jobs_post_id']; ?>" method="post">
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" class="form-control" id="title" value="<?php echo $post[0]['jobs_post_title'] ?>">
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>

                     <textarea name="description" rows="6" class="form-control" ><?php echo $post[0]['jobs_post_description']; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="location">Location:</label>
                    <input type="text" name="location" class="form-control" id="location" value="<?php echo $post[0]['jobs_post_location'] ?>">
                </div><div class="form-group">
                    <label for="jobType">Job Type:</label>
                    <input type="text" name="jobType" class="form-control" id="jobType" value="<?php echo $post[0]['jobs_post_jobtype'] ?>">
                </div><div class="form-group">
                    <label for="education">Education:</label>
                    <input type="text" name="education" class="form-control" id="education" value="<?php echo $post[0]['jobs_post_education'] ?>">
                </div><div class="form-group">
                    <label for="experience">Experience:</label>
                    <input type="text" name="experience" class="form-control" id="experience" value="<?php echo $post[0]['jobs_post_experience'] ?>">
                </div>

                    <?php /*print_r($post); */?>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div> </div>
</div>
