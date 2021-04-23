//-------- LOADER OPEN ANIMATION ----------
function open_ani(){
    var header = document.getElementById('header');
    var footer = document.getElementById('footer');
    var hrow = document.getElementById('hrow');
    var frow = document.getElementById('frow');
    header.removeAttribute('height');
    footer.removeAttribute('height');
    header.classList.add("revtopdiv");
    header.classList.remove("topdiv");
    footer.classList.add("revbotdiv");
    footer.classList.remove("botdiv");
    hrow.classList.add("revtoprow");
    hrow.classList.remove("botdiv");
    setTimeout(function(){ frow.style.display = 'block'; }, 900);
}

//---------- LOADER OPEN ANIMATION -------------
function close_ani(){
    var frow = document.getElementById('frow');
    var header = document.getElementById('header');
    var footer = document.getElementById('footer');
    var hrow = document.getElementById('hrow');
    frow.style.display = 'none';
    header.classList.add("topdiv");
    header.classList.remove("revtopdiv");
    footer.classList.add("botdiv");
    footer.classList.remove("revbotdiv");
    hrow.classList.add("toprow");
    hrow.classList.remove("revtoprow");
}

//-------- PROVIDING THE FOOTER ITS FEEL ---------
function footer_menu(){
    var a_tags = document.getElementsByTagName('a');

    for (a_tag in a_tags){
        a_tag.onhover = ()=>{
            a_tag.classList.add('ahover');
        }
        a_tag.onmouseout = ()=>{
            a_tag.classList.remove('ahover');
        }
    }
}

//---------- REDIRECT CONTROLS OF FOOTER LINKS ----------
function footer_redirect(){
    var projects = document.getElementById('pro-att');
    var designers = document.getElementById('deg-att');
    var review = document.getElementById('rew-att');

    projects.onclick= ()=>{
        close_ani();
        setTimeout(function(){
            window.location.href="gallery.php?action=project";
        },1000);
    }
    designers.onclick= ()=>{
        close_ani();
        setTimeout(function(){
            window.location.href="gallery.php?action=design";
        },1000);
    }
    review.onclick= ()=>{
        close_ani();
        setTimeout(function(){
            window.location.href="review.php";
        },1000);
    }
}