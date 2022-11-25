document.addEventListener("DOMContentLoaded", function(){
    console.log('content loaded!');
    
    document.querySelector('.subidos-option').addEventListener("click", function(){
        document.getElementById('subir').classList.add('hiden-element');
        document.getElementById('en-revision').classList.add('hiden-element');
        document.getElementById('usuarios').classList.add('hiden-element');
        document.getElementById('subidos').classList.remove('hiden-element');
        document.getElementById('nav-options').classList.remove('small-nav-options');
    });

    document.querySelector('.subir-option').addEventListener("click", function(){
        document.getElementById('subidos').classList.add('hiden-element');
        document.getElementById('subir').classList.remove('hiden-element');
        document.getElementById('en-revision').classList.add('hiden-element');
        document.getElementById('usuarios').classList.add('hiden-element');
        document.getElementById('nav-options').classList.add('small-nav-options');
    });
    
    document.querySelector('.revision-option').addEventListener("click", function(){
        document.getElementById('subidos').classList.add('hiden-element');
        document.getElementById('subir').classList.add('hiden-element');
        document.getElementById('en-revision').classList.remove('hiden-element');
        document.getElementById('usuarios').classList.add('hiden-element');
        document.getElementById('nav-options').classList.remove('small-nav-options');
    });
    
    document.querySelector('.usuarios-option').addEventListener("click", function(){
        document.getElementById('subidos').classList.add('hiden-element');
        document.getElementById('subir').classList.add('hiden-element');
        document.getElementById('en-revision').classList.add('hiden-element');
        document.getElementById('usuarios').classList.remove('hiden-element');
        document.getElementById('nav-options').classList.add('small-nav-options');
    });
});