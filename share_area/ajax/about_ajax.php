<?php
require '../sys/config.php';
require '../sys/pdo_fun_calss.php';
require '../sys/function.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $pdo=new PDO_fun;

    switch ($_POST['type']) {

        //-- 團隊 --
        case 'team':
              $team=$pdo->select("SELECT * FROM appTeam WHERE OnLineOrNot=1 ORDER BY OrderBy, Tb_index DESC");
              $x=0;
              foreach ($team as $cOne) {
                $team[$x]['pc_img']=IMG_URL.$cOne['pc_img'].'?'.$cOne['update_num'];
                $team[$x]['aTitle']= nl2br($cOne['aTitle']);
                $team[$x]['aTitle_ph']= nl2br($cOne['aTitle_ph']);
                $team[$x]['tIntroduce']= nl2br($cOne['tIntroduce']);
                $x++;
              }
              echo json_encode(['success'=>true, 'data'=>$team]);
            break;

        default:
            echo json_encode(['success'=>false, 'msg'=>'錯誤的請求']);
            break;
    }
    
    $pdo->close();
}
?>