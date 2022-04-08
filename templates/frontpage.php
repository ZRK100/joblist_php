<?php include 'inc/header.php'?>
      
      <div class="jumbotron">
        <h1>Find a Job</h1>
        <form method="GET" action="index.php">
          <select name="category" class="form-control">
              <option value="0"> Choose category </option>

              <?php foreach($categories as $category): ?>
                  <option value= "<?php echo(htmlentities($category->cat_id)) ?>">
                    <?php echo(htmlentities($category->name)); ?>
                </option>
              <?php endforeach; ?>
          </select>
          <br>
          <input type="submit" class="btn btn-md btn-success" value="Find">

        </form>
      </div>

      <h3><?php echo htmlentities($title);?></h3>
  <?php foreach($jobs as $job ): ?>
          <div class="row marketing">
            <div class="col-md-10">
              <h4><?php echo htmlentities($job->job_title); ?></h4>
              <p><?php echo htmlentities($job->description);?></p>
            </div>
            <div class="col-md-2">
              <a class="btn btn-default"  href="job.php?id=<?php echo $job->job_id; ?>"> View </a>
            </div>
          </div>
   <?php endforeach;?>
        
       
        

    <?php include 'inc/footer.php'?>
