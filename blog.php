<?php 
header('Access-Control-Allow-Origin:*');
include('dbconnect.php');
error_reporting(E_ALL);
$action = isset($_POST['action']) ? $_POST['action'] : '';
$ref = isset($_POST['ref']) ? $_POST['ref'] : '';

if($ref=='angeloblog')
{
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
    echo json_encode($json);
    $conn->close();
}

?>