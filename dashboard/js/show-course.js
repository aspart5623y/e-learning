function viewCourse() {

    // call ajax request
    $.ajax({
        url: './php/viewCourse.php',
        method: 'POST',
        success: function (data) {
            $('#course_list').html(data);
        }
    });
    
}






setInterval(() => {
    viewCourse();
}, 500);


