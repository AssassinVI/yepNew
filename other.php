<?php 
//-- 共用conn --
require 'share_area/conn.php';
?>

<!DOCTYPE html>
<html lang="zh-tw">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "最新消息｜".$company['name'];?></title>
    <!-- FACEBOOK 分享資訊 -->
    <meta property="og:title" content="<?php echo "最新消息｜".$company['name'];?>" />
    <meta property="og:description" content="<?php echo $company['description'];?>" />
    <meta property="og:url" content="<?php echo NOW_URL;?>" />
    <meta itemprop="image" property="og:image" content="<?php echo NOW_HOST.'img/share.jpg';?>" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="<?php echo "最新消息｜".$company['name'];?>" />
    <meta itemprop="name" content="<?php echo "最新消息｜".$company['name'];?>" />
    <meta itemprop="description" content="<?php echo $company['description'];?>" />
    <meta name="description" content="<?php echo $company['description'];?>" />
    <meta name="keywords" content="<?php echo $company['keywords'];?>" />
    <!-- 標準網址 -->
    <link rel="canonical" href="<?php echo NOW_URL;?>" />
    
    <?php 
     //-- 共用CSS --
     require 'share_area/css.php';
    ?>

</head>

<body class="other-body">

    <?php 
     //-- 共用loading --
     require 'share_area/transitions.php';
     //-- 共用nav --
     require 'share_area/nav.php';
    ?>

    <div class="container">
        <div class="c1-box">
            <div class="title-box">
                <div class="text-1">
                    NEWS
                </div>
                <!-- <div class="text-2">
                    最新消息
                </div> -->
            </div>

            <img class="c1-bg" src="assets/images/other/c1_bg.png" alt="c1_bg" srcset="">


            <div class="right-box">
                <div class="swiper-box">
                    <div class="swiper c1-swiper">
                        <div class="swiper-wrapper">
                            <!-- <div class="swiper-slide">
                                <a href="./news.html">
                                    <img src="assets/images/other/1.png" alt="" srcset="">
                                    <div class="title">高效智能回收機台，您使用過了嗎？</div>
                                    <div class="year">2023</div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="./news.html">
                                    <img src="assets/images/other/2.png" alt="" srcset="">
                                    <div class="title">儂儂出國考察！1/12-1/16不在家！</div>
                                    <div class="year">2022</div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="./news.html">
                                    <img src="assets/images/other/3.png" alt="" srcset="">
                                    <div class="title">新春愉快！祝大家新年快樂！</div>
                                    <div class="year">2022</div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="./news.html">
                                    <img src="assets/images/other/1.png" alt="" srcset="">
                                    <div class="title">高效智能回收機台，您使用過了嗎？</div>
                                    <div class="year">2023</div>
                                </a>
                            </div> -->
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="c1-swiper-prev">
                        <img src="assets/images/home/prev.svg" alt="" srcset="">
                    </div>
                    <div class="c1-swiper-next">
                        <img src="assets/images/home/next.svg" alt="" srcset="">
                    </div>
                </div>
                <img class="moblie-left-item" src="assets/images/other/c1_moblie_left.png" alt="" srcset="">
                <img class="moblie-right-item" src="assets/images/other/c1_moblie_right.png" alt="" srcset="">
            </div>
        </div>

        <div class="c2-box">
            <div class="left-box">
                <div class="machine-box">
                    <img class="all-machine" src="assets/images/other/machine.png" alt="" srcset="">
                    <img class="origin-machine" src="assets/images/other/origin.png" alt="" srcset="">
                    <img class="change1-machine change-item" src="assets/images/other/change1.png" alt="" srcset="">
                    <img class="change2-machine change-item" src="assets/images/other/change2.png" alt="" srcset="">
                    <img class="change3-machine change-item" src="assets/images/other/change3.png" alt="" srcset="">
                    <img class="change4-machine change-item" src="assets/images/other/change4.png" alt="" srcset="">
                </div>
            </div>

            <div class="right-box">
                <img class="c2-svg-text-top" src="assets/images/other/c2_svg_text_2.svg" alt="" srcset="">
                <img class="c2-svg-text-bottom" src="assets/images/other/c2_svg_text_2.svg" alt="" srcset="">
                <div class="tab-box">
                    <div class="tab tab-active">機台簡介</div>
                    <div class="tab">功能說明</div>
                    <div class="tab">區域查詢</div>
                </div>
                <div class="change-box">

                    <div class="content-box change-content article_sp3">
                        <div class="title-box">
                            <img class="dot" src="assets/images/other/title_dot.png" alt="" srcset="">
                            <div class="title"><!-- 內容 --></div>
                        </div>
                        <div class="content">
                           <!-- 內容 -->
                        </div>
                        <div class="button-box">
                            <div class="button">
                                <div class="text av1">實踐能源再生</div>
                            </div>
                            <div class="button">
                                <div class="text av2"><!-- 內容 --></div>
                            </div>
                            <div class="button">
                                <div class="text av3"><!-- 內容 --></div>
                            </div>
                        </div>
                    </div>

                    <div class="content-box2 change-content">
                        <div class="button-box">
                            <div class="item bottle-box">
                                <div class="content2-button bottle-btn">
                                    <div class="text">寶特瓶投放入口</div>
                                </div>
                                <div class="item-content bottle-content">高約 1.35m</div>
                            </div>

                            <div class="item panel-box">
                                <div class="content2-button panel-btn">
                                    <div class="text">用戶觸控面板</div>
                                </div>
                                <div class="item-content panel-content">可放【靜態圖片】、【動態短影片】</div>
                            </div>

                            <div class="item battery-box">
                                <div class="content2-button battery-btn">
                                    <div class="text">電池投放入口</div>
                                </div>
                                <div class="item-content battery-content">高約 1.05m</div>
                            </div>

                            <div class="item all-box">
                                <div class="content2-button all-btn">
                                    <div class="text">全機皆可包膜</div>
                                </div>
                            </div>

                        </div>
                        <div class="fixed-swiper-box">
                            <div class="swiper c2-swiper">
                                <div class="swiper-wrapper">
                                    <!-- 內容 -->
                                </div>

                            </div>
                            <div class="c2-swiper-pagination"></div>
                            <div class="c2-swiper-prev">
                                <img src="assets/images/home/prev.svg" alt="" srcset="">
                            </div>
                            <div class="c2-swiper-next">
                                <img src="assets/images/home/next.svg" alt="" srcset="">
                            </div>
                        </div>
                    </div>

                    <div class="content-box3 change-content">
                        <div class="title-box">
                            <img class="dot" src="assets/images/other/title_dot2.png" alt="" srcset="">
                            <div class="title">在哪可以看到這些機台呢</div>
                        </div>
                        <div class="button-box">
                            <div class="button">
                                <div class="text location_title_0"><!-- 內容 --></div>
                            </div>
                            <div class="button">
                                <div class="text location_title_1"><!-- 內容 --></div>
                            </div>
                            <div class="button">
                                <div class="text location_title_2"><!-- 內容 --></div>
                            </div>
                        </div>

                        <div class="content-text-box">
                            <div class="text location_0">
                                <!-- 內容 -->
                            </div>
                            <div class="text location_1">
                                <!-- 內容 -->
                            </div>
                            <div class="text location_2">
                                <!-- 內容 -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-box3-scrolltop-btn">
                    back to top
                </div>
            </div>
        </div>

        <div class="c2-box-moblie">
            <img class="moblie-bg" src="assets/images/other/moblie_bg.png" alt="" srcset="">
            <div class="tab-box-moblie">
                <div class="tab-moblie tab-active-moblie">機台簡介</div>
                <div class="tab-moblie">功能說明</div>
                <div class="tab-moblie">區域查詢</div>
            </div>

            <div class="tab1-content change-content-moblie">
                <div class="title-box">
                    <img class="dot" src="assets/images/other/title_dot.png" alt="" srcset="">
                    <div class="title">高效智能回收機台，<br>您用過了嗎？</div>
                </div>
                <div class="content">
                    科技進步飛快，連回收都能變得有趣！提供便利性，也透過相對應的回饋機制，提高民眾的使用意願；「環保」、「回收」早是被高度關心的議題，因此除了曝光廣告的效益外，還能在民眾心中留下好的品牌形象。
                </div>

                <div class="machine-box-moblie">
                    <img class="all-machine-moblie" src="assets/images/other/machine.png" alt="" srcset="">
                </div>

                <div class="content1-button-box-moblie">
                    <div class="content1-button-moblie">
                        <div class="text">實踐能源再生</div>
                    </div>
                    <div class="content1-button-moblie">
                        <div class="text">曝光企業與品牌</div>
                    </div>
                    <div class="content1-button-moblie">
                        <div class="text">優質形象塑造</div>
                    </div>
                </div>
            </div>

            <div class="tab2-content change-content-moblie">
                <div class="machine-box-moblie">
                    <img class="all-machine-moblie" src="assets/images/other/machine.png" alt="" srcset="">
                    <img class="origin-machine-moblie" src="assets/images/other/origin.png" alt="" srcset="">
                    <img class="change1-machine-moblie change-item-moblie" src="assets/images/other/change1.png"
                        alt="" srcset="">
                    <img class="change2-machine-moblie change-item-moblie" src="assets/images/other/change2.png"
                        alt="" srcset="">
                    <img class="change3-machine-moblie change-item-moblie" src="assets/images/other/change3.png"
                        alt="" srcset="">
                    <img class="change4-machine-moblie change-item-moblie" src="assets/images/other/change4.png"
                        alt="" srcset="">
                </div>

                <div class="button-swiper-box">
                    <div class="swiper button-swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="button-box tab2-active-moblie">
                                    <div class="text">寶特瓶投放入口</div>
                                </div>

                            </div>
                            <div class="swiper-slide">
                                <div class="button-box">
                                    <div class="text">用戶觸控面板</div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="button-box">
                                    <div class="text">電池投放入口</div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="button-box">
                                    <div class="text">全機皆可包膜</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-content-moblie bottle-content-moblie">高約 1.35m</div>
                    <div class="item-content-moblie panel-content-moblie">可放【靜態圖片】、【動態短影片】</div>
                    <div class="item-content-moblie battery-content-moblie">高約 1.05m</div>
                    <div class="item-content-moblie space-content-moblie"></div>
                    <div class="button-swiper-prev">
                        <img src="assets/images/home/prev.svg" alt="" srcset="">
                    </div>
                    <div class="button-swiper-next">
                        <img src="assets/images/home/next.svg" alt="" srcset="">
                    </div>
                </div>

                <div class="fixed-swiper-box-moblie">
                    <div class="swiper fixed-swiper-moblie c2-swiper-ph">
                        <div class="swiper-wrapper">
                            <!-- 內容 -->
                        </div>

                    </div>
                    <div class="c2-swiper-pagination-moblie"></div>
                    <div class="c2-swiper-prev-moblie">
                        <img src="assets/images/home/prev.svg" alt="" srcset="">
                    </div>
                    <div class="c2-swiper-next-moblie">
                        <img src="assets/images/home/next.svg" alt="" srcset="">
                    </div>
                </div>

            </div>

            <div class="tab3-content change-content-moblie">
                <div class="title-box">
                    <img class="dot" src="assets/images/other/title_dot2.png" alt="" srcset="">
                    <div class="title">在哪可以看到這些機台呢</div>
                </div>

                <div class="tab3-button-box">
                    <div class="tab3-button tab3-active-moblie">
                        <div class="text location_title_0"><!-- 內容 --></div>
                    </div>
                    <div class="tab3-button">
                        <div class="text location_title_1"><!-- 內容 --></div>
                    </div>
                    <div class="tab3-button">
                        <div class="text location_title_2"><!-- 內容 --></div>
                    </div>
                </div>

                <div class="tab3-content-text-box">
                    <div class="tab3-content-text tab3-content-text1 location_0">
                        <!-- 內容 -->
                    </div>
                    <div class="tab3-content-text location_1">
                        <!-- 內容 -->
                    </div>
                    <div class="tab3-content-text location_2">
                        <!-- 內容 -->
                    </div>
                </div>
            </div>
        </div>
        <?php 
          //-- 共用footer --
          require 'share_area/footer.php'
        ?>
    </div>

    <?php
     //-- 共用js --
     require 'share_area/js.php'
    ?>
    
    <script src="js/other.js"></script>
    <script>

        $(document).ready(function () {
            $.ajax({
                type: "POST",
                url: "share_area/ajax/other_ajax.php",
                data: {
                    type: 'other',
                },
                dataType: "json",
                success: function (data) {
                    if(data.success){
                         console.log(data);

                         //-- 最新消息 --
                         let newsHtml='';
                         data.news.forEach(news => {
                            let StartDate=new Date(news.StartDate)
                                StartDate=`${StartDate.getFullYear()}/${(StartDate.getMonth()+1).toString().padStart(2, '0')}/${StartDate.getDate().toString().padStart(2, '0')}`
                            newsHtml+=`<div class="swiper-slide">
                                        <a href="news.php?Tb_index=${news.Tb_index}">
                                            <img src="${news.aImg}" alt="" srcset="">
                                            <div class="title">${news.aTitle_one}</div>
                                            <div class="year">${StartDate}</div>
                                        </a>
                                    </div>`;
                         });
                         $('.c1-swiper .swiper-wrapper').html(newsHtml)

                         //-- 概述 --
                         $('.article_sp3 .title').html(data.article_sp3.aTitle)
                         $('.article_sp3 .content').html(data.article_sp3.aText)
                         $('.article_sp3 .av1').html(data.article_sp3.adv1)
                         $('.article_sp3 .av2').html(data.article_sp3.adv2)
                         $('.article_sp3 .av3').html(data.article_sp3.adv3)

                         //-- 功能介紹 --
                         let article_sp4Html='';
                         data.article_sp4.imgSlide.forEach(imgSlide => {
                            article_sp4Html+=`<div class="swiper-slide">
                                                <img src="${imgSlide}" alt="" srcset="">
                                            </div>`;
                         });
                         $('.c2-swiper .swiper-wrapper, .c2-swiper-ph .swiper-wrapper').html(article_sp4Html)

                         //-- 位置 --
                         data.location.forEach((location, index) => {
                            $(`.location_title_${index}`).html(location.aTitle)
                            $(`.location_${index}`).html(location.aTxt)
                            // console.log(location.aTxt)
                         });
                         
                    }
                    else{
                        console.log(data.msg)
                    }
                }
            });
        });


        var window_width = window.screen.width;

        if (window_width <= 1024) {
            const mySwiper = new Swiper('.c1-swiper', {
                slidesPerView: 1,

                navigation: {
                    nextEl: '.c1-swiper-next',
                    prevEl: '.c1-swiper-prev'
                },
                pagination: {
                    el: ".swiper-pagination",
                },
            });

            const swiperButton = new Swiper('.button-swiper', {
                slidesPerView: 2,

                navigation: {
                    nextEl: '.button-swiper-next',
                    prevEl: '.button-swiper-prev'
                },

            });

            const moblieC2Swiper = new Swiper('.fixed-swiper-moblie', {
                slidesPerView: 1,
                navigation: {
                    nextEl: '.c2-swiper-next-moblie',
                    prevEl: '.c2-swiper-prev-moblie'
                },
                pagination: {
                    el: ".c2-swiper-pagination-moblie",
                },
            });
        } else {
            const mySwiper = new Swiper('.c1-swiper', {
                slidesPerView: 3,
                spaceBetween: 40,
                navigation: {
                    nextEl: '.c1-swiper-next',
                    prevEl: '.c1-swiper-prev'
                },
                pagination: {
                    el: ".swiper-pagination",
                },
            });
        }


        const mySwiper2 = new Swiper('.c2-swiper', {
            slidesPerView: 3,
            spaceBetween: 40,
            navigation: {
                nextEl: '.c2-swiper-next',
                prevEl: '.c2-swiper-prev'
            },
            pagination: {
                el: ".c2-swiper-pagination",
            },
        });

    </script>


</body>
</html>