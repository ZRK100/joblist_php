<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo  SITE_TITLE ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobbo</title>
    <link  rel="stylesheet" href= "https://bootswatch.com/5/flatly/bootstrap.min.css" >
    <link  rel="stylesheet" href= "css/style.css" >
</head>
<body>
  <div class="container">
    <div class="row">
    <div class="logo" >
    <span class="J">J</span> <span>obbo</span>
        </div>
            <nav class="nav_bar">
                <ul class="navlist">
                    <li role="presentation"  class="button">
                        <div>
                            <a href="index.php">Home</a>
                        </div>
                    </li>
                    <li role="presentation"  class="button">
                        <div>
                            <a href="create.php">Create Listing</a>
                        </div>
                    </li>
                </ul>
             </nav>
  
    </div>
    <?php displayMessage(); ?>