document.querySelector('#addCourseBtn').addEventListener('click', () => {
    var lecturer = document.querySelector('#course_lecturer').value,
        course = document.querySelector('#course_name').value,
        title = document.querySelector('#course_title').value,
        error = document.querySelector('#course_error');
    
    if (course == '') {
        error.textContent = 'Enter the course name';
    } else if (lecturer == '') {
        error.textContent = 'Choose a lectuer for this course';
    } else if (title == '') {
        error.textContent = 'Enter the course title';
    } else {
        error.textContent = '';

        $.ajax({ 
            url: './php/addcourse.php', 
            method: 'POST', 
            data: { 
               lecturer: lecturer, 
                course: course,
                title: title,
            }, 
            beforeSend: function () {  
                document.querySelector('#addCourseBtn').innerHTML = `
                    <i class="fas fa-sync"></i>
                `;
            },
            success: function (data) {  
                document.querySelector('#addCourseBtn').innerHTML = "Submit";

                if (data.substring(0, 4) == "done") {
                    location.reload(true);
                } else {
                    error.textContent = data;
                }
                
            } 
        });

        
    }
    
})