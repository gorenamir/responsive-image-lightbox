<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="responsive-image.css" />
    <title>Document</title>
</head>
<body>

    <img src="http://lorempixel.com/300/300/" class="img" />

    <div id="popup" style="display: none">
        <img src="http://lorempixel.com/1000/600/" />
        <h4>text below the image</h4>
    </div>


    <script
        src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous"></script>

    <script src="responsive-image.js"></script>
<script>
    $('.img').responsiveImage($('#popup'));
</script>

</body>
</html>