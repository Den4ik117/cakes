<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CAKES</title>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    @vite('resources/scss/index.scss')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Nunito:wght@400;500;600;700;800;900;1000&display=swap" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <header class="header">
            <div class="container">
                <div class="header__content">
                    <a class="header__logo" href="#lead">CAKES</a>
                    <nav class="header__nav">
                        <ul class="header__list">
                            <li class="header__item"><a href="#lead" class="header__link active">Главная</a></li>
                            <li class="header__item"><a href="#about" class="header__link">Обо мне</a></li>
                            <li class="header__item"><a href="#examples" class="header__link">Примеры</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>

        <section id="lead" class="lead">
            <img class="lead__background" src="{{ asset('images/background.jpg') }}" alt="Еда: персик, сливы, джем, пастила и многое-многое другое">
            <div class="lead__content">
                <div class="container">
                    <div class="lead__headers">
                        <div class="lead__title">Домашняя выпечка<br>и<br>кондитерские изделия</div>
                        <div class="lead__author">от<br>Дениса Загвоздина</div>
                    </div>
                </div>
            </div>
            <a class="lead__button" href="#examples">Перейти к галерее</a>
        </section>

        <section id="about" class="about">
            <div class="container">
                <div class="about__title">Обо мне</div>
                <div class="about__content">
                    <img class="about__author" src="{{ asset('images/author.jpg') }}" alt="Denis Zagvozdin">
                    <div class="about__description">
                        <p>Всем привет! Меня зовут Денис Загвоздин, и я расскажу вам историю.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium architecto at, consequuntur debitis dolor dolorem, ea eius eligendi eum eveniet illo inventore ipsum pariatur quas ratione sapiente vitae voluptate?</p>
                        <p>Заказать у меня работу Вы можете по контактам, указанным ниже.</p>
                        <ul class="about__list">
                            <li class="about__item">
                                <a class="about__link" href="https://vk.com/denchik1170" target="_blank">VK</a>
                            </li>
                            <li class="about__item">
                                <a class="about__link" href="https://t.me/denchik1170" target="_blank">Telegram</a>
                            </li>
                            <li class="about__item">
                                <a class="about__link" href="https://wa.me/79080675295" target="_blank">WhatsApp</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section id="examples" class="examples">
            <div class="examples__content">
                @foreach(['01', '02', '03', '04', '03', '04', '01', '02'] as $i)
                    <div class="examples__card card">
                        <img class="card__image" src="{{ asset('images/examples/' . $i . '.jpg') }}" alt="Свежая еда, выпечка, вкуснятина">
                        <div class="card__background"></div>
                    </div>
                @endforeach
            </div>
        </section>
    </div>
</body>
</html>
