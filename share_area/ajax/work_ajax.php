<?php
require '../sys/config.php';
require '../sys/pdo_fun_calss.php';
require '../sys/function.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $pdo=new PDO_fun;

    switch ($_POST['type']) {

        case 'work':
              $video=$pdo->select("SELECT * FROM appVideo WHERE OnLineOrNot=1 ORDER BY OrderBy, Tb_index DESC");
              $txt=$pdo->select("SELECT * FROM appArticle_sp2 LIMIT 0,1", 'no', 'one');
              $website=$pdo->select("SELECT * FROM appWebsite WHERE OnLineOrNot=1 AND mt_id='site2024032611251198' ORDER BY OrderBy, Tb_index DESC");
              $RWD=$pdo->select("SELECT * FROM appWebsite WHERE OnLineOrNot=1 AND mt_id='site202403261126121' ORDER BY OrderBy, Tb_index DESC");

              $imgSlide=explode(',', $txt['imgSlide']);
              $txt['imgSlide']=[];
              foreach ($imgSlide as $img) {
                array_push($txt['imgSlide'], IMG_URL.$img.'?'.$txt['update_num']);
              }

              $x=0;
              foreach ($website as $wOne) {
                $website[$x]['pc_img']=IMG_URL.$wOne['pc_img'].'?'.$wOne['update_num'];
                $x++;
              }

              $x=0;
              foreach ($RWD as $rOne) {
                $RWD[$x]['pc_img']=IMG_URL.$rOne['pc_img'].'?'.$rOne['update_num'];
                $x++;
              }

              $work=[
                'video'=>$video,
                'txt'=>$txt,
                'website'=>$website,
                'RWD'=>$RWD,
              ];
              echo json_encode(['success'=>true, 'data'=>$work]);
            break;

        default:
            echo json_encode(['success'=>false, 'msg'=>'錯誤的請求']);
            break;
    }
    
    $pdo->close();
}
?>