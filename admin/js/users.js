function viewUsers() {

    // call ajax request
    $.ajax({
        url: './php/viewStudents.php',
        method: 'POST',
        success: function (data) { 
            $('#student_list').html(data);
        } 
    });    




    // call ajax request
    $.ajax({
        url: './php/viewAdmin.php',
        method: 'POST',
        success: function (data) { 
            $('#admin_list').html(data);
        } 
    });   




     // call ajax request
    $.ajax({
        url: './php/viewLecturer.php',
        method: 'POST',
        success: function (data) { 
            $('#lecturer_list').html(data);
        } 
    });   




}



setInterval(() => {
    viewUsers();
}, 500);


