/* ========================  P R E L O A D E R  ======================= */

if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', () => {
        document.getElementById('preloader').classList.add('loaded');
        ready()
    });
} else {
    ready()
}


function ready(){
    document.querySelector('.toggler').addEventListener('click', () => {
        document.querySelector('main').classList.toggle('active')
    })


    document.querySelector('.sidebar-overlay').addEventListener('click', () => {
        document.querySelector('main').classList.remove('active')
    })
}