// occution
let ulOc = document.querySelector('#occasion ul');
let inputOc = document.querySelector('#occasion input');
// let deleteAllOc = document.querySelector('.removeAll button');
let tagsOc = ['حفل تخرج', 'زفاف'];

function showTagsOc(){
    document.querySelectorAll('#occasion ul li').forEach(liOc => liOc.remove());
    tagsOc.forEach((valueOC, keyOc) => {
        let newTag = document.createElement('li');
        newTag.innerText = valueOC;
        let newRemove = document.createElement('div');
        newRemove.classList.add('remove');
        newRemove.setAttribute('onclick', `removeTagItemOc(${keyOc})`);
        newTag.appendChild(newRemove);
        ulOc.appendChild(newTag);
    })
}
function removeTagItemOc(keyOc){
    delete tagsOc[keyOc];
    showTagsOc();
}
showTagsOc();

inputOc.addEventListener('keyup', function(event){
   if(event.key === 'Enter'){
     if(!tagsOc.includes(this.value)){
        tagsOc.push(this.value);
        showTagsOc();
     }
     this.value = '';
   }
})
// deleteAll.addEventListener('click', function(){
//     tagsOc = [];
//     showTagsOc();
// })