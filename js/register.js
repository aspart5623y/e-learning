document.querySelector('#reg_btn').addEventListener('click', () => {
    var email = document.querySelector('#reg_email').value,
        password = document.querySelector('#reg_pass').value,
        confirm = document.querySelector('#reg_confirm').value,
        error = document.querySelector('#reg_error');
    
    if (email == '' || email.indexOf('@' && '.') == -1) {
        error.textContent = 'Enter a valid email';
    } else if (password == '' || password.length < 6) {
        error.textContent = 'Your password should be up 6 characters';
    } else if (confirm != password) {
        error.textContent = 'Passwords do not match';
    } else {
        error.textContent = '';

        $.ajax({ 
            url: './php/register.php', 
            method: 'POST', 
            data: { 
                email: email, 
                password: password, 
                confirm: confirm
            }, 
            beforeSend: function () {  
                document.querySelector('#reg_btn').innerHTML = `
                    <i class="fas fa-sync"></i>
                `;
            },
            success: function (data) {  
                document.querySelector('#reg_btn').innerHTML = "Register";

                if (data.substring(0, 4) == "http") {
                    window.location.href = data;
                } else {
                    error.textContent = data;
                }
                
            } 
        });

        
    }
    
})