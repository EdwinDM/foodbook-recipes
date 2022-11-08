document.addEventListener("DOMContentLoaded", function(){
    console.log('content loaded!');

    document.querySelector('.revision-option').addEventListener("click", function(){
        document.getElementById('subidos').classList.add('hiden-element');
        document.getElementById('en-revision').classList.remove('hiden-element');
    });

    document.querySelector('.subidos-option').addEventListener("click", function(){
        document.getElementById('en-revision').classList.add('hiden-element');
        document.getElementById('subidos').classList.remove('hiden-element');
    });
    
});