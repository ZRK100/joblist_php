<?php include 'inc/header.php'?>

    <br>
    <h2 class="page-header">
       Edit Job Listing 
    </h2>

    <form method="POST" action="edit.php?id=<?php echo $job->job_id ?>">
        <div class="form-group">
            <label> Company </label>
            <input 
                type="text"
                class="form-control" 
                name="company"
                value= "<?php echo $job->company; ?>"
            >
            <label> Categories </label>
                    <select name="category_id" class="form-control">
                    <option value="0"> Choose category </option>
                    <?php foreach($categories as $category): ?>
                        <?php 
                            if($job->category_id == $category->cat_id):  ?>
                                <option value= "<?php echo(htmlentities($category->cat_id))?>" selected>
                                    <?php echo(htmlentities($category->name));  ?>
                                </option>
                        <?php
                            else:  ?>
                                <option value= "<?php echo(htmlentities($category->cat_id)) ?>">
                                    <?php echo(htmlentities($category->name)); ?>
                                 </option
                        <?php endif ?>
                    <?php endforeach; ?>
                </select>

            <label> Job Title  </label>
            <input 
                type="text"
                class="form-control" 
                name="job_title"
                value= "<?php echo $job-> job_title?>"
            >
            <label> Description </label>
            <textarea   
            class="form-control" 
            name="description"
            value= "<?php echo $job->description ?>" >
            </textarea>

            <label> location </label>
            <input 
                type="text"
                class="form-control" 
                name="location"
                value= "<?php echo $job->location ?>"
            >
            <label> Salary </label>
            <input 
                type="text"
                class="form-control" 
                name="salary"
                value= "<?php echo $job->salary ?>"
            >
            <label> Contact User </label>
            <input 
                type="text"
                class="form-control" 
                name="contact_user"
                value= "<?php echo $job->contact_user ?>"
            >
            <label> Contact Email </label>
            <input 
                type="text"
                class="form-control" 
                name="contact_email"
                value= "<?php echo $job->contact_email ?>"
            >
        </div>
        <br>

        <input type="submit" class="btn btn-md btn-success" value="Create" name="submit">

    </form>
    <br>








<?php include 'inc/footer.php'?>
