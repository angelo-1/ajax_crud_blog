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
        <div class="table-responsive m-5">
            <table class="table table-hover table-striped table-primary table-bordered">
                <thead class="table-light">
                    <tr>
                        <th>Slno</th>
                        <th>Heading</th>
                        <th>Content</th>
                        <th>Author</th>
                        <th>Status</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody id="blogTable" class="table-group-divider">

                </tbody>
            </table>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            updateViewBlog();
    });
    </script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="validate.js"></script>
</body>
</html>