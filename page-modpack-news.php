<?php
/*
 * Page Template: Modpack News Page
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title>News Page</title>
    <link rel="stylesheet" href="<?= get_template_directory_uri() .'/css/news.css';?>">
</head>
<body>
<div class="logo">
    <img src="<?= get_template_directory_uri() .'/news.png';?>" alt="">
</div>

<div class="block">
    <h1>The Current Chatter</h1>
        <?php the_field('news_block') ?>
</div>
<div class="block">
    <h1>The Discord</h1>
    <ul>
    Join the Discord! You can chat with the team and keep up to date with the packs!
    <li><strong><a href="https://discord.gg/C9UFksP">https://discord.gg/C9UFksP</a></strong></li>
    </ul>
</div>
</body>
</html>