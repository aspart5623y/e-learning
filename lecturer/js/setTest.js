document.querySelector('#setTestBtn').addEventListener('click', () => {
    var title = document.querySelector('#test_title').value,
        course = document.querySelector('#test_course').value,
        date = document.querySelector('#test_date').value,
        time = document.querySelector('#test_time').value,
        error = document.querySelector('#test_error');
    
    if (title == '') {
        error.textContent = 'Enter a title for the test!';
    } else if (course == '') {
        error.textContent = 'Enter a course for the test!';
    } else if (date == '') {
        error.textContent = 'Enter a date for the test!';
    } else if (time == '') {
        error.textContent = 'Enter a time for the test!';
    } else {
        error.textContent = '';

        $.ajax({ 
            url: './php/setTest.php', 
            method: 'POST', 
            data: { 
                title: title, 
                course: course, 
                date: date,
                time: time
            }, 
            beforeSend: function () {  
                document.querySelector('#setTestBtn').innerHTML = `
                    <i class="fas fa-sync"></i>
                `;
            },
            success: function (data) {  
                document.querySelector('#setTestBtn').innerHTML = "Set test";

                if (data.substring(0, 4) == "http") {
                    window.location.href = data;
                } else {
                    error.textContent = data;
                }
                
            } 
        });

        
    }
    
})