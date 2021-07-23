function viewStudents() {

    // call ajax request
    $.ajax({
        url: './php/viewLecturer.php',
        method: 'POST',
        success: function (data) {
            $('#user_list').html(data);
        }
    });
    
}




setInterval(() => {
    viewStudents();
}, 500);


