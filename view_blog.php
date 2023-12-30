<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Blogs</title>
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
        <div id="blogList" class="container"></div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        viewBlog();
    });
    </script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="validate.js"></script>
</body>
</html>