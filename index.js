function scrollToTop() {
    window.scrollTo({top: 0, behavior: 'smooth'});
}

window.addEventListener('scroll', function() {
    const currentScrollPosition = window.scrollY;
    
    const scrollBtn = document.getElementById('scroll');

    if (currentScrollPosition !== 0) {
        scrollBtn.setAttribute('style', 'display: block;');
    } else {
        scrollBtn.setAttribute('style', 'display: none;');
    }
});

function toggleScrollButton() {
    const lastPosition = window.scrollY;
    const scrollBtn = document.getElementById('scroll');

    if (lastPosition !== 0) {
        scrollBtn.setAttribute('style', 'display: block;');
    } else {
        scrollBtn.setAttribute('style', 'display: none;');
    }
}

window.addEventListener('scroll', function() {
    toggleScrollButton();
});

window.addEventListener('load', () => {
    toggleScrollButton();
});

let words = ["you" , "are" , "practice" , "with" , "html" , "and" , "css"]

window.addEventListener('keypress' , function(){

    var key = event.key;

    if (key == "Enter"){
    let form = document.getElementById("textarea")
    let word = form.value;
        word = word.toLowerCase();
        console.log(word);

    for (i = 0; i <= words.length; i++){
        if(word == words[i]){
            log.innerHTML = "You are practice with HTML and CSS";
            break;
        }else{
            log.innerHTML = "";
        }
    }
    }
});




/*window.addEventListener("click" , function(){
    document.getElementById("hidden_form").style.display = "none";
});*/

function display() {
    document.getElementById("hidden_form").style.display = "inline";
}

function none(){
    document.getElementById("hidden_form").style.display = "none";
}

function login(){
    if (document.getElementById("name").value == "suda"){
        if (document.getElementById("pass").value == "suda"){
            document.getElementById("guest").textContent = "Hisuda";
            document.getElementById("hidden_form").style.display = "none";
        }
    }
}

function display_table(){
    console.log(document.getElementsByClassName("user_table").style.color);
    document.getElementsByClassName("user_table").style.display = "none";
}

function display_table() {
    document.getElementById("user_table").style.display = "table";
}