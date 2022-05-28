<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/index.css">
    <link
            href="https://fonts.googleapis.com/css2?family=Lato&family=Manrope:wght@400;500&family=Playfair+Display:wght@400;700&display=swap"
            rel="stylesheet">
    <title>FF VRN</title>
</head>
<body>

<svg style="display: none">
    <symbol viewBox="0 0 982.000000 176.000000" id="logo">

        <g transform="translate(0.000000,176.000000) scale(0.100000,-0.100000)">
            <path d="M875 1540 c-314 -3 -579 -9 -590 -14 -97 -44 -174 -131 -194 -217 -6
-25 -12 -276 -14 -594 l-4 -550 206 1 206 1 1 264 2 264 376 3 377 2 -3 153
-3 152 -372 3 -372 2 -3 52 -3 53 -95 47 c-163 81 -183 78 484 78 l586 0 0
155 c0 85 -3 154 -7 153 -5 -2 -264 -5 -578 -8z"/>
            <path d="M2510 1540 c-563 -5 -565 -5 -613 -28 -58 -28 -119 -86 -148 -144
-22 -42 -23 -53 -31 -603 -4 -308 -7 -568 -6 -578 3 -18 17 -19 206 -20 l202
-2 0 268 0 267 380 0 380 0 0 155 0 155 -377 2 -378 3 -3 52 -3 51 -84 41
c-45 23 -88 41 -94 41 -6 0 -11 9 -11 20 0 20 7 20 579 20 377 0 582 4 586 10
8 13 -6 301 -14 298 -3 -2 -260 -5 -571 -8z"/>
            <path d="M4294 1540 c2 -3 10 -21 19 -40 25 -56 86 -188 128 -278 21 -46 39
-86 39 -88 0 -2 27 -60 60 -130 33 -69 60 -128 60 -129 0 -2 20 -45 44 -97 24
-51 55 -118 68 -148 14 -30 40 -85 57 -122 17 -38 44 -96 60 -130 16 -35 44
-97 63 -138 l35 -75 209 2 c207 2 209 3 219 25 5 13 28 63 51 113 23 50 53
115 66 145 14 30 40 85 57 123 17 37 45 97 62 135 17 37 46 99 64 137 18 39
43 93 55 120 13 28 40 88 62 135 73 154 96 204 132 285 20 44 41 88 47 98 5
10 14 28 18 40 l9 22 -202 -2 -201 -2 -34 -73 c-18 -40 -46 -101 -62 -135 -16
-35 -43 -93 -60 -130 -40 -86 -84 -181 -120 -260 -16 -35 -42 -91 -58 -125
-16 -35 -43 -93 -60 -130 -17 -38 -36 -68 -44 -68 -12 0 -43 59 -140 270 -34
74 -52 113 -139 300 -24 52 -58 124 -74 159 -16 35 -43 93 -59 128 l-30 65
-202 1 c-110 1 -200 0 -199 -3z"/>
            <path d="M6230 855 l0 -690 200 0 200 0 -2 155 -3 155 -92 45 c-64 31 -93 50
-93 63 0 16 19 17 267 17 l268 0 217 -217 216 -216 196 -1 c108 -1 196 -1 196
0 0 0 -90 90 -200 199 -110 110 -200 207 -200 216 0 14 15 17 98 21 77 3 107
8 142 27 61 31 116 86 148 146 l27 50 0 245 0 245 -27 50 c-33 63 -84 114
-145 146 l-48 24 -683 5 -682 5 0 -690z m1180 215 l0 -170 -387 2 -388 3 -3
107 -3 106 -94 46 c-159 77 -166 76 390 76 l485 0 0 -170z"/>
            <path d="M8140 855 l0 -690 200 0 200 0 0 438 c0 424 1 437 19 437 13 0 62
-50 139 -142 66 -79 128 -152 139 -163 10 -11 35 -40 55 -65 52 -64 214 -256
275 -326 28 -32 74 -86 101 -118 l50 -60 206 0 206 -1 2 673 c1 369 2 679 2
687 1 14 -27 16 -204 16 l-205 1 -3 -436 c-2 -361 -5 -436 -16 -436 -7 0 -33
23 -57 52 -24 28 -73 86 -109 128 -36 42 -108 128 -162 191 -53 63 -170 201
-261 307 l-164 193 -207 2 -206 2 0 -690z"/>
        </g>
    </symbol>
</svg>

<header class="header">
    <div class="container">
        <div class="header__inner">
            <div class="header__logo">
                <svg class="logo_img">
                    <use xlink:href="#logo"></use>
                </svg>
            </div>
            <div class="nav">
                <a href="#" class="nav__item">Главная</a>
                <a href="#" class="nav__item">О нас</a>
                <a href="#" class="nav__item">Тарифы</a>
                <a href="#" class="nav__item">Контакты</a>
            </div>
            <?php if (empty($_SESSION['login']) or empty($_SESSION['id']))
            { ?>
                <a href="#" class="header__btn">Войти</a>
            <div class="logbox">
                <div class="slider">
                    <form action="testreg.php" method="post">
                        <p>
                            <label>Логин:<br></label>
                            <input name="login" type="text" size="15" maxlength="15">
                        </p>
                        <p>
                            <label>Пароль:<br></label>
                            <input name="password" type="password" size="15" maxlength="15">
                        </p>
                        <p>
                            <input class="Voiti" type="submit" name="submit" value="Войти">
                            <br>
                            <a>Вы вошли на сайт как гость. </a> <a href="reg.php">Зарегистрироваться</a>
                        </p>
                    </form>

                </div>
        </div>
    </div>

    </div>

                <?php
            }
            else{
                ?>
                <a href="#" class="header__btn">Личный кабинет</a>

            <?php }
                ?>
        </div>
</header>
</body>
</html>