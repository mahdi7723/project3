<?php

    require_once 'db.php';
    include 'do-singin.php';

    if(isset($_POST["submit"]))
    {
        $commentSenderName = $_SESSION["user_name"]=$display_name;
        $subject =$_POST["subject"];
    
        $comment= "INSERT INTO comments (comment_sender_name,comment) VALUES ('$commentSenderName','$subject')";
        $comment= mysqli_query($db, $comment) or die(mysqli_error($db));
        if($comment){
            $smsg = "Your Comment Submitted Successfully";
        }else{
            $fmsg = "Failed to Submit Your Comment";
        }
    }
    if(isset($_GET['del'])){
        $id=$_GET['del'];
        $delete="DELETE FROM comments WHERE id='$id'";
        if($db->query($delete))
        {
            header('Location:text.php');
        }
    }
?>
