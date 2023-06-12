
document.addEventListener('DOMContentLoaded',
    function(){
        let a = 1; /* let / const / var */
        const collection_link = document.querySelectorAll('a'); 
        btn = document.querySelector('.button');
        btn.addEventListener('click', function(){ alert('Hello'); });
        console.log(btn);
    }
);