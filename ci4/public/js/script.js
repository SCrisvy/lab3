// Lesson 2.3 :Const
const links = document.querySelectorAll('ul li');
const pages = document.querySelectorAll('.page');
const allBtns = document.querySelectorAll('.close-btn');

//lesson 2.2 : Let
// lesson 1.7: comments
let selectedPageBtn = ""; // Lesson 6.1: strings
// loop for
for(let i = 0; i < links.length; i++){
    links[i].addEventListener('click', function(event){
        event.preventDefault();
        for(let i = 0; i < pages.length; i++){
            pages[i].style.display = "none";
        }
        pages[i].style.display = "block";
        selectedPageBtn = i;
        document.querySelector('header').style.filter = "blur(2px)";
    });
}

for(let i = 0; i < allBtns.length; i++){
    allBtns[i].addEventListener('click',function(){
        allBtns[i].parentElement.style.display = "none";
        document.querySelector('header').style.filter = "blur(0px)";
    });
}


