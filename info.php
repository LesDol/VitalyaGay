<?php 
session_start(); 
include_once 'api/bd.php';
if(!array_key_exists('id',$_GET)){
 header('Location: poisk.php');

 exit;
}
$id = $_GET['id'];
$post = $bd->query("
SELECT * FROM posts WHERE id ='$id'"
)->fetchAll();
if(empty($post)){
  header('Location: poisk.php');
  exit;
}
// echo json_encode($post);
///
$userId = $post[0]['user_id'];
$user = $bd->query("
SELECT * FROM users WHERE id ='$userId'"
)->fetchAll();
// echo json_encode($user);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/settings.css">
    <link rel="stylesheet" href="styles/pages/card.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <title>Информация о животных</title>

</head>
<body>
    <header>
        <div class="container">
            <a href="poisk.html">На страницу поиска</a>
        </div>
    </header>
    <main>
        <section class="info">
            <div class="container">
                <div class="info_item">
                    <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="img/собака.jpg" />
                              </div>
                              <div class="swiper-slide">
                                <img src="img/собака.jpg" />
                              </div>
                              <div class="swiper-slide">
                                <img src="img/собака.jpg" />
                              </div>
                              <div class="swiper-slide">
                                <img src="img/собака.jpg" />
                              </div>
                              <div class="swiper-slide">
                                <img src="img/собака.jpg" />
                              </div>
                              <div class="swiper-slide">
                                <img src="img/собака.jpg" />
                              </div>
                              <div class="swiper-slide">
                                <img src="img/собака.jpg" />
                              </div>
                              <div class="swiper-slide">
                                <img src="img/собака.jpg" />
                              </div>

                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                      </div>
                      <div thumbsSlider="" class="swiper mySwiper">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide">
                            <img src="img/собака.jpg" />
                          </div>
                          <div class="swiper-slide">
                            <img src="img/собака.jpg" />
                          </div>
                          <div class="swiper-slide">
                            <img src="img/собака.jpg" />
                          </div>
                          <div class="swiper-slide">
                            <img src="img/собака.jpg" />
                          </div>
                          <div class="swiper-slide">
                            <img src="img/собака.jpg" />
                          </div>
                          <div class="swiper-slide">
                            <img src="img/собака.jpg" />
                          </div>
                          <div class="swiper-slide">
                            <img src="img/собака.jpg" />
                          </div>
         
                        </div>
                      </div>
                </div>
                <div class="info_item">
                        <time datetime="29-11-2024">
                          <?php
                          echo $post[0]['date_found'];
                          ?>
                        </time>
                        <small>
                        <?php
                          echo $post[0]['status'];
                          ?>
</small>
                        <h2>
                        <?php
                          echo $post[0]['type_animal'];
                          ?>
                        </h2>
                        <p>
                        <?php
                          echo $post[0]['address'];
                          ?>
                        </p>
                        <p>
                        <?php
                          echo $post[0]['description'];
                          ?>
                         </p>
                        <p>                        <?php
                          echo $user[0]['name'] . " " . $user[0]['surname'];
                          ?></p>
                          <?php
                           $phone = $user[0]['phone'];
                           echo "<a href='tel:$phone'>
                           $phone 
                          </a>"
                          ?>
                           <?php
                           $email = $user[0]['email'];
                           echo "<a href='mailto:$email'>
                           $email 
                          </a>"
                          ?>
                </div>
            </div>
        </section>
    </main>

   
 
    
      <!-- Swiper JS -->
      <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    
      <!-- Initialize Swiper -->
      <script>
        var swiper = new Swiper(".mySwiper", {
          spaceBetween: 10,
          slidesPerView: 4,
          freeMode: true,
          watchSlidesProgress: true,
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
        var swiper2 = new Swiper(".mySwiper2", {
          spaceBetween: 10,
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
          thumbs: {
            swiper: swiper,
          },
        });

      </script>
    
</body>
</html>