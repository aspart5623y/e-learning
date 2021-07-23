document.querySelector('#addLecturerBtn').addEventListener('click', () => {
    var email = document.querySelector('#lecturer_email').value,
        password = document.querySelector('#lecturer_pass').value,
        confirm = document.querySelector('#lecturer_confirm').value,
        error = document.querySelector('#lecturer_error');
    
    if (email == '' || email.indexOf('@' && '.') == -1) {
        error.textContent = 'Enter a valid email';
    } else if (password == '' || password.length < 6) {
        error.textContent = 'Your password should be up 6 characters';
    } else if (confirm != password) {
        error.textContent = 'Passwords do not match';
    } else {
        error.textContent = '';

        $.ajax({ 
            url: './php/addLecturer.php', 
            method: 'POST', 
            data: { 
                email: email, 
                password: password, 
                confirm: confirm
            }, 
            beforeSend: function () {  
                document.querySelector('#addLecturerBtn').innerHTML = `
                    <i class="fas fa-sync"></i>
                `;
            },
            success: function (data) {  
                document.querySelector('#addLecturerBtn').innerHTML = "Register";

                if (data.substring(0, 4) == "done") {
                    location.reload(true);
                } else {
                    error.textContent = data;
                }
                
            } 
        });

        
    }
    
})