/* ========================  P R E L O A D E R  ======================= */

if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', () => {
        document.getElementById('preloader').classList.add('loaded');
        ready()
    });
} else {
    ready()
}



function ready() {
    document.getElementById('login_btn').addEventListener('click', () => {
        document.getElementById('login_form').classList.add('active');
        document.getElementById('register_form').classList.remove('active');
    })

    document.getElementById('register_btn').addEventListener('click', () => {
        document.getElementById('login_form').classList.remove('active');
        document.getElementById('register_form').classList.add('active');
    })
}


