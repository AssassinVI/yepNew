<?php 
//-- 共用conn --
require 'share_area/conn.php';
?>

<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo "聯絡我們｜".$company['name'];?></title>
    <!-- FACEBOOK 分享資訊 -->
    <meta property="og:title" content="<?php echo "聯絡我們｜".$company['name'];?>" />
    <meta property="og:description" content="<?php echo $company['description'];?>" />
    <meta property="og:url" content="<?php echo NOW_URL;?>" />
    <meta itemprop="image" property="og:image" content="<?php echo NOW_HOST.'img/share.jpg';?>" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="<?php echo "聯絡我們｜".$company['name'];?>" />
    <meta itemprop="name" content="<?php echo "聯絡我們｜".$company['name'];?>" />
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

<body class="contact-body">
    <?php   
     //-- 共用loading --
     require 'share_area/transitions.php';
     //-- 共用nav --
     require 'share_area/nav.php';
    ?>

    <div class="container">
        <div class="top-box">
            <img class="item1" src="assets/images/contact/item2.png" alt="" srcset="" />

            <div class="bubble">
                <img src="assets/images/contact/bubble.png" alt="" srcset="" />
            </div>
            <div class="text-img">
                <img src="assets/images/contact/top_text.png" alt="" srcset="" />
            </div>
            <div class="content">
                <div class="speech-bubbles-overflow">
                    <div class="speech-bubbles-box speech-bubbles-box1">
                        <div class="speech-bubbles speech-bubbles1">
                            <img src="assets/images/contact/zh.png" alt="" srcset="" />
                        </div>
                        <div class="speech-bubbles speech-bubbles2">
                            <img src="assets/images/contact/en.png" alt="" srcset="" />
                        </div>
                        <div class="speech-bubbles speech-bubbles3">
                            <img src="assets/images/contact/bonjour.png" alt="" srcset="" />
                        </div>
                        <div class="speech-bubbles speech-bubbles4">
                            <img src="assets/images/contact/japan.png" alt="" srcset="" />
                        </div>
                        <div class="speech-bubbles speech-bubbles5">
                            <img src="assets/images/contact/korean.png" alt="" srcset="" />
                        </div>
                        <div class="speech-bubbles speech-bubbles6">
                            <img src="assets/images/contact/es.png" alt="" srcset="" />
                        </div>
                    </div>

                    <div class="speech-bubbles-box-moblie">

                        <div class="speech-bubbles speech-bubbles1">
                            <img class="speech-bubbles-img zh" src="assets/images/contact/zh.png" alt="" srcset="" />
                        </div>
                        <div class="speech-bubbles speech-bubbles2">
                            <img class="speech-bubbles-img en" src="assets/images/contact/en.png" alt="" srcset="" />
                            <img class="speech-bubbles-img japan" src="assets/images/contact/japan.png" alt=""
                                srcset="" />
                        </div>

                        <div class="speech-bubbles speech-bubbles3">
                            <img class="speech-bubbles-img es" src="assets/images/contact/es.png" alt="" srcset="" />
                        </div>
                        <div class="speech-bubbles speech-bubbles4">
                            <img class="speech-bubbles-img korean" src="assets/images/contact/korean.png" alt=""
                                srcset="" />
                            <img class="speech-bubbles-img bonjour" src="assets/images/contact/bonjour.png" alt=""
                                srcset="" />
                        </div>



                    </div>
                </div>
                <!-- <img class="dot" src="assets/images/contact/dot.png" alt="" srcset=""> -->
                <div class="dot-box">
                    <div class="dot-left">
                        <div class="dot">•</div>
                        <div class="dot">•</div>
                        <div class="dot">•</div>
                    </div>
                    <div class="dot-right">
                        <div class="dot">•</div>
                        <div class="dot">•</div>
                        <div class="dot">•</div>
                        <div class="dot">•</div>
                        <div class="dot">•</div>
                    </div>
                </div>

                <div class="text">
                    留下您的資訊，我們將與您一對一提供客製化服務唷！
                </div>

                <div class="text-moblie">
                    留下您的資訊<br>
                    我們將與您一對一<br>
                    提供客製化服務唷！
                </div>

                <div class="dot-moblie">
                    <img src="assets/images/contact/moblie_dot_svg.svg" alt="" srcset="">
                </div>


                <img class="text-img-moblie" src="assets/images/contact/moblie_top_text.png" alt="" srcset="" />

            </div>
        </div>
        <img class="item2" src="assets/images/contact/c4_item1.png" alt="" srcset="" />
        <div class="bottom-box pc_form">
            <div class="content">
                <img class="mark" src="assets/images/contact/logo.png" alt="" srcset="">
                <div class="top-input-box">
                    <div class="left-box">
                        <div class="input-group">
                            <label class="input-label" for="name-input"><span class="text-danger">*</span>名字</label>
                            <input type="text" id="name-input" class="input" name="UserName" value="" />
                        </div>
                        <div class="input-group">
                            <label class="input-label" for="line-email-input"> Line/e-mail</label>
                            <input type="text" id="line-email-input" class="input" name="UserMail" value="" />
                        </div>
                    </div>
                    <div class="right-box">
                        <div class="input-group">
                            <label class="input-label" for="phone-input"><span class="text-danger">*</span>電話</label>
                            <input type="text" id="phone-input" class="input" name="UserPhone" value="" />
                        </div>
                        <div class="input-group">
                            <label class="input-label" for="product-input"><span class="text-danger">*</span>公司產品內容</label>
                            <input type="text" id="product-input" class="input" name="UserProduct" value="" />
                        </div>
                    </div>
                </div>

                <div class="middle-input-box">
                    <div class="title-box">
                        <div class="title">想了解項目</div>
                    </div>
                    <div class="button-box">
                        <div class="btn-group col-xs-12">
                            <div class="select">
                                <input type="checkbox" name="UserKnowItem[]" id="fb-ig" value="FB/IG">
                                <label class="btn button_select" for="fb-ig">FB/IG</label>
                            </div>

                            <div class="select">
                                <input type="checkbox" name="UserKnowItem[]" id="google" value="Google">
                                <label class="btn button_select" for="google">Google</label>
                            </div>

                            <div class="select">
                                <input type="checkbox" name="UserKnowItem[]" id="line" value="LINE">
                                <label class="btn button_select" for="line">LINE</label>
                            </div>

                            <div class="select">
                                <input type="checkbox" name="UserKnowItem[]" id="yahoo" value="Yahoo">
                                <label class="btn button_select" for="yahoo">Yahoo</label>
                            </div>

                            <div class="select">
                                <input type="checkbox" name="UserKnowItem[]" id="news" value="新聞報導">
                                <label class="btn button_select" for="news">新聞報導</label>
                            </div>

                            <div class="select">
                                <input type="checkbox" name="UserKnowItem[]" id="video" value="影音方案">
                                <label class="btn button_select" for="video">影音方案</label>
                            </div>

                            <div class="select">
                                <input type="checkbox" name="UserKnowItem[]" id="design1" value="平面設計">
                                <label class="btn button_select" for="design1">平面設計</label>
                            </div>

                            <div class="select">
                                <input type="checkbox" name="UserKnowItem[]" id="design2" value="文案設計">
                                <label class="btn button_select" for="design2">文案設計</label>
                            </div>

                            <div class="select">
                                <input type="checkbox" name="UserKnowItem[]" id="web" value="網頁製作">
                                <label class="btn button_select" for="web">網頁製作</label>
                            </div>

                            <div class="select">
                                <input type="checkbox" name="UserKnowItem[]" id="ad" value="機台廣告">
                                <label class="btn button_select" for="ad">機台廣告</label>
                            </div>

                            <div class="select">
                                <input type="checkbox" name="UserKnowItem[]" id="kol" value="KOL合作">
                                <label class="btn button_select" for="kol">KOL合作</label>
                            </div>

                            <div class="select">
                                <input type="checkbox" name="UserKnowItem[]" id="other" value="其他">
                                <label class="btn button_select" for="other">其他</label>
                            </div>
                        </div>

                    </div>
                    <img class="dashed-row" src="assets/images/contact/dashed_row.svg" alt="" srcset="">
                </div>


                <div class="bottom-input-box">

                    <div class="left-button-box">
                        <div class="title-box">
                            <div class="title">預算區間</div>
                        </div>

                        <div class="btn-group col-xs-12">

                            <div class="select">
                                <input type="radio" id="interval1" name="UserMoney" value="10到30萬">
                                <label class="btn button_select" for="interval1" >10到30萬</label>
                            </div>

                            <div class="select">
                                <input type="radio" id="interval2" name="UserMoney" value="30到50萬">
                                <label class="btn button_select" for="interval2" >30到50萬</label>
                            </div>

                            <div class="select">
                                <input type="radio" id="interval3" name="UserMoney" value="50萬以上">
                                <label class="btn button_select" for="interval3" >50萬~</label>
                            </div>

                        </div>
                        <img class="dashed-column" src="assets/images/contact/dashed_column.png" alt="" srcset="">
                    </div>

                    <div class="right-button-box">
                        <div class="title-box">
                            <div class="title">其他需求</div>
                        </div>
                        <div class="btn-group col-xs-12">
                            <input type="text" id="message" name="UserMsg">
                        </div>
                    </div>
                </div>

                <div class="send-button-box">
                    <button id="contact-send-pc">送出表單</button>
                </div>
            </div>
        </div>

        <div class="contact-info-box">
            <img class="item1" src="../assets/images/contact/item2.png" alt="" srcset="" />
            <div class="bubble">
                <img src="../assets/images/contact/bubble.png" alt="" srcset="" />
            </div>
            <div class="text-img">
                <img src="../assets/images/contact/top_text.png" alt="" srcset="" />
            </div>
            <div class="content">
                <div class="top-logo">
                    <img class="contact-logo" src="../assets/images/contact/contact_logo.svg" alt="" srcset="">
                    <div class="logo-text">亞儂媒體 / 亞潤廣告行銷</div>
                </div>
                <div class="bottom-info">
                    <div class="info1">
                        北部辦公室：新北市林口區文化三路一段366號14樓之6<br>
                        TEL：02-2609 0818<br>
                        統編：50977948
                    </div>
                    <div class="info2">
                        中部辦公室：台中市北屯區崇德路二段130號13樓A2<br>
                        TEL：04-2235 8520｜FAX：04-2235 8528<br>
                        統編：65137508
                    </div>
                </div>
            </div>
            <img class="contact-info-item" src="../assets/images/contact/c4_item1.png" alt="" srcset="" />
        </div>

        <div class="ph_form">
            <div class="info-box-moblie">
                <img class="moblie-item1" src="assets/images/contact/c2-item-moblie.png" alt="" srcset="">
                <div class="info-content-box">
                    <div class="input-box">
                        <div class="input-group">
                            <label class="input-label" for="name-input-moblie"><span class="text-danger">*</span>名字</label>
                            <input type="text" id="name-input-moblie" class="input" name="UserName" value="" />
                        </div>

                        <div class="input-group">
                            <label class="input-label" for="phone-input-moblie"><span class="text-danger">*</span>電話</label>
                            <input type="text" id="phone-input-moblie" class="input" name="UserPhone" value="" />
                        </div>

                        <div class="input-group">
                            <label class="input-label" for="line-email-input-moblie"> Line/e-mail</label>
                            <input type="text" id="line-email-input-moblie" class="input" name="UserMail" value="" />
                        </div>

                        <div class="input-group">
                            <label class="input-label" for="product-input-moblie"><span class="text-danger">*</span>公司產品內容</label>
                            <input type="text" id="product-input-moblie" class="input" name="UserProduct" value="" />
                        </div>
                    </div>
                    <div class="arrow">
                        <img src="assets/images/contact/arrow.svg" alt="" srcset="">
                    </div>
                </div>
                <img class="moblie-item2" src="assets/images/contact/c2-item2-moblie.png" alt="" srcset="">
            </div>

            <div class="info-box-moblie">
                <div class="info-content-box">
                    <div class="title-box">
                        <div class="title">想了解項目</div>
                    </div>
                    <div class="button-box">
                        <div class="btn-group col-xs-12">
                            <div class="select">
                                <input type="checkbox" id="fb-ig-moblie" name="UserKnowItem[]" value="FB/IG">
                                <label class="btn button_select" for="fb-ig-moblie">FB/IG</label>
                            </div>

                            <div class="select">
                                <input type="checkbox" id="google-moblie" name="UserKnowItem[]" value="Google">
                                <label class="btn button_select" for="google-moblie">Google</label>
                            </div>

                            <div class="select">
                                <input type="checkbox" id="line-moblie" name="UserKnowItem[]" value="LINE">
                                <label class="btn button_select" for="line-moblie">LINE</label>
                            </div>

                            <div class="select">
                                <input type="checkbox" id="yahoo-moblie" name="UserKnowItem[]" value="Yahoo">
                                <label class="btn button_select" for="yahoo-moblie">Yahoo</label>
                            </div>

                            <div class="select">
                                <input type="checkbox" id="news-moblie" name="UserKnowItem[]" value="新聞報導">
                                <label class="btn button_select" for="news-moblie">新聞報導</label>
                            </div>

                            <div class="select">
                                <input type="checkbox" id="video-moblie" name="UserKnowItem[]" value="影音方案">
                                <label class="btn button_select" for="video-moblie">影音方案</label>
                            </div>

                            <div class="select">
                                <input type="checkbox" id="design1-moblie" name="UserKnowItem[]" value="平面設計">
                                <label class="btn button_select" for="design1-moblie">平面設計</label>
                            </div>

                            <div class="select">
                                <input type="checkbox" id="design2-moblie" name="UserKnowItem[]" value="文案設計">
                                <label class="btn button_select" for="design2-moblie">文案設計</label>
                            </div>

                            <div class="select">
                                <input type="checkbox" id="web-moblie" name="UserKnowItem[]" value="網頁製作">
                                <label class="btn button_select" for="web-moblie">網頁製作</label>
                            </div>

                            <div class="select">
                                <input type="checkbox" id="ad-moblie" name="UserKnowItem[]" value="機台廣告">
                                <label class="btn button_select" for="ad-moblie">機台廣告</label>
                            </div>

                            <div class="select">
                                <input type="checkbox" id="kol-moblie" name="UserKnowItem[]" value="KOL合作">
                                <label class="btn button_select" for="kol-moblie">KOL合作</label>
                            </div>

                            <div class="select">
                                <input type="checkbox" id="other-moblie" name="UserKnowItem[]" value="其他">
                                <label class="btn button_select" for="other-moblie">其他</label>
                            </div>
                        </div>

                    </div>
                    <div class="arrow">
                        <img src="assets/images/contact/arrow.svg" alt="" srcset="">
                    </div>
                </div>
                <img class="moblie-item3" src="assets/images/contact/c3-item-moblie.png" alt="" srcset="">
            </div>

            <div class="info-box-moblie">
                <div class="info-content-box">
                    <img class="bottom-circle" src="assets/images/contact/bottom_circle.png" alt="" srcset="">
                    <div class="title-box">
                        <div class="title">預算區間</div>
                    </div>
                    <div class="interval-button-box">
                        <div class="btn-group col-xs-12">
                            <div class="select">
                                <input type="radio" id="interval1-moblie" name="UserMoney" value="10到30萬">
                                <label class="btn button_select" for="interval1-moblie">10到30萬</label>
                            </div>

                            <div class="select">
                                <input type="radio" id="interval2-moblie" name="UserMoney" value="30到50萬">
                                <label class="btn button_select" for="interval2-moblie">30到50萬</label>
                            </div>

                            <div class="select">
                                <input type="radio" id="interval3-moblie" name="UserMoney" value="50萬以上">
                                <label class="btn button_select" for="interval3-moblie">50萬~</label>
                            </div>
                        </div>
                    </div>
                    <div class="title-box">
                        <div class="title" >其他需求</div>
                    </div>

                    <div class="btn-group col-xs-12 message-input">
                        <input type="text" id="message-moblie" name="UserMsg">
                    </div>
                    <div class="send-button-box">
                        <button id="contact-send-ph">送出表單</button>
                    </div>
                </div>
            </div>

            <div class="info-box-moblie">
            <div class="info-content-box new-info-content-moblie">
                <div class="content">
                    <div class="top-logo">
                        <img class="contact-logo" src="../assets/images/contact/contact_logo.svg" alt="" srcset="">
                        <div class="logo-text">亞儂媒體 / 亞潤廣告行銷</div>
                    </div>
                    <div class="bottom-info">
                        <div class="info1">
                            北部辦公室：<br>
                            新北市林口區文化三路一段366號14樓之6<br>
                            TEL：02-2609 0818<br>
                            統編：50977948
                        </div>
                        <div class="info2">
                            中部辦公室：<br>
                            台中市北屯區崇德路二段130號13樓A2<br>
                            TEL：04-2235 8520<br>FAX：04-2235 8528<br>
                            統編：65137508
                        </div>
                    </div>
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
    <script src="js/contact.js"></script>
    <script>
        $(document).ready(function () {

            const is_mobile=$(window).width()<=900;
            const btn_class=is_mobile ? '#contact-send-ph':'#contact-send-pc';
            //-- 電腦 --
            $(btn_class).click(function (e) { 
                e.preventDefault();

                const form_class=is_mobile ? '.ph_form':'.pc_form';

                let err_txt='';
                err_txt+=check_input(`${form_class} [name="UserName"]`, "姓名、");
                err_txt+=check_input(`${form_class}  [name="UserPhone"]`, "電話、");
                err_txt+=check_input(`${form_class}  [name="UserProduct"]`, "公司產品內容");
                // err_txt+=check_input(`${form_class}  [name="UserKnowItem[]"]`, "想了解項目、");
                // err_txt+=check_input(`${form_class}  [name="UserMoney"]`, "預算區間");
                
                if(err_txt!=''){
                    alert(`以下欄位為必填：${err_txt}`);
                }
                // else if($('.pc_form [name="UserMail"]').val()!='' && !check_email('[name="UserMail"]')){
                //     alert(`信箱格式錯誤`);
                // }
                else{
                    
                    let UserKnowItem=[];
                    $.each($(`${form_class} [name="UserKnowItem[]"]`), function (index, valueOfElement) { 
                        if($(this).prop('checked')){
                            UserKnowItem.push($(this).val())
                        }
                    });
                    $.ajax({
                        type: "POST",
                        url: "share_area/ajax/send_mail.php",
                        data:{
                            type:'contact_us',
                            UserName: $(`${form_class} [name="UserName"]`).val(),
                            UserMail: $(`${form_class} [name="UserMail"]`).val(),
                            UserPhone: $(`${form_class} [name="UserPhone"]`).val(),
                            UserProduct: $(`${form_class} [name="UserProduct"]`).val(),
                            UserKnowItem: UserKnowItem,
                            UserMoney: $(`${form_class} [name="UserMoney"]`).val(),
                            UserMsg: $(`${form_class} [name="UserMsg"]`).val(),
                        },
                        dataType: "json",
                        success: function (data) {
                            if(data.success){
                                alert(data.msg);
                                $('input, textarea').val('');
                            }
                            else{
                                alert(data.msg);
                            }
                        }
                    });
                }
            });
        });
    </script>
</body>

</html>