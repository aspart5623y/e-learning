function viewTest() {

    // call ajax request
    $.ajax({
        url: './php/viewTest.php',
        method: 'POST',
        success: function (data) {
            $('.test_list').html(data);
        }
    });
    
}




setInterval(() => {
    viewTest();
}, 500);


