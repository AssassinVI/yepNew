<?php 
//-- 共用conn --
require 'share_area/conn.php';
?>

<!DOCTYPE html>
<html lang="zh-tw">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $company['name'];?></title>
    <!-- FACEBOOK 分享資訊 -->
    <meta property="og:title" content="<?php echo $company['name'];?>" />
    <meta property="og:description" content="<?php echo $company['description'];?>" />
    <meta property="og:url" content="<?php echo NOW_URL;?>" />
    <meta itemprop="image" property="og:image" content="<?php echo NOW_HOST.'img/share.jpg';?>" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="<?php echo $company['name'];?>" />
    <meta itemprop="name" content="<?php echo $company['name'];?>" />
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

<body class="index-body">

    <?php 
     //-- 共用loading --
     require 'share_area/transitions.php';
     //-- 共用nav --
     require 'share_area/nav.php';
    ?>
    

    <div class="container">
        <!-- <div class="cover-bg"></div> -->
        <div class="c1-box">
            <div class="float-box" data-relative-input="true" id="scene-float">
                <img class="float-item" src="assets/images/home/item2.png" alt="" srcset="">
                <!-- <img class="float-item" src="assets/images/home/float_bottom_bg.png" alt="" srcset=""> -->
            </div>
            <div class="bottom-float-box" data-relative-input="true" id="scene-item1" data-invert-x="false">
                <img class="bottom-float-item" src="assets/images/home/item1.png" alt="item1" srcset="">
            </div>
            <div class="c1-left-box">
                <div class="top-small-box">
                    <svg viewBox="-10 -20 529.76 167.91" id="top-small-svg">
                        <defs>
                            <style>
                                .cls-1 {
                                    fill: none;
                                    stroke: #fff;
                                    stroke-miterlimit: 1px;
                                    stroke-width: 0px;
                                }
                            </style>
                            <path class="cls-1" id="myPath"
                                d="M.02,.12C24.11,3.85,48.43,6.41,72.72,8.36c41.84,3.36,83.54,3.56,125.29-.63,37.83-3.8,77.21-.71,111.94,15.58,34.59,16.22,56.64,48.13,85.18,72.14,.47,.4,.94,.79,1.41,1.18,29.88,24.81,63.04,45.4,99.43,59.21,11.16,4.24,22.63,7.6,33.75,11.95" />

                        </defs>
                        <text style="stroke:none;" font-family="Noto Serif TC">

                            <textPath startOffset="-600" fill="white" font-size="12" id="texto" xlink:href="#myPath">
                                EXPERIENCE MAKES NAL,PROFESSIONAL MAKES EXTRAORDINARY.
                            </textPath>
                        </text>
                    </svg>

                    <!-- <img src="assets/images/home/small_text.svg" alt="" srcset=""> -->

                </div>

                <div class="top-small-box-moblie">
                    <svg id="top-small-svg-moblie" data-name="圖層 2" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 898 615">
                        <defs>
                            <style>
                                .cls-1 {
                                    filter: url(#drop-shadow-1);
                                }

                                .cls-1,
                                .cls-2 {
                                    fill: #fff;
                                    font-family: NotoSerifTC-Medium-90ms-RKSJ-H, 'Noto Serif TC';
                                    font-size: 20px;
                                    stroke: #fff;
                                    stroke-miterlimit: 10;
                                    stroke-width: .25px;
                                }
                            </style>
                            <filter id="drop-shadow-1" filterUnits="userSpaceOnUse">
                                <feOffset dx="-3.58" dy="3.58" />
                                <feGaussianBlur result="blur" stdDeviation="8.36" />
                                <feFlood flood-color="#301d0d" flood-opacity=".1" />
                                <feComposite in2="blur" operator="in" />
                                <feComposite in="SourceGraphic" />
                            </filter>
                        </defs>
                        <g id="_圖層_1-2" data-name="圖層 1">
                            <g>
                                <text class="cls-1" transform="translate(53.7 76.42) rotate(5.87)">
                                    <tspan x="0" y="0">E</tspan>
                                </text>
                                <text class="cls-2" transform="translate(68.78 77.96) rotate(4.93)">
                                    <tspan x="0" y="0">X</tspan>
                                </text>
                                <text class="cls-2" transform="translate(84.87 79.32) rotate(3.96)">
                                    <tspan x="0" y="0">P</tspan>
                                </text>
                                <text class="cls-2" transform="translate(99.52 80.32) rotate(3)">
                                    <tspan x="0" y="0">E</tspan>
                                </text>
                                <text class="cls-2" transform="translate(114.69 81.1) rotate(1.95)">
                                    <tspan x="0" y="0">R</tspan>
                                </text>
                                <text class="cls-2" transform="translate(130.95 81.62) rotate(1.06)">
                                    <tspan x="0" y="0">I</tspan>
                                </text>
                                <text class="cls-2" transform="translate(141.03 81.81) rotate(.2)">
                                    <tspan x="0" y="0">E</tspan>
                                </text>
                                <text class="cls-2" transform="translate(156.22 81.86) rotate(-.94)">
                                    <tspan x="0" y="0">N</tspan>
                                </text>
                                <text class="cls-2" transform="translate(173.89 81.54) rotate(-2.08)">
                                    <tspan x="0" y="0">C</tspan>
                                </text>
                                <text class="cls-2" transform="translate(189.69 80.9) rotate(-1.64)">
                                    <tspan x="0" y="0">E</tspan>
                                </text>
                                <text class="cls-2" transform="translate(204.86 80.53) rotate(-.39)">
                                    <tspan x="0" y="0"> </tspan>
                                </text>
                                <text class="cls-2" transform="translate(211.92 80.36) rotate(1.81)">
                                    <tspan x="0" y="0">M</tspan>
                                </text>
                                <text class="cls-2" transform="translate(233.54 81.17) rotate(5.79)">
                                    <tspan x="0" y="0">A</tspan>
                                </text>
                                <text class="cls-2" transform="translate(249.68 82.85) rotate(10.22)">
                                    <tspan x="0" y="0">K</tspan>
                                </text>
                                <text class="cls-2" transform="translate(265.86 85.86) rotate(15.43)">
                                    <tspan x="0" y="0">E</tspan>
                                </text>
                                <text class="cls-2" transform="translate(280.35 89.98) rotate(20.82)">
                                    <tspan x="0" y="0">S</tspan>
                                </text>
                                <text class="cls-2" transform="translate(292.57 94.81) rotate(25.3)">
                                    <tspan x="0" y="0"> </tspan>
                                </text>
                                <text class="cls-2" transform="translate(298.92 97.69) rotate(30.55)">
                                    <tspan x="0" y="0">P</tspan>
                                </text>
                                <text class="cls-2" transform="translate(311.38 105.15) rotate(36.88)">
                                    <tspan x="0" y="0">R</tspan>
                                </text>
                                <text class="cls-2" transform="translate(323.94 114.69) rotate(41.62)">
                                    <tspan x="0" y="0">O</tspan>
                                </text>
                                <text class="cls-2" transform="translate(336.49 125.98) rotate(44.07)">
                                    <tspan x="0" y="0">F</tspan>
                                </text>
                                <text class="cls-2" transform="translate(346.85 136.07) rotate(44.61)">
                                    <tspan x="0" y="0">E</tspan>
                                </text>
                                <text class="cls-2" transform="translate(357.66 146.74) rotate(43.51)">
                                    <tspan x="0" y="0">S</tspan>
                                </text>
                                <text class="cls-2" transform="translate(367.11 155.7) rotate(41.06)">
                                    <tspan x="0" y="0">S</tspan>
                                </text>
                                <text class="cls-2" transform="translate(377.05 164.23) rotate(38.09)">
                                    <tspan x="0" y="0">I</tspan>
                                </text>
                                <text class="cls-2" transform="translate(384.53 170.16) rotate(35.09)">
                                    <tspan x="0" y="0">O</tspan>
                                </text>
                                <text class="cls-2" transform="translate(398.48 179.9) rotate(31.72)">
                                    <tspan x="0" y="0">N</tspan>
                                </text>
                                <text class="cls-2" transform="translate(413.11 188.87) rotate(29.21)">
                                    <tspan x="0" y="0">A</tspan>
                                </text>
                                <text class="cls-2" transform="translate(427.38 196.79) rotate(27.45)">
                                    <tspan x="0" y="0">L</tspan>
                                </text>
                                <text class="cls-2" transform="translate(440.65 203.63) rotate(26.55)">
                                    <tspan x="0" y="0">,</tspan>
                                </text>
                                <text class="cls-2" transform="translate(448.32 207.46) rotate(26)">
                                    <tspan x="0" y="0">P</tspan>
                                </text>
                                <text class="cls-2" transform="translate(461.54 213.89) rotate(25.81)">
                                    <tspan x="0" y="0">R</tspan>
                                </text>
                                <text class="cls-2" transform="translate(475.76 220.9) rotate(24.92)">
                                    <tspan x="0" y="0">O</tspan>
                                </text>
                                <text class="cls-2" transform="translate(491.1 227.91) rotate(21.83)">
                                    <tspan x="0" y="0">F</tspan>
                                </text>
                                <text class="cls-2" transform="translate(504.53 233.24) rotate(20.13)">
                                    <tspan x="0" y="0">E</tspan>
                                </text>
                                <text class="cls-2" transform="translate(518.81 238.43) rotate(19.63)">
                                    <tspan x="0" y="0">S</tspan>
                                </text>
                                <text class="cls-2" transform="translate(531.14 242.82) rotate(20.18)">
                                    <tspan x="0" y="0">S</tspan>
                                </text>
                                <text class="cls-2" transform="translate(543.41 247.36) rotate(21.44)">
                                    <tspan x="0" y="0">I</tspan>
                                </text>
                                <text class="cls-2" transform="translate(552.31 250.78) rotate(23.76)">
                                    <tspan x="0" y="0">O</tspan>
                                </text>
                                <text class="cls-2" transform="translate(567.84 257.63) rotate(28.15)">
                                    <tspan x="0" y="0">N</tspan>
                                </text>
                                <text class="cls-2" transform="translate(582.93 265.84) rotate(30.99)">
                                    <tspan x="0" y="0">A</tspan>
                                </text>
                                <text class="cls-2" transform="translate(596.86 274.26) rotate(32.95)">
                                    <tspan x="0" y="0">L</tspan>
                                </text>
                                <text class="cls-2" transform="translate(609.35 282.44) rotate(34.31)">
                                    <tspan x="0" y="0"> </tspan>
                                </text>
                                <text class="cls-2" transform="translate(615.24 286.36) rotate(36.06)">
                                    <tspan x="0" y="0">M</tspan>
                                </text>
                                <text class="cls-2" transform="translate(632.69 299.19) rotate(38.39)">
                                    <tspan x="0" y="0">A</tspan>
                                </text>
                                <text class="cls-2" transform="translate(645.45 309.33) rotate(40.46)">
                                    <tspan x="0" y="0">K</tspan>
                                </text>
                                <text class="cls-2" transform="translate(658.02 320.1) rotate(42.54)">
                                    <tspan x="0" y="0">E</tspan>
                                </text>
                                <text class="cls-2" transform="translate(669.15 330.39) rotate(44.52)">
                                    <tspan x="0" y="0">S</tspan>
                                </text>
                                <text class="cls-2" transform="translate(678.52 339.69) rotate(46.01)">
                                    <tspan x="0" y="0"> </tspan>
                                </text>
                                <text class="cls-2" transform="translate(683.46 344.76) rotate(47.74)">
                                    <tspan x="0" y="0">E</tspan>
                                </text>
                                <text class="cls-2" transform="translate(693.6 355.96) rotate(50.35)">
                                    <tspan x="0" y="0">X</tspan>
                                </text>
                                <text class="cls-2" transform="translate(703.7 368.23) rotate(53.21)">
                                    <tspan x="0" y="0">T</tspan>
                                </text>
                                <text class="cls-2" transform="translate(712.75 380.38) rotate(56.46)">
                                    <tspan x="0" y="0">R</tspan>
                                </text>
                                <text class="cls-2" transform="translate(721.74 394.05) rotate(60.33)">
                                    <tspan x="0" y="0">A</tspan>
                                </text>
                                <text class="cls-2" transform="translate(729.39 407.7) rotate(63.79)">
                                    <tspan x="0" y="0">O</tspan>
                                </text>
                                <text class="cls-2" transform="translate(736.89 422.87) rotate(62.11)">
                                    <tspan x="0" y="0">R</tspan>
                                </text>
                                <text class="cls-2" transform="translate(744.5 437.21) rotate(60.29)">
                                    <tspan x="0" y="0">D</tspan>
                                </text>
                                <text class="cls-2" transform="translate(752.93 451.86) rotate(58.81)">
                                    <tspan x="0" y="0">I</tspan>
                                </text>
                                <text class="cls-2" transform="translate(758.13 460.5) rotate(57.17)">
                                    <tspan x="0" y="0">N</tspan>
                                </text>
                                <text class="cls-2" transform="translate(767.48 474.93) rotate(55.17)">
                                    <tspan x="0" y="0">A</tspan>
                                </text>
                                <text class="cls-2" transform="translate(776.8 488.27) rotate(53.14)">
                                    <tspan x="0" y="0">R</tspan>
                                </text>
                                <text class="cls-2" transform="translate(785.93 500.42) rotate(51.19)">
                                    <tspan x="0" y="0">Y</tspan>
                                </text>
                                <text class="cls-2" transform="translate(794.49 511) rotate(49.85)">
                                    <tspan x="0" y="0">.</tspan>
                                </text>
                            </g>
                        </g>
                    </svg>
                </div>
                <div class="middle-main-box">
                    <div class="yep-box">
                        <div class="text">
                            <div class="text-1 y">Y</div>
                            <div class="text-1 e">E</div>
                            <div class="text-1 p">P</div>
                            <div class="yep-line">
                                <img src="assets/images/home/yep_line.png" alt="" srcset="">
                            </div>
                        </div>

                    </div>
                    <div class="middle-line">
                        <img src="assets/images/home/middle_line.svg" alt="" srcset="">
                    </div>
                    <div class="media-box">
                        <div class="text">
                            <div class="text-2 m">M</div>
                            <div class="text-2 e">E</div>
                            <div class="text-2 d">D</div>
                            <div class="text-2 i">I</div>
                            <div class="text-2 a">A</div>
                        </div>
                        <div class="media-line">
                            <img src="assets/images/home/media_line.png" alt="" srcset="">
                        </div>
                    </div>
                </div>
                <div class="open-circle">
                    <div class="circle-box" data-relative-input="true" id="scene-circle1" data-invert-y="false">
                        <img class="bottom-circle-item" src="assets/images/home/c4_item1.png" alt="" srcset="">
                    </div>

                </div>

                <div class="video-box">
                    <video autoplay loop muted playsinline src="assets/images/home/loop_slow_D.mp4"></video>
                </div>

            </div>
            <div class="c1-right-box">
                <div class="open-circle-moblie">
                    <div class="circle-box">
                        <img src="assets/images/home/circle_bg.png" alt="" srcset="">
                    </div>
                </div>
                <div class="rectangle-box">
                    <img class="rectangle" src="assets/images/home/c1_rectangle.svg" alt="" srcset="">
                    <img class="rectangle-moblie" src="assets/images/home/c1_rectangle_moblie.svg" alt="" srcset="">
                    <div class="text-integral">
                        integral
                    </div>

                    <div class="text-marketing">
                        marketing
                    </div>

                    <div class="text-planning">
                        planning
                    </div>

                    <div class="text-design">
                        design
                    </div>
                </div>

                <div class="title">
                    創造廣告\玩樂創意
                </div>
                <div class="title-moblie">
                    <div class="text1">
                        創造廣告
                    </div>
                    <div class="slash">/</div>
                    <div class="text2">
                        玩樂創意
                    </div>

                </div>
            </div>
        </div>

        <div class="c2-box">

            <div class="left-box">
                <div class="title-box">服務項目</div>
            </div>
            <div class="right-box">
                <div class="c2-cover-bg"></div>
                <div class="c2-rectangle-box">
                    <img class="c2-rectangle" src="assets/images/home/c2_rectangle.svg" alt="" srcset="">
                    <img class="c2-rectangle-moblie" src="assets/images/home/c2_rectangle_moblie.svg" alt=""
                        srcset="">

                    <div class="text-svg">
                        <img class="c2-small-text" src="assets/images/home/c2_small_text.svg" alt="" srcset="">
                        <img class="c2-small-text-moblie" src="assets/images/home/c2_small_text_moblie.svg" alt=""
                            srcset="">
                    </div>
                </div>

                <div class="list-content">
                    <div class="list">
                        <span>‧</span>
                        <img class="list-circle" src="assets/images/home/list_circle.svg" alt="" srcset="">
                        口碑行銷
                    </div>
                    <div class="list">
                        <span>‧</span>
                        <img class="list-circle" src="assets/images/home/list_circle.svg" alt="" srcset="">
                        廣告規劃
                    </div>
                    <div class="list">
                        <span>‧</span>
                        <img class="list-circle" src="assets/images/home/list_circle.svg" alt="" srcset="">
                        網站建置
                    </div>
                    <div class="list">
                        <span>‧</span>
                        <img class="list-circle" src="assets/images/home/list_circle.svg" alt="" srcset="">
                        平面製作
                    </div>
                    <div class="list">
                        <span>‧</span>
                        <img class="list-circle" src="assets/images/home/list_circle.svg" alt="" srcset="">
                        影音製作
                    </div>
                    <div class="list">
                        <span>‧</span>
                        <img class="list-circle" src="assets/images/home/list_circle.svg" alt="" srcset="">
                        數位廣告
                    </div>
                </div>


            </div>
            <div class="c2-circle-box">
                <div class="c2-circle">
                    <img class="c2-circle-img" src="assets/images/home/c2_circle_bg.png" alt="c2_circle_bg"
                        srcset="">
                </div>
            </div>
        </div>

        <div class="c3-box">
            <div class="left-box">
                <div class="c3-circle-box">
                    <div class="c3-circle">
                        <video autoplay loop muted playsinline src="assets/images/home/loop_slow_D.mp4"></video>
                        <!-- <img class="c3-circle-img" src="assets/images/home/c3_circle_bg.webp" alt="c3_circle_bg"
                            srcset=""> -->
                        <img class="partner-moblie" src="assets/images/home/partner_moblie.svg" alt="" srcset="">

                    </div>
                    <img class="partner" src="assets/images/home/partner.svg" alt="" srcset="">

                    <div class="title-box-moblie">合作客戶</div>
                </div>
                <div class="title-box">
                    合作客戶
                </div>
            </div>

            <div class="right-box">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                        </div>
                        <div class="swiper-slide">
                        </div>
                        <div class="swiper-slide">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <div class="swiper-prev">
                    <img src="assets/images/home/prev.svg" alt="" srcset="">
                </div>

                <div class="swiper-next">
                    <img src="assets/images/home/next.svg" alt="" srcset="">
                </div>
            </div>
        </div>

        <div class="c4-box">
            <div class="yep-svg">
                <img class="yep" src="assets/images/home/yep.svg" alt="" srcset="">
                <div class="yep-line-svg">
                    <img src="assets/images/home/c4_yep_line.svg" alt="" srcset="">
                </div>
            </div>
            <div class="middle-line">
                <img src="assets/images/home/c4_middle_line.svg" alt="" srcset="">
            </div>

            <div class="media-svg">
                <img class="media" src="assets/images/home/c4_media.svg" alt="" srcset="">
                <div class="media-line-svg">
                    <img src="assets/images/home/c4_media_line.svg" alt="" srcset="">
                </div>
            </div>

            <div class="item2">
                <img src="assets/images/home/c4_item2.png" alt="c4_item2" srcset="">
            </div>

            <div class="item1">
                <img src="assets/images/home/item2.png" alt="item1" srcset="">
            </div>

            <div class="item3">
                <img src="assets/images/home/c4_item1.png" alt="c4_item1" srcset="">
                <!-- <img src="assets/images/home/sea.png" alt="" srcset=""> -->
            </div>

            <div class="text">
                /執行你的超能想像力/
            </div>
        </div>

        <div class="c4-box-moblie">
            <div class="top-box">
                <div class="item3">
                    <img src="assets/images/home/c4_item1.png" alt="c4_item1" srcset="">
                </div>
                <div class="item1">
                    <img src="assets/images/home/item2.png" alt="item1" srcset="">
                </div>
                <div class="yep-box">
                    <img class="yep" src="assets/images/home/yep.svg" alt="" srcset="">
                    <div class="yep-line-svg">
                        <img src="assets/images/home/c4_yep_line.svg" alt="" srcset="">
                    </div>
                </div>
                <div class="middle-line">
                    <img src="assets/images/home/c4_middle_line.svg" alt="" srcset="">
                </div>
                <div class="media-svg">
                    <img class="media" src="assets/images/home/c4_media.svg" alt="" srcset="">
                    <div class="media-line-svg">
                        <img src="assets/images/home/c4_media_line.svg" alt="" srcset="">
                    </div>
                </div>
            </div>
            <div class="bottom-box">
                <div class="text">
                    /執行你的超能想像力/
                </div>
                <div class="item2">
                    <img src="assets/images/home/c4_item2.png" alt="c4_item2" srcset="">
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
    
    <script src="js/index.js?2"></script>
    <script>
        $(document).ready(function () {

            $.ajax({
                type: "POST",
                url: "share_area/ajax/index_ajax.php",
                data: {
                    type: 'partner',
                },
                dataType: "json",
                success: function (data) {
                    if(data.success){
                        // console.log(data.data[8]['pc_img']);
                        let slideNum= Math.ceil(data.data.length/6)
                        let slide_html=''
                        for (let i = 0; i < slideNum; i++) {
                           let slide_img=''
                           for (let j = i*6; j < (i+1)*6; j++) {
                              if(j!=data.data.length){
                                // let aImg= data.data[j]['aUrl']!='' ? `<a target="_blank" href="${data.data[j]['aUrl']}">
                                //                                             <img src="${data.data[j]['pc_img']}" alt="" srcset="">
                                //                                       </a>` 
                                //                                       : 
                                //                                       `<img src="${data.data[j]['pc_img']}" alt="" srcset="">`;

                                let aImg=`<img src="${data.data[j]['pc_img']}" alt="" srcset="">`
                                                                      
                                slide_img+=`<div>${aImg}</div>`
                              }
                              else{
                                break;
                              }
                           }
                           slide_html+=`<div class="swiper-slide">${slide_img}</div>`
                        }
                        $('.swiper-wrapper').html(slide_html)

                        const mySwiper = new Swiper('.swiper', {
                            effect: "fade",
                            fadeEffect: { crossFade: true },
                            parallax: true,
                            navigation: {
                                nextEl: '.swiper-next',
                                prevEl: '.swiper-prev'
                            },
                            pagination: {
                                el: '.swiper-pagination',
                                type: 'bullets',
                                clickable: true
                            },

                        });

                        function swiperAni() {
                            let gl = gsap.timeline({
                                scrollTrigger: {
                                    trigger: '.c3-box',
                                    start: "-40%",
                                }
                            });
                            gl.from('.swiper-slide div', {
                                duration: 1,
                                y: 150,
                                ease: "power2.inOut",
                                scale: 1.1,
                                stagger: {
                                    each: 0.1,
                                    from: 'start'
                                }
                            }, '<')
                        }

                        swiperAni()

                    }
                    else{
                        console.log(data.msg)
                    }
                }
            });
        });
    </script>

</body>

</html>