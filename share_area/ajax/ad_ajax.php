<?php
require '../sys/config.php';
require '../sys/pdo_fun_calss.php';
require '../sys/function.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $pdo=new PDO_fun;

    switch ($_POST['type']) {

        //-- 團隊 --
        case 'ad':
              $ad=$pdo->select("SELECT * FROM appArticle_sp1 LIMIT 0,1", 'no', 'one');
              $ad['social_img']=IMG_URL.$ad['social_img'].'?'.$ad['update_num'];
              $ad['google_img']=IMG_URL.$ad['google_img'].'?'.$ad['update_num'];
              $ad['yahoo_img']=IMG_URL.$ad['yahoo_img'].'?'.$ad['update_num'];
              $ad['line_img']=IMG_URL.$ad['line_img'].'?'.$ad['update_num'];
              $ad['yt_img']=IMG_URL.$ad['yt_img'].'?'.$ad['update_num'];
              $ad['mouth_img']=IMG_URL.$ad['mouth_img'].'?'.$ad['update_num'];
              echo json_encode(['success'=>true, 'data'=>$ad]);
            break;

        default:
            echo json_encode(['success'=>false, 'msg'=>'錯誤的請求']);
            break;
    }
    
    $pdo->close();
}
?>