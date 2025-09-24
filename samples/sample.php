<?php include "config.php"; ?>


<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Lab</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
<div class="container">

    <div class="block block1">
        <div class="inner-container">
            <div class="inner"><?php echo $x; ?></div>
            <div class="content">
                <ul>
                    <?php foreach($menu as $link => $label): ?>
                        <li><a href="<?php echo $link; ?>"><?php echo $label; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>

    <?php foreach($content as $blockNum => $code): ?>
        <?php if($blockNum != 6): ?>
            <div class="block block<?php echo $blockNum; ?>">
                <?php echo $code; ?>
            </div>
        <?php endif; ?>
    <?php endforeach; ?>

    <div class="block block6">
        <div class="inner"><?php echo $y; ?></div>
        <div class="content"><?php echo $content[6]; ?></div>
    </div>


</div>
</body>
</html>
