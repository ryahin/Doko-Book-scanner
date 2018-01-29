<?php
session_start();
include("simple-php-captcha.php");
$_SESSION['captcha'] = simple_php_captcha(array(
    'characters' => 'ABCDEFGHJKLMNPRSTUVWXYZ23456789',
));
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>DOKO – недорогие книжные сканеры нового поколения</title>
    <link rel="icon" type="image/png" href="favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <meta name="description" content="Книжные сканеры DOKO – быстрое и качественное сканирование книг, сброшюрованных папок и текстовых документов формата A3. Скорость сканирования до 40 страниц в минуту!">
    <meta name="keywords" content="книжный сканер, сканирование книг, сканер A3, сканирование сброшюрованных папок, CZUR ET16, DOKO BS16, бесконтактное сканирование, 3D сканирование">
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#home"><img src="img/doko-logo.png" alt=""></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <div class="consultation navbar-right">
                    <span class="phone">+7 (495) 366-45-08</span>
                    <a href="#" class="btn" data-toggle="modal" data-target="#popup-form">Консультация</a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#usage" class="page-scroll">возможности сканера</a></li>
                    <li><a href="#models" class="page-scroll">модели сканеров DOKO</a></li>
                    <li><a href="#applying" class="page-scroll">сферы применения</a></li>
                    <li><a href="#documentation" class="page-scroll">документация</a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
        <!--/.navbar-collapse -->
        </div>
    </nav>
    <header class="light-bg" data-paroller-factor="0.2" id="home">
        <div class="right-bg" data-paroller-factor="0.2"></div>
        <div class="container" data-paroller-factor="0.2">
            <!-- <img src="img/header-bg.jpg" alt=""> -->
            <div class="info">
                <p>
                    DOKO &mdash; серия интеллектуальных сканеров нового поколения, построенных на базе цифровой камеры высокого разрешения. Устройства обеспечивают быстрое и качественное сканирование самых различных объектов размером от визитки до книжных разворотов формата A3.
                </p>
            </div>
        </div>
    </header>
    <section id="usage" class="light-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-md-offset-1 col-sm-6">
                    <div class="img-wrapper"><img src="img/usage/1.png" alt=""></div>
                    <p>Скорость 30 страниц в минуту</p>
                </div>
                <div class="col-md-2 col-sm-6">
                    <div class="img-wrapper"><img src="img/usage/2.png" alt=""></div>
                    <p>Сканирование разворотов папок и книг</p>
                </div>
                <div class="col-md-2 col-sm-6">
                    <div class="img-wrapper"><img src="img/usage/3.png" alt=""></div>
                    <p>Область сканирования вплоть до A3</p>
                </div>
                <div class="col-md-2 col-sm-6">
                    <div class="img-wrapper"><img src="img/usage/4.png" alt=""></div>
                    <p>Матрица 16 мегапикселей (300&nbsp;dpi)</p>
                </div>
                <div class="col-md-2 col-sm-12">
                    <div class="img-wrapper"><img src="img/usage/5.png" alt=""></div>
                    <p>Встроенный модуль распознавания OCR ABBYY</p>
                </div>
            </div>
        </div>
    </section>
    <section id="book-spread" class="dark-bg" data-paroller-factor="0.4">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="book-wrapper">
                        <img src="img/book/photo-page.jpg" alt="">
                        <div class="separator">
                            <img id="separator-line" src="img/book/separator.jpg" alt="">
                            <img id="scanned-page" src="img/book/scanned-page.png" alt="">
                        </div>
                    </div>
                    <!-- <img src="img/book.jpg" alt=""> -->
                </div>
            </div>
        </div>
    </section>
    <section id="correction" class="light-bg">
        <div class="container">
            <h2>Автоматическая коррекция искажений страниц</h2>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-5 col-sm">
                    <img src="img/correction.png" alt="">
                    <ol>
                        <li>Выравнивание изгиба страниц книжного разворота</li>
                        <li>Цветовая коррекция и удаление фонового шума</li>
                        <li>Выравнивание положения и обрезка краев страниц</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section id="options">
        <div class="container">
            <!-- <img src="img/options-bg.jpg" alt=""> -->
            <div class="row">
                <div class="col-md-6">
                    <div class="item-text item-top">
                        <p><img src="img/rows.png" alt=""> Встроенный ЖК-экран предназначен для предварительного просмотра изображения с целью правильного позиционирования документа или предмета в поле зрения сканера.</p>
                    </div>
                    <div class="item-text">
                        <p><img src="img/rows.png" alt=""> Выносная USB-кнопка сканирования позволяет сделать процесс сканирования более комфортным.</p>
                    </div>
                    <div class="item-text">
                        <p><img src="img/rows.png" alt=""> Идущий в комплекте черный тканевый мат рекомендуется использовать в качестве фона для документа или предмета с целью повышения контраста изображения.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="photos" class="light-bg gradient-bottom-gray">
        <div class="container">
            <div class="col-md-4">
                <div class="item-wrapper top-item">
                    <img src="img/items/1.jpg" alt="">
                    <p>HD CMOS камера высокой четкости
                        <br> 4608x3456 (300 dpi)</p>
                </div>
                <div class="item-wrapper bottom-item">
                    <img src="img/items/2.jpg" alt="">
                    <p>HDMI выход
                        <br>вывод изображения на экран FullHD</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="item-wrapper center-item">
                    <img src="img/items/3.jpg" alt="">
                    <p>32-bit MIPS процессор
                        <br>1,5 сек/стр. (до 40 стр./мин.)</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="item-wrapper top-item">
                    <img src="img/items/4.jpg" alt="">
                    <p>Светодиодная подсветка
                        <br>10 LED-диодов</p>
                </div>
                <div class="item-wrapper bottom-item relative-item">
                    <img src="img/items/5.jpg" alt="">
                    <p>Wi-Fi модуль<sup>*</sup>
                        <br>передача изображений в «облако»</p>
                    <span class="item-description">
                        * только в модели DOKO CZUR ET16
                    </span>
                </div>
            </div>
        </div>
    </section>
    <section id="recognition" class="clean-bg">
        <div class="container">
            <h2>Распознавание текста модулем OCR ABBYY</h2>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <img src="img/recognition.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <section id="models" class="light-bg gradient-top-gray">
        <div class="container">
            <div class="col-md-5 col-md-offset-1">
                <div class="item-wrapper">
                    <img src="img/models/1.jpg" alt="">
                    <div class="title">DOKO CZUR ET16</div>
                    <div class="text-wrapper">
                        <p>DOKO CZUR ET16 обеспечивает быстрое и качественное сканирование самых различных объектов размером от визитки до формата A3: текстовых документов, рисунков чертежей, разворотов книг, сброшюрованных папок с делами и даже трехмерных предметов.</p>
                        <p>Отличительной особенностью модели является встроенный модуль Wi-Fi, предназначенный для загрузки отсканированных устройством изображений в облачное интернет хранилище.</p>
                    </div>
                    <div class="btns">
                        <div class="row">
                            <div class="col-md-6">
                                <span class="btn btn-default no-click">Цена: 39 995 &#8381;</span>
                            </div>
                            <div class="col-md-6">
                                <a href="#" class="btn btn-primary buy-button" data-model="1" data-toggle="modal" data-target="#buy-form">Купить</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="item-wrapper">
                    <img src="img/models/2.jpg" alt="">
                    <div class="title">DOKO BS16</div>
                    <div class="text-wrapper">
                        <p>DOKO BS16 также обеспечивает быстрое и качественное сканирование разнообразных двумерных и трехмерных объектов формата вплоть до А3, но по сравнению с моделью ЕТ16 у нее отсутствует Wi-Fi модуль и нет поддержки ОС MacOS.</p>
                        <p>Отличительная особенность модели &ndash; возможность сохранять полученные изображения на внешних устройствах хранения данных (SD-карте или USB-диске).</p>
                    </div>
                    <div class="btns">
                        <div class="row">
                            <div class="col-md-6">
                                <span href="#" class="btn btn-default no-click">Цена: 29 995 &#8381;</span>
                            </div>
                            <div class="col-md-6">
                                <a href="#" class="btn btn-primary buy-button" data-model="2" data-toggle="modal" data-target="#buy-form">Купить</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="comparision" class="clean-bg">
        <div class="container">
            <h2>Сравнение моделей сканеров DOKO</h2>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="table-wrapper">
                        <table>
                            <tbody>
                                <tr class="table-header">
                                    <td class="first">Модель</td>
                                    <td class="second"><b>ET16</b></td>
                                    <td class="third"><b>BS16</b></td>
                                </tr>
                                <tr>
                                    <td>Матрица</td>
                                    <td>HD CMOS, 16 мегапикселей</td>
                                    <td>HD CMOS, 16 мегапикселей</td>
                                </tr>
                                <tr>
                                    <td>Оптическое разрешение</td>
                                    <td>4608х3456 (300 dpi)</td>
                                    <td>4608х3456 (300 dpi)</td>
                                </tr>
                                <tr>
                                    <td>Область сканирования</td>
                                    <td>A3 (одновременно две страницы A4)</td>
                                    <td>A3 (одновременно две страницы A4)</td>
                                </tr>
                                <tr>
                                    <td>Скорость сканирования</td>
                                    <td>1.5 сек/стр. (до 40 стр./мин.)</td>
                                    <td>1.5 сек/стр. (до 40 стр./мин.)</td>
                                </tr>
                                <tr>
                                    <td>Фокусировка</td>
                                    <td>Автоматическая</td>
                                    <td>Автоматическая</td>
                                </tr>
                                <tr>
                                    <td>Подсветка</td>
                                    <td>Светодиодная (10 LED-диодов)</td>
                                    <td>Светодиодная (10 LED-диодов)</td>
                                </tr>
                                <tr>
                                    <td>Встроенный экран</td>
                                    <td>TFT 2.4” (для позиционирования книги / документа)</td>
                                    <td>TFT 2.7” (для позиционирования книги / документа)</td>
                                </tr>
                                <tr>
                                    <td>Wi-Fi модуль</td>
                                    <td>Есть (для сохранения отсканированных изображений в бесплатном облачном хранилище)</td>
                                    <td>Нет</td>
                                </tr>
                                <tr>
                                    <td>Видеовыход</td>
                                    <td>HDMI (поддержка Full HD)</td>
                                    <td>HDMI и VGA (поддержка Full HD)</td>
                                </tr>
                                <tr>
                                    <td>Видеовход</td>
                                    <td>Нет</td>
                                    <td>VGA (поддержка режима сквозного сигнала)</td>
                                </tr>
                                <tr>
                                    <td>Внешняя память</td>
                                    <td>Облачное хранилище - 10 ГБ (сохранение изображений по Wi-Fi)</td>
                                    <td>USB-диск и SD-карта (до 32 ГБ)</td>
                                </tr>
                                <tr>
                                    <td>Режимы работы</td>
                                    <td>
                                        <b>Сканирование</b> (подключение к ПК по USB)
                                        <br>
                                        <b>Презентация</b> (просмотр на внешнем экране по HDMI)
                                        <br>
                                        <b>Wi-Fi</b> (сохранение изображений в облачном хранилище)
                                    </td>
                                    <td>
                                        <b>Сканирование</b> (подключение к ПК по USB)
                                        <br>
                                        <b>Презентация</b> (просмотр на внешнем экране по HDMI/VGA)
                                        <br>
                                        <b>Захват</b> (сохранение снимков на USB-диске/SD-карте)
                                    </td>
                                </tr>
                                <tr>
                                    <td>Кнопки сканирования</td>
                                    <td>На панели управления + выносная кнопка и ножная педаль (USB)</td>
                                    <td>На панели управления + выносная кнопка (USB)
                                        <br><i>Опционально - ножная педаль (USB)</i></td>
                                </tr>
                                <tr>
                                    <td>Коррекция изображений</td>
                                    <td>Выделение и выравнивание страниц, удаление фонового шума и отпечатков</td>
                                    <td>Выделение и выравнивание страниц, удаление фонового шума и отпечатков</td>
                                </tr>
                                <tr>
                                    <td>Распознавание текста</td>
                                    <td>Встроенный программный модуль OCR ABBYY</td>
                                    <td>Встроенный программный модуль OCR ABBYY</td>
                                </tr>
                                <tr>
                                    <td>Операционная система</td>
                                    <td><b>Windows</b> XP / 7 / 8 / 10 (32-bit и 64-bit)
                                        <br>
                                        <b>MacOS</b> 10.11 и выше</td>
                                    <td><b>Windows</b> XP / 7 / 8 / 10 (32-bit и 64-bit)</td>
                                </tr>
                                <tr>
                                    <td>Комплектация</td>
                                    <td>Сканер, выносная USB кнопка, ножная USB педаль, мат, USB кабель, комплект напальчников, адаптер питания, CD с ПО, руководство</td>
                                    <td>Сканер, выносная USB кнопка, пульт ДУ, мат, USB кабель, HDMI кабель, VGA кабель, адаптер питания, CD с ПО, руководство</td>
                                </tr>
                                <tr>
                                    <td>Гарантия</td>
                                    <td>12 месяцев</td>
                                    <td>12 месяцев</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="accessory" class="light-bg gradient-bottom-gray">
        <div class="container">
            <h2>Интерфейсы и аксессуары</h2>
            <div class="row">
                <div class="col-md-7">
                    <div class="big-wrapper">
                        <div class="title">ET16</div>
                        <img src="img/accessory/1-1.jpg" alt="">
                        <table>
                            <tr>
                                <td>HDMI видеовыход</td>
                                <td>USB для кнопки сканирования</td>
                                <td>USB для подключения к компьютеру</td>
                                <td>Разъем питания</td>
                                <td>Выключатель питания</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="small-wrapper">
                                <img src="img/accessory/1-2.png" alt="">
                                <p>Кнопка сканирования</p>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="small-wrapper">
                                <img src="img/accessory/1-3.png" alt="">
                                <p>Педаль сканирования</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="big-wrapper">
                        <div class="title">BS16</div>
                        <img src="img/accessory/2-1.jpg" alt="">
                        <table>
                            <tr>
                                <td>Слот для установки SD-карты памяти</td>
                                <td>USB для кнопки сканирования</td>
                                <td>HDMI видеовыход</td>
                                <td>VGA видеовход + видеовыход</td>
                                <td>USB для подключения к компьютеру + USB для мыши</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="small-wrapper center">
                                <img src="img/accessory/2-2.jpg" alt="">
                                <p>Кнопка сканирования</p>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="small-wrapper center">
                                <img src="img/accessory/2-3.jpg" alt="">
                                <p>Пульт ДУ</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="applying" class="clean-bg">
        <div class="container">
            <h2>Сферы применения</h2>
            <div class="row">
                <div class="col-md-2 col-md-offset-2 col-sm-4 col-xs-6">
                    <div class="img-wrapper"><img src="img/applying/1.jpg" alt=""></div>
                    <div class="title"><span>Бизнес-предприятия</span></div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="img-wrapper"><img src="img/applying/2.jpg" alt=""></div>
                    <div class="title"><span>Образование</span></div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="img-wrapper"><img src="img/applying/3.jpg" alt=""></div>
                    <div class="title"><span>Государственные учреждения</span></div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="img-wrapper"><img src="img/applying/4.jpg" alt=""></div>
                    <div class="title"><span>Музеи и библиотеки</span></div>
                </div>
                <div class="col-md-2 col-md-offset-2 col-sm-4 col-xs-6">
                    <div class="img-wrapper"><img src="img/applying/5.jpg" alt=""></div>
                    <div class="title"><span>Архивы</span></div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="img-wrapper"><img src="img/applying/6.jpg" alt=""></div>
                    <div class="title"><span>Финансовые организации</span></div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="img-wrapper"><img src="img/applying/7.jpg" alt=""></div>
                    <div class="title"><span>Архитектура и дизайн</span></div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="img-wrapper"><img src="img/applying/8.jpg" alt=""></div>
                    <div class="title"><span>Медицинские центры</span></div>
                </div>
            </div>
        </div>
    </section>
    <section id="photos-line">
        <div class="container"></div>
    </section>
    <section id="hdmi">
        <div class="bg-image">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <p>
                            <img src="img/rows.png" alt=""> Наличие HDMI видеовыхода позволяет использовать сканер DOKO в качестве документ-камеры, т.е. выводить «живое» изображение с HDTV разрешением (до 1920x1080) на устройство отображения (видеопроектор, монитор, экран, интерактивная доска) с возможностью выполнения с изображением различных презентационных эффектов.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="documentation" class="light-bg">
        <div class="container">
            <h2>Документация</h2>
            <div class="row documentation">
                <div class="col-md-5 col-md-offset-1">
                    <ul>
                        <li>
                            <a href="pdf/Руководство_пользователя_DOKO_ET16.pdf" target="_blank">
                                <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                Руководство пользователя DOKO CZUR ET16.pdf
                            </a>
                        </li>
                        <li>
                            <a href="pdf/Руководство_ПО_DOKO_CZUR_Scanner_(ET16).pdf" target="_blank">
                                <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                Руководство ПО DOKO CZUR Scanner (ET16).pdf
                            </a>
                        </li>
                        <li>
                            <a href="pdf/Краткое_руководство_DOKO_ET16.pdf" target="_blank">
                                <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                Краткое руководство DOKO CZUR ET16.pdf
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-5">
                    <ul>
                        <li>
                            <a href="pdf/Руководство_пользователя_DOKO_BS16.pdf" target="_blank">
                                <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                Руководство пользователя DOKO BS16.pdf
                            </a>
                        </li>
                        <li>
                            <a href="pdf/Руководство_ПО_DOKO_Book_Scanner_(BS16).pdf" target="_blank">
                                <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                Руководство ПО DOKO Book Scanner (BS16).pdf
                            </a>
                        </li>
                        <li>
                            <a href="pdf/Краткое_руководство_DOKO_BS16.pdf" target="_blank">
                                <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                Краткое руководство DOKO BS16.pdf
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <h3>Статьи и обзоры</h3>
            <div class="row documentation">
                <div class="col-md-10 col-md-offset-1">
                    <ul>
                        <li>
                            <a href="pdf/Внимательный_взгляд_на_книжный_сканер_DOKO_BS16.pdf" target="_blank">
                                <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                Внимательный взгляд на книжный сканер DOKO BS16.pdf &#160;[Статья]
                            </a>
                        </li>
                        <br>
                        <li>
                            <a href="http://www.ixbt.com/printers/doko-bs16-review.html" target="_blank">
                                <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                Обзор проекционного документ-сканера Doko BS16 &#160;[iXBT.com]
                            </a>
                        </li>
                        <li>
                            <iframe width="784" height="441" src="https://www.youtube.com/embed/9ImXJiVevPg?rel=0" frameborder="0" allowfullscreen>
                            </iframe>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="buy-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2>Заявка</h2>
                    <p>Вы можете разместить заявку на нужную модель<br>
                    сканера DOKO, заполнив следующую форму.<br>
                    (Или просто напишите нам по адресу <a href="mailto:info@doc-cam.ru">info@doc-cam.ru</a><br>
                    или позвоните к нам в офис по телефону <nobr><b>(495) 366-90-06</b></nobr> и <nobr><b>366-45-08</b></nobr>.)</p>
                    <form class="form-inline" id="buy-selected-model-bottom" action="submit2.php" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="user_email" placeholder="Ваш e-mail" name="user_email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select class="form-control" id="model-bottom" name="model">
                                        <option value="0" selected="selected">Выбор модели</option>
                                        <option value="1">DOKO CZUR ET16</option>
                                        <option value="2">DOKO BS16</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" id="order_body" name="order_body" placeholder="Сообщение"></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div id="form-message-bottom"></div>
                                        <div class="row">
                                            <div class="captcha-wrapper col-sm-4 col-sm-offset-4">
                                                <img class="captcha-img" src="<?= $_SESSION['captcha']['image_src']; ?>">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Введите код" name="captcha">
                                                </div>
                                            </div>
                                        </div>
                                        <button id="button-send-by" type="submit" class="btn btn-danger">Отправить заявку</button>
                                        <p class="send">
                                            Нажимая кнопку "Отправить заявку", вы соглашаетесь с <a href="#" class="politics">политикой конфиденциальности</a>.
                                        </p>
                                        <div class="politics-info">
                                            <p>
                                                Настоящее Положение о политике конфиденциальности является официальным документом ООО «Стоик-М», расположенного по адресу: 105318, Москва, ул. Вельяминовская, д. 34 (далее — «Компания»), и определяет порядок обработки и защиты информации о физических лицах (далее — Пользователи), пользующихся сервисами, информацией, услугами, программами и продуктами интернет-сайта, расположенного на доменном имени <a href="http://www.book-scanner.ru">www.book-scanner.ru</a> (далее — Сайт).
                                                <ol>
                                                    <li>
                                                        Компания через Сайт запрашивает и получает минимальный объем информации о Пользователе, не позволяющий его идентифицировать.
                                                    </li>
                                                    <li>
                                                        Информация о Пользователе необходима Компании для осуществления обратной связи с Пользователем с целью ответа на отправляемые через Сайт вопросы и запросы, в том числе для выполнения размещаемых Пользователем заказов на продукцию или услуги Компании. 
                                                    </li>
                                                    <li>
                                                        Предоставляя подобную информацию, Пользователь даёт Компании своё согласие на обработку и использование своих данных согласно ФЗ № 152-ФЗ «О персональных данных» от 27.07.2006 г. различными способами в целях, указанных в настоящем Положении.
                                                    </li>
                                                    <li>
                                                        Компания использует предоставленную информацию о Пользователе только в целях:
                                                        <ul>
                                                            <li>ответа на запросы Пользователя в Компанию, в том числе с использованием средств электронной связи;</li>
                                                            <li>оформления размещаемого Пользователем заказа в Компании;</li>
                                                            <li>для выполнения Компанией своих обязательств перед Пользователем, в том числе для выполнения заказов.</li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        Компания обязуется не разглашать полученную от Пользователя информацию. При этом не считается нарушением обязательств разглашение информации в случае, когда обязанность такого раскрытия установлена требованиями действующего законодательства РФ.
                                                    </li>
                                                </ol>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer class="light-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-md-offset-2">
                    <h4>Контакты</h4>
                    <a href="http://www.stoik.ru/about/" target="_blank">ООО &laquo;Стоик-М&raquo;</a><br>
                    <a href="mailto:info@doc-cam.ru">info@doc-cam.ru</a>
                </div>
                <div class="col-md-4">
                    <h4>Адрес офиса</h4>
                    <p>г. Москва, ул. Вельяминовская, дом 34<br>
                    Время работы с Пн-Пт с 10:00 до 18:00
                    </p>
                </div>
                <div class="col-md-3">
                    <h4>+7 (495) 366-90-06</h4>
                    <h4>+7 (495) 366-45-08</h4>
                    <a href="#contuct-us" class="btn" data-toggle="modal" data-target="#popup-form">Заказать консультацию</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Modal -->
    <div class="modal fade" id="popup-form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div id="contact-us-modal" class="modal-dialog" role="document">
            <i class="fa fa-times fa-2x modal-close" aria-hidden="true"></i>
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container-fluid">
                        <h3>Консультация</h3>
                        <p>По любым вопросам о сканерах DOKO, от размещения заказа<br>до технической поддержки, пишите нам по адресу <a href="mailto:info@doc-cam.ru">info@doc-cam.ru</a><br> или звоните к нам в офис по телефонам:</p>
                        <div class="glad-to-help">
                            <p>+7 (495) <b>366-90-06</b><br><b>366-45-08</b></p>
                        </div>
                        <p>
                            Мы будем рады вам помочь!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="buy-form" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true">
        <div id="buy-modal" class="modal-dialog" role="document">
            <i class="fa fa-times fa-2x buy-modal-close" aria-hidden="true"></i>
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container-fluid">
                        <h3>Заявка</h3>
                        <p>Вы можете разместить заявку на нужную модель<br>
                        сканера DOKO, заполнив следующую форму.<br>
                        (Или просто напишите нам по адресу <a href="mailto:info@doc-cam.ru">info@doc-cam.ru</a><br>
                        или позвоните к нам в офис по телефону <nobr><b>(495) 366-90-06</b></nobr> и <nobr><b>366-45-08</b></nobr>.)</p>
                        <form class="form-inline" id="buy-selected-model" action="submit2.php" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="user_email" placeholder="Ваш e-mail" name="user_email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select class="form-control" id="model" name="model">
                                            <option value="0">Выбор модели</option>
                                            <option value="1">DOKO CZUR ET16</option>
                                            <option value="2">DOKO BS16</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" id="order_body" name="order_body" placeholder="Сообщение"></textarea>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div id="form-message"></div>
                                            <div class="row">
                                                <div class="captcha-wrapper col-sm-4 col-sm-offset-4">
                                                    <img class="captcha-img" src="<?= $_SESSION['captcha']['image_src']; ?>">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Введите код" name="captcha">
                                                    </div>
                                                </div>
                                            </div>
                                            <button id="button-send-by" type="submit" class="btn btn-danger">Отправить заявку</button>
                                            <p class="send">
                                                Нажимая кнопку "Отправить заявку", вы соглашаетесь с <a href="#" class="politics">политикой конфиденциальности</a>.
                                            </p>
                                            <div class="politics-info">
                                                <p>
                                                    Настоящее Положение о политике конфиденциальности является официальным документом ООО «Стоик-М», расположенного по адресу: 105318, Москва, ул. Вельяминовская, д. 34 (далее — «Компания»), и определяет порядок обработки и защиты информации о физических лицах (далее — Пользователи), пользующихся сервисами, информацией, услугами, программами и продуктами интернет-сайта, расположенного на доменном имени <a href="http://www.book-scanner.ru">www.book-scanner.ru</a> (далее — Сайт).
                                                    <ol>
                                                        <li>
                                                            Компания через Сайт запрашивает и получает минимальный объем информации о Пользователе, не позволяющий его идентифицировать.
                                                        </li>
                                                        <li>
                                                            Информация о Пользователе необходима Компании для осуществления обратной связи с Пользователем с целью ответа на отправляемые через Сайт вопросы и запросы, в том числе для выполнения размещаемых Пользователем заказов на продукцию или услуги Компании. 
                                                        </li>
                                                        <li>
                                                            Предоставляя подобную информацию, Пользователь даёт Компании своё согласие на обработку и использование своих данных согласно ФЗ № 152-ФЗ «О персональных данных» от 27.07.2006 г. различными способами в целях, указанных в настоящем Положении.
                                                        </li>
                                                        <li>
                                                            Компания использует предоставленную информацию о Пользователе только в целях:
                                                            <ul>
                                                                <li>ответа на запросы Пользователя в Компанию, в том числе с использованием средств электронной связи;</li>
                                                                <li>оформления размещаемого Пользователем заказа в Компании;</li>
                                                                <li>для выполнения Компанией своих обязательств перед Пользователем, в том числе для выполнения заказов.</li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            Компания обязуется не разглашать полученную от Пользователя информацию. При этом не считается нарушением обязательств разглашение информации в случае, когда обязанность такого раскрытия установлена требованиями действующего законодательства РФ.
                                                        </li>
                                                    </ol>
                                                </p>
                                            </div>
                                            <hr>
                                            <p>
                                                Вы также можете заказать сканер DOKO у одного из наших партнеров:
                                            </p>
                                            <div class="row">
                                                <div class="col-md-3 col-md-offset-3">
                                                    <ul class="partners">
                                                        <li><a href="http://www.avrorus.ru" target="_blank">Avrorus</a></li>
                                                        <li><a href="http://www.foroffice.ru" target="_blank">Foroffice</a></li>
                                                        <li><a href="http://www.nera-msc.ru" target="_blank">Nera-Msc</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3">
                                                    <ul class="partners">
                                                        <li><a href="http://www.oftex.ru" target="_blank">Oftex</a></li>
                                                        <li><a href="http://www.pult.ru" target="_blank">Pult</a></li>
                                                        <li><a href="http://www.pleer.ru" target="_blank">Pleer</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="vendor/jquery.min.js"></script>
    <script src="vendor/jquery.validate.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/ui-scroll-easing.js"></script>
    <script src="vendor/jquery.paroller.min.js"></script>
    <script src="js/script2.js"></script>
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-106435194-1', 'auto');
  ga('send', 'pageview');
  </script>
  <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter46010424 = new Ya.Metrika({
                    id:46010424,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/46010424" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>

</html>