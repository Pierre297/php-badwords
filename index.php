<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>php-badwords</title>
</head>

<body>
    <?php
    $text = 'diam sollicitudin tempor id eu nisl nunc mi ipsum faucibus vitae
            aliquet nec ullamcorper sit amet risus nullam eget felis eget nunc lobortis
            mattis aliquam faucibus purus in massa tempor nec feugiat nisl pretium fusce
            id velit ut tortor pretium viverra suspendisse potenti nullam ac tortor vitae
            purus faucibus ornare';
    ?>

    <div class="text">
        <h2>Il mio paragrafo è:</h2>
        <p><?php echo $text ?></p>
        <h2><?php echo "Il mio paragrafo è lungo:" . " " . strlen($text) ?></h2>
    </div>
    <div>

        <form name="form" action="" method="get">
            <label for="badword"><strong>Word to censor</strong></label><br>
            <input type="text" id="badword" name="badword">
            <input type="submit" value="Submit">
        </form>

        <?php echo $_GET['badword']; ?>
        <div class="censored-text">
            <?php
            echo str_replace($badword, "***", $text);
            ?>
        </div>

    </div>

</body>

</html>