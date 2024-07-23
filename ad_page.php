<?php 
//-- 共用conn --
require 'share_area/conn.php';
?>

<!DOCTYPE html>
<html lang="zh-tw">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "廣告介紹｜".$company['name'];?></title>
    <!-- FACEBOOK 分享資訊 -->
    <meta property="og:title" content="<?php echo "廣告介紹｜".$company['name'];?>" />
    <meta property="og:description" content="<?php echo $company['description'];?>" />
    <meta property="og:url" content="<?php echo NOW_URL;?>" />
    <meta itemprop="image" property="og:image" content="<?php echo NOW_HOST.'img/share.jpg';?>" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="<?php echo "廣告介紹｜".$company['name'];?>" />
    <meta itemprop="name" content="<?php echo "廣告介紹｜".$company['name'];?>" />
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

<body class="ad-body">

    <?php 
     //-- 共用loading --
     require 'share_area/transitions.php';
     //-- 共用nav --
     require 'share_area/nav.php';
    ?>

    <div class="container"> 
        <div class="c1-box">
            <img class="moblie-c1-bg" src="assets/images/ad/moblie_c1_bg.png" alt="" srcset="">
            <div class="title-box">
                <div class="text-1-box">
                    <div class="text">Advertising introduction</div>
                    <div class="line">
                        <img src="assets/images/ad/title_line.png" alt="" srcset="">
                    </div>
                </div>
                <!-- <div class="text-2">
                    廣告介紹
                </div> -->
            </div>

            <div class="title-box-moblie">
                <div class="text-1 ani-text">
                    廣告介紹
                </div>
                <div class="text-2-box">
                    <!-- <div class="text ani-text">ABOUT/</div> -->
                    <div class="text ani-text">Advertising introduction</div>
                </div>
            </div>

            <div class="content">
                <div class="left-box">
                    <img src="assets/images/ad/left_circle.png" alt="" srcset="">
                </div>
                <div class="middle-box">
                    <img src="assets/images/ad/middle_circle.png" alt="" srcset="">
                    <div class="text">
                        透過廣告工具，善用工具特色的優勢創造商機，<br>
                        以利「廣告目標客群精準化」，<br>
                        以「豐富多樣的廣告形式」「優化提高轉換成交率」，<br>
                        達到額外的宣傳效果。
                    </div>
                    <img class="item1" src="assets/images/ad/c4_item1.png" alt="" srcset="">
                    <img class="item2" src="assets/images/ad/c4_item2.png" alt="" srcset="">
                </div>
                <div class="right-box">
                    <img src="assets/images/ad/right_circle.png" alt="" srcset="">
                </div>
            </div>

            <div class="content-moblie">
                <div class="text ani-text">
                    透過廣告工具，<br>
                    善用工具特色的優勢創造商機，<br>
                    以利「廣告目標客群精準化」，<br>
                    以「豐富多樣的廣告形式」<br>
                    「優化提高轉換成交率」，<br>
                    達到額外的宣傳效果。
                </div>
            </div>
        </div>

        <img class="divider" src="assets/images/ad/c1_strip.png" alt="" srcset="">

        <div class="content-box">
            <div class="content number-left content1">
                <div class="left">
                    <div class="left-content  ani-box">
                        <div class="icon-box">
                            <img src="assets/images/ad/fb_ig.png" alt="" srcset="">
                        </div>
                        <div class="text-box">
                            <div class="number-box">
                                <img src="assets/images/ad/01_number.png" alt="" srcset="">
                            </div>
                            <div class="title-box">
                                社群廣告
                            </div>
                            <div class="text social_txt">
                                廣告目標客群精準化<br>
                                豐富多樣的廣告形式<br>
                                優化轉換提高成交率
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <div class="img-box ani-box">
                        <img class="social_img" src="assets/images/ad/01.png" alt="" srcset="">
                    </div>
                </div>
            </div>
            <div class="content number-right">
                <div class="left">
                    <div class="left-content ani-box">
                        <div class="icon-box">
                            <img src="assets/images/ad/google.png" alt="" srcset="">
                        </div>
                        <div class="text-box">
                            <div class="number-box">
                                <img src="assets/images/ad/02_number.png" alt="" srcset="">
                            </div>
                            <div class="title-box">
                                Google廣告
                            </div>
                            <div class="text google_txt">
                                <span class="star-text">★搜尋關鍵字</span>
                                提升品牌知名度<br>
                                Google多數搜尋引擎<br>
                                精準導流目標客群<br>
                                妥善管理控制預算
                            </div>
                           
                        </div>
                    </div>
                </div>
                <div class="right">
                    <div class="img-box ani-box">
                        <img class="google_img" src="assets/images/ad/02.png" alt="" srcset="">
                    </div>
                </div>
            </div>
            <div class="content number-left">
                <div class="left">
                    <div class="left-content ani-box">
                        <div class="icon-box">
                            <img src="assets/images/ad/yt.png" alt="" srcset="">
                        </div>
                        <div class="text-box">
                            <div class="number-box">
                                <img src="assets/images/ad/03_number.png" alt="" srcset="">
                            </div>
                            <div class="title-box">
                                YouTube廣告
                            </div>
                            <div class="text yt_txt">
                                觀看影片提升品牌意識<br>
                                觸及、導流多元潛在目標客群
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <div class="img-box ani-box">
                        <img class="yt_txt" src="assets/images/ad/03.png" alt="" srcset="">
                    </div>
                </div>
            </div>
            <div class="content number-right">
                <div class="left">
                    <div class="left-content ani-box">
                        <div class="icon-box">
                            <img src="assets/images/ad/yahoo.png" alt="" srcset="">
                        </div>
                        <div class="text-box">
                            <div class="number-box">
                                <img src="assets/images/ad/04_number.png" alt="" srcset="">
                            </div>
                            <div class="title-box">
                                Yahoo廣告
                            </div>
                            <div class="text yahoo_txt">
                                <span class="star-text">★搜尋/關鍵字</span>
                                精準提高品牌知名度<br>
                                Yahoo多個搜尋引擎
                            </div>

                        </div>
                    </div>
                </div>
                <div class="right">
                    <div class="img-box ani-box">
                        <img class="yahoo_img" src="assets/images/ad/04.png" alt="" srcset="">
                    </div>
                </div>
            </div>
            <div class="content number-left">
                <div class="left">
                    <div class="left-content ani-box">
                        <div class="icon-box">
                            <img src="assets/images/ad/line.png" alt="" srcset="">
                        </div>
                        <div class="text-box">
                            <div class="number-box">
                                <img src="assets/images/ad/05_number.png" alt="" srcset="">
                            </div>
                            <div class="title-box">
                                Line廣告
                            </div>
                            <div class="text line_txt">
                                <span class="star-text">★LINE LAP</span>
                                廣告目標客群精準化<br>
                                高質量轉換成效
                            </div>

                            
                        </div>
                    </div>
                </div>
                <div class="right">
                    <div class="img-box ani-box">
                        <img class="line_img" src="assets/images/ad/05.png" alt="" srcset="">
                    </div>
                </div>
            </div>
            <div class="content number-right content6">
                <div class="left">
                    <div class="left-content ani-box">
                        <div class="icon-box">
                            <img src="assets/images/ad/06_icon.png" alt="" srcset="">
                        </div>
                        <div class="text-box">
                            <div class="number-box">
                                <img src="assets/images/ad/06_number.png" alt="" srcset="">
                            </div>
                            <div class="title-box">
                                口碑行銷
                            </div>
                            <div class="text mouth_txt">
                                口碑比起廣告更值得信賴！<br>
                                全方位為您操盤網路聲量與行銷<br>
                                各大論壇/部落客/KOL合作<br>
                                名人背書/網路議題操作等
                            </div>
                            <div class="text-moblie mouth_txt">
                                口碑比起廣告更值得信賴！<br>
                                全方位為您操盤網路聲量與行銷<br>
                                各大論壇/部落客/KOL合作<br>
                                名人背書/網路議題操作等
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <div class="img-box ani-box">
                        <img class="mouth_img" src="assets/images/ad/06.png" alt="" srcset="">
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

    <script src="js/ad_page.js"></script>
    <script>
        $(document).ready(function () {
            $.ajax({
                type: "POST",
                url: "share_area/ajax/ad_ajax.php",
                data: {
                    type: 'ad',
                },
                dataType: "json",
                success: function (data) {
                    if(data.success){
                        const _data=data.data
                        for (const key in _data) {
                            if($(`.${key}`).prop('tagName')==='DIV'){
                                $(`.${key}`).html(_data[key])
                            }
                            else if($(`.${key}`).prop('tagName')==='IMG'){
                                $(`.${key}`).attr('src', _data[key])
                            }
                        }
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