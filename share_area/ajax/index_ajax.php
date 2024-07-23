<?php
require '../sys/config.php';
require '../sys/pdo_fun_calss.php';
require '../sys/function.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $pdo=new PDO_fun;

    switch ($_POST['type']) {

        //-- 合作客戶 --
        case 'partner':
              $customer=$pdo->select("SELECT * FROM appPartner WHERE OnLineOrNot=1 ORDER BY OrderBy, Tb_index DESC");
              $x=0;
              foreach ($customer as $cOne) {
                $customer[$x]['pc_img']=IMG_URL.$cOne['pc_img'].'?'.$cOne['update_num'];
                $x++;
              }
              echo json_encode(['success'=>true, 'data'=>$customer]);
            break;

        default:
            echo json_encode(['success'=>false, 'msg'=>'錯誤的請求']);
            break;
    }
    
    $pdo->close();
}
?>