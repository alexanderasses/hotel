<html lang="ru">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Гостиница "Колизей"</title>
    <link rel="stylesheet" href="css/bootstrap.css" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/style.css" />
  </head>
  <body>
    <main class="main">
      <header class="toolbar">
        <nav
          class="navbar sticky-top navbar-expand-md navbar-dark"
          style="background-color: #2c241b"
        >
          <div class="container-fluid">
            <a
              class="navbar-brand"
              href="javascript://0"
              onclick="slowScroll('#head')"
            >
              <img
                src="img/logo.svg"
                width="50"
                height="50"
                alt=""
                loading="lazy"
              />
            </a>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarResponsive"
            >
              <span class="sr-only">Навигация</span>
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav m-auto">
                <li class="nav-item">
                  <a href="#about" class="nav-link active">О гостинице</a>
                </li>
                <li class="nav-item">
                  <a href="#numbers" class="nav-link">Номера</a>
                </li>
                <li class="nav-item">
                  <a href="#reviews" class="nav-link">Отзывы</a>
                </li>
                <li class="nav-item">
                  <a href="#contact" class="nav-link">Контакты</a>
                </li>
              </ul>
              <div class="phone">
                <a href="tel:+89022573702" class="phone-number"
                  ><img class="img-phone" src="img/phone.png" alt="" />8 (999)
                  99-99-999</a
                >
                <p class="call-back">связаться с нами</p>
              </div>
            </div>
          </div>
        </nav>
      </header>
      <!-- /.header -->
      <section id="head">
        <div class="picture">
          <div class="container">
            <div class="main-content">
              <div class="row">
                <div class="col align-self-center head_panel">
                  <div class="main-title">
                    <h1>Гостиница “Колизей”</h1>
                    <h2>
                      Ваше комфортабельное и уютное размещение <br />
                      по адекватной цене
                    </h2>
                    <div class="advantage">
                      <p>
                        <img
                          class="img-star"
                          src="img/star.svg"
                          alt=""
                        />Удобное месторасположение
                      </p>
                      <p>
                        <img
                          class="img-star"
                          src="img/star.svg"
                          alt=""
                        />Доступные цены
                      </p>
                      <p>
                        <img
                          class="img-star"
                          src="img/star.svg"
                          alt=""
                        />Безопасность
                      </p>
                    </div>
                  </div>
                  <button
                    href="javascript://0"
                    onclick="slowScroll('#numbers')"
                    class="main-button take-number-btn"
                    type="submit"
                  >
                    Выбрать номер
                  </button>
                  <button
                    class="main-button book-btn"
                    data-toggle="modal"
                    data-target="#exampleModal"
                    data-whatever="@mdo"
                    type="submit"
                  >
                    Забронировать
                  </button>
                  <div class="row align-items-end justify-content-center">
                    <div class="col-5">
                      <div class="arrow">
                        <a href="javascript://0" onclick="slowScroll('#about')"
                          ><i class="fas fa-angle-down"></i
                        ></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3"></div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="about" class="ul">
        <div class="container">
          <div class="row slid">
            <div class="col-xl-6">
              <div class="img-slider">
                <img src="img/about/front.jpg" alt="" />
                <img src="img/about/reception.jpg" alt="" />
              </div>
            </div>
            <div class="col-xl-6">
              <div class="text-about">
                <p class="info-text">
                  Гостиница представляет собой удобные апартаменты, в которых
                  гости будут чувствовать себя комфортно и уверенно. Все номера
                  чистые и ухоженные, а интерьер способствует ощущению домашнего
                  уюта. Слегка урбанистический стиль коридоров и холла
                  гармонично переливается в домашний очаг, стоит зайти в номер.
                  Красивая отделка, удобные кровати, продуманное размещение и
                  многофункциональность мебели – всё это позволяет посетителю
                  гостиницы ощутить себя с первых минут «в своей тарелке».
                </p>
              </div>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-6">
              <hr class="hr-line" />
            </div>
          </div>
          <div class="features">
            <div class="container">
              <div class="section-header">
                <h2>Преимущества</h2>
              </div>
              <div class="features-slider">
                <div class="features block">
                  <div class="features-img">
                    <picture>
                      <source srcset="img/features/Wi-Fi.svg" type="image/" />
                      <img src="img/features/Wi-Fi.png" alt="Интернет" />
                    </picture>
                  </div>
                  <h3>Интернет - Бесплатно!</h3>
                  <p>Wi-Fi предоставляется на территории всего отеля</p>
                </div>
                <div class="features block">
                  <div class="features-img">
                    <picture>
                      <source srcset="img/features/pet.svg" type="image/" />
                      <img src="img/features/pet.png" alt="Питомцы" />
                    </picture>
                  </div>
                  <h3>Питомцы - Бесплатно!</h3>
                  <p>Размещение домашних животных допускается</p>
                </div>
                <div class="features block">
                  <div class="features-img">
                    <picture>
                      <source srcset="img/features/parking.svg" type="image/" />
                      <img src="img/features/parking.svg" alt="Паркинг" />
                    </picture>
                  </div>
                  <h3>Парковка- Бесплатно!</h3>
                  <p>
                    Частная парковка <br />
                    (предварительный заказ)
                  </p>
                </div>
                <div class="features block">
                  <div class="features-img">
                    <picture>
                      <source srcset="img/features/fork.svg" type="image/" />
                      <img src="img/features/fork.png" alt="Своя кухня" />
                    </picture>
                  </div>
                  <h3>Своя кухня - Удобно!</h3>
                  <p>Вкусные завтраки прямиком в ваш номер</p>
                </div>
                <div class="features block">
                  <div class="features-img">
                    <picture>
                      <source srcset="img/features/geo.svg" type="image/" />
                      <img src="img/features/geo.png" alt="Расположение" />
                    </picture>
                  </div>
                  <h3>Расположение - Удобно!</h3>
                  <p>Близкое месторасположение к автовокзалу и ж/д вокзалу</p>
                </div>
                <div class="features block">
                  <div class="features-img">
                    <picture>
                      <source srcset="img/features/noise.svg" type="image/" />
                      <img src="img/features/noise.png" alt="Комфорт" />
                    </picture>
                  </div>
                  <h3>Комфорт - Удобно!</h3>
                  <p>Номера гостиницы оснащены качественной шумоизоляцией</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="numbers">
        <div class="bg-gray-color">
          <div class="container">
            <div class="row slid">
              <div class="col-xl-7">
                <div class="rooms-slider">
                  <img src="img/rooms-eco/eco.jpg" alt="" />
                  <img src="img/rooms-eco/eco1.jpg" alt="" />
                  <img src="img/rooms-eco/eco2.jpg" alt="" />
                  <img src="img/rooms-eco/eco3.jpg" alt="" />
                  <img src="img/rooms-eco/eco4.jpg" alt="" />
                </div>
              </div>
              <div class="col-xl-5">
                <div class="rooms-info">
                  <h2>Стандарт</h2>
                  <p class="room-info">
                    Удобный не дорогой номер площадью 14 кв.м., позволяющий
                    разместить в себе до трёх человек. Оптимальное решение для
                    краткосрочной командировки, где хочется отдохнуть и
                    поработать с комфортом.
                  </p>
                  <div class="rooms-icons">
                    <span
                      data-toggle="tooltip"
                      data-placement="top"
                      title="Wi-Fi роутер"
                      ><img
                        src="img/icrooms/wifi.svg"
                        height="25"
                        width="25"
                        alt=""
                    /></span>
                    <span class="icons-hr"></span>
                    <span
                      data-toggle="tooltip"
                      data-placement="top"
                      title="Душевая кабинка"
                      ><img
                        src="img/icrooms/shower.svg"
                        height="25"
                        width="25"
                        alt=""
                    /></span>
                    <span class="icons-hr"></span>
                    <span
                      data-toggle="tooltip"
                      data-placement="top"
                      title="Кондиционер"
                      ><img
                        src="img/icrooms/air.svg"
                        height="25"
                        width="25"
                        alt=""
                    /></span>
                    <span class="icons-hr"></span>
                    <span
                      data-toggle="tooltip"
                      data-placement="top"
                      title="Мыльные принадлежности"
                      ><img
                        src="img/icrooms/soap.svg"
                        height="25"
                        width="25"
                        alt=""
                    /></span>
                    <span class="icons-hr"></span>
                    <span
                      data-toggle="tooltip"
                      data-placement="top"
                      title="Санузел"
                      ><img
                        src="img/icrooms/toilet.svg"
                        height="25"
                        width="25"
                        alt=""
                    /></span>
                    <span class="icons-hr"></span>
                    <span
                      data-toggle="tooltip"
                      data-placement="top"
                      title="Телевизор с плоским экраном"
                      ><img
                        src="img/icrooms/tv.svg"
                        height="25"
                        width="25"
                        alt=""
                    /></span>
                    <span class="icons-hr"></span>
                    <span
                      data-toggle="tooltip"
                      data-placement="top"
                      title="Камод"
                      ><img
                        src="img/icrooms/saver.svg"
                        height="25"
                        width="25"
                        alt=""
                    /></span>
                    <span class="icons-hr"></span>
                    <span
                      data-toggle="tooltip"
                      data-placement="top"
                      title="Шкаф"
                      ><img
                        src="img/icrooms/wardobe.svg"
                        height="25"
                        width="25"
                        alt=""
                    /></span>
                    <span class="icons-hr"></span>
                    <span
                      data-toggle="tooltip"
                      data-placement="top"
                      title="Стол"
                      ><img
                        src="img/icrooms/table.svg"
                        height="25"
                        width="25"
                        alt=""
                    /></span>
                  </div>
                  <div class="room-stats">
                    <div class="square-room">
                      <p>Площадь</p>
                      <h3>14 м<sup>2</sup></h3>
                    </div>
                    <div class="guests-room margin">
                      <p>Гостей</p>
                      <h3>1-3</h3>
                    </div>
                    <div class="cost-room">
                      <p>Стоимость в сутки</p>
                      <h3>1200р.</h3>
                    </div>
                  </div>
                  <div class="row justify-content-center">
                    <button
                      class="room-button book-btn"
                      data-toggle="modal"
                      data-target="#exampleModal"
                      data-whatever="@mdo"
                      type="submit"
                    >
                      Забронировать
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="numbers">
        <div class="bg-white-color">
          <div class="container">
            <div class="row">
              <div class="col-xl-7 order-1 order-xl-2">
                <div class="rooms-slider">
                  <img src="img/rooms-comfort/comfort.jpg" alt="" />
                  <img src="img/rooms-comfort/comfort01.jpg" alt="" />
                </div>
              </div>
              <div class="col-xl-5 order-2 order-xl-1">
                <div class="rooms-info">
                  <h2>Комфорт</h2>
                  <p class="room-info">
                    Уютный однокомнатный номер для размещения одного человека
                    или пары, удобный для деловых бесед и отдыха. Номер с
                    современным и практичным интерьером, где предусмотрено все,
                    что нужно для отдыха и работы.
                  </p>
                  <div class="rooms-icons">
                    <span
                      data-toggle="tooltip"
                      data-placement="top"
                      title="Wi-Fi роутер"
                      ><img
                        src="img/icrooms/wifi.svg"
                        height="25"
                        width="25"
                        alt=""
                    /></span>
                    <span class="icons-hr"></span>
                    <span
                      data-toggle="tooltip"
                      data-placement="top"
                      title="Душевая кабинка"
                      ><img
                        src="img/icrooms/shower.svg"
                        height="25"
                        width="25"
                        alt=""
                    /></span>
                    <span class="icons-hr"></span>
                    <span
                      data-toggle="tooltip"
                      data-placement="top"
                      title="Кондиционер"
                      ><img
                        src="img/icrooms/air.svg"
                        height="25"
                        width="25"
                        alt=""
                    /></span>
                    <span class="icons-hr"></span>
                    <span
                      data-toggle="tooltip"
                      data-placement="top"
                      title="Мыльные принадлежности"
                      ><img
                        src="img/icrooms/soap.svg"
                        height="25"
                        width="25"
                        alt=""
                    /></span>
                    <span class="icons-hr"></span>
                    <span
                      data-toggle="tooltip"
                      data-placement="top"
                      title="Санузел"
                      ><img
                        src="img/icrooms/toilet.svg"
                        height="25"
                        width="25"
                        alt=""
                    /></span>
                    <span class="icons-hr"></span>
                    <span
                      data-toggle="tooltip"
                      data-placement="top"
                      title="Телевизор с плоским экраном"
                      ><img
                        src="img/icrooms/tv.svg"
                        height="25"
                        width="25"
                        alt=""
                    /></span>
                    <span class="icons-hr"></span>
                    <span
                      data-toggle="tooltip"
                      data-placement="top"
                      title="Камод"
                      ><img
                        src="img/icrooms/saver.svg"
                        height="25"
                        width="25"
                        alt=""
                    /></span>
                    <span class="icons-hr"></span>
                    <span
                      data-toggle="tooltip"
                      data-placement="top"
                      title="Мини-холодильник"
                      ><img
                        src="img/icrooms/freezer.svg"
                        height="25"
                        width="25"
                        alt=""
                    /></span>
                    <span class="icons-hr"></span>
                    <span
                      data-toggle="tooltip"
                      data-placement="top"
                      title="Шкаф"
                      ><img
                        src="img/icrooms/wardobe.svg"
                        height="25"
                        width="25"
                        alt=""
                    /></span>
                    <span class="icons-hr"></span>
                    <span
                      data-toggle="tooltip"
                      data-placement="top"
                      title="Стол"
                      ><img
                        src="img/icrooms/table.svg"
                        height="25"
                        width="25"
                        alt=""
                    /></span>
                  </div>
                  <div class="room-stats">
                    <div class="square-room">
                      <p>Площадь</p>
                      <h3>20 м<sup>2</sup></h3>
                    </div>
                    <div class="guests-room margin">
                      <p>Гостей</p>
                      <h3>1-2</h3>
                    </div>
                    <div class="cost-room">
                      <p>Стоимость в сутки</p>
                      <h3>1700р.</h3>
                    </div>
                  </div>
                  <div class="row justify-content-center">
                    <button
                      class="room-button book-btn"
                      data-toggle="modal"
                      data-target="#exampleModal"
                      data-whatever="@mdo"
                      type="submit"
                    >
                      Забронировать
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="numbers">
        <div class="bg-gray-color">
          <div class="container">
            <div class="row slid">
              <div class="col-xl-7">
                <div class="rooms-slider">
                  <img src="img/rooms-luxe/luxe.jpg" alt="" />
                  <img src="img/rooms-luxe/luxe1.jpg" alt="" />
                  <img src="img/rooms-luxe/luxe2.jpg" alt="" />
                </div>
              </div>
              <div class="col-xl-5">
                <div class="rooms-info">
                  <h2>Люкс</h2>
                  <p class="room-info">
                    Комфортный и просторный номер, оформленный в светлых
                    пастельных тонах, состоит из гостиной, спальни и комнаты
                    гигиены. Люкс - отличный выбор для любого случая,
                    максимально делового комфорта.
                  </p>
                  <div class="rooms-icons">
                    <span
                      data-toggle="tooltip"
                      data-placement="top"
                      title="Wi-Fi роутер"
                      ><img
                        src="img/icrooms/wifi.svg"
                        height="25"
                        width="25"
                        alt=""
                    /></span>
                    <span class="icons-hr"></span>
                    <span
                      data-toggle="tooltip"
                      data-placement="top"
                      title="Душевая кабинка"
                      ><img
                        src="img/icrooms/shower.svg"
                        height="25"
                        width="25"
                        alt=""
                    /></span>
                    <span class="icons-hr"></span>
                    <span
                      data-toggle="tooltip"
                      data-placement="top"
                      title="Кондиционер"
                      ><img
                        src="img/icrooms/air.svg"
                        height="25"
                        width="25"
                        alt=""
                    /></span>
                    <span class="icons-hr"></span>
                    <span
                      data-toggle="tooltip"
                      data-placement="top"
                      title="Мыльные принадлежности"
                      ><img
                        src="img/icrooms/soap.svg"
                        height="25"
                        width="25"
                        alt=""
                    /></span>
                    <span class="icons-hr"></span>
                    <span
                      data-toggle="tooltip"
                      data-placement="top"
                      title="Санузел"
                      ><img
                        src="img/icrooms/toilet.svg"
                        height="25"
                        width="25"
                        alt=""
                    /></span>
                    <span class="icons-hr"></span>
                    <span
                      data-toggle="tooltip"
                      data-placement="top"
                      title="Телевизор с плоским экраном"
                      ><img
                        src="img/icrooms/tv.svg"
                        height="25"
                        width="25"
                        alt=""
                    /></span>
                    <span class="icons-hr"></span>
                    <span
                      data-toggle="tooltip"
                      data-placement="top"
                      title="Камод"
                      ><img
                        src="img/icrooms/saver.svg"
                        height="25"
                        width="25"
                        alt=""
                    /></span>
                    <span class="icons-hr"></span>
                    <span
                      data-toggle="tooltip"
                      data-placement="top"
                      title="Шкаф-купе"
                      ><img
                        src="img/icrooms/wardobe.svg"
                        height="25"
                        width="25"
                        alt=""
                    /></span>
                    <span class="icons-hr"></span>
                    <span
                      data-toggle="tooltip"
                      data-placement="top"
                      title="Стол"
                      ><img
                        src="img/icrooms/table.svg"
                        height="25"
                        width="25"
                        alt=""
                    /></span>
                    <span class="icons-hr"></span>
                    <span
                      data-toggle="tooltip"
                      data-placement="top"
                      title="Диван"
                      ><img
                        src="img/icrooms/sofa.svg"
                        height="25"
                        width="25"
                        alt=""
                    /></span>
                    <span class="icons-hr"></span>
                    <span
                      data-toggle="tooltip"
                      data-placement="top"
                      title="Мини-холодильник"
                      ><img
                        src="img/icrooms/freezer.svg"
                        height="25"
                        width="25"
                        alt=""
                    /></span>
                  </div>
                  <div class="room-stats">
                    <div class="square-room">
                      <p>Площадь</p>
                      <h3>45 м<sup>2</sup></h3>
                    </div>
                    <div class="guests-room margin">
                      <p>Гостей</p>
                      <h3>1-3</h3>
                    </div>
                    <div class="cost-room">
                      <p>Стоимость в сутки</p>
                      <h3>2600р.</h3>
                    </div>
                  </div>
                  <div class="row justify-content-center">
                    <button
                      class="room-button book-btn"
                      data-toggle="modal"
                      data-target="#exampleModal"
                      data-whatever="@mdo"
                      type="submit"
                    >
                      Забронировать
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="reviews">
        <div class="container">
          <div class="reviews-slider">
            <div class="review_item">
              <div class="row justify-content-center">
                <div class="review col-9">
                  <h2>Федор Храпунов</h2>
                  <div class="marks">
                    <h4>Оценка: &nbsp;</h4>
                    <img class="img-star" src="img/star.svg" alt="" /><img
                      class="img-star"
                      src="img/star.svg"
                      alt=""
                    /><img class="img-star" src="img/star.svg" alt="" /><img
                      class="img-star"
                      src="img/star.svg"
                      alt=""
                    /><img class="img-star" src="img/star.svg" alt="" />
                  </div>
                  <p>
                    Останавливались с женой на сутки. Гостиница хорошая.
                    Персонал приветливый. Для таких цен - набор услуг и комфорта
                    просто замечательный. Очень теплый номер: при уличной
                    температуре -22, спали с открытой форточкой. В номерах
                    достаточно тихо. Очень шустрый интернет. Номер просторный,
                    есть прикроватные светильники. Приятно удивила возможность
                    заказа завтрака и ужина в номер. Порции - нормальные,
                    взрослый мужчина вполне наедается. Цены - до хохота низкие!
                    Спасибо персоналу и владельцу за замечательное и недорогое
                    место. В следующий раз постараюсь остановиться тут же. :)
                  </p>
                </div>
              </div>
            </div>
            <div class="review_item">
              <div class="row justify-content-center">
                <div class="review col-9">
                  <h2>Светлана Аксенова</h2>
                  <div class="marks">
                    <h4>Оценка: &nbsp;</h4>
                    <img class="img-star" src="img/star.svg" alt="" /><img
                      class="img-star"
                      src="img/star.svg"
                      alt=""
                    /><img class="img-star" src="img/star.svg" alt="" /><img
                      class="img-star"
                      src="img/star.svg"
                      alt=""
                    /><img class="img-star" src="img/star.svg" alt="" />
                  </div>
                  <p>
                    Останавливались с семьёй, двое взрослых и трое детей.
                    Хорошая, чистая гостиница. Нам понравилось. Персонал
                    приветливый, отзывчивый.
                  </p>
                </div>
              </div>
            </div>
            <div class="review_item">
              <div class="row justify-content-center">
                <div class="review col-9">
                  <h2>Елена Кравченко</h2>
                  <div class="marks">
                    <h4>Оценка: &nbsp;</h4>
                    <img class="img-star" src="img/star.svg" alt="" /><img
                      class="img-star"
                      src="img/star.svg"
                      alt=""
                    /><img class="img-star" src="img/star.svg" alt="" /><img
                      class="img-star"
                      src="img/star.svg"
                      alt=""
                    /><img class="img-star" src="img/star.svg" alt="" />
                  </div>
                  <p>
                    Добротная гостиница. Понравилось. Преемлемая цена за
                    двухкомнатный номер. Завтрак за дополнительную плату в
                    заранее договоренное время( очень удобно).
                  </p>
                </div>
              </div>
            </div>
            <div class="review_item">
              <div class="row justify-content-center">
                <div class="review col-9">
                  <h2>Андрей Новокрещинов</h2>
                  <div class="marks">
                    <h4>Оценка: &nbsp;</h4>
                    <img class="img-star" src="img/star.svg" alt="" /><img
                      class="img-star"
                      src="img/star.svg"
                      alt=""
                    /><img class="img-star" src="img/star.svg" alt="" /><img
                      class="img-star"
                      src="img/star.svg"
                      alt=""
                    /><img class="img-star" src="img/star.svg" alt="" />
                  </div>
                  <p>
                    Гостиница в шаговой доступности от автовокзала , уютные
                    номера , приемлемые цены. Очень хороший персонал.
                  </p>
                </div>
              </div>
            </div>
            <div class="review_item">
              <div class="row justify-content-center">
                <div class="review col-9">
                  <h2>Виталий Кулигин</h2>
                  <div class="marks">
                    <h4>Оценка: &nbsp;</h4>
                    <img class="img-star" src="img/star.svg" alt="" /><img
                      class="img-star"
                      src="img/star.svg"
                      alt=""
                    /><img class="img-star" src="img/star.svg" alt="" /><img
                      class="img-star"
                      src="img/star.svg"
                      alt=""
                    /><img class="img-star" src="img/star.svg" alt="" />
                  </div>
                  <p>
                    Брал трёх местный номер с женой и сыном также разрешили
                    заселиться с собакой. Чисто, уютно. В номере три раздельные
                    кровати, телевизор, стол, стулья. Туалет и душ в номере.
                    Кухня с чайником, куллером и холодильник на этаже. За всё
                    1600 руб. Как по мне, это лучшее качество за эту цену!
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="contact">
        <div class="container">
          <div class="row slid">
            <div
              class="
                col-lg-4
                offset-lg-1
                col-sm-8
                offset-sm-2
                col-10
                offset-1
                text-contact
              "
            >
              <strong
                ><img
                  src="img/contacts/phone-contact.svg"
                  alt=""
                />Телефоны:</strong
              >
              <p>8 (343-85) 40 702,<br />8 (800) 300 40 02.</p>
              <strong>
                <img src="img/contacts/mail.svg" alt="" /> Email:</strong
              >
              <p>kolizey-office@mail.ru</p>
              <strong>
                <img src="img/contacts/location.svg" alt="" /> Адрес:</strong
              >
              <p>
                Свердловская область,<br />г. Серов,<br />ул. Агломератчиков,
                21Б.
              </p>
            </div>
            <div class="col-lg-6">
              <script
                class="map"
                type="text/javascript"
                charset="utf-8"
                async
                src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A6cbe341e7f035dbbb9b0bf5f4ee579dbe557ed02c7174f0f5eb6f9d323377e6e&amp;width=100%&amp;height=300&amp;lang=ru_RU&amp;scroll=true"
              ></script>
            </div>
          </div>
        </div>
      </section>

      <footer id="footer">
        <div class="container">
          <div class="row slid">
            <div class="col-xl-3 offset-xl-2">
              <div class="phone-link">
                <p class="info-footer">
                  <img
                    class="phone-footer"
                    src="img/footer/phone-white.svg"
                    alt=""
                  /><strong>8(800)250-76-61</strong><br />Закажите обратный
                  звонок
                </p>
              </div>
            </div>
            <div class="col-xl-2">
              <div class="logo-footer">
                <img src="img/footer/footer-logo.png" alt="" />
              </div>
            </div>
            <div class="col-xl-3">
              <div class="mail-link">
                <p class="info-footer">
                  <img
                    class="mail-footer"
                    src="img/footer/mail-white.svg"
                    alt=""
                  /><strong>kolizey-office@mail.ru</strong><br />По всем
                  вопросом обращаться
                </p>
              </div>
            </div>
          </div>
        </div>
      </footer>

      <div
        class="modal hide fade"
        id="exampleModal"
        tabindex="-1"
        role="dialog"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
      >
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">
                Заявка на бронирование
              </h5>
              <button
                type="button"
                class="close"
                data-dismiss="modal"
                aria-label="Close"
              >
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form id="bookForm">
                <input
                  type="hidden"
                  name="project_name"
                  value="Гостиница Колизей"
                />
                <input
                  type="hidden"
                  name="admin_email"
                  value="wizardtema@yandex.ru"
                />
                <input
                  type="hidden"
                  name="form_subject"
                  value="Заявка на бронь номера"
                />
                <div class="form-group">
                  <label for="name" class="col-form-label">Ваше имя:</label>
                  <input
                    type="name"
                    name="username"
                    required
                    class="form-control"
                    id="recipient-name"
                    placeholder="Имя"
                  />
                </div>
                <div class="form-group">
                  <label for="number" class="col-form-label"
                    >Ваш номер телефона:</label
                  >
                  <input
                    type="tel"
                    name="phone"
                    class="form-control"
                    id="phone"
                    onkeydown="return validateNumber(event)"
                    maxlength="11"
                    placeholder="7 (999) 99 99 999"
                    required="required"
                  />
                </div>
                <div class="form-group">
                  <label for="mail" class="col-form-label">Ваш e-mail:</label>
                  <input
                    type="email"
                    name="usermail"
                    class="form-control"
                    id="email-id"
                    placeholder="E-mail"
                  />
                </div>
                <div class="form-group">
                  <label class="col-form-label">Дата бронирования</label>
                  <input
                    type="date"
                    name="time"
                    id="datepicker"
                    class="form-control"
                    data-position="right top"
                    placeholder="Дата бронирования"
                  />
                </div>
                <div class="form-group">
                  <label for="room" class="col-form-label"
                    >Категория номера:</label
                  >
                  <select type="text" name="category" required>
                    <option value="Стандарт">Стандарт</option>
                    <option value="Комфорт">Комфорт</option>
                    <option value="Люкс">Люкс</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="guests" class="col-form-label"
                    >Количество гостей:</label
                  >
                  <select type="text" name="amount_guests" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>
                <input type="submit" value="Забронировать" />
              </form>
            </div>
          </div>
        </div>
      </div>
    </main>

    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
      integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
      crossorigin="anonymous"
    ></script>
    <script
      type="text/javascript"
      src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"
    ></script>
    <!-- Подключает стиль slick slider -->
    <link rel="stylesheet" href="slick/slick.css" />
    <link rel="stylesheet" href="slick/slick-theme.css" s />
    <!-- Подключает библиотеку slick slider -->
    <script src="js/slick.min.js"></script>
    <!-- Подключает файл скриптов -->
    <script src="js/main.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.min.js"
      type="text/javascript"
    ></script>
  </body>
</html>