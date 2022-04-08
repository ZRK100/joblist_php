<?php 
include_once 'config/init.php';
?>

<?php 

$job = new Job;

$temp = new Template('templates/frontpage.php');
//Template Object same as Template $template

//Redirect to Page

$category = isset($_GET['category'])? $_GET['category']: null;

if($category){

    $temp->jobs = $job->getByCategory($category);
    $temp->title = $job->getCategory($category)->name;

}
else {

    $temp ->title = 'Latest Jobs';
    $temp ->jobs = $job ->getAllJobs();

}





$temp ->categories = $job->getCategories();

echo $temp;
?>  



