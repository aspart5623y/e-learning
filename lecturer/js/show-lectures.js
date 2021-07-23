function viewLectures() {

    // call ajax request
    $.ajax({
        url: './php/viewLecture.php',
        method: 'POST',
        success: function (data) {
            $('#lecture_list').html(data);
        }
    });
    
}


setInterval(() => {
    viewLectures();
}, 500);


