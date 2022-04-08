<?php include 'inc/header.php'?>

    <br>
    <h2 class="page-header">
        Create a Job Listing 
    </h2>

    <form method="POST" action="create.php">
        <div class="form-group">
            <label> Company </label>
            <input 
                type="text"
                class="form-control" 
                name="company"
            >
            <label> Categories </label>
                    <select name="category_id" class="form-control">
                    <option value="0"> Choose category </option>
                    <?php foreach($categories as $category): ?>
                        <option value= "<?php echo(htmlentities($category->cat_id)) ?>">
                            <?php echo(htmlentities($category->name)); ?>
                        </option>
                    <?php endforeach; ?>
                </select>

            <label> Job Title  </label>
            <input 
                type="text"
                class="form-control" 
                name="job_title"
            >
            <label> Description </label>
            <textarea   
            class="form-control" 
            name="description">
              
            </textarea>

            <label> location </label>
            <input 
                type="text"
                class="form-control" 
                name="location"
            >
            <label> Salary </label>
            <input 
                type="text"
                class="form-control" 
                name="salary"
            >
            <label> Contact User </label>
            <input 
                type="text"
                class="form-control" 
                name="contact_user"
            >
            <label> Contact Email </label>
            <input 
                type="text"
                class="form-control" 
                name="contact_email"
            >
        </div>
        <br>

        <input type="submit" class="btn btn-md btn-success" value="Create" name="submit">

    </form>
    <br>








<?php include 'inc/footer.php'?>
