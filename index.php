<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новая жизнь|главная страница</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="modules/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/settings.css">
    <link rel="stylesheet" href="styles/pages/index.css">
</head>
<body>
<header class="header">
    <div class="logo"><a href="">New live</a></div>
    <div class="container">
        <ul>
            <li><a href="poisk.php">Поиск</a></li>
            <li><a href="register.php">Регистрация</a></li>
            <li><a href="login.php">Личный кабинет</a></li>
            <li><a href="add.php">Добавить</a></li>
            <li><a href="">Отзывы</a></li>
            <?php 
            if(array_key_exists('token',$_SESSION)){
                echo"<li><a href='api/logoutUser.php' class='reviews'>Выход</a></li>";
            }
            ?>
        </ul>
    </div>
</header>
<main>
    <section class="hero">
        <div class="container">
            <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slide">
                        <img src="img/img.jpg" alt="слайд 1">
                        <div class="animal">
                        <p>Нига. </p>
                        <p>Описание : Не получил свою сгущенку. </p>
                        <button>Подробнее</button>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide">
                        <img src="img/img.jpg" alt="слайд 1">
                        <div class="animal">
                        <p>Нига. </p>
                        <p>Описание : Не получил свою сгущенку. </p>
                        <button>Подробнее</button>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide">
                        <img src="img/img.jpg" alt="слайд 1">
                        <div class="animal">
                        <p>Нига. </p>
                        <p>Описание : Не получил свою сгущенку. </p>
                        <button>Подробнее</button>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide">
                        <img src="img/img.jpg" alt="слайд 1">
                        <div class="animal">
                        <p>Нига. </p>
                        <p>Описание : Не получил свою сгущенку. </p>
                        <button>Подробнее</button>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide">
                        <img src="img/img.jpg" alt="слайд 1">
                        <div class="animal">
                        <p>Нига. </p>
                        <p>Описание : Не получил свою сгущенку. </p>
                        <button>Подробнее</button>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide">
                        <img src="img/img.jpg" alt="слайд 1">
                        <div class="animal">
                        <p>Нига. </p>
                        <p>Описание : Не получил свою сгущенку. </p>
                        <button>Подробнее</button>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide">
                        <img src="img/img.jpg" alt="слайд 1">
                        <div class="animal">
                        <p>Нига. </p>
                        <p>Описание : Не получил свою сгущенку. </p>
                        <button>Подробнее</button>
                        </div>
                    </div>
                </div>
                
            </div>

                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
              </div>
                <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
         
        </div>
    </section>
    <section class="short-search">
        <div class="conyainer">
            <form action="">
                <h3>Поиск животного</h3>
                <label for="type animal">
                    <select name="type_animal" id="type_animal">
                        <option value="cat">
                            Кот
                        </option>
                        <option value="gog">
                            Собака
                        </option>
                    </select>
                    <button type="submit">Поиск</button>
                </label>
            </form>
        </div>    
    </section>
    <section class="facts">
        <div class="container">
            <h2>Факты</h2>
            <ul>
                <li>
                <div class="facts-pr">
                    <i class="fa fa-plus-square" aria-hidden="true"></i>
                    <h3>Помогли найти более 500 животных</h3>
                </div>
                <div class="facts-pr">
                    <i class="fa fa-sign-language" aria-hidden="true"></i>
                    <h3>Более трех лет способствуем возвращению питомцев к хозяевам.</h3>
                </div>
                <div class="facts-pr">
                    <i class="fa fa-handshake-o" aria-hidden="true"></i>
                    <h3>Все услуги оказываются бесплатно.</h3>
                </div>
                </li>
            </ul>
        </div>
    </section>
    <section class="search">
        <div class="container">
            <div class="search_item">
                <form action="">
                    <label for="place">
                        <select name="palce" id="place">
                            <option value="0">Правый берег</option>
                            <option value="1">Левый берег</option>
                        </select>
                    </label>
                    <label for="animal">
                        <select name="animal" id="animal">
                            <option value="cat">Кот</option>
                            <option value="dog">Собака</option>
                            <option value="suslik">Суслик</option>
                            <option value="harek">Харек</option>
                            <option value="rabbit">Кролик</option>
                            <option value="cat-dog">Котопес</option>
                        </select>
                        <button type="submit">Поиск</button>
                    </label>
                </form>
            </div>
            <div class="search_item">
                <img src="img/cat-dog.jpg" alt="кортинка">
            </div>
        </div>
    </section>
    <section class="reviews">
        <div class="container">
        <h2>Отзывы</h2>
        <div class="swiper reviews-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slide">
                        <h3>Виталя Гачимучиков</h3>
                        <img src="img/DDD.jpeg" alt="">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque repudiandae dolorum, incidunt fugit voluptas magnam numquam. Modi dolores ipsum nam vel rerum tenetur eaque temporibus atque, iusto beatae et provident?</p>
                        <p>11.09.2001</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide">
                        <h3>Виталя Гачимучиков</h3>
                        <img src="img/DDD.jpeg" alt="">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque repudiandae dolorum, incidunt fugit voluptas magnam numquam. Modi dolores ipsum nam vel rerum tenetur eaque temporibus atque, iusto beatae et provident?</p>
                        <p>11.09.2001</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide">
                        <h3>Виталя Гачимучиков</h3>
                        <img src="img/DDD.jpeg" alt="">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque repudiandae dolorum, incidunt fugit voluptas magnam numquam. Modi dolores ipsum nam vel rerum tenetur eaque temporibus atque, iusto beatae et provident?</p>
                        <p>11.09.2001</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide">
                        <h3>Виталя Гачимучиков</h3>
                        <img src="img/DDD.jpeg" alt="">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque repudiandae dolorum, incidunt fugit voluptas magnam numquam. Modi dolores ipsum nam vel rerum tenetur eaque temporibus atque, iusto beatae et provident?</p>
                        <p>11.09.2001</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide">
                        <h3>Виталя Гачимучиков</h3>
                        <img src="img/DDD.jpeg" alt="">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque repudiandae dolorum, incidunt fugit voluptas magnam numquam. Modi dolores ipsum nam vel rerum tenetur eaque temporibus atque, iusto beatae et provident?</p>
                        <p>11.09.2001</p>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
        </div>
    </section>  
    <script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween:30,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints:{   
        992: {
            slidesPerView: 3,  
        },
        576: {
            slidesPerView: 2,  
        },
        0:{
            slidesPerView: 1,  
        }
    }
     
      

      
    });
    var reviewswiper = new Swiper(".reviews-swiper", {
        slidesPerView: 3,
        spaceBetween:30,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints:{   
        992: {
            slidesPerView: 3,  
        },
        576: {
            slidesPerView: 2,  
        },
        0:{
            slidesPerView: 1,  
        }
    }
    });
  </script> 
  <section class="sub">
    <div class="container">
        <form action="">
            <label for="email">Почта</label>
            <input type="email" name="email" id="email" placeholder="example@mail.ru"> 
            <input type="checkbox"  name="agree" id="agree">
            <label for="agree">Согласие на обработку данных</label>
            <button type="submit">Подписаться</button> 
        </form>
    </div>
  </section> 

</main>  
<footer class="footer">
    <div class="container">
        <div class="footer_item">            
            <a class="tel" href="tel:88001234567"><i  class="fa fa-volume-control-phone"  aria-hidden="true"></i>  8 (800)123-45-67</a>    
            <a class="mail" href="mailto:mail@newlife.ru"><i  class="fa fa-envelope" aria-hidden="true"></i>  mail@newlife.ru</a>
        </div>
        <div class="footer_item">
            <ul>
                <li><a href="index.html">Главная</a></li>
                <li><a href="index.html">Регистрация</a></li>
                <li><a href="index.html">Авторизация</a></li>
                <li><a href="index.html">Личный кабинет</a></li>
                <li><a href="index.html">Найдено животное</a></li>
                <li><a href="index.html">Поиск</a></li>
            </ul>
        </div>

    </div>
</footer> 
</body>
</html>