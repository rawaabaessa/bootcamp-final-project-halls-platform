let ul = document.querySelector('#services ul');
let input = document.querySelector('#services input');
let deleteAll = document.querySelector('.removeAll button');
let tags = ['جهاز تتبع', 'بروجكتر'];

function showTags(){
    document.querySelectorAll('#services ul li').forEach(li => li.remove());
    tags.forEach((value, key) => {
        let newTag = document.createElement('li');
        newTag.innerText = value;
        let newRemove = document.createElement('div');
        newRemove.classList.add('remove');
        newRemove.setAttribute('onclick', `removeTagItem(${key})`);
        newTag.appendChild(newRemove);
        ul.appendChild(newTag);
    })
}
function removeTagItem(key){
    delete tags[key];
    showTags();
}
showTags();
input.addEventListener('keyup', function(event){
   if(event.key === 'Enter'){
     if(!tags.includes(this.value)){
        tags.push(this.value);
        showTags();
     }
     this.value = '';
   }
})
// deleteAll.addEventListener('click', function(){
//     tags = [];
//     showTags();
// })

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