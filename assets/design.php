<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="refresh" content="5">
<title>Example Splahs Screen</title>
<meta name="author" content="Mubarakabaz" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="#f8f9fa" />

<!-- Custom Style -->
<style>
    html,
    body {
        width: 100%;
        height: 100%;
    }

    @font-face {
        font-family: 'Playfair';
        src: url('https://fonts.googleapis.com/css?family=Playfair+Display:700,900');
    }

    body {
        font: normal 1em/1.5em 'Playfair';
        color: #333;
    }

    .splash-title {
        color: white;
        font-size: 3em;
        margin-top: 120px;
        text-shadow: 0 2px 10px #000;
        -webkit-animation-delay: 1s;
        -moz-animation-delay: 1s;
        animation-delay: 1s;
    }

    a .splash-arrow {
        color: white;
        position: absolute;
        font-size: 1.2em;
        bottom: 55px;
        left: 50%;
        margin-left: -25px;
        padding: 10px;
        width: 50px;
        height: 50px;
        font-weight: bold;
        -webkit-transition: all 0.1s ease;
        -moz-transition: all 0.1s ease;
        -o-transition: all 0.1s ease;
        transition: all 0.1s ease;
        -webkit-animation-delay: 1.5s;
        -moz-animation-delay: 1.5s;
        animation-delay: 1.5s;
        border: 3px solid white;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        border-radius: 50%;
    }
    a .splash-arrow:hover{
        text-decoration: none;
        bottom: 50px;
    }

    @media all and(max-width: 690px) {
        .splash-title{
            font-size: 2em;
        }
    }

    @media screen {
        .splash-title{
            font-size: 1.5em;
        }
    }

    @-webkit-keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @-moz-keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    .fade-in {
        opacity: 0;
        -webkit-animation: fadeIn ease-in 1;
        -moz-animation: fadeIn ease-in 1;
        animation: fadeIn ease-in 1;

        -webkit-animation-fill-mode: forwards;
        -moz-animation-fill-mode: fordwards;
        animation: forwards;

        -webkit-animation-duration: 0.5s;
        -moz-animation-duration: 0.5s;
        animation-duration: 0.5s;
    }

    .splash-screen {
        background: url('img/riley-harmon.jpg') center center;
        background-size: cover;
        position: fixed;
        top: 0;
        bottom: 0;
        right: 0;
        left: 0;
        min-height: 360px;
        z-index: 999;
        text-align: center;

    }
</style>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
</script>