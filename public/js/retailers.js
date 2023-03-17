let reForm = document.getElementsByClassName('retailerFormOuter');

function retailerFormPopup(val){
    if(val){
        reForm[0].style.display='flex';
    }else{
        reForm[0].style.display='none';
    }
}