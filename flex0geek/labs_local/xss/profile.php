<?php
session_start();

if($_SESSION['islogin'] != 1){
    header("Location: login.php");
    die();
}

$conn = mysqli_connect('localhost', 'root', '', 'test');

if( isset($_POST['link']) && isset($_POST['comment']) ){
    $uname = htmlentities($_SESSION['username']);
    $comment = htmlentities($_POST['comment']);
    $link = "#";
    if(strpos($_POST['link'], 'http://') !== false || strpos($_POST['link'], 'https://') !== false){
        $link = $_POST['link'];
    }
    $sql = "INSERT INTO comments values('$uname','$comment','$link')";
    $res = mysqli_query($conn, $sql);
}

$sql = "SELECT * FROM comments";

$result = mysqli_query($conn, $sql);

?>

<html>
  <head>
    <title>Books Library</title>
    <link rel="stylesheet" type="text/css" href="../style/css.css">
  </head>
  <body id="bodyId">
    <div class="header">
      <a href="index.php" class="logo">Books Library</a>
      <div class="header-right">
        <a href="index.php">Home</a>
        <a href="search.php">Search</a>
        <a href="contact.php">Contact</a>
        <a href="about.php#about">About</a>
        <a class="active" href="profile.php">Profile</a>
        <a href="login.php">Login</a>
      </div>
    </div>
    
    <div class="container">
    <div class="be-comment-block">
        <div class="be-comment">
        <?php
while($rows=mysqli_fetch_array($result)){
    echo '<span class="be-comment-name">';
    echo '<a href="'.$rows['link'].'">'.$rows['uname'].'</a></span>';
    echo '<p class="be-comment-text">'.$rows['comment'].'</p>';
    echo '</div>';
}
        ?>
        </div>
        <form class="form-block" method="post">
            <div class="row">
                <div class="col-xs-12">                         
                    <div class="form-group">
                        <textarea name="comment" class="form-input" required="" placeholder="Your text"></textarea><br>
                        <input placeholder="Link" style="width: 400px;border: 1px solid #000;border-radius: 3px;" type="text" name="link" autocomplete="off">
                    </div>
                </div>
                <input style="width: 100px;" type="submit" value="Comment">
            </div>
        </form>
    </div>
    </div>
  </body>
</html>