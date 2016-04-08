<?php
/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 3/19/2016
 * Time: 11:29 AM
 */?>

<!-- Add your site or application content here -->

<div class="main clearfix" onload="changecss()">
    <form id="nl-form" class="nl-form" action="<?php echo base_url().'Careers/jobApply/' ?>" method="post" enctype="multipart/form-data">
        I'am

        <input type="text" name="users_name" placeholder="You Name"> <!--data-subline="For example: <em>Los Angeles</em> or <em>New York</em>"-->
        <br /> i have


        <select name="exp_years">
            <option value="0" selected>0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>


        </select>  Years
        <select name="exp_months">
            <option value="0" selected>0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="10">11</option>
            </select>
        months of experience,
        i am currently
        <select name="working" id="working" onchange="changecss()">
            <option value="working" selected>working</option>
            <option value="Not Working">Not Working</option>

        </select>
        as
        <input type="text" value="position" placeholder="Position Role" />in
        <input type="text" name="company_name" placeholder="Company Name" />

        <div class="nl-submit-wrap">
            <button class="nl-submit" type="submit">Apply Now</button>
        </div>
        <div class="nl-overlay"></div>

</div>
<!--<input type="file" name="filename">-->

</form>

<script type="text/javascript">
    /*function changecss(){

     document.getElementById('working').value();
     alert(1232134);
     }*/

</script>

