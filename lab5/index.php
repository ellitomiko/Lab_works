<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style_lab1.css">
    <title>Lab</title>
</head>

<body>

    <div class="container">

        <!-- Верхняя навигация -->

        <div class="top">

            <div class="top_left">
                <img src="Logo1.png" alt="LOGO">
            </div>

            <div class="top_right">

                <a href="#">главная</a>
                <a href="#">акции</a>
                <a href="#">акссесуары</a>
                <a href="#">блог</a>
                <a href="#">инструкции</a>


            </div>
        </div>









        <!-- Блок 1: Главная информация -->

        <div class="B1main">

            <div class="B1main_left">

                <div class="B1main_left_header">
                    <div>камера</div>
                    <div>Instax SQ1</div>
                    <div>для детей</div>
                </div>

                <div class="B1main_left_properties">

                    <div class="B1main_left_properties_line1">
                        <!-- Сюда кружок + первая строка текста-->

                        <svg width="30" height="10">
                            <circle cx="5" cy="5" r="5" fill="rgb(7,28,93)" />
                        </svg>

                        <div>яркие снимки одним нажатием кнопки</div>
                    </div>

                    <div class="B1main_left_properties_line2">
                        <!-- Сюда кружок + вторая строка текста-->

                        <svg width="30" height="10">
                            <circle cx="5" cy="5" r="5" fill="rgb(7,28,93)" />
                        </svg>

                        <div>воспоминания в считанные секунды</div>
                    </div>

                </div>

                <div class="B1main_left_button">

                    <a href="#">заказать</a>

                    <img src="Photo_booth.png" alt="vector">

                </div>

                <div class="B1main_left_vector">



                </div>

            </div>




            <div class="B1main_right">
                <img src="Girl_with_instax.png" alt="Girl with instax">
            </div>

        </div>



        <!-- Блок 2: Мастеркласс в подарок -->

        <div class="B2lessons">

            <div class="B2lessons_left">

                <div class="B2lessons_left_header">

                    <div>Мастеркласс в подарок</div>

                    <img src="Photo_booth.png" alt="Camera">

                </div>

                <div class="B2lessons_left_text">
                    <div>
                        Успейте заказать детскую
                        камеру и получите
                        мастеркласс<br>
                        от профессиональных
                        фотографов в подарок
                    </div>

                    <div>до конца акции</div>



                </div>

                <div class="B2lessons_left_timer">
                    <div>00:09:46</div>
                </div>

                <div class="B2lessons_left_button">
                    <a href="#">узнать больше</a>
                </div>



            </div>

            <div class="B2lessons_right">

                <img src="composition.png" alt="Composition">

            </div>


        </div>







        <!-- Блок 3: Функционал -->

        <div class="B3func">
            <div>
                <div>Функционал</div>
            </div>
            <div>
                Автоматический контроль экспозиции. Камера самостоятельно определяет уровень окружающего освещения и
                выставляет оптимальные настройки мощности вспышки и скорости затвора. Как результат — яркие и четкие
                изображения.
            </div>

            <div>
                Режим селфи. Чтобы сделать автопортрет на Instax SQuare SQ1, достаточно дважды повернуть объектив и
                нажать на спуск затвора. При этом от пользователя не требуется устанавливать другие настройки.
            </div>





            <div>
                Отключение фотоаппарата
                после пяти минут бездействия. Функция способствует
                сохранению заряда батарей.
            </div>


            <div class="B3func-photo1">
                <img src="camera1.png" alt="camera1">
            </div>

            <div class="B3func-photo2">
                <img src="camera2.png" alt="camera2">
            </div>

        </div>








        <!-- Блок 4: Выбор цвета -->

        <div class="B4color">

            <div class="B4color_left">

                <div class="B4color_left-image">

                    <img src="blue-camera.png" alt="blue-camera">

                </div>

                <div class="B4color_left-picker">

                    <svg width="59" height="76">
                        <circle cx="27" cy="27" r="27" fill="rgb(170,194,214)" filter="drop-shadow(2px 2px 4px rgb(7 28 93 / 0.2))" />
                        <rect x="5" y="73" height="3" width="43" fill="rgb(7,28,93)" />
                    </svg>

                    <svg width="54" height="54">
                        <circle cx="27" cy="27" r="27" fill="rgb(216,118,93)" />
                    </svg>

                    <svg width="54" height="54">
                        <circle cx="27" cy="27" r="27" fill="rgb(248,234,228)" />
                    </svg>

                </div>

            </div>

            <div class="B4color-right">

                <div class="B4color-text">

                    <div>Instax SQ1 + мастеркласс</div>


                    <div>
                        Закажите камеру мгновенной печати
                        <br>Instax SQ1 прямо сейчас и получите
                        <br>мастеркласс для ваших детей бесплатно
                    </div>

                    <div>14 900 ₽</div>
                </div>

                <div class="B4color-button">
                    <a href="#">купить</a>
                </div>


            </div>

        </div>




        <!-- Блок 5: Отправка заявки -->

        <div class="B5form">


            <div class="B5form_left">

                <img src="family.png" alt="Family">

            </div>

            <div class="B5form-right">

                <div class="B5form-right_header">

                    <div>Остались вопросы?</div>

                    <div>Свяжитесь с нами и мы на них ответим:</div>

                </div>

                <form class="B5form-right-form" action="feedback.php" method="POST">

                    <input type="text" name="name" id="name" placeholder="ФИО" />
                    <input type="text" name="email" id="email" placeholder="E-mail" />
                    <input type="text" name="phone" id="phone" placeholder="Телефон" />
                 
                    <textarea rows="3" name="message" type="text" id="message" placeholder="Сообщение"></textarea>

                    <input type="submit" value="связаться" />

                </form>


            </div>


        </div>

        <!-- Нижняя навигация -->

        <div class="footer">

            <div class="footer_left">

                <div>© 2022 ООО «ФУДЖИФИЛЬМ РУС»</div>

                <div>
                    Все права защищены, по вопросам,
                    связанным с использованием материалов,
                    обращайтесь к администратору сайта
                </div>

            </div>

            <div class="footer-center">

                <img src="Logo1.png" alt="Logo">

            </div>

            <div class="footer-right">

                <a href="#">главная</a>
                <a href="#">акции</a>
                <a href="#">аксеcсуары</a>
                <a href="#">блог</a>
                <a href="#">инструкции</a>

                <div class="footer-right-lastElement">
                    <a href="#">Политика конфиденциальности</a>
                </div>



            </div>

        </div>

    </div>
</body>

</html>