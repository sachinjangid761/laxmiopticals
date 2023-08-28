var contect= document.getElementById('contectus');
var page= document.getElementById('page');
var cross= document.getElementById('cross');
contect.addEventListener('click',function(){
    page.classList.add('dis-block');
    page.classList.remove('dis-none');
})
cross.addEventListener('click',function(){
    page.classList.remove('dis-block');
    page.classList.add('dis-none');
})