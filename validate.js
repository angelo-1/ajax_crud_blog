


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
            console.log(responseData)

            if (responseData.status === 'success') {
                var blogList = $('#blogList');

                // Clear existing content
                blogList.empty();

                // Append new data to the HTML element
                responseData.data.forEach(function (blog) {
                    var blogHtml = '<div class="card p-5 m-5">';
                    blogHtml += '<h2 class="text-success">' + blog.heading + '</h2>';
                    blogHtml += '<p class="text-center">' + blog.content + '</p>';
                    blogHtml += '<p class="text-end">' + blog.author + '</p>';
                    blogHtml += '</div>';
                    blogList.append(blogHtml);
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