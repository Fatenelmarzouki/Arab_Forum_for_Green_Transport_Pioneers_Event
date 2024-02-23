const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))

// Control on lists that in header in Computer and Tablet Screen
// const anc = document.querySelectorAll('.list');

// anc.forEach(anca => {
//     anca.addEventListener('click' , () =>{
//         document.querySelector('.active')?.classList.remove('active');
//         anca.classList.add("active");
//     });
// });

// Control on lists that in menu in header in Mobile Screen
const links = document.querySelectorAll(".menu-click");

links.forEach(link => {
    link.addEventListener('click',()=>{
        document.querySelector(".menu-active")?.classList.remove("menu-active");
        link.classList.add("menu-active");
    })
})

// To color reservation btn
const btn = document.getElementsByClassName("adjust")[0];
btn.addEventListener("click", ()=>{
    btn.classList.toggle("color");
});

const menu = document.getElementById("check");
const ul = document.getElementById("structure");
const close = document.getElementById("close");

menu.addEventListener("click" , ()=>{
    ul.classList.add("none");
});

close.addEventListener("click",()=>{
    ul.classList.remove("none");
});

// To touch any position hide menu
// document.addEventListener("click" ,(event)=>{
//     if(!menu.contains(event.target)){
//         ul.classList.remove("none");
//     }
// });


// To make Modal
const myModal = document.getElementById('myModal')
const myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', () => {
  myInput.focus()
})


