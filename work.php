<?php 
//-- 共用conn --
require 'share_area/conn.php';
?>

<!DOCTYPE html>
<html lang="zh-tw">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "WORKS｜".$company['name'];?></title>
    <!-- FACEBOOK 分享資訊 -->
    <meta property="og:title" content="<?php echo "WORKS｜".$company['name'];?>" />
    <meta property="og:description" content="<?php echo $company['description'];?>" />
    <meta property="og:url" content="<?php echo NOW_URL;?>" />
    <meta itemprop="image" property="og:image" content="<?php echo NOW_HOST.'img/share.jpg';?>" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="<?php echo "WORKS｜".$company['name'];?>" />
    <meta itemprop="name" content="<?php echo "WORKS｜".$company['name'];?>" />
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

<body class="work-body">
    <?php 
     //-- 共用loading --
     require 'share_area/transitions.php';
     //-- 共用nav --
     require 'share_area/nav.php';
    ?>

    <div class="container">
        <div class="c1-c4-box">
            <div class="c1-box">
                <img class="item1" src="assets/images/work/item2.png" alt="" srcset="">
                <div class="c1-content">
                    <div class="title-box">
                        <div class="text en-text">WORKS</div>
                        <!-- <div class="text zh-text">影音製作</div>
                        <div class="text zh-text">平面製作</div>
                        <div class="text zh-text">網頁設計</div> -->
                    </div>
                    <div class="title-box-moblie">
                        <div class="text en-text">WORKS</div>
                        <div class="content-text-box">
                            <!-- <div class="content-text">影音製作</div>
                            <div class="content-text">平面製作</div>
                            <div class="content-text">網頁設計</div> -->
                        </div>
                    </div>
                </div>
                <img class="item2" src="assets/images/work/c1_circle.png" alt="" srcset="">
                <img class="top-small-text" src="assets/images/work/top_small_text.png" alt="" srcset="">
            </div>

            <div class="c2-box">
                <div class="c2-content">
                    <div class="top">
                        <div class="icon">
                            <img src="assets/images/work/film_icon.png" alt="" srcset="">
                        </div>
                        <div class="rectangle-box">
                            <img class="rectangle" src="assets/images/work/c2_rectangle.svg" alt="">
                            <img class="rectangle-moblie" src="assets/images/work/c2_rectangle_moblie.svg" alt="">

                            <div class="text-film">film schedule</div>
                        </div>
                    </div>
                    <div class="bottom">
                        <div class="time-box">
                            <img class="film-line" src="assets/images/work/film_line.svg" alt="">
                            <div class="item-box">
                                <div class="item item1">
                                    <div class="text">了解需求</div>
                                    <div class="circle">
                                        <img src="assets/images/work/time_circle.svg" alt="" srcset="">
                                    </div>
                                    <div class="number">1</div>
                                </div>
                                <div class="item item2">
                                    <div class="text">擬定企劃</div>
                                    <div class="circle">
                                        <img src="assets/images/work/time_circle.svg" alt="" srcset="">
                                    </div>
                                    <div class="number">2</div>
                                </div>
                                <div class="item item3">
                                    <div class="text">腳本提案</div>
                                    <div class="circle">
                                        <img src="assets/images/work/time_circle.svg" alt="" srcset="">
                                    </div>
                                    <div class="number">3</div>
                                </div>
                                <div class="item item4">
                                    <div class="text">拍攝執行</div>
                                    <div class="circle">
                                        <img src="assets/images/work/time_circle.svg" alt="" srcset="">
                                    </div>
                                    <div class="number">4</div>
                                </div>
                                <div class="item item5">
                                    <div class="text">影片製作</div>
                                    <div class="circle">
                                        <img src="assets/images/work/time_circle.svg" alt="" srcset="">
                                    </div>
                                    <div class="number">5</div>
                                </div>
                                <div class="item item6">
                                    <div class="text">媒體建議</div>
                                    <div class="circle">
                                        <img src="assets/images/work/time_circle.svg" alt="" srcset="">
                                    </div>
                                    <div class="number">6</div>
                                </div>
                            </div>
                        </div>

                        <div class="time-box-moblie">
                            <img class="film-line" src="assets/images/work/film_line_moblie.png" alt="">
                            <div class="item-box">
                                <div class="item item1">
                                    <div class="text">了解需求</div>
                                    <div class="circle">
                                        <img src="assets/images/work/time_circle.svg" alt="" srcset="">
                                    </div>
                                    <div class="number">1</div>
                                </div>
                                <div class="item item2">
                                    <div class="text">擬定企劃</div>
                                    <div class="circle">
                                        <img src="assets/images/work/time_circle.svg" alt="" srcset="">
                                    </div>
                                    <div class="number">2</div>
                                </div>
                                <div class="item item3">
                                    <div class="text">腳本提案</div>
                                    <div class="circle">
                                        <img src="assets/images/work/time_circle.svg" alt="" srcset="">
                                    </div>
                                    <div class="number">3</div>
                                </div>
                                <div class="item item4">
                                    <div class="text">拍攝執行</div>
                                    <div class="circle">
                                        <img src="assets/images/work/time_circle.svg" alt="" srcset="">
                                    </div>
                                    <div class="number">4</div>
                                </div>
                                <div class="item item5">
                                    <div class="text">影片製作</div>
                                    <div class="circle">
                                        <img src="assets/images/work/time_circle.svg" alt="" srcset="">
                                    </div>
                                    <div class="number">5</div>
                                </div>
                                <div class="item item6">
                                    <div class="text">媒體建議</div>
                                    <div class="circle">
                                        <img src="assets/images/work/time_circle.svg" alt="" srcset="">
                                    </div>
                                    <div class="number">6</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="c3-box">
                <div class="c3-content">
                    <div class="left-box">
                        <div class="small-text">
                            <img src="assets/images/work/c3_small_text.png" alt="">
                        </div>
                        <div class="circle-item-box">

                            <div class="circle-box">
                                <img class="circle-moblie-text" src="assets/images/work/circle_moblie_text.png"
                                    alt="" srcset="">
                                <img class="circle" src="assets/images/work/c3_circle.png" alt="" srcset="">
                                <img class="circle-moblie" src="assets/images/work/c3_circle_moblie.png" alt=""
                                    srcset="">
                                <div class="text">以您的需求出發．<br>
                                    打造獨一無二的創意。</div>
                                <div class="bottom-text">
                                    turn over a new leaf
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right-box">
                        <div class="yt-box">
                            <iframe src="https://www.youtube.com/embed/dMjZwiMhuQA?si=0fkcimvXFayWaxdR"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            <div class="text">
                                <!-- 內容 -->
                            </div>
                        </div>
                    </div>
                </div>
                <img class="c3-item" src="assets/images/work/c3_item.png" alt="" srcset="">
            </div>

            <div class="c4-box">

                <div class="top-bg">
                    <img src="assets/images/work/bg_02.jpg" alt="" srcset="">
                </div>
                <div class="c4-content">
                   <!-- 內容 -->
                </div>

                <div class="more-yt-box">
                    <a target="_blank" href="https://www.youtube.com/channel/UC_i-R_PhQID12tDeM4mMsFA" class="yt-button">view more on youtube</a>
                </div>

            </div>
        </div>

        <div class="c5-c6-box">
            <img class="cirlce-item" src="assets/images/work/c4_item1.png" alt="" srcset="">
            <div class="c5-box">
                <div class="c5-content">
                    <div class="top">
                        <div class="icon">
                            <img src="assets/images/work/design-icon.png" alt="" srcset="">
                        </div>
                        <div class="rectangle-box">
                            <img class="rectangle" src="assets/images/work/c2_rectangle.svg" alt="">
                            <img class="rectangle-moblie" src="assets/images/work/c2_rectangle_moblie.svg" alt="">

                            <div class="text-design-layout">Design Layout</div>
                        </div>
                    </div>
                    <div class="title-box">
                        <div class="title">
                            <div class="text t1"><!-- 內容 --></div>
                            <div class="img-box">
                                <img src="assets/images/work/c5_title_icon.png" alt="" srcset="">
                            </div>
                            <div class="text t2"><!-- 內容 --></div>
                        </div>
                    </div>
                    <img class="c5-item" src="assets/images/work/c5_item.png" alt="" srcset="">
                </div>
            </div>

            <div class="c6-box">
                <div class="c6-content">
                    <div class="left-box">
                        <div class="content-box">
                            <div class="left-content">
                                <div class="title-box stagger-text t1">
                                    <!-- 內容 -->
                                </div>
                                <div class="content stagger-text c1">
                                    <!-- 內容 -->
                                </div>
                            </div>
                            <div class="left-content">
                                <div class="title-box stagger-text t2">
                                    <!-- 內容 -->
                                </div>
                                <div class="content stagger-text c2">
                                    <!-- 內容 --> </div>
                            </div>
                        </div>
                    </div>
                    <div class="right-box">
                        <div class="swiper swiperC6">
                            <div class="swiper-wrapper">
                                <!-- 內容 -->
                            </div>
                        </div>
                        <div class="swiper-prev">
                            <img src="assets/images/home/prev.svg" alt="" srcset="">
                        </div>
                        <div class="swiper-next">
                            <img src="assets/images/home/next.svg" alt="" srcset="">
                        </div>
                    </div>
                    <img class="circle" src="assets/images/work/c1_circle.png" alt="" srcset="">
                </div>
            </div>
        </div>

        <div class="c7-c9-box">
            <div class="c7-box">
                <div class="c7-content">
                    <div class="top">
                        <div class="icon">
                            <img src="assets/images/work/web_icon.png" alt="" srcset="">
                        </div>
                        <div class="rectangle-box">
                            <img class="rectangle" src="assets/images/work/c2_rectangle.svg" alt="">
                            <img class="rectangle-moblie" src="assets/images/work/c2_rectangle_moblie.svg" alt="">
                            <div class="text-web-design">Web Design</div>
                        </div>
                    </div>
                    <div class="title-box">
                        <div class="title">
                            您的專屬形象網站，即將啟動！
                        </div>
                        <div class="content">
                            輕鬆架好網路基地，提供企業完美形象
                        </div>
                    </div>
                </div>
            </div>

            <div class="c8-box">
                <div class="c8-content">
                    <div class="title-box">
                        RWD響應式網頁設計
                    </div>
                    <div class="swiper-box">
                        <div class="swiper c8-swiper">
                            <div class="swiper-wrapper">
                                <!-- <div class="swiper-slide">
                                    <a href="./about.html" target="_blank">
                                        <img src="assets/images/work/rwd_1.png" alt="" srcset="">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="./about.html" target="_blank">
                                        <img src="assets/images/work/rwd_2.png" alt="" srcset="">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="./about.html" target="_blank">
                                        <img src="assets/images/work/rwd_3.png" alt="" srcset="">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="./about.html" target="_blank">
                                        <img src="assets/images/work/rwd_4.png" alt="" srcset="">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="./about.html" target="_blank">
                                        <img src="assets/images/work/rwd_5.png" alt="" srcset="">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="./about.html" target="_blank">
                                        <img src="assets/images/work/rwd_6.png" alt="" srcset="">
                                    </a>
                                </div> -->
                            </div>

                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="c8-swiper-prev">
                            <img src="assets/images/home/prev.svg" alt="" srcset="">
                        </div>
                        <div class="c8-swiper-next">
                            <img src="assets/images/home/next.svg" alt="" srcset="">
                        </div>

                    </div>

                    <div class="content">
                        可因應不同裝置尺寸變化。<br>
                        不論是平板、手機或是電腦都能自動調整內容呈現，創造舒適的使用者體驗。
                    </div>

                    <div class="content-moblie">
                        可因應不同裝置尺寸變化。不論是平板、手機或是電腦都能自動調整內容呈現，創造舒適的使用者體驗。
                    </div>
                </div>
            </div>

            <div class="c9-box">
                <img class="big-circle" src="assets/images/work/big_circle_item.webp" alt="">
                <img class="bottom-circle" src="assets/images/work/c1_circle.png" alt="">
                <img class="big-circle2" src="assets/images/work/big_circle_item.webp" alt="">

                <div class="c9-content">
                    <img class="c9-item" src="assets/images/work/c3_item.png" alt="" srcset="">
                    <div class="title-box">
                        一頁式網頁設計
                    </div>
                    <div class="swiper-box">
                        <div class="swiper c9-swiper">
                            <div class="swiper-wrapper">
                                <!-- <div class="swiper-slide">
                                    <a href="./about.html" target="_blank">
                                        <img src="assets/images/work/one_page_1.png" alt="" srcset="">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="./about.html" target="_blank">
                                        <img src="assets/images/work/one_page_2.png" alt="" srcset="">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="./about.html" target="_blank">
                                        <img src="assets/images/work/one_page_3.png" alt="" srcset="">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="./about.html" target="_blank">
                                        <img src="assets/images/work/one_page_4.png" alt="" srcset="">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="./about.html" target="_blank">
                                        <img src="assets/images/work/one_page_5.png" alt="" srcset="">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="./about.html" target="_blank">
                                        <img src="assets/images/work/one_page_6.png" alt="" srcset="">
                                    </a>
                                </div> -->
                            </div>

                        </div>
                        <div class="swiper-pagination2"></div>
                        <div class="c9-swiper-prev">
                            <img src="assets/images/home/prev.svg" alt="" srcset="">
                        </div>
                        <div class="c9-swiper-next">
                            <img src="assets/images/home/next.svg" alt="" srcset="">
                        </div>
                    </div>

                    <div class="content">
                        小額預算，創造超高CP值！<br>
                        現代人80%以手機使用網際網路，只製作手機版本的網頁，也能呈現網站重點。
                    </div>

                    <div class="content-moblie">
                        小額預算，創造超高CP值！現代人80%以手機使用網際網路，只製作手機版本的網頁，也能呈現網站重點。
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php 
      //-- 共用footer --
      require 'share_area/footer.php'
    ?>

    <?php
     //-- 共用js --
     require 'share_area/js.php'
    ?>

    <script>
        
    </script>
    <script src="js/work.js"></script>

    <script>
        $(document).ready(function () {
            $.ajax({
                type: "POST",
                url: "share_area/ajax/work_ajax.php",
                data: {
                    type: 'work',
                },
                dataType: "json",
                success: function (data) {
                    if(data.success){
                        console.log(data)
                        const _data=data.data
                        
                        //-- 影片 --
                        let yt_html='';
                        _data.video.forEach((video, index) => {
                            let ytUrl=video.ytUrl.split('/youtu.be/')
                            if(index==0){
                                $('.c3-content .right-box .yt-box .text').html(`【${video.case_name}】${video.aTitle}`)
                                $('.c3-content .right-box .yt-box iframe').attr('src', `https://www.youtube.com/embed/${ytUrl[1]}`)
                            }
                            else{
                                 yt_html+=`<div class="yt-video-item-box">
                                                <div class="title-box">
                                                    <div class="title">【${video.case_name}】</div>
                                                </div>
                                                <div class="yt-box">
                                                    <iframe src="https://www.youtube.com/embed/${ytUrl[1]}"
                                                        title="YouTube video player" frameborder="0"
                                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                                </div>
                                                <div class="content-title">${video.aTitle}</div>
                                                <div class="content">${video.abstract}</div>
                                            </div>`
                                
                            }
                        });
                        $('.c4-content').html(yt_html)


                        //-- 文案撰寫 --
                        $('.c5-content .title-box .t1, .c6-content .title-box.t1').html(_data.txt.aTitle1)
                        $('.c5-content .title-box .t2, .c6-content .title-box.t2').html(_data.txt.aTitle2)
                        $('.c6-content .content.c1').html(_data.txt.aText1)
                        $('.c6-content .content.c2').html(_data.txt.aText2)


                        let slide='';
                        _data.txt.imgSlide.forEach(item => {
                            slide+=`<div class="swiper-slide">
                                        <img src="${item}" alt="" srcset="">
                                    </div>`
                        });
                        $('.swiperC6 .swiper-wrapper').html(slide)


                        //-- RWD --
                        let RWDslide='';
                        _data.RWD.forEach(item => {
                            RWDslide+=`<div class="swiper-slide">
                                            <a href="${item.aUrl}" target="_blank">
                                                <img src="${item.pc_img}" alt="" srcset="">
                                            </a>
                                        </div>`
                        });
                        $('.c8-content .c8-swiper .swiper-wrapper').html(RWDslide)

                        //-- 一頁式 --
                        let webSlide='';
                        _data.website.forEach(item => {
                            console.log(item);
                            webSlide+=`<div class="swiper-slide">
                                            <a href="${item.aUrl}" target="_blank">
                                                <img src="${item.pc_img}" alt="" srcset="">
                                            </a>
                                        </div>`
                        });
                        $('.c9-content .c9-swiper .swiper-wrapper').html(webSlide)


                        

                        
                    }
                    else{
                        console.log(data.msg)
                    }
                }
            });



            var window_width = window.screen.width;

            if (window_width <= 1024) {
                const mySwiper = new Swiper('.c8-swiper', {
                    slidesPerView: 1,
                    autoplay: {
                        delay: 4000,
                    },
                    navigation: {
                        nextEl: '.c8-swiper-next',
                        prevEl: '.c8-swiper-prev'
                    },
                    pagination: {
                        el: ".swiper-pagination",
                    },
                });
            } else {
                const mySwiper = new Swiper('.c8-swiper', {
                    slidesPerView: 3,
                    autoplay: {
                        delay: 3500,
                    },
                    spaceBetween: 0,
                    navigation: {
                        nextEl: '.c8-swiper-next',
                        prevEl: '.c8-swiper-prev'
                    },
                    pagination: {
                        el: ".swiper-pagination",
                    },
                });
            };


            if (window_width <= 1024) {
                const mySwiper2 = new Swiper('.c9-swiper', {
                    slidesPerView: 1,
                    autoplay: {
                        delay: 4000,
                    },
                    spaceBetween: 0,
                    navigation: {
                        nextEl: '.c9-swiper-next',
                        prevEl: '.c9-swiper-prev'
                    },
                    pagination: {
                        el: ".swiper-pagination2",
                    },
                })
            } else {
                const mySwiper2 = new Swiper('.c9-swiper', {

                    slidesPerView: 3,
                    autoplay: {
                        delay: 3500,
                    },
                    spaceBetween: 0,
                    navigation: {
                        nextEl: '.c9-swiper-next',
                        prevEl: '.c9-swiper-prev'
                    },
                    pagination: {
                        el: ".swiper-pagination2",
                    },
                })
            }
        });
    </script>

</body>

</html>