<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><?= App::getInstance()->title; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">Blog</a>
            
            <?php if (!isset($_SESSION["auth"]) || isset($_SESSION["auth"]) && $_SESSION["auth"] != 1): ?>
                <a class="navbar-brand" href="index.php?p=users.login">Se connecter</a>    
                
            <?php endif ?>

            <?php if (isset($_SESSION["auth"]) && $_SESSION["auth"] == 1): ?>
                <a class="navbar-brand" href="index.php?p=admin.posts.index">Administration</a>
            <?php endif ?>
            
        </div>
    </div>
</nav>

<div class="container">



    <div class="starter-template" style="padding-top: 100px;">
        <?= $content; ?>
    </div>

</div><!-- /.container -->


</body>
</html>
