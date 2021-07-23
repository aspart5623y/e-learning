function viewAss() {

    // call ajax request
    $.ajax({
        url: './php/viewAss.php',
        method: 'POST',
        success: function (data) {
            $('#ass_list').html(data);
        }
    });
    
}




setInterval(() => {
    viewAss();
}, 500);


