<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <?php
    $text = 'diam sollicitudin tempor id eu nisl nunc mi ipsum faucibus vitae
            aliquet nec ullamcorper sit amet risus nullam eget felis eget nunc lobortis
            mattis aliquam faucibus purus in massa tempor nec feugiat nisl pretium fusce
            id velit ut tortor pretium viverra suspendisse potenti nullam ac tortor vitae
            purus faucibus ornare';
    ?>
    <div class="censored-text">
        <h2>Stesso testo ma censurato:</h2>
        <?php
        $badword = $_GET['badword'];
        $new_str = str_replace($badword, "***", $text);
        ?>
        <?php echo $new_str;
        ?>
    </div>
</body>

</html>