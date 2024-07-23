<?php 
//-- 共用conn --
require 'share_area/conn.php';
$news=$pdo->select("SELECT * FROM appNews WHERE Tb_index=:Tb_index", ['Tb_index'=>$_GET['Tb_index']], 'one');

?>

<!DOCTYPE html>
<html lang="zh-tw">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $news['aTitle_one'].'｜'.$company['name'];?></title>
    <!-- FACEBOOK 分享資訊 -->
    <meta property="og:title" content="<?php echo $news['aTitle_one'].'｜'.$company['name'];?>" />
    <meta property="og:description" content="<?php echo substr(strip_tags($news['aTXT']), 0, 60).'...';?>" />
    <meta property="og:url" content="<?php echo NOW_URL;?>" />
    <meta itemprop="image" property="og:image" content="<?php echo NOW_HOST.'img/share.jpg';?>" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="<?php echo $news['aTitle_one'].'｜'.$company['name'];?>" />
    <meta itemprop="name" content="<?php echo $news['aTitle_one'].'｜'.$company['name'];?>" />
    <meta itemprop="description" content="<?php echo substr(strip_tags($news['aTXT']), 0, 60).'...';?>" />
    <meta name="description" content="<?php echo substr(strip_tags($news['aTXT']), 0, 60).'...';?>" />
    <meta name="keywords" content="<?php echo $company['keywords'];?>" />
    <!-- 標準網址 -->
    <link rel="canonical" href="<?php echo NOW_URL;?>" />
    
    <?php 
     //-- 共用CSS --
     require 'share_area/css.php';
    ?>

</head>

<body class="news-body">
    <?php 
     //-- 共用loading --
     require 'share_area/transitions.php';
     //-- 共用nav --
     require 'share_area/nav.php';
    ?>

    <div class="container">
        <div class="left-box">
            <h4><?php echo $news['StartDate'];?></h4>
            <h1><?php echo $news['aTitle_one'];?></h1>
        </div>
        <div class="right-box">
            <div class="content">
                <?php echo $news['aTXT'];?>
            </div>
        </div>

        <div class="return-btn">
            <a href="other.php">回至前頁</a>
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
    
    <script src="js/news.js"></script>

</body>

</html>