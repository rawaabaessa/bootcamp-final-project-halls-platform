const container = document.getElementById('container');
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login');

registerBtn.addEventListener('click', () => {
    container.classList.add("active");
});

loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
});

let radio = document.querySelectorAll('input[type=radio]');
// function handleRadioChange(event) {
//     if (event.target.checked) {
//         let label = event.target.nextElementSibling;
//         let div = label.querySelector('div');
//         div.classList.toggle('d-none')
//     }
// }
const radioButtons = document.querySelectorAll('input[type="radio"]');
const labels = document.querySelectorAll('input[type="radio"] + label');

function handleRadioChange(event) {
  const currentLabel = event.target.nextElementSibling;
  const currentDiv = currentLabel.querySelector('div');
  console.log(1)
  // Toggle d-none class on the current div
  currentDiv.classList.remove('d-none');
  console.log(2)
  // Remove d-none class from other divs
  labels.forEach(label => {
    if (label !== currentLabel) {
      const otherDiv = label.querySelector('div');
      otherDiv.classList.add('d-none');
      console.log(3)
    }
  });
}
// function removediv(){
//     let label = document.querySelectorAll('input[type=radio]');
//     label.forEach((lab)=>{
//         lab.querySelector('div');
//         div.classList.toggle('d-none')
//     })
// }
// Attach the event listener to each radio button
radio.forEach(function (radioButton) {
    radioButton.addEventListener('change', handleRadioChange);
})
// let radio = document.querySelectorAll('input[type=radio]');
// radio.forEach(element => {
//     element.addEventListener('change',()=>{
//         if(element.checked){
//             radio.forEach(elements =>{
//                 elements.classList.remove('radio-active')
//             })
//             element.classList.add('radio-active');
//         }
        
//     })
// });