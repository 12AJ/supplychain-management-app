let proForm = document.getElementsByClassName('productFormOuter');

function productFormPopup(val){
    if(val){
        proForm[0].style.display='flex';
    }else{
        proForm[0].style.display='none';
    }
}