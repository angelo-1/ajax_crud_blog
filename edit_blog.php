<?php
$slno = isset($_GET['slno']) ? $_GET['slno']:'';
$author = isset($_GET['author']) ? urldecode($_GET['author']) : '';
$heading = isset($_GET['heading']) ? $_GET['heading'] : '';
$content = isset($_GET['content']) ? $_GET['content'] : '';
$statuses = isset($_GET['statuses']) ? $_GET['statuses'] : '';
echo $author;
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Blog</title>
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid d-flex vh-100 justify-content-center flex-column">
        <h1 class="text-center text-primary">Edit Blog</h1>
        <div class="container w-75 d-flex justify-content-center align-items-center flex-column">
            <form method="post" class="d-flex flex-column w-50 p-5">
                <label for="editAuthor" class="mt-2">Author : </label>
                <input type="text" id="editAuthor" name="aname" class="mb-2" value="<?php echo $author ?>">
                <label for="editHeading" class="mt-2">Heading : </label>
                <input type="text" id="editHeading" name="heading" class="mb-2" value="<?php echo $heading ?>">
                <label for="editContent" class="mt-2">Content : </label>
                <textarea name="content" id="editContent" cols="30" rows="5" class="mb-2"><?php echo $content ?></textarea>
                <label for="editStatus" class="mt-2">Status : </label>
                <select name="status" id="editStatus" class="w-100 mb-2">
                    <option value="active" <?php echo ($statuses == 'active') ? 'selected' : ''; ?>>Active</option>
                    <option value="inactive" <?php echo ($statuses == 'inactive') ? 'selected' : ''; ?>>Inactive</option>
                </select>
                <input type="number" id="slNumber" value="<?php echo $slno ?>" disabled hidden>
                <button type="button" onclick="editBlog()" class="my-2 p-2 btn btn-primary">Update</button>
            </form>
            <p id="successNote" class="text-success"></p>
            <p id="errorNote" class="text-danger"></p>
        </div>
    </div>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="validate.js"></script>

    
</body>
</html>