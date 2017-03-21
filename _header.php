<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
    <?php
        if (!empty($title)) {
            echo $title;
        } else {
            echo "Mon title";
        }
    ?>
    </title>
</head>
<body>
<header>
    <nav>
        <ul class="navbar">
            <li class="item">
                <a href="">Home</a>
            </li>
            <li class="item">
                <a href="">Product</a>
            </li>
            <li class="item">
                <a href="">Contact</a>
            </li>
        </ul>
    </nav>
</header>