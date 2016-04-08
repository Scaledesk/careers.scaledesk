<?php
/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 3/19/2016
 * Time: 11:32 AM
 */
?>
<div class="container" style="padding-top:70px; ">

    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
<form role="form" action="<?php echo base_url().'admin/jobs'; ?>" method="post">
    <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" name="title" class="form-control" id="title">
    </div>
    <div class="form-group">
        <label for="description">Description:</label>
        <!--<input type="text" name="description" class="form-control" id="description">-->

        <textarea name="description" rows="6" class="form-control" ></textarea>
    </div>
    <div class="form-group">
        <label for="location">Location:</label>
        <input type="text" name="location" class="form-control" id="location">
    </div><div class="form-group">
        <label for="jobType">Job Type:</label>
        <input type="text" name="jobType" class="form-control" id="jobType">
    </div><div class="form-group">
        <label for="education">Education:</label>
        <input type="text" name="education" class="form-control" id="education">
    </div><div class="form-group">
        <label for="experience">Experience:</label>
        <input type="text" name="experience" class="form-control" id="experience">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>
    </div> </div>
</div>