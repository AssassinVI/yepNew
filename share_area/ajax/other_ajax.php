<?php
require '../sys/config.php';
require '../sys/pdo_fun_calss.php';
require '../sys/function.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $pdo=new PDO_fun;

    switch ($_POST['type']) {

        //-- 最新消息/智能回收機台 --
        case 'other':

              //-- 最新消息 --
              $news=$pdo->select("SELECT * FROM appNews WHERE OnLineOrNot=1 ORDER BY StartDate DESC, Tb_index DESC");
              $x=0;
              foreach ($news as $nOne) {
                $news[$x]['aImg']=IMG_URL.$nOne['aImg'].'?'.$nOne['update_num'];
                $x++;
              }

              //-- 概述 --
              $appArticle_sp3=$pdo->select("SELECT * FROM appArticle_sp3 LIMIT 0,1", 'no', 'one');
              $appArticle_sp3['aText']=nl2br($appArticle_sp3['aText']);
              $appArticle_sp3['adv1']=nl2br($appArticle_sp3['adv1']);
              $appArticle_sp3['adv2']=nl2br($appArticle_sp3['adv2']);
              $appArticle_sp3['adv3']=nl2br($appArticle_sp3['adv3']);

              //-- 功能介紹 --
              $appArticle_sp4=$pdo->select("SELECT * FROM appArticle_sp4 LIMIT 0,1", 'no', 'one');
              $appArticle_sp4['imgSlide']=explode(',', $appArticle_sp4['imgSlide']);
              $x=0;
              foreach ($appArticle_sp4['imgSlide'] as $imgSlide) {
                $appArticle_sp4['imgSlide'][$x]=IMG_URL.$imgSlide.'?'.$appArticle_sp4['update_num'];
                $x++;
              }

              //-- 位置 --
              $appLocation=$pdo->select("SELECT * FROM appLocation WHERE OnLineOrNot=1 ORDER BY OrderBy, Tb_index DESC");
              $x=0;
              foreach ($appLocation as $lOne) {
                $appLocation[$x]['aTxt']=nl2br($lOne['aTxt']);
                $x++;
              }

              echo json_encode(['success'=>true, 'news'=>$news, 'article_sp3'=>$appArticle_sp3, 'article_sp4'=>$appArticle_sp4, 'location'=>$appLocation]);
            break;

        default:
            echo json_encode(['success'=>false, 'msg'=>'錯誤的請求']);
            break;
    }
    
    $pdo->close();
}
?>