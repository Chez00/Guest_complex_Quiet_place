<?php
    require_once __DIR__. '/Module/Head.php';
?>
  <body>
    <div class="page" data-bs-spy="scroll" data-bs-target="#navbar" data-bs-smooth-scroll="true" tabindex="0">
        <nav class="navbar navbar-expand-lg sticky-top">
            <?php
                require_once __DIR__.'/Module/Header.php';
            ?>
        </nav>
        <div class="scren1" id="Head">
            <div class="wrap d-flex justify-content-center align-items-center">
                <div class="logo1 textOswald">
                    <h1>Гостевой комплекс <br> "Тихое место"</h1>
                </div>
            </div>
        </div>
        <div class="scren2" id="Welcome">
            <div class="conte textOswald">
                <h2>Добро пожаловать в <br> Гостевой комплекс “Тихое место”</h2>
            </div>
            <div class="container text-center">
                <div class="row">
                    <div class="col d-flex align-items-center shadowMy">
                        <img class="img-fluid _img2s1 rig" src="..\public\img\1622492032_20-p-luchshie-intereri-derevyannikh-domov-20.jpg" alt="">
                    </div>
                    <div class="col d-flex align-items-center">
                        <p class="te02s1 textOswald">На территории гостевого комплекса находится 15 уютных домиков, которые позволят вам отдохнуть от городской суеты.</p>
                    </div>
                </div>
            </div>
            <div class=" row po1">
                <div class="pol1">
                </div>
            </div>
            <div class="container text-center">
                <div class="row">
                    <div class="col mr-5 d-flex align-items-center" style="margin-right: 3%;">
                        <p class="te02s1 textOswald">В нашем кафе работают только самые квалифицированные повара, которые накормят вас лучшим бесплатным завтраком и ужином, так как это включено в стоимость проживания </p>
                    </div>
                    <div class="col d-flex align-items-center shadowMy">
                        <img class="img-fluid _img2s1 lef" src="..\public\img\restoran-rapsodija-1.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class=" row po1">
                <div class="pol2">
                </div>
            </div>
            <div class="container text-center mt-5">
                <div class="row">
                    <div class="col d-flex align-items-center shadowMy">
                        <img class="img-fluid _img2s1 rig" src="..\public\img\voto67.jpg" alt="">
                    </div>
                    <div class="col mr-5 d-flex align-items-center" style="margin-right: 3%;">
                        <p class="te02s1 textOswald">На территории находятся 5 настоящих русских бань! Посещать их могут все постояльцы без исключения</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="scren3" id="BeautifulPlaces">
            <div class="textOswald text-center">
                <h2 class="_h2zag03">Красоты нашего края</h2>
            </div>
            <div class="content carousel_scr3">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="..\public\img\2e579c7c6d9e865b3edc6de902a0ff5c.jpg" class="d-block sizing" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="..\public\img\1645050566_12-fikiwiki-com-p-les-krasivie-kartinki-12.jpg" class="d-block sizing" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="..\public\img\nastol.com.ua-129720.jpg" class="d-block sizing" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Предыдущий</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Следующий</span>
                    </button>
                </div>
            </div>
            
        </div>
        <div class="scren4" id="Rooms">
            <div class="textOswald text-center">
                <h2 class="_h2zag04">Выберите номер</h2>
            </div>
            <div class="shad_fon">
                <div class="fon_con pb-5 pt-5">
                    <div class="container textOswald mb-4 mt-5">
                        <div class="row row-cols-1 row-cols-md-3 g-5">
                            <!--Карточка 1-->
                            <div class="col">
                              <div class="card">
                                <img src="..\public\img\1648945674_71-vsegda-pomnim-com-p-panoramnii-dom-v-lesu-foto-72.jpg" class="card-img-top" alt="...">
                                <div class="card-body text-center">
                                  <h5 class="card-title">Дом у моря - 5 спальных мест</h5>
                                  <p class="card-text">12 000 руб./сутки</p>
                                </div>
                              </div>
                            </div>
                            <!--Карточка 2-->
                            <div class="col">
                              <div class="card">
                                <img src="..\public\img\b8c2ccc0ffb85b20703599ad9f16816d.jpeg" class="card-img-top" alt="...">
                                <div class="card-body text-center">
                                  <h5 class="card-title">Бюджетный дом - 2 спальных места</h5>
                                  <p class="card-text">2 500 руб./сутки</p>
                                </div>
                              </div>
                            </div>
                            <!--Карточка 3-->
                            <div class="col">
                              <div class="card">
                                <img src="..\public\img\1616735276_1-p-interer-domika-v-lesu-1.jpg" class="card-img-top" alt="...">
                                <div class="card-body text-center">
                                  <h5 class="card-title">Стандартный дом - 4 спальных места</h5>
                                  <p class="card-text">5 000 руб./сутки</p>
                                </div>
                              </div>
                            </div>
                            <!--Карточка 4-->
                            <div class="col">
                              <div class="card">
                                <img src="..\public\img\1616735279_30-p-interer-domika-v-lesu-32.jpg" class="card-img-top" alt="...">
                                <div class="card-body text-center">
                                  <h5 class="card-title">Антуражный домик - 4 спальных места</h5>
                                  <p class="card-text">6 500 руб./сутки</p>
                                </div>
                              </div>
                            </div>
                            <!--Карточка 5-->
                            <div class="col">
                                <div class="card">
                                  <img src="..\public\img\1648945598_53-vsegda-pomnim-com-p-panoramnii-dom-v-lesu-foto-53.jpg" class="card-img-top" alt="...">
                                  <div class="card-body text-center">
                                    <h5 class="card-title">Дом в лесу - 2 спальных места</h5>
                                    <p class="card-text">8 000 руб./сутки</p>
                                  </div>
                                </div>
                            </div>
                            <!--Карточка 6-->
                            <div class="col">
                                <div class="card">
                                  <img src="..\public\img\1616735362_29-p-interer-domika-v-lesu-31.jpg" class="card-img-top" alt="...">
                                  <div class="card-body text-center">
                                    <h5 class="card-title">Большой дом - 10 спальных мест</h5>
                                    <p class="card-text">15 000 руб./сутки</p>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-grid gap-1 col-2 mx-auto pb-5">
                            <a class="btn btn-outline-light" href="..\Rooms" >Показать ещё</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="scren5" id="Feedback">
            <div class="textOswald text-center">
              <h2 class="_h2zag04">Остались вопросы?</h2>
            </div>
            <div class="content fonForm d-flex flex-row-reverse align-content-center flex-wrap">
              <form class="form">
                <div class="textOswald text-center">
                  <h2 class="_h2zag04" style="font-size: 35px!important;">Обратная связь</h2>
                </div>
                <div class="form-floating form-eml mb-3 mt-5">
                  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                  <label for="floatingInput">Ваш E-mail</label>
                </div>
                <div class="form-floating form-koment mt-5 mb-5">
                  <textarea type="text" class="form-control form-kom" id="floatingPassword" placeholder="Пароль"></textarea>
                  <label for="floatingPassword">Комментарий</label>
                </div>
                <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-primary but">Отправить</button>
                </div>
              </form>
            </div>
        </div>
        <div class="scren6" id="Location">
          <div class="textOswald text-center">
            <h2 class="_h2zag04">Где мы находимся</h2>
          </div>
          <iframe class="map" src="https://yandex.ru/map-widget/v1/?um=constructor%3Aafd1413371ca255251e32bebcdaf353176269f5dd1eb9f1ebf451c602830bb9a&amp;source=constructor" width="100%" height="747" frameborder="0"></iframe>
        </div>
        <div class="scren7">
          <div class="d-flex flex-row justify-content-between align-items-center">
            <div class="logo_fut d-flex flex-column justify-content-center flex-shrink-1">
              <img src="..\public\img\Лого.png" alt="">
              <h2 class="textOswald text-center">Гостевой комплекс <br> “Тихое место”</h2>
            </div>
            <div class="kont_fut">
              <h2 class="textOswald text-center">Контакты</h2>
              <p class="textOswald text-center">тел: +7 (923) 652 45 68 <br> E-mail: info@tix-mesto.ru</p>
              <div class="con_icon d-flex justify-content-center">
                <img class="ic_vk" src="..\public\img\vk.png" alt="">
                <img class="ic_you" src="..\public\img\youtube.png" alt="">
              </div>
            </div>
          </div>
          <div class="kopir">
            <p class="textOswald text-center">© tix-mesto.ru, author Nikolay Shurbin, 2022</p>
          </div>
        </div>
    </div>
  </body>
<?php
    require_once __DIR__.'/Module/Footer.php'
?>