@extends('layouts.app')

@section('content')
    <!--
			=============================================
				Theme Hero Banner
			==============================================
			-->
    <div class="hero-banner-one p-30">
        <div class="bg-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7">
                        <h1 class="hero-heading fw-bold tx-dark">Багетная<br> <span class="position-relative d-inline-block">Мастерска № 1</span></h1>
                        <p class="text-lg mb-60 pt-50 pe-xl-5 lg-pt-30 lg-mb-40">Предлагаем большой спектр продукции: изготовление рамок для фотографий, картин, плакатов и других работ.</p>
                        <form action="#" class="position-relative bg-white">
                            <label class="position-absolute fs-15">Телефон</label>
                            <input type="text" placeholder="+7 (988) 777-77-77" class="fs-17 position-absolute w-100 tx-dark fw-500">
                            <button class="tran3s position-absolute">Перезвонить</button>
                        </form>
                        <div class="pr-info fw-500 fs-20 tx-dark mt-35">Более <span class="fw-bold text-decoration-underline">15,000+ клиентов</span> в Москве</div>
                    </div>
                </div>
                <div class="card-one shapes bg-white wow fadeInRight">
                    <div class="icon rounded-circle position-absolute fs-18 text-white"><i class="bi bi-check-lg"></i></div>
                    <h6 class="fw-500 tx-dark mb-15">С нами Вы сэкономите до 50% свох средств</h6>
                    <a href="#" class="more-btn tran3s text-uppercase fw-500 fs-13">Оформить заказ</a>
                </div>
                <div class="illustration-holder">
                    <img src="images/lazy.svg" data-src="/4778.jpg" alt="" class="lazy-img main-illustration w-100">
                    <img src="images/lazy.svg" data-src="images/shape/shape_01.svg" alt="" class="lazy-img shapes shape-one">
                    <img src="images/lazy.svg" data-src="images/shape/shape_02.svg" alt="" class="lazy-img shapes shape-two">
                    <img src="images/lazy.svg" data-src="images/shape/shape_03.svg" alt="" class="lazy-img shapes shape-three">
                    <img src="images/lazy.svg" data-src="images/shape/shape_04.svg" alt="" class="lazy-img shapes shape-four">
                    <img src="images/lazy.svg" data-src="images/shape/shape_05.svg" alt="" class="lazy-img shapes shape-five">
                    <img src="images/lazy.svg" data-src="images/shape/shape_06.svg" alt="" class="lazy-img shapes shape-six">
                    <img src="images/lazy.svg" data-src="images/shape/shape_07.svg" alt="" class="lazy-img shapes shape-seven">
                </div> <!-- /.illustration-holder -->
            </div> <!-- /.container -->
            <img src="images/lazy.svg" data-src="images/shape/shape_08.svg" alt="" class="lazy-img shapes shape-eight">
        </div>
    </div> <!-- /.hero-banner-one -->




    <!--
    =============================================
        Feature Section One
    ==============================================
    -->
    <div class="fancy-feature-one pt-170 lg-pt-140">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 wow fadeInLeft">
                    <div class="title-style-one text-center text-lg-start">
                        <h2 class="main-title fw-bold tx-dark m0">БАГЕТНАЯ <span>МАСТЕРСКАЯ №1</span></h2>
                    </div> <!-- /.title-style-one -->
                </div>
                <div class="col-lg-5 ms-auto wow fadeInRight">
                    <p class="text-lg text-center text-lg-start md-pt-30 m0">Мы команда профессионалов, которые любят свое дело! Талантливые дизайнеры подберут для Вас красивое оформление картины, а мастера создадут любую Вашу фантазию.</p>
                </div>
            </div>
        </div>
        <div class="inner-content pt-110 lg-pt-60 md-pt-30">
            <div class="row gx-xxl-5">
                <div class="col-lg-3 col-sm-6 wow fadeInUp">
                    <div class="card-style-one pe-xxl-5 position-relative mt-40">
                        <div class="icon d-flex align-items-center justify-content-center" style="background-color: rgba(255, 171, 51, 0.18);"><img src="images/lazy.svg" data-src="images/icon/icon_01.svg" alt="" class="lazy-img"></div>
                        <h5 class="fw-500 mt-35 mb-25"><a href="#" class="tran3s tx-dark">Багетные работы</a></h5>
                        <p class="mb-25">Опытные мастера помогут Вам воплотить любые фантазии в реальность!</p>
                        <a href="#"><img src="images/lazy.svg" data-src="images/icon/icon_05.svg" alt="" class="lazy-img"></a>
                    </div> <!-- /.card-style-one -->
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="card-style-one pe-xxl-5 position-relative mt-40">
                        <div class="icon d-flex align-items-center justify-content-center" style="background-color: rgba(100, 219, 226, 0.18);"><img src="images/lazy.svg" data-src="images/icon/icon_02.svg" alt="" class="lazy-img"></div>
                        <h5 class="fw-500 mt-35 mb-25"><a href="#" class="tran3s tx-dark">Широкоформатная печать</a></h5>
                        <p class="mb-25">Это лучшая идея для подарка. Можно создать портрет на холсте с фотографии. </p>
                        <a href="#"><img src="images/lazy.svg" data-src="images/icon/icon_05.svg" alt="" class="lazy-img"></a>
                    </div> <!-- /.card-style-one -->
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="card-style-one pe-xxl-5 position-relative mt-40">
                        <div class="icon d-flex align-items-center justify-content-center" style="background-color: rgba(255, 160, 194, 0.18);"><img src="images/lazy.svg" data-src="images/icon/icon_03.svg" alt="" class="lazy-img"></div>
                        <h5 class="fw-500 mt-35 mb-25"><a href="#" class="tran3s tx-dark">Накатка на пенокартон</a></h5>
                        <p class="mb-25">Востребованная услуга, под которой подразумевается прикрепление полотна на твердую поверхность. </p>
                        <a href="#"><img src="images/lazy.svg" data-src="images/icon/icon_05.svg" alt="" class="lazy-img"></a>
                    </div> <!-- /.card-style-one -->
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="card-style-one pe-xxl-5 position-relative mt-40">
                        <div class="icon d-flex align-items-center justify-content-center" style="background-color: rgba(246, 243, 255, 1);"><img src="images/lazy.svg" data-src="images/icon/icon_04.svg" alt="" class="lazy-img"></div>
                        <h5 class="fw-500 mt-35 mb-25"><a href="#" class="tran3s tx-dark">Оформление гравюр</a></h5>
                        <p class="mb-25">Багетная мастерская недорого подберет для Вас красивое оформление!</p>
                        <a href="#"><img src="images/lazy.svg" data-src="images/icon/icon_05.svg" alt="" class="lazy-img"></a>
                    </div> <!-- /.card-style-one -->
                </div>
            </div>
        </div> <!-- /.inner-content -->
    </div> <!-- /.fancy-feature-one -->



    <!--
    =============================================
        Feature Section Two
    ==============================================
    -->
    <div class="fancy-feature-two position-relative pt-225 mt-40 lg-pt-100 sm-pt-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 ms-auto order-md-last">
                    <div class="block-style-one pt-35 wow fadeInRight">
                        <div class="title-style-one">
                            <div class="sc-title text-uppercase">О нас</div>
                            <h2 class="main-title fw-bold tx-dark m0">НАШИ  <span>ПРЕИМУЩЕСТВА</span></h2>
                        </div> <!-- /.title-style-one -->
                        <p class="text-lg tx-dark pt-35 pb-40 lg-pb-20">На продукцию нашей мастерской распространяется гарантия 1 год.</p>
                        <ul class="style-none list-item fs-18">
                            <li>01. Приемлемая стоимость</li>
                            <li>02. Гарантия</li>
                            <li>03. Онлайн-калькулятор багета</li>
                            <li>04. Соблюдение сроков и услуга срочного заказа</li>
                            <li>05. Удобное расположение мастерских и график работы</li>
                            <li>06. Выездной подбор багета дизайнером и монтаж</li>
                            <li>07. Доставка крупногабаритных работ</li>
                        </ul>
                    </div> <!-- /.block-style-one -->
                    <a href="#" class="more-btn tran3s fw-500 fs-18 wow fadeInUp">Оформить заказ <i class="bi bi-arrow-right"></i></a>
                </div>
                <div class="col-md-6 order-md-first wow fadeInLeft">
                    <div class="img-meta d-inline-block position-relative ps-3 ps-lg-5 pb-50 md-mt-50 sm-mt-80">
                        <img src="images/lazy.svg" data-src="/orig.webp" alt="" class="lazy-img">
                        <img src="images/lazy.svg" data-src="images/shape/shape_09.svg" alt="" class="lazy-img shapes shape-one">
                        <img src="images/lazy.svg" data-src="images/shape/shape_10.svg" alt="" class="lazy-img shapes shape-two">
                        <div class="shapes shape-three"></div>
                        <img src="images/lazy.svg" data-src="images/shape/shape_11.svg" alt="" class="lazy-img shapes shape-four">
                        <img src="images/lazy.svg" data-src="images/shape/shape_12.svg" alt="" class="lazy-img shapes shape-five">
                        <div class="shapes shape-six"></div>
                        <img src="images/lazy.svg" data-src="images/shape/shape_13.svg" alt="" class="lazy-img shapes shape-seven">
                        <div class="card-one wow fadeInUp" data-wow-delay="0.25s">
                            <div class="icon d-flex align-items-center justify-content-center rounded-circle"><img src="images/lazy.svg" data-src="images/icon/icon_06.svg" alt="" class="lazy-img"></div>
                            <div class="name fs-18 fw-500 tx-dark mb-10">- Игорь Генадьевич, <span class="opacity-50">генеральный директор</span></div>
                            <p class="fs-18 m0">Мы стремимся ответить на любой запрос менее чем за 10 минут</p>
                        </div> <!-- /.card-one -->
                    </div> <!-- /.img-meta -->
                </div>
            </div>
        </div> <!-- /.container -->
    </div> <!-- /.fancy-feature-two -->



    <!--
    =====================================================
        Feedback Section One
    =====================================================
    -->
    <div class="feedback-section-one position-relative p-30 mt-200 lg-mt-130 wow fadeInUp">
        <div class="bg-wrapper position-relative pt-150 pb-180 lg-pt-100 lg-pb-120">
            <img src="images/lazy.svg" data-src="images/shape/shape_14.svg" alt="" class="lazy-img shapes shape-one">
            <div class="shapes shape-two"></div>
            <div class="shapes shape-three"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-7">
                        <div class="title-style-one text-center text-md-start">
                            <h2 class="main-title fw-bold tx-dark m0">Что <span>Наши Клиенты</span> Говорят О Нас.</h2>
                        </div> <!-- /.title-style-one -->
                    </div>
                    <div class="col-lg-6 col-md-5 ms-auto d-flex justify-content-center justify-content-sm-end">
                        <ul class="slider-arrows slick-arrow-one d-flex justify-content-center style-none mb-30">
                            <li class="prev_f1 slick-arrow rounded-circle text-center fs-20 tran3s" style=""><i class="bi bi-chevron-left"></i></li>
                            <li class="next_f1 slick-arrow rounded-circle text-center fs-20 tran3s" style=""><i class="bi bi-chevron-right"></i></li>
                        </ul>
                    </div>
                </div>
            </div> <!-- /.container -->

            <div class="inner-content mt-100 lg-mt-60">
                <div class="feedback_slider_one">
                    <div class="item">
                        <div class="feedback-block-one pt-45 align-items-end d-sm-flex">
                            <div class="img-meta position-relative">
                                <img src="images/media/img_02.png" alt="" class="m-auto">
                            </div>
                            <div class="text-wrapper">
                                <div class="icon d-flex align-items-center justify-content-center rounded-circle mb-15" style="background-color:#825EFF;"><img src="images/icon/icon_07.svg" alt=""></div>
                                <div class="rating h3 fw-bold tx-dark">Александр А.</div>
                                <p class="text-lg pt-35 pb-20">Мастер работает быстро и профессионально. Всё что мне надо было, сделал быстро и качественно. Ему спасибо.</p>

                            </div> <!-- /.text-wrapper -->
                        </div> <!-- /.feedback-block-one -->
                    </div>
                    <div class="item">
                        <div class="feedback-block-one pt-45 align-items-end d-sm-flex">
                            <div class="img-meta position-relative">
                                <img src="images/media/img_03.png" alt="" class="m-auto">
                            </div>
                            <div class="text-wrapper">
                                <div class="icon d-flex align-items-center justify-content-center rounded-circle mb-15" style="background-color:#08CE97;"><img src="images/icon/icon_07.svg" alt=""></div>
                                <div class="rating h3 fw-bold tx-dark">Кравцова наталья</div>
                                <p class="text-lg pt-35 pb-20">Очень качественная и быстро выполненная работа. Спасибо!</p>

                            </div> <!-- /.text-wrapper -->
                        </div> <!-- /.feedback-block-one -->
                    </div>
                    <div class="item">
                        <div class="feedback-block-one pt-45 align-items-end d-sm-flex">
                            <div class="img-meta position-relative">
                                <img src="images/media/img_02.png" alt="" class="m-auto">
                            </div>
                            <div class="text-wrapper">
                                <div class="icon d-flex align-items-center justify-content-center rounded-circle mb-15" style="background-color:#FF8A3A;"><img src="images/icon/icon_07.svg" alt=""></div>
                                <div class="rating h3 fw-bold tx-dark">Руслан Ившин</div>
                                <p class="text-lg pt-35 pb-20">Ребята профессионалы. Хорошо выполняют свою работу.</p>

                            </div> <!-- /.text-wrapper -->
                        </div> <!-- /.feedback-block-one -->
                    </div>
                    <div class="item">
                        <div class="feedback-block-one pt-45 align-items-end d-sm-flex">
                            <div class="img-meta position-relative">
                                <img src="images/media/img_03.png" alt="" class="m-auto">
                            </div>
                            <div class="text-wrapper">
                                <div class="icon d-flex align-items-center justify-content-center rounded-circle mb-15" style="background-color:#08CE97;"><img src="images/icon/icon_07.svg" alt=""></div>
                                <div class="rating h3 fw-bold tx-dark">Евгений О.</div>
                                <p class="text-lg pt-35 pb-20">Замечательная мастерская!!!! Оформят ваши картины в лучшем виде!!!</p>

                            </div> <!-- /.text-wrapper -->
                        </div> <!-- /.feedback-block-one -->
                    </div>
                </div> <!-- /.feedback_slider_one -->
            </div> <!-- /.inner-content -->
        </div> <!-- /.bg-wrapper -->
    </div> <!-- /.feedback-section-one -->


    <!--
    =============================================
        Feature Section Two
    ==============================================
    -->
    <div class="fancy-feature-two position-relative pt-250 lg-pt-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6 ms-auto order-lg-last">
                    <div class="block-style-one md-mb-60 wow fadeInRight">
                        <div class="title-style-one">
                            <h2 class="main-title fw-bold tx-dark m0">Подбор багета <span>Искуственныи </span><span>интелектом</span></h2>
                        </div> <!-- /.title-style-one -->
                        <p class="text-lg pt-60 pb-60 lg-pt-30 lg-pb-30">
                            Это лучшие решения для поиска и подбора багета на нашем сайте.
                            Мы предлагаем список багета, основанный на искусственном интеллекте и нейросетях,
                            которые позволяют улучшить поиск и оптимизировать поисковые системы.
                            Сравните функциональность, производительность и цены,
                            чтобы найти наилучший инструмент для вашего проекта
                        </p>
                        <div class="name fs-20 tx-dark fw-500">- Андрей Глушков, <span class="opacity-25">Программист</span></div>
                    </div> <!-- /.block-style-one -->
                </div>
                <div class="col-xl-6 col-lg-5 col-md-8 col-sm-10 order-lg-first wow fadeInLeft">
                    <div class="img-meta-two d-inline-block position-relative pb-50">
                        <img src="images/lazy.svg" data-src="/3a3943e8dd30d126cf664e62ac84c496.gif" alt="" class="lazy-img rounded-3">
                        <img src="images/lazy.svg" data-src="images/shape/shape_15.svg" alt="" class="lazy-img shapes shape-one">
                        <img src="images/lazy.svg" data-src="images/shape/shape_16.svg" alt="" class="lazy-img shapes shape-two">
                        <img src="images/lazy.svg" data-src="images/shape/shape_17.svg" alt="" class="lazy-img shapes shape-three">
                        <img src="images/lazy.svg" data-src="images/shape/shape_18.svg" alt="" class="lazy-img shapes shape-four">
                        <img src="images/lazy.svg" data-src="images/shape/shape_19.svg" alt="" class="lazy-img shapes shape-five">
                        <div class="card-one wow fadeInUp" data-wow-delay="0.25s">
                            <div class="icon d-flex align-items-center justify-content-center rounded-circle"><img src="images/lazy.svg" data-src="images/icon/icon_08.svg" alt="" class="lazy-img"></div>
                            <h5 class="fw-500 m0">Подобрать багет</h5>
                        </div> <!-- /.card-one -->
                    </div> <!-- /.img-meta-two -->
                </div>
            </div>
        </div> <!-- /.container -->
    </div> <!-- /.fancy-feature-two -->



    <!--
    =====================================================
        Card Style Two
    =====================================================
    -->
    <div class="wrapper pt-110 lg-pt-80">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp">
                    <div class="card-style-two mt-40">
                        <div class="icon d-flex align-items-end"><img src="images/lazy.svg" data-src="images/icon/icon_09.svg" alt="" class="lazy-img"></div>
                        <span class="d-inline-block text-uppercase fs-14 opacity-75 mt-30 mb-10">Высокое качество</span>
                        <h4 class="fw-500 m0">специалисты выполняют все работы с использованием специализированного оборудования</h4>
                    </div> <!-- /.card-style-two -->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="card-style-two mt-40">
                        <div class="icon d-flex align-items-end"><img src="images/lazy.svg" data-src="images/icon/icon_10.svg" alt="" class="lazy-img"></div>
                        <span class="d-inline-block text-uppercase fs-14 opacity-75 mt-30 mb-10">Индивидуальный подход</span>
                        <h4 class="fw-500 m0">К каждому клиенту позволяют нам активно сотрудничать со специалистами дизайна</h4>
                    </div> <!-- /.card-style-two -->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="card-style-two mt-40">
                        <div class="icon d-flex align-items-end"><img src="images/lazy.svg" data-src="images/icon/icon_11.svg" alt="" class="lazy-img"></div>
                        <span class="d-inline-block text-uppercase fs-14 opacity-75 mt-30 mb-10">Быстрое изготовление</span>
                        <h4 class="fw-500 m0">По просьбе клиента мы можем изготовить багетную раму в сжатые сроки, без доплаты «за срочность».</h4>
                    </div> <!-- /.card-style-two -->
                </div>
            </div>
        </div>
    </div> <!-- /.wrapper -->



    <!--
    =====================================================
        Blog Section One
    =====================================================
    -->
    <div class="blog-section-one p-30 mt-160 lg-mt-120">
        <div class="bg-wrapper pt-140 pb-170 lg-pt-100 lg-pb-100 position-relative">
            <div class="shapes shape-one"></div>
            <img src="images/lazy.svg" data-src="images/shape/shape_16.svg" alt="" class="lazy-img shapes shape-two">
            <div class="shapes shape-three"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-7">
                        <div class="title-style-one text-center text-sm-start xs-mb-30">
                            <h2 class="main-title fw-bold tx-dark m0">  <span>Наши статьи</span> </h2>
                        </div> <!-- /.title-style-one -->
                    </div>
                    <div class="col-lg-6 col-sm-5 ms-auto d-flex justify-content-center justify-content-sm-end">
                        <a href="/" class="btn-one fw-500">Перейти в Блог</a>
                    </div>
                </div>

                <div class="row pt-50 lg-pt-30">
                    <div class="col-lg-4 col-sm-6 d-flex wow fadeInUp">
                        <article class="blog-meta-one tran3s mt-30">
                            <figure class="post-img m0"><a href="#" class="w-100 d-block"><img src="images/lazy.svg" data-src="images/blog/blog_img_01.jpg" alt="" class="lazy-img w-100 tran4s"></a></figure>
                            <div class="post-data mt-25">
                                <a href="/" class="post-tag fw-500 tx-dark text-uppercase mb-20" style="background-color: #FFEAC9;">Technology</a>
                                <a href="/" class="blog-title d-block"><h4 class="tran3s">Печать на холсте</h4></a>
                                <a href="/" class="read-btn mt-35"><img src="images/lazy.svg" data-src="images/icon/icon_12.svg" alt="" class="lazy-img"></a>
                            </div> <!-- /.post-data -->
                        </article> <!-- /.blog-meta-one -->
                    </div>
                    <div class="col-lg-4 col-sm-6 d-flex wow fadeInUp" data-wow-delay="0.1s">
                        <article class="blog-meta-one tran3s mt-30">
                            <figure class="post-img m0"><a href="#" class="w-100 d-block"><img src="images/lazy.svg" data-src="images/blog/blog_img_02.jpg" alt="" class="lazy-img w-100 tran4s"></a></figure>
                            <div class="post-data mt-25">
                                <a href="/" class="post-tag fw-500 tx-dark text-uppercase mb-20" style="background-color: #CEEBF4;">Design</a>
                                <a href="/" class="blog-title d-block"><h4 class="tran3s">Натяжка холста</h4></a>
                                <a href="/" class="read-btn mt-35"><img src="images/lazy.svg" data-src="images/icon/icon_12.svg" alt="" class="lazy-img"></a>
                            </div> <!-- /.post-data -->
                        </article> <!-- /.blog-meta-one -->
                    </div>
                    <div class="col-lg-4 col-sm-6 d-flex wow fadeInUp" data-wow-delay="0.2s">
                        <article class="blog-meta-one tran3s mt-30">
                            <figure class="post-img m0"><a href="#" class="w-100 d-block"><img src="images/lazy.svg" data-src="images/blog/blog_img_03.jpg" alt="" class="lazy-img w-100 tran4s"></a></figure>
                            <div class="post-data mt-25">
                                <a href="/" class="post-tag fw-500 tx-dark text-uppercase mb-20" style="background-color: #FFDFDF;">Support</a>
                                <a href="/" class="blog-title d-block"><h4 class="tran3s">Багеты для картин</h4></a>
                                <a href="/" class="read-btn mt-35"><img src="images/lazy.svg" data-src="images/icon/icon_12.svg" alt="" class="lazy-img"></a>
                            </div> <!-- /.post-data -->
                        </article> <!-- /.blog-meta-one -->
                    </div>
                </div>
            </div> <!-- /.container -->
        </div> <!-- /.bg-wrapper -->
    </div> <!-- /.blog-section-one -->



    <!--
    =============================================
        Wrapper
    ==============================================
    -->
    <div class="wrapper position-relative mt-150">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-10 m-auto text-center">
                    <div class="title-style-one wow fadeInUp">
                        <h2 class="main-title fw-bold tx-dark m0">РАССЧИТАЙТЕ СТОИМОСТЬ <span>БАГЕТА</span></h2>
                    </div> <!-- /.title-style-one -->
                    <p class="text-lg tx-dark pt-40 pb-35 lg-pt-30 lg-pb-20 wow fadeInUp" data-wow-delay="0.1s">Все работы выполняются вручную, что позволяет создавать уникальные и качественные изделия.</p>
                    <a href="#" class="btn-two fs-18 fw-500 wow fadeInUp" data-wow-delay="0.2s">Конструктор багета</a>
                </div>
            </div>
        </div>
        <img src="images/lazy.svg" data-src="images/shape/shape_20.svg" alt="" class="lazy-img shapes shape-one" style="top:5%; left: 10%;">
        <img src="images/lazy.svg" data-src="images/shape/shape_21.svg" alt="" class="lazy-img shapes shape-two" style="bottom:-4%; left: 18%;">
        <img src="images/lazy.svg" data-src="images/shape/shape_22.svg" alt="" class="lazy-img shapes shape-three" style="bottom:-4%; right: 23%;">
        <img src="images/lazy.svg" data-src="images/shape/shape_23.svg" alt="" class="lazy-img shapes shape-four" style="top:-3%; right: 14%;">
    </div> <!-- /.wrapper -->




    <!--
    =====================================================
        Fancy Short Banner One
    =====================================================
    -->
    <div class="fancy-short-banner-one mt-170 lg-mt-120">
        <div class="container">
            <div class="bg-wrapper position-relative wow fadeInUp">
                <div class="shapes shape-one"></div>
                <div class="inner-wrapper">
                    <div class="subscribe-area">
                        <div class="row align-items-end">
                            <div class="col-lg-6">
                                <div class="title-style-two">
                                    <div class="sc-title fw-500 ">Перезвоним в течении 10 минут</div>
                                    <h4 class="main-title fw-bold tx-dark">Оформите заявку на обратную связь</h4>
                                </div> <!-- /.title-style-two -->
                            </div>
                            <div class="col-lg-6">
                                <div class="subscribe-form">
                                    <form action="#">
                                        <input type="text" placeholder="+7 (988) 777-77-77">
                                        <button class="tran3s position-absolute">Перезвонить</button>
                                    </form>
                                </div> <!-- /.subscribe-form -->
                            </div>
                        </div>
                    </div> <!-- /.subscribe-area -->
                </div>
            </div> <!-- /.bg-wrapper -->
        </div>
    </div> <!-- /.fancy-short-banner-one -->





@endsection

@section('description', 'Понадобились услуги недорогой багетной мастерской в Москве? Наша Багетная Мастерская порадует Вас доступными ценами. Мы - лучшие в качественном оформлении багетными рамками.')
@section('keywords', 'рамки для картин, багетная мастерская, багетная мастерская в Москве, багетная мастерская недорого, багет, паспарту, картины ')
@section('title', 'Багетная мастерская - качественно и недорого! ')
