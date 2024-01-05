


// for create a blog
function createBlog() {
    var author = $('#aname').val();
    var heading = $('#heading').val();
    var content = $('#content').val();
console.log(author,"check");
    if((author || heading || content)==true){
    return false;
    }
    else{
        $.ajax({
            url: 'blog.php',
            method: 'POST',
            data: {
                author: author,
                heading: heading,
                content: content,
                ref: "angeloblog",
                action: "addblog"
            },
            success: function (data) {
                console.log(data);
                var data =JSON.parse(data);
                if (data.status=="success") {
                    $('#successNote').html('Created Successfully');
                    $('#errorNote').html('');
                    setTimeout(function () {
                        window.location.href = "index.php";
                    }, 2500);
                } else {
                    $('#successNote').html('');
                    $('#errorNote').html('Error: ' + data.message);
                }
            },
            
        });
    }
}


// update a blog 

function viewBlog() {
    $.ajax({
        url: 'blog.php',
        method: 'POST',
        data: {
            ref: 'angeloblog',
            action: 'viewblog'
        },
        success: function (data) {
            var responseData = JSON.parse(data);
            console.log(responseData);

            if (responseData.status === 'success') {
                var blogList = $('#blogList');
                var blogTable = $('#blogTable');
                // Clear existing content
                blogList.empty();
                blogTable.empty();

                // Append new data to the HTML element
                responseData.data.forEach(function (blog) {
                    var blogHtml = '<div class="card p-5 m-5">';
                    blogHtml += '<h2 class="text-success">' + blog.heading + '</h2>';
                    blogHtml += '<p class="text-center">' + blog.content + '</p>';
                    blogHtml += '<p class="text-end">' + blog.author + '</p>';
                    blogHtml += '</div>';
                    blogList.append(blogHtml);
                });
                responseData.data.forEach(function (blogs) {
                    var blogHtml2 = '<tr>';
                    blogHtml2 += '<td>' + blogs.slno + '</td>';
                    blogHtml2 += '<td>' + blogs.heading + '</td>';
                    blogHtml2 += '<td>' + blogs.content + '</td>';
                    blogHtml2 += '<td>' + blogs.author + '</td>';
                    blogHtml2 += '<td>' + blogs.statuses + '</td>';
                    // blogHtml2 += '<td><button type="button" class="btn btn-primary" onclick=editBlog(' + blogs.slno + ',' + blogs.heading + ',' + blogs.content + ',' + blogs.author + ',' + blogs.statuses + ')>Edit</button>';
                    blogHtml2 += '<td><a href="edit_blog.php?slno='+blogs.slno+'&heading='+blogs.heading+'&content='+blogs.content+'&author='+blogs.author+'&statuses='+blogs.statuses+'" type="button" class="btn btn-primary">Edit</a></td>';
                    blogHtml2 += '<td><button type="button" class="btn btn-danger" onclick=deleteBlog(' + blogs.slno + ')>Delete</button>';
                    blogHtml2 += '</tr>';
                    blogTable.append(blogHtml2);
                });
            } else {
                console.log('Error: ' + responseData.message);
            }
        },
        error: function (xhr, status, error) {
            console.log('Error: ' + error);
        }
    });
}


// update view 

function updateViewBlog() {
    $.ajax({
        url: 'blog.php',
        method: 'POST',
        data: {
            ref: 'angeloblog',
            action: 'updateviewblog'
        },
        success: function (data) {
            var responseData = JSON.parse(data);
            console.log(responseData);

            if (responseData.status === 'success') {
                var blogTable = $('#blogTable');
                // Clear existing content
                blogTable.empty();

                responseData.data.forEach(function (blogs) {
                    var blogHtml2 = '<tr>';
                    blogHtml2 += '<td>' + blogs.slno + '</td>';
                    blogHtml2 += '<td>' + blogs.heading + '</td>';
                    blogHtml2 += '<td>' + blogs.content + '</td>';
                    blogHtml2 += '<td>' + blogs.author + '</td>';
                    blogHtml2 += '<td>' + blogs.statuses + '</td>';
                    blogHtml2 += '<td><a href="edit_blog.php?slno='+blogs.slno+'&heading='+blogs.heading+'&content='+blogs.content+'&author='+blogs.author+'&statuses='+blogs.statuses+'" type="button" class="btn btn-primary">Edit</a></td>';
                    blogHtml2 += '<td><button type="button" class="btn btn-danger" onclick=deleteBlog(' + blogs.slno + ')>Delete</button>';
                    blogHtml2 += '</tr>';
                    blogTable.append(blogHtml2);
                });
            } else {
                console.log('Error: ' + responseData.message);
            }
        },
        error: function (xhr, status, error) {
            console.log('Error: ' + error);
        }
    });
}

// delete blog

function deleteBlog(blogId) {
   
    var confirmDelete = confirm('Are you sure you want to delete this blog?');
    if (confirmDelete) {
        $.ajax({
            url: 'blog.php',
            method: 'POST',
            data: {
                ref: 'angeloblog',
                action: 'deleteblog',
                blogId: blogId
            },
            success: function (data) {
                console.log(data);
                var data =JSON.parse(data);
                if (data.status=="success") {
                    alert('Deleted Successfully');
                    setTimeout(function () {
                        window.location.href = "update.php";
                    }, 1000);
                } else {
                    alert('Error: ' + data.message);
                }
            },
            error: function (xhr, status, error) {
                console.log('Error deleting blog: ' + error);
            }
        });
    }
}


// update blog
function editBlog(){
    var author = $('#editAuthor').val();
    var heading = $('#editHeading').val();
    var content = $('#editContent').val();
    var statuses = $('#editStatus').val();
    var slno = $('#slNumber').val();
console.log(author,"check");
    if((author || heading || content || statuses ||slno)==true){
    return false;
    }
    else{
        $.ajax({
            url: 'blog.php',
            method: 'POST',
            data: {
                author: author,
                heading: heading,
                content: content,
                statuses: statuses,
                slno: slno,
                ref: "angeloblog",
                action: "updateblog"
            },
            success: function (data) {
                console.log(data);
                var data =JSON.parse(data);
                if (data.status=="success") {
                    $('#successNote').html('Updated Successfully');
                    $('#errorNote').html('');
                    setTimeout(function () {
                        window.location.href = "update.php";
                    }, 2500);
                } else {
                    $('#successNote').html('');
                    $('#errorNote').html('Error: ' + data.message);
                }
            },
            
        });
    }
}