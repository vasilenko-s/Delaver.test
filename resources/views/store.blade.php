<!DOCTYPE html>
<?php
//
?>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Test</title>
    <link rel="stylesheet" href="css/main.css">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>



<div class="wrapper">
    <main class="main-content">
        <div class="my-profile">
            <h2 class="heading">Мой профиль</h2>
            <div class="profile">
                <div class="avatar">

                    <img src="{{ Storage::url('img/'.$filename) }} " alt="Аватар" class="avatar__pic">

                </div>
                <div class="information">
                    <div class="nickname">{{ Request::input('nickname') }}</div>
                    <div class="user-name">
                        <span class="name">{{ Request::input('name') }}</span>
                        <span class="surname">{{ Request::input('surname') }}</span>
                    </div>
                    <a href='tel:+11111111' class="phone">{{ Request::input('phone') }}</a>
                </div>
            </div>
        </div>
        <div class='edit-profile'>
            <h2 class="heading">Редактировать профиль</h2>
            <form class='form' id='form' method='POST' enctype='multipart/form-data'>
                {{ csrf_field() }}
                <ul class="form__list">
                    <li class="form__item">
                        <label class='form__label' for="nickname">Никнейм:</label>
                        <input class='form__input' id='nickname' name='nickname' type="text" value="{{ Request::input('nickname') }} " readonly >
                    </li>
                    <li class="form__item">
                        <label class='form__label' for="name">Имя:</label>
                        <input class='form__input' id='name' name='name' type="text" value="{{ Request::input('name') }}" readonly >
                    </li>
                    <li class="form__item">
                        <label class='form__label' for="surname">Фамилия:</label>
                        <input class='form__input' id='surname' name='surname' type="text" value="{{ Request::input('surname')  }}" readonly >
                    </li>
                    <li class="form__item">
                        <label class='form__inline-label' for="avatar">Аватар:</label>
                        <input class='form__inline-input' id='avatar' name='avatar' type="file" disabled >
                    </li>
                    <li class="form__item">
                        <label class='form__label' for="phone">Телефон:</label>
                        <input class='form__input' id='phone' name='phone' type="text" value="{{ Request::input('phone')  }}" readonly>
                    </li>
                    <li class="form__item">
                        <div class="form__title">Пол:</div>
                        <label class='form__inline-label' for="male">Мужской</label>
                        <input class='form__inline-input' name='sex' id='male' value='male' type="radio"
                               <?php if(Request::input('sex') == 'male') echo 'checked'; ?> disabled >
                        <label class='form__inline-label' for="female">Женский</label>
                        <input class='form__inline-input' name='sex' id='female' value='female' type="radio"
                               <?php if(Request::input('sex') == 'female') echo 'checked'; ?> disabled >
                    </li>
                    <li class="form__item">
                        <label class='form__inline-label' for="showPhone">Я согласен получать email-рассылку</label>
                        <input class='form__inline-input' name='showPhone' id='showPhone' type="checkbox"
                               <?php if(Request::input('showPhone') == 'on') echo 'checked'; ?> disabled >
                    </li>
                    <li class="form__item">
                        <button class='form__button' type="submit">Отправить</button>
                    </li>
                </ul>
            </form>
        </div>
    </main>
</div>
</body>
</html>