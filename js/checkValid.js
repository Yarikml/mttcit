function validFile(idInpFile, idTextlabel, idBtnReset) {

    var fileExtension = ['doc', 'docx', 'pdf', 'xlsx', 'xls', 'txt', 'ods'
        , 'htm', 'html', 'odt', 'rtf', 'png', 'jpg', 'jpeg', 'jpe', 'jfif'
        , 'csv', 'gif', 'rar', 'zip', 'tar', '7z'];

    var size = document.getElementById(idInpFile).files[0].size;
    var name = document.getElementById(idInpFile).files[0].name;
    name = name.split('.').pop().toLowerCase();

    if (fileExtension.indexOf(name) == -1) {
        document.getElementById(idInpFile).value = "";
        document.getElementById(idTextlabel).innerHTML = document.getElementById(idInpFile).value;
        alert('Файл с данным расширением недоступен для выбора');
    } else if (size > 5000000) {
        document.getElementById(idInpFile).value = "";
        document.getElementById(idTextlabel).innerHTML = document.getElementById(idInpFile).value;
        alert('Выберите файл поменьше');
    }
    else {
        document.getElementById(idTextlabel).innerHTML = document.getElementById(idInpFile).files[0].name;
        document.getElementById(idBtnReset).style.display = 'block';
    }
}

function resetUploadFile(idInpFile, idTextlabel, idBtnReset) {
    document.getElementById(idInpFile).value = "";
    document.getElementById(idTextlabel).innerHTML = document.getElementById(idInpFile).value;
    document.getElementById(idBtnReset).style.display = 'none';
}



var inpFile = document.getElementById('file1');
var btnReset = document.getElementById('reset-upload1');

inpFile.addEventListener('change', function () {
    validFile('file1', 'fl-nm1', 'reset-upload1');
});

btnReset.addEventListener('click', function () {
    resetUploadFile('file1', 'fl-nm1', 'reset-upload1');
});
//////////////
inpFile = document.getElementById('file2');
btnReset = document.getElementById('reset-upload2');

inpFile.addEventListener('change', function () {
    validFile('file2', 'fl-nm2', 'reset-upload2');
});

btnReset.addEventListener('click', function () {
    resetUploadFile('file2', 'fl-nm2', 'reset-upload2');
});
//////////
inpFile = document.getElementById('file3');
btnReset = document.getElementById('reset-upload3');

inpFile.addEventListener('change', function () {
    validFile('file3', 'fl-nm3', 'reset-upload3');
});

btnReset.addEventListener('click', function () {
    resetUploadFile('file3', 'fl-nm3', 'reset-upload3');
});
/////////
inpFile = document.getElementById('file4');
btnReset = document.getElementById('reset-upload4');

inpFile.addEventListener('change', function () {
    validFile('file4', 'fl-nm4', 'reset-upload4');
});

btnReset.addEventListener('click', function () {
    resetUploadFile('file4', 'fl-nm4', 'reset-upload4');
});
//////////
inpFile = document.getElementById('file5');
btnReset = document.getElementById('reset-upload5');

inpFile.addEventListener('change', function () {
    validFile('file5', 'fl-nm5', 'reset-upload5');
});

btnReset.addEventListener('click', function () {
    resetUploadFile('file5', 'fl-nm5', 'reset-upload5');
});