<?php 
include_once 'config/init.php';
?>

<?php 

$job = new Job;


if(isset($_POST['del_id'])){
    $del_id = $_POST['del_id'];
    if($job->delete($del_id)){
        redirect('index.php', 'Job deleted', 'success');
    }
    else{
        redirect('index.php', 'Job not deleted', 'error');
    }

}


$temp = new Template('templates/job-single.php');
//Template Object same as Template $template

//Redirect to Page
$job_id = isset($_GET['id'])? $_GET['id']: null;

$temp->job = $job->getJob($job_id);

echo $temp;
?>  



