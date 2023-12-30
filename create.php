<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Blog</title>
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid d-flex vh-100 justify-content-center flex-column">
        <h1 class="text-center text-primary">Create Blog</h1>
        <div class="container w-75 d-flex justify-content-center align-items-center flex-column">
            <form method="post" class="d-flex flex-column w-50 p-5">
                <label for="aname" class="mt-2">Author : </label>
                <input type="text" id="aname" name="aname" class="mb-2">
                <label for="heading" class="mt-2">Heading : </label>
                <input type="text" id="heading" name="heading" class="mb-2">
                <label for="content" class="mt-2">Content : </label>
                <textarea name="content" id="content" cols="30" rows="5" class="mb-2"></textarea>
                <button type="button" onclick="createBlog()" class="my-2 p-2 btn btn-primary">CREATE</button>
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