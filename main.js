let ol = document.querySelector("ol");
let input  = document.querySelector("input");
let button = document.querySelector("button");
let userData = [];

function addUserData(n){
    userData.push(n);
}
function loops(n){
    for (const iterator of n) {
        let li = document.createElement("li");
        li.textContent = iterator;
        ol.appendChild(li);
    }
}
function views(){
    fetch('view.php')
      .then(response => response.text())
      .then(data => {
        let jsonDecod = JSON.parse(data);
        loops(jsonDecod);
      })
      .catch(error => {
        console.error('Error:', error);
      })
}
button.addEventListener("click",()=>{
    addUserData(input.value);
    fetch('patsdas.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
        },
        body: JSON.stringify(userData),
      })
      .then(response => response.text())
      .then(data => {
        let li = document.createElement("li");
        li.textContent = data;
        ol.appendChild(li);
        console.log(data);
      })
      .catch(error => {
        console.error('Error:', error);
      })
    })
views();