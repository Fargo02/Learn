<?php
    $title = "get in";
    require "blocks/header.php";
?>
<div class="container mt-2">
    <form action="check_post.php" method="post">
        <input type="login" name="login" placeholder="Enter a login" class="form-control"></br>
        <input type="password" name="password" placeholder="Enter a password" class="form-control"></br>
        <input type="submit" value="send" class="btn btn-success">
    </form>
</div>
<?php
    $title = "get in";
    require "blocks/footer.php";
?>
