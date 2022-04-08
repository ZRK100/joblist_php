<?php include 'inc/header.php'?>

    <br>
    <h2 class="page-header">
         <?php echo(htmlentities($job->job_title));?>
         -
         <?php echo(htmlentities($job->location));?> 
    </h2>
    <small>
        Posted by <?php echo(htmlentities($job->contact_user));?> 
        on <?php echo(htmlentities($job->post_date));?>
    </small>
    <br>
    <p class="lead"> <?php echo(htmlentities($job->description));?> </p>
    <ul class="list-group">
        <li class="list group item">
            <strong>Company:</strong> <?php echo(htmlentities($job->company))?>
        </li>
        <li class="list group item">
            <strong>Salary:</strong> <?php echo(htmlentities($job->salary))?>
        </li>
        <li class="list group item">
            <strong>Contact Email:</strong> <?php echo(htmlentities($job->contact_email))?>
        </li>
    </ul>
    <br><br>
    <a href="index.php"> Go Back </a>
    <br><br>


    <div class="well"> 
        <a  href="edit.php?id=<?php echo $job->job_id; ?>"
            class="btn btn-md btn-success"> 
            Edit 
        </a>

        <form style="display: inline;" method="POST" action="job.php">
            <input type="hidden" name="del_id" value="<?php echo $job->job_id;?>">
            <input type="submit" value="delete" class="btn btn-md btn-danger">
        </form>

 


    </div>





<?php include 'inc/footer.php'?>
