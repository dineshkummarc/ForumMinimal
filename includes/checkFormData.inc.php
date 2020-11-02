<?php 
    function check_empty_data($formData){
        $emptyData = [];
        foreach($formData as $key => $data){
            if(empty($data)){
                array_push($emptyData, $key);
            }
        }
        if (empty($emptyData)){
        return true;
        }
        else {
            return $emptyData;
        }
    }

    function compare_Password($pwd1, $pwd2){
        if($pwd1 == $pwd2){
            return true;
        }
        return false;
    }

    function check_email($email){
        $email = test_input($email);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
        }
        else {
            return false;
        }
    }

    function pseudo_is_taken($peudo){
        $query ="SELECT * FROM ";
    }
?>