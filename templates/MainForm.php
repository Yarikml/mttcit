<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Направить обращение</title>
    <link rel="stylesheet" href="../css/style.css">
    
</head>

<body>
    <div class="container">
        <header class="header">
            <span>Направить сообщение</span>
        </header>
        <form name="feedback" id="requestForm" method="POST" action="../php/uploadFile.php" class="requestForm "
            enctype="multipart/form-data">

            <div class="itemForm">
                <div class="left">
                    <label>Фамилия заявителя</label>
                    <span class="required">*</span>
                </div>
                <div>
                    <input type="text" name="second-name" required="required">
                </div>
            </div>
            <div class="itemForm">
                <div class="left">
                    <label>Имя заявителя</label>
                    <span class="required">*</span>
                </div>
                <div>
                    <input type="text" name="name" required="required">
                </div>
            </div>
            <div class="itemForm">
                <div class="left">
                    <label>Отчество заявителя</label>
                </div>
                <div>
                    <input type="text" name="third-name">
                </div>
            </div>
            <div class="itemForm">
                <div class="left">
                    <label>Адресс электронной почты</label>
                    <span class="required">*</span>
                </div>
                <div>
                    <input type="email" name="email" required="required">
                </div>
            </div>
            <div class="itemForm">
                <div class="left">
                    <label>Контактный телефон заявителя</label>
                </div>
                <div>
                    <input type="text" name="phone-number">
                </div>
            </div>
            <div class="itemForm">
                <div class="left">
                    <label>Организация</label>
                </div>
                <div>
                    <input type="text" name="organization">
                </div>
            </div>
            <div class="itemForm">
                <div class="left">
                    <label>Социальное положение</label>
                </div>
                <div>
                    <select name="social-place">
                        <option>(не установлено)</option>
                        <option>Работаю</option>
                        <option>Пенсионер</option>
                    </select>
                </div>
            </div>
            <div class="itemForm">
                <div class="left">
                    <label>Индекс</label>
                </div>
                <div>
                    <input type="text" name="index">
                </div>
            </div>
            <div class="itemForm">
                <div class="left">
                    <label>Страна</label>
                </div>
                <div>
                    <input type="text" name="country">
                </div>
            </div>
            <div class="itemForm">
                <div class="left">
                    <label>Регион</label>
                </div>
                <div>
                    <input type="text" name="region">
                </div>
            </div>
            <div class="itemForm">
                <div class="left">
                    <label>Район</label>
                </div>
                <div>
                    <input type="text" name="area">
                </div>
            </div>
            <div class="itemForm">
                <div class="left">
                    <label>Населённый пункт</label>
                </div>
                <div>
                    <input type="text" name="city">
                </div>
            </div>
            <div class="itemForm">
                <div class="left">
                    <label>Улица</label>
                </div>
                <div>
                    <input type="text" name="street">
                    <p class="signForInput">Если ваш адрес не имеет улицы, напишите "Нет"</p>
                </div>
            </div>
            <div class="itemForm">
                <div class="left">
                    <label>Дом</label>
                </div>
                <div>
                    <input type="text" name="house">
                </div>
            </div>
            <div class="itemForm">
                <div class="left">
                    <label>Корпус</label>
                </div>
                <div>
                    <input type="text" name="house-body">
                </div>
            </div>
            <div class="itemForm">
                <div class="left">
                    <label>Квартира</label>
                </div>
                <div>
                    <input type="text" name="apartment">
                </div>
            </div>
            <div class="itemForm">
                <div class="left">
                    <label>Текст обращения</label>
                    <span class="required">*</span>
                </div>
                <div>
                    <textarea name="text-of-request" required="required" maxlength="5000"></textarea>
                    <p class="signForInput">до 5000 символов</p>
                </div>
            </div>
            <div class="itemForm">
                <div class="left">
                    <label>Приложение к обращению</label>
                </div>
                <div class="inputFile">
                    <div class="fl-upload">
                        <input type="button" id="reset-upload1" class="reset-upload">
                        <label><input type="file" name="file1" id="file1" class="hide-input">Загрузить</label>
                        <div id="fl-nm1" class="fl-nm"></div>
                    </div>
                    <div class="fl-upload">
                        <input type="button" id="reset-upload2" class="reset-upload">
                        <label><input type="file" name="file2" id="file2" class="hide-input">Загрузить</label>
                        <div id="fl-nm2" class="fl-nm"></div>
                    </div>
                    <div class="fl-upload">
                        <input type="button" id="reset-upload3" class="reset-upload">
                        <label><input type="file" name="file3" id="file3" class="hide-input">Загрузить</label>
                        <div id="fl-nm3" class="fl-nm"></div>
                    </div>
                    <div class="fl-upload">
                        <input type="button" id="reset-upload4" class="reset-upload">
                        <label><input type="file" name="file4" id="file4" class="hide-input">Загрузить</label>
                        <div id="fl-nm4" class="fl-nm"></div>
                    </div>
                    <div class="fl-upload">
                        <input type="button" id="reset-upload5" class="reset-upload">
                        <label><input type="file" name="file5" id="file5" class="hide-input">Загрузить</label>
                        <div id="fl-nm5" class="fl-nm"></div>
                    </div>

                    <p class="signForInput">Размер файла не более 5 МБ</p>
                    <script src="../js/checkValid.js"></script>
                </div>
            </div>
            <p class="auto-inp">Защита от автоматического заполнения</p>
            <div class="itemForm">
                <div>
                    <label>Введите символы с картинки</label>
                    <span class="required">*</span>
                </div>
                <div class="capcha">
                    <img src="../captcha.php" />
                    <input name="norobot" required>
                </div>
            </div>
            <div class="footer">
                <input type="submit" name="send" value="Отправить" class="btn-submit-reset">
                <input type="reset" name="reset-form" value="Сбросить" class="btn-submit-reset" id="btn-reset">
                <script src="../js/allFileReset.js"></script>
            </div>
        </form>
    </div>

</body>

</html>