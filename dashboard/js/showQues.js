function viewQues() {

    // call ajax request
    $.ajax({
        url: './php/viewQues.php',
        method: 'POST',
        success: function (data) {
            $('.question_list   ').html(data);
        }
    });
    
}




// setInterval(() => {
    viewQues();
// }, 500);


