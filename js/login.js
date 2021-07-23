document.querySelector('#log_btn').addEventListener('click', () => {
    var email = document.querySelector('#login_email').value,
        password = document.querySelector('#login_pass').value,
        error = document.querySelector('#login_error');
    
    if (email == '' || email.indexOf('@' && '.') == -1) {
        error.textContent = 'Enter a valid email';
    } else if (password == '' || password.length < 6) {
        error.textContent = 'Your password should be up 6 characters';
    } else {
        error.textContent = '';

        $.ajax({ 
            url: './php/login.php', 
            method: 'POST', 
            data: { 
                email: email, 
                password: password
            }, 
            beforeSend: function () {  
                document.querySelector('#log_btn').innerHTML = `
                    <i class="fas fa-sync"></i>
                `;
            },
            success: function (data) {  
                document.querySelector('#log_btn').innerHTML = 'Login';

                if (data.substring(0, 4) == "http") {
                    window.location.href = data;
                } else {
                    error.textContent = data;
                }
                
            } 
        });

        
    }
    
})