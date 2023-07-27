let ol = document.querySelector("ol");
let input  = document.querySelector("input");
let button = document.querySelector("button");
let userData = [];

function addUserData(n){
    userData.push(n);
}
function index(){
    let el;
    for(let elem of userData){
      el = elem;
      
    }
    return `<li>${el}</li>`;
}   
button.addEventListener("click",()=>{
    addUserData(input.value);
    ol.innerHTML+=index();
});
