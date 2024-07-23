<?php 
//-- 共用conn --
require 'share_area/conn.php';
?>

<!DOCTYPE html>
<html lang="zh-tw">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "關於我們｜".$company['name'];?></title>
    <!-- FACEBOOK 分享資訊 -->
    <meta property="og:title" content="<?php echo "關於我們｜".$company['name'];?>" />
    <meta property="og:description" content="<?php echo $company['description'];?>" />
    <meta property="og:url" content="<?php echo NOW_URL;?>" />
    <meta itemprop="image" property="og:image" content="<?php echo NOW_HOST.'img/share.jpg';?>" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="<?php echo "關於我們｜".$company['name'];?>" />
    <meta itemprop="name" content="<?php echo "關於我們｜".$company['name'];?>" />
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

<body class="about-body">

    <?php 
     //-- 共用loading --
     require 'share_area/transitions.php';
     //-- 共用nav --
     require 'share_area/nav.php';
    ?>

    <div class="container">
        <div class="title-box">
            <div class="text-1">
               TEAM
            </div>
        </div>
        <div class="top-box">
            <div class="top-person-box">
                <div class="img-box">
                    <img src="assets/images/about/steven.png" alt="">
                </div>
                <div class="name-box director-name-box">
                    <div class="director-job">/總監/</div>
                    <div class="director-name director-content">Steven</div>
                </div>
                <div class="content-box">
                    <div class="content">
                        心若沉靜<br>
                        任何風浪都不足為懼
                    </div>
                </div>
            </div>
        </div>

        <div class="person-list-box">

            <div class="person-box">
                <div class="img-box">
                    <img src="assets/images/about/ae1.png" alt="">
                </div>
                <div class="job-title-box">
                    <div class="job-title">
                        <div class="job">/AE/</div>
                        <div class="job-content">專案小達人</div>
                    </div>
                </div>
                <div class="name-box">
                    <div class="name">
                        湘湘
                    </div>
                </div>
                <div class="content-box">
                    <div class="content">
                        可以為五斗米折腰<br>
                        但不要折斷
                    </div>
                </div>
            </div>

            <div class="person-box">
                <div class="img-box">
                    <img src="assets/images/about/ae2.png" alt="">
                </div>
                <div class="job-title-box">
                    <div class="job-title">
                        <div class="job">/廣告AE/</div>
                        <div class="job-content"> 熱血爆肝仔</div>
                    </div>
                </div>
                <div class="name-box">
                    <div class="name">
                        萱
                    </div>
                </div>
                <div class="content-box">
                    <div class="content">
                        沒問題<br>
                        哪有什麼事不行
                    </div>
                </div>
            </div>

            <div class="person-box">
                <div class="img-box">
                    <img src="assets/images/about/design1.png" alt="">
                </div>
                <div class="job-title-box">
                    <div class="job-title">
                        <div class="job">/設計/</div>
                        <div class="job-content">冰美式成癮者</div>
                    </div>
                </div>
                <div class="name-box">
                    <div class="name">
                        HHUANG
                    </div>
                </div>
                <div class="content-box">
                    <div class="content">
                        可以的話<br>
                        希望午休能夠躺平睡
                    </div>
                </div>
            </div>

            <div class="person-box">
                <div class="img-box">
                    <img src="assets/images/about/design2.png" alt="">
                </div>
                <div class="job-title-box">
                    <div class="job-title">
                        <div class="job">/設計/</div>
                        <div class="job-content">圖的建築師</div>
                    </div>
                </div>
                <div class="name-box">
                    <div class="name">
                        Effie
                    </div>
                </div>
                <div class="content-box">
                    <div class="content">
                        凡事隨緣<br>
                        快樂做自己
                    </div>
                </div>
            </div>

            <div class="person-box">
                <div class="img-box">
                    <img src="assets/images/about/design3.png" alt="">
                </div>
                <div class="job-title-box">
                    <div class="job-title">
                        <div class="job">/設計/</div>
                        <div class="job-content">做圖煉金士</div>
                    </div>
                </div>
                <div class="name-box">
                    <div class="name">
                        冠ㄩ
                    </div>
                </div>
                <div class="content-box">
                    <div class="content">
                        錢錢只是變成<br>
                        我喜歡的形狀
                    </div>
                </div>
            </div>

            <div class="person-box">
                <div class="img-box">
                    <img src="assets/images/about/design4.png" alt="">
                </div>
                <div class="job-title-box">
                    <div class="job-title">
                        <div class="job">/設計/</div>
                        <div class="job-content">風格旅人</div>
                    </div>
                </div>
                <div class="name-box">
                    <div class="name">
                        meigo
                    </div>
                </div>
                <div class="content-box">
                    <div class="content">
                        追尋某物 享受過程<br>
                        夯塔偷油補
                    </div>
                </div>
            </div>

            <div class="person-box">
                <div class="img-box">
                    <img src="assets/images/about/Planner1.png" alt="">
                </div>
                <div class="job-title-box">
                    <div class="job-title">
                        <div class="job">/廣告企劃/</div>
                        <div class="job-content">天使の總務</div>
                    </div>
                </div>
                <div class="name-box">
                    <div class="name">
                        Yun
                    </div>
                </div>
                <div class="content-box">
                    <div class="content">
                        莫慌莫急莫害怕<br>
                        天使總務陪你熬
                    </div>
                </div>
            </div>

            <div class="person-box">
                <div class="img-box">
                    <img src="assets/images/about/Planner2.png" alt="">
                </div>
                <div class="job-title-box">
                    <div class="job-title">
                        <div class="job">/企劃/</div>
                        <div class="job-content">藍圖製造者</div>
                    </div>
                </div>
                <div class="name-box">
                    <div class="name">
                        喬喬
                    </div>
                </div>
                <div class="content-box">
                    <div class="content">
                        把耐心留住<br>
                        驚喜會慢慢醞釀而出
                    </div>
                </div>
            </div>

            <div class="person-box">
                <div class="img-box">
                    <img src="assets/images/about/administration.png" alt="">
                </div>
                <div class="job-title-box">
                    <div class="job-title">
                        <div class="job">/行政/</div>
                        <div class="job-content">EXCEL好朋友</div>
                    </div>
                </div>
                <div class="name-box">
                    <div class="name">
                        Sabrina
                    </div>
                </div>
                <div class="content-box">
                    <div class="content">
                        錢包是資本主義的
                    </div>
                </div>
            </div>

            <div class="person-box">
                <div class="img-box">
                    <img src="assets/images/about/web.png" alt="">
                </div>
                <div class="job-title-box">
                    <div class="job-title">
                        <div class="job">/網頁/</div>
                        <div class="job-content">網頁小能手</div>
                    </div>
                </div>
                <div class="name-box">
                    <div class="name">
                        馬哥
                    </div>
                </div>
                <div class="content-box">
                    <div class="content">
                        心存感恩<br>
                        珍惜當下
                    </div>
                </div>
            </div>

            <div class="person-box">
                <div class="img-box">
                    <img src="assets/images/about/video.png" alt="">
                </div>
                <div class="job-title-box">
                    <div class="job-title">
                        <div class="job">/影片製作/</div>
                        <div class="job-content">剪輯の熊</div>
                    </div>
                </div>
                <div class="name-box">
                    <div class="name">
                        雄哥
                    </div>
                </div>
                <div class="content-box">
                    <div class="content">
                        對你所愛<br>
                        永保熱情
                    </div>
                </div>
            </div>

            <div class="person-box">
                <div class="img-box">
                    <img src="assets/images/about/writer.png" alt="">
                </div>
                <div class="job-title-box">

                    <div class="job-title">
                        <div class="job">/文案/</div>
                        <div class="job-content">敲擊的巨人</div>
                    </div>

                </div>
                <div class="name-box">
                    <div class="name">
                        oomi
                    </div>
                </div>
                <div class="content-box">
                    <div class="content">
                        你的概念<br>
                        我看得見
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
    <script src="assets/minified/CustomEase.min.js"></script>
    <script src="js/about.js"></script>
    <script>
        $(document).ready(function () {
            $.ajax({
                type: "POST",
                url: "share_area/ajax/about_ajax.php",
                data: {
                    type: 'team',
                },
                dataType: "json",
                success: function (data) {
                    if(data.success){
                        let list_html=''
                        
                        data.data.forEach((team, index) => {
                            let aTitle=$(window).width()>900 ? team.aTitle:team.aTitle_ph
                            if(index==0){
                                let top_html=`<div class="img-box">
                                                    <img src="${team.pc_img}" alt="">
                                                </div>
                                                <div class="name-box director-name-box">
                                                    <div class="director-job">${aTitle}</div>
                                                    <div class="director-name director-content">${team.tName}</div>
                                                </div>
                                                <div class="content-box">
                                                    <div class="content">
                                                      ${team.tIntroduce}
                                                    </div>
                                                </div>`
                                $('.top-person-box').html(top_html);
                            }
                            else{
                                 list_html+=`<div class="person-box">
                                                    <div class="img-box">
                                                        <img src="${team.pc_img}" alt="">
                                                    </div>
                                                    <div class="job-title-box">
                                                        <div class="job-title">
                                                            <div class="job">${aTitle}</div>
                                                        </div>
                                                    </div>
                                                    <div class="name-box">
                                                        <div class="name">
                                                            ${team.tName}
                                                        </div>
                                                    </div>
                                                    <div class="content-box">
                                                        <div class="content">
                                                          ${team.tIntroduce}
                                                        </div>
                                                    </div>
                                                </div>`;
                            }
                        });
                        $('.person-list-box').html(list_html);
                         console.log(data);
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