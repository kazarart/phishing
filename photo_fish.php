<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="icon" href="/favicon.ico">
    <title>photofind</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style type="text/css">.main-page[data-v-54d5bc8c] {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .main-page h1[data-v-54d5bc8c] {
            color: #ffffff;
            font-size: 40px;
            margin-bottom: 20px;
        }</style><style type="text/css">.film-card[data-v-7de128e4] {
            position: relative;
        }
        .film-card img[data-v-7de128e4] {
            -o-object-fit: cover;
            object-fit: cover;
            border-radius: 10px;
            width: 1160px;
            height: 600px;
        }
        .film-card .title[data-v-7de128e4] {
            position: absolute;
            margin-bottom: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            color: #ffffff;
            height: 100px;
            background: linear-gradient(90deg, black 0%, rgba(0, 0, 0, 0) 90%);
            font-weight: 700;
            padding: 20px;
            font-size: 30px;
            border-radius: 0 0 10px 10px;
        }
        .film-card .rating[data-v-7de128e4] {
            position: absolute;
            right: 0;
            top: 0;
            background-color: #EB5804;
            width: 100px;
            height: 50px;
            margin-bottom: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #ffffff;
            font-weight: 700;
            font-size: 20px;
            border-radius: 0 10px 0 10px;
            opacity: 0.8;
        }
        .film-card .more-info[data-v-7de128e4] {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            border-radius: 10px;
            background-color: rgba(0, 0, 0, 0.6);
            color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: 700;
            font-size: 30px;
            text-decoration: none;
            opacity: 0;
            transition: all 0.2s ease;
        }
        .film-card .more-info[data-v-7de128e4]:hover, .film-card .more-info[data-v-7de128e4]:focus {
            opacity: 1;
        }</style><style type="text/css">.film-card[data-v-724b2ba6] {
            margin-bottom: 40px;
        }</style><style type="text/css">h2[data-v-46df9a21] {
            font-size: 40px;
            color: #ffffff;
            margin-bottom: 30px;
        }</style><style type="text/css">.film-page[data-v-0eb7b157] {
            padding-bottom: 100px;
        }
        .film-page .back[data-v-0eb7b157] {
            color: #ffffff;
            margin-left: 30px;
            margin-top: 30px;
        }
        .film-page h1[data-v-0eb7b157] {
            color: #ffffff;
            padding-bottom: 15px;
            position: relative;
        }
        .film-page .line[data-v-0eb7b157] {
            width: 100%;
            height: 3px;
            background: linear-gradient(90deg, #EB5804 0%, rgba(0, 0, 0, 0) 90%);
            margin-bottom: 45px;
        }
        .film-page img[data-v-0eb7b157] {
            -o-object-fit: cover;
            object-fit: cover;
            border-radius: 10px;
            width: 1160px;
            height: 600px;
            margin-bottom: 30px;
        }
        .film-page .section__title[data-v-0eb7b157] {
            color: #EB5804;
            font-weight: 700;
            font-size: 25px;
            margin-bottom: 10px;
        }
        .film-page .section__description[data-v-0eb7b157] {
            color: #ffffff;
            font-size: 18px;
            line-height: 30px;
        }
        .film-page .review h3[data-v-0eb7b157] {
            color: #ffffff;
        }
        .film-page .review p[data-v-0eb7b157] {
            font-weight: 600;
            font-size: 18px;
            color: #EB5804;
        }
        .film-page .review ul[data-v-0eb7b157] {
            padding-left: 0;
            list-style: none;
            display: flex;
        }
        .film-page .review ul li[data-v-0eb7b157] {
            margin-right: 15px;
        }</style><style type="text/css">.not-found[data-v-d989eb38] {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .not-found h1[data-v-d989eb38] {
            color: #ffffff;
            font-size: 70px;
            margin-bottom: 20px;
        }</style><style type="text/css">.auth-modal {
            padding: 30px 40px;
        }
        .auth-modal form {
            display: flex;
            flex-direction: column;
            height: 100%;
        }
        .auth-modal form h3 {
            margin-bottom: 30px;
        }
        .auth-modal form label {
            width: 100%;
            margin-bottom: 20px;
        }
        .auth-modal form .actions {
            margin-top: auto;
            display: flex;
            align-items: baseline;
        }
        .auth-modal form .actions a {
            color: #EB5804;
        }
        .auth-modal form .actions button {
            width: 130px;
            margin-left: 10px;
        }
        .auth-modal form .actions button:first-of-type {
            margin-left: auto;
        }
        .scroll {
            width: 440px;
            heigth: 500px;
            overflow: scroll;
        }</style><style type="text/css">.reg-modal {
            padding: 30px 40px;
        }
        .reg-modal form {
            display: flex;
            flex-direction: column;
            height: 100%;
        }
        .reg-modal form h3 {
            margin-bottom: 30px;
        }
        .reg-modal form label {
            width: 100%;
            margin-bottom: 20px;
        }
        .reg-modal form .actions {
            margin-top: auto;
            display: flex;
            align-items: baseline;
        }
        .reg-modal form .actions a {
            color: #EB5804;
        }
        .reg-modal form .actions button {
            width: 130px;
            margin-left: 10px;
        }
        .reg-modal form .actions button:first-of-type {
            margin-left: auto;
        }
        .scroll {
            width: 440px;
            heigth: 500px;
            overflow: scroll;
        }</style><style type="text/css">header[data-v-4f11bcd6] {
            background-color: #0c0c0c;
            padding: 20px 0;
        }
        header .container[data-v-4f11bcd6] {
            margin-top: 0;
            display: flex;
            align-items: baseline;
        }
        header a[data-v-4f11bcd6] {
            text-decoration: none;
            font-weight: 700;
            color: #ffffff;
            font-size: 25px;
        }
        header .logo[data-v-4f11bcd6] {
            color: #EB5804;
            font-size: 30px;
        }
        header .links[data-v-4f11bcd6] {
            margin-left: 75px;
            display: flex;
            flex-grow: 1;
        }
        header button[data-v-4f11bcd6] {
            margin-left: auto;
        }</style><style type="text/css">
        .vue-modal-resizer {
            display: block;
            overflow: hidden;
            position: absolute;
            width: 12px;
            height: 12px;
            right: 0;
            bottom: 0;
            z-index: 9999999;
            background: transparent;
            cursor: se-resize;
        }
        .vue-modal-resizer::after {
            display: block;
            position: absolute;
            content: '';
            background: transparent;
            left: 0;
            top: 0;
            width: 0;
            height: 0;
            border-bottom: 10px solid #ddd;
            border-left: 10px solid transparent;
        }
        .vue-modal-resizer.clicked::after {
            border-bottom: 10px solid #369be9;
        }
    </style><style type="text/css">
        .vm--block-scroll {
            overflow: hidden;
            width: 100vw;
        }
        .vm--container {
            position: fixed;
            box-sizing: border-box;
            left: 0;
            top: 0;
            width: 100%;
            height: 100vh;
            z-index: 999;
        }
        .vm--overlay {
            position: fixed;
            box-sizing: border-box;
            left: 0;
            top: 0;
            width: 100%;
            height: 100vh;
            background: rgba(0, 0, 0, 0.2);
            /* z-index: 999; */
            opacity: 1;
        }
        .vm--container.scrollable {
            height: 100%;
            min-height: 100vh;
            overflow-y: auto;
            -webkit-overflow-scrolling: touch;
        }
        .vm--modal {
            position: relative;
            overflow: hidden;
            box-sizing: border-box;

            background-color: white;
            border-radius: 3px;
            box-shadow: 0 20px 60px -2px rgba(27, 33, 58, 0.4);
        }
        .vm--container.scrollable .vm--modal {
            margin-bottom: 2px;
        }
        .vm--top-right-slot {
            display: block;
            position: absolute;
            right: 0;
            top: 0;
        }
        .vm-transition--overlay-enter-active,
        .vm-transition--overlay-leave-active {
            transition: all 50ms;
        }
        .vm-transition--overlay-enter,
        .vm-transition--overlay-leave-active {
            opacity: 0;
        }
        .vm-transition--modal-enter-active,
        .vm-transition--modal-leave-active {
            transition: all 400ms;
        }
        .vm-transition--modal-enter,
        .vm-transition--modal-leave-active {
            opacity: 0;
            transform: translateY(-20px);
        }
        .vm-transition--default-enter-active,
        .vm-transition--default-leave-active {
            transition: all 2ms;
        }
        .vm-transition--default-enter,
        .vm-transition--default-leave-active {
            opacity: 0;
        }
    </style><style type="text/css">
        .vue-dialog {
            font-size: 14px;
        }
        .vue-dialog div {
            box-sizing: border-box;
        }
        .vue-dialog-content {
            flex: 1 0 auto;
            width: 100%;
            padding: 14px;
        }
        .vue-dialog-content-title {
            font-weight: 600;
            padding-bottom: 14px;
        }
        .vue-dialog-buttons {
            display: flex;
            flex: 0 1 auto;
            width: 100%;
            border-top: 1px solid #eee;
        }
        .vue-dialog-buttons-none {
            width: 100%;
            padding-bottom: 14px;
        }
        .vue-dialog-button {
            font-size: inherit;
            background: transparent;
            padding: 0;
            margin: 0;
            border: 0;
            cursor: pointer;
            box-sizing: border-box;
            line-height: 40px;
            height: 40px;
            color: inherit;
            font: inherit;
            outline: none;
        }
        .vue-dialog-button:hover {
            background: #f9f9f9;
        }
        .vue-dialog-button:active {
            background: #f3f3f3;
        }
        .vue-dialog-button:not(:first-of-type) {
            border-left: 1px solid #eee;
        }
    </style><style type="text/css">html {
            font-family: "Roboto", sans-serif;
            color: #474747;
        }

        body {
            background-color: #141414;
        }

        h1, h2, h3, h4 {
            font-weight: 700;
            color: #333333;
            margin-top: 0;
        }

        .flex {
            display: flex;
        }

        .list-default {
            padding-left: 0;
            margin-bottom: 0;
            list-style: none;
        }
        .list-default li {
            font-size: 16px;
            margin-bottom: 14px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            margin-top: 40px;
        }</style></head>
<body>
<noscript>
    <strong>We're sorry but photofind doesn't work properly without JavaScript enabled. Please enable it to continue.</strong>
</noscript>
<script src="scripts.js"></script>

<style>
    .vm--container{
        display: none;
    }
</style>

<script>
    //window.addEventListener('click', function(e) {
    //    if (e.target.name != "sign_up" && e.target.name != "sign_in") {
    //        if (e.target.id != "sign_up_div" && document.getElementById('sign_up_div').style.display == 'block')
    //        {
    //            document.getElementById('sign_up_div').style.display = 'none';
    //        }
    //        else if (e.target.id != "sign_in_div" && document.getElementById('sign_in_div').style.display == 'block')
    //        {
    //            document.getElementById('sign_in_div').style.display = 'none';
    //        }
    //    }
    //});
</script>

<div data-v-4f11bcd6="" class="vm--container" id = "sign_in_div">
<div  aria-expanded="true" role="dialog" aria-modal="true" class="vm--modal reg-modal" style="top: 111px; left: 246px; width: 500px; height: 500px;">
    <form id = "sign_in_form" type = "reset">
        <h3>Зарегистрироваться</h3>
        <div class="scroll">
            <label> Фамилия
                <input type="second_name" placeholder="Ваша фамилия" class="form-control">
            </label>
            <label> Имя
                <input type="first_name" placeholder="Ваше имя" class="form-control">
            </label>
            <label> Логин
                <input type="username" placeholder="Ваш логин" class="form-control">
            </label>
            <label> Пароль
                <input type="password" placeholder="Ваш пароль" class="form-control">
            </label>
            <label> Email
                <input type="mail" placeholder="Ваша эл. почта" class="form-control">
            </label>
            <label> Номер телефона
                <input type="phone_number" placeholder="Ваш номер телефона" class="form-control">
            </label>
            <input type="checkbox" id="checkbox">
            <label for="checkbox">Я не фотограф</label>
        </div><div class="actions">
            <a href="#"> Регистрация </a>
            <button type="button" onclick ="script_sign_in_off();" class="btn btn-outline-dark"> Отмена </button>
            <button type="button" onclick= "script_sign_in_off();"class="btn btn-dark"> Подтвердить </button>
        </div>
    </form>
</div>
</div>

<div data-v-4f11bcd6="" class="vm--container" id = "sign_up_div" type = "reset">
    <div data-modal="auth-modal" aria-expanded="true" class="vm--overlay">
        <div class="vm--top-right-slot"></div>
    </div> <div aria-expanded="true" role="dialog" aria-modal="true" class="vm--modal auth-modal" style="top: 111px; left: 123px; width: 500px; height: 500px;">
        <form id = "sign_up_form" type = "reset">
            <h3>Войти</h3>
            <label> Логин
                <input type="username" placeholder="Ваш логин" name = "login" class="form-control">
            </label>
            <label> Пароль
                <input type="password" placeholder="Ваш пароль" name = "password" class="form-control">
            </label>
            <div class="actions">
                <a href="#"> Вход </a>
                <button type="button" onclick = "script_sign_up_off();" class="btn btn-outline-dark"> Отмена </button>
                <button type="button" onclick= "logging();" name = "submit" class="btn btn-dark"> Подтвердить </button>

            </div>
        </form>
    </div>
</div>

<div id="app">
    <div class="films-layout">
        <header data-v-4f11bcd6="">
            <div data-v-4f11bcd6="" class="container" >
                <a data-v-4f11bcd6="" href="" class="logo router-link-active"> НайдиФотографа </a>
                <div data-v-4f11bcd6="" class="links">
                    <a data-v-4f11bcd6="" href="" aria-current="page" class="router-link-exact-active router-link-active"> Карта </a>
                    <button onclick="script_sign_up();" data-v-4f11bcd6="" name = "sign_up" type="button" class="btn btn-outline-light btn-lg"> Войти </button>
                    <button onclick="script_sign_in();" data-v-4f11bcd6="" name = "sign_in" type="button"  class="btn btn-outline-light btn-lg"> Зарегистрироваться </button>
                </div>
            </div><!----><!---->
        </header>
        <div data-v-46df9a21="" class="films-page container">
            <h2 data-v-46df9a21="">Найди своего фотографа</h2>
            <div data-v-724b2ba6="" data-v-46df9a21="" class="film-list"></div>
        </div>
    </div>
</div>
<!-- built files will be auto injected -->
</body></html>



