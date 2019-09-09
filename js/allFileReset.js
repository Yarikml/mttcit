function allFileReset() {
    var allInpFiles = document.getElementsByClassName('hide-input');
    var allTextLabel = document.getElementsByClassName('fl-nm');
    var allBtnReset = document.getElementsByClassName('reset-upload');
    for(var i = 0; i < allInpFiles.length; i++){
        allInpFiles[i].value = "";
        allTextLabel[i].innerHTML = allInpFiles[i].value;
        allBtnReset[i].style.display = 'none';

    }
}

document.getElementById('btn-reset').addEventListener('click', function() {
    allFileReset();
});