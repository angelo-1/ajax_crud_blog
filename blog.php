<?php 
header('Access-Control-Allow-Origin:*');
include('dbconnect.php');
error_reporting(E_ALL);
$action = isset($_POST['action']) ? $_POST['action'] : '';
$ref = isset($_POST['ref']) ? $_POST['ref'] : '';

if($ref=='angeloblog')
{

    // create blog 
    function createBlog($data){
        $resultData =htmlspecialchars(stripslashes(trim($data)));
        return $resultData;
    }
    if($action=='addblog'){
        $author = $_POST['author'];
        $heading = $_POST['heading'];
        $content = $_POST['content'];
        $sql="insert into blog(author,heading,content,statuses)values('$author','$heading','$content','active')";
        if ($conn->query($sql) === TRUE) {
            $json['status'] = 'success';
            $json['message'] = 'created successfully';
        } else {
            $json['status'] = 'Error';
            $json['message'] = 'Error: ' . $conn->error;
        }
    }
    
// view blog 

    if($action=='viewblog')
	{
	
		$s = "SELECT * FROM blog where statuses='active'";
		$res = mysqli_query($conn, $s);
		$num = mysqli_num_rows($res);
		if ($num == 0) 
		{
			$json['status']='failed';
			$json['message']="No Data Found";
			echo json_encode($json);
		}
		else 
		{

			$carr = array();
			$sqlii = "SELECT * FROM blog where statuses='active' ORDER BY slno DESC";
			$selected = mysqli_query($conn, $sqlii);
			while($row = mysqli_fetch_assoc($selected))
			{
			    $carr[] = $row;
			}
            $json['status'] = 'success';
            $json['data'] = $carr;
		}
	}

    // view update blog 

    if($action=='updateviewblog')
	{
	
		$s = "SELECT * FROM blog";
		$res = mysqli_query($conn, $s);
		$num = mysqli_num_rows($res);
		if ($num == 0) 
		{
			$json['status']='failed';
			$json['message']="No Data Found";
			echo json_encode($json);
		}
		else 
		{
			$car = array();
			$sqlii = "SELECT * FROM blog ORDER BY slno DESC";
			$selected = mysqli_query($conn, $sqlii);
			while($row = mysqli_fetch_assoc($selected))
			{
			    $car[] = $row;
			}
            $json['status'] = 'success';
            $json['data'] = $car;
		}
	}

    // delete blog 

    if($action=='deleteblog'){
        $slno=$_POST["blogId"];
        $delqry=mysqli_query($conn,"DELETE from blog WHERE slno='".$slno."'");
         if(!$delqry){
            $json['status']='failed';
			$json['message']="Not deleted";
			echo json_encode($json);
         }
         else{
            $json['status']='success';
            $json['message']="Deleted Successfully";
         }
    }

    // Update blog 
    
    function updateBlog($data){
        $resultData =htmlspecialchars(stripslashes(trim($data)));
        return $resultData;
    }
    if($action=='updateblog'){
        $author = $_POST['author'];
        $heading = $_POST['heading'];
        $content = $_POST['content'];
        $statuses = $_POST['statuses'];
        $slno = $_POST['slno'];
        $sql="UPDATE blog SET author='$author',heading='$heading',content='$content',statuses='$statuses' WHERE slno = $slno";
        if ($conn->query($sql) === TRUE) {
            $json['status'] = 'success';
            $json['message'] = 'created successfully';
        } else {
            $json['status'] = 'Error';
            $json['message'] = 'Error: ' . $conn->error;
        }
    }
    echo json_encode($json);
    $conn->close();
}

?>