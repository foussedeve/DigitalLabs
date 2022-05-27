<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/js/slick/slick.css">
    <link rel="stylesheet" href="/js/slick/slick-theme.css">
    <link rel="stylesheet" href="/fonts/fontawsome/css/all.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>Document</title>
</head>
<body>
<?php  require VIEW_PATH."partials/header.php"?>
<main class="main__contact">
<p><?php echo $_SESSION["message"]?? ""; unset($_SESSION["message"])?></p>

    <div class="address">
    <address>
            <h1>Nous contacter</h1>
            <p><span>Tél</span> : +226 65 45 03 71</p>
            <p><a href=""><span> Email </span>: foussede@gmail.com</a></p>
            <p><span>Skype </span>: foussede@gmail.com</p>
        </address>

    </div>
 <div>
     <h2>Demandez un devis</h2>
     <?php  require VIEW_PATH."partials/form_devis.php"?>
 </div>
    
    
</main>
<?php  require VIEW_PATH."partials/footer.php"?>
</body>
</html>