<?php 

    $data = [];

    // request

    if(isset($_GET['option'])){

    switch($_GET['option']){
        case 'status':
            $data['status'] = 'SUCESS';
            $data['data'] = ['API running ok!'];
            break;
        default:
         $data['status'] = 'ERROR';
         break;
    }

    } else{
        $data['status'] = 'ERROR';
    }

    //commit API's response

    response($data);

    //construction of response

    function response($data_response){
        header("Content-Type:application/json");
        echo json_encode($data_response);
    }
?>