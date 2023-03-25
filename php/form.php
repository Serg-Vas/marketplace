<?php
$data['result'] = 'error';
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $data['result'] = 'success';

    if((isset($_POST['name']))&&(strlen(trim($_POST['name']))>0))
    {
        $name = stripslashes(strip_tags($_POST['name']));
    }
    else{
        $data['result'] = 'error';
        $data['name'] = 'NONAME';
    }
    if((isset($_POST['email']))&&(strlen(trim($_POST['email']))>0))
    {   
        $email = stripslashes(strip_tags($_POST['email']));
    }
    else{
        $data['result'] = 'error';
        $data['email'] = 'NOemail';
    }
    if((isset($_POST['phone']))&&(strlen(trim($_POST['phone']))>0))
    {
        $phone= stripslashes(strip_tags($_POST['phone']));
    }
    else{
        $data['result'] = 'error';
        $data['phone'] = 'NOphone';
    }
    if((isset($_POST['comment'])))
    {
        $comment = stripslashes(strip_tags($_POST['comment']));
    }
}
else{
    $data['result'] = 'error';
    $data['files'] = 'NOPOST';
}

if($data['result'] == 'success')
{
    include("php/db.php");
    $resultsql = mysqli_query($link,"insert into user_data(name,email,phone,comment)
    VALUES ('$name','$email','$phone','$comment')");
    mysqli_close($link);
}
?>