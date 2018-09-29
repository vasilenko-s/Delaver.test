<!DOCTYPE html>
<?php
//$users=\App\Article::find(2)->users;
//dump($users);

//dump($path);
//
//$request=Request::all();
//dump($request);

    use App\Article;
    use App\User;

//Article::destroy(2);
//
//$article = Article::withTrashed()->find(2);
//
//$user = User::find(1);
//
////dump($user);
//
//dump($article->isAuthor($user));

        User::userExp();



//dump($article->users);

//?>
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

 {{--ошибки валидации формы--}}
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li> {{ $error }}</li>
            @endforeach
        </ul>


    </div>
@endif


<div class="wrapper">
    <main class="main-content">
        <div class="my-profile">
            <h2 class="heading">Мой профиль</h2>
            <div class="profile">
                <div class="avatar">
                    <img src="storage/img/image.jpg" alt="Аватар" class="avatar__pic">
                </div>
                <div class="information">
                    <div class="nickname">Nickname</div>
                    <div class="user-name">
                        <span class="name">Имя</span>
                        <span class="surname">Фамилия</span>
                    </div>
                    <a href='tel:+11111111' class="phone">+1 111 11-11-11</a>
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
                        <input class='form__input' id='nickname' name='nickname' type="text">
                    </li>
                    <li class="form__item">
                        <label class='form__label' for="name">Имя:</label>
                        <input class='form__input' id='name' name='name' type="text">
                    </li>
                    <li class="form__item">
                        <label class='form__label' for="surname">Фамилия:</label>
                        <input class='form__input' id='surname' name='surname' type="text">
                    </li>
                    <li class="form__item">
                        <label class='form__inline-label' for="avatar">Аватар:</label>
                        <input class='form__inline-input' id='avatar' name='avatar' type="file" value='image/jpeg,image/png'>
                    </li>
                    <li class="form__item">
                        <label class='form__label' for="phone">Телефон:</label>
                        <input class='form__input' id='phone' name='phone' type="text">
                    </li>
                    <li class="form__item">
                        <div class="form__title">Пол:</div>
                        <label class='form__inline-label' for="male">Мужской</label>
                        <input class='form__inline-input' name='sex' id='male' value='male' type="radio">
                        <label class='form__inline-label' for="female">Женский</label>
                        <input class='form__inline-input' name='sex' id='female' value='female' type="radio">
                    </li>
                    <li class="form__item">
                        <label class='form__inline-label' for="showPhone">Я согласен получать email-рассылку</label>
                        <input class='form__inline-input' name='showPhone' id='showPhone' type="checkbox">
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