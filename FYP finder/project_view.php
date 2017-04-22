<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8" />
        <style>
        body {
    background-image: url("../../assets/images/tablebg2.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
    background-size: 2000px 1000px;
    
}
                h1 { text-align: center;       font-family: Aharoni; font-size: 300% }
        </style>
<?php 
foreach($css_files as $file): ?>
        <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
        <script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
</head>
<body>

<h1>Projects Home</h1>
    <div>
                <?php echo $output; ?>
    </div>
</body>
</html>
