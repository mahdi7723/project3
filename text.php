<?php
    require_once 'engine/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>کامنت</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body class="bg-secondary">
    <script src="bootstrap.min.js"></script>
    <div class="container border border-5 rounded mt-5 p-2 bg-light">
        <div class="row justify-content-center">
          <div class="panel-heading display-6">Submit Your Comments</div>
            <div class="panel-body">
                <form method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Subject</label>
                        <textarea name="subject" class="form-control" rows="3"></textarea>
                        <h5 class="float-right text-success p-2"><?php $smsg; ?></h5>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">posted</button>
                </form>
            </div>
        </div>
    </div>
    <div class="row justify-content-center pt-3">
        <div class="col-lg-5 rounded bg-light p-3">
            <?php
                $comment_result=mysqli_query($db,"SELECT * FROM comments WHERE id='0' ORDER BY id DESC") or die("database error:".mysqli_errno($db));
                while($coment=mysqli_fetch_assoc($comment_result))
                {
            ?>
            <div class="card mb-2 border-secondary">
                <div class="card-header bg-secondary py-1 text-light">
                    <span class="font-italic">Posted By :<?php $coment["comment_sender_name"] ?></span>
                    <span class="font-italic">On : <?php $coment["date"] ?></span>
                </div>
                <div class="card-body py-2">
                    <p class="card-text"><?php $coment["comment"] ?></p>
                </div>
                <div class="float-right">
                    <a href="engine/do-text.php?del=<?php $coment["id"] ?>" class="text-danger mr-2" onclick="
                    return confirm('Do you want to delete this comment');" title="Delete"><span class="glyphicon glyphicon-trash"></span></i></a>
                    <a href="text.php?edit=<?php $coment["id"] ?>" class="text-success"
                     title="Edit"><span class="glyphicon glyphicon-trash"></span></i></a>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>