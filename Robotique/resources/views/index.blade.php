<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="{{ asset('fonts/Armata-Regular/style.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <title>Robot</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap');

        *,
        *::after,
        *:before {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
        }

        .nav-link {
            color: #222831;
            font-size: 17.5px;
            font-weight: 900;
            font-style: normal;
            font-family: Gruppo;
            text-transform: none;
            text-align: center;
        }

        .nav-link:hover {
            color: #2a9249;
        }

        .navbar {
            background-color: #eeeeee !important;
            /* 50% transparent white /
            filter: opacity(100%);
            transition: filter 3s ease-in-out;
        }

        .navbar.scrolled {
            filter: opacity(60%);
            / Solid white when scrolled */
        }

        .container-custom {
            width: 100%;
            height: 80vh;
            position: relative;
            overflow: hidden;
            background-color: rgba(0, 0, 0, 0.7);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* .content {
    position: relative;
    z-index: 1;
    text-align: left;
    color: #fff;
    max-width: 800px;
    padding: 20px;
}

.content h1 {
    font-size: 48px;
    font-weight: 700;
    margin-bottom: 20px;
    letter-spacing: 2px;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
}

.content p {
    font-size: 18px;
    font-weight: 300;
    margin-bottom: 30px;
    line-height: 1.6;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
}

.content a {
    font-size: 23px;
    color: #fff;
    text-decoration: none;
    border: 2px solid #fff;
    padding: 15px 25px;
    border-radius: 50px;
    transition: 0.3s;
}

    .content a:hover {
        background-color: #ffffff;
        color: #000000;
    } */


        .content {
            position: relative;
            z-index: 1;
            text-align: center;
            color: #fff;
            width: 100%;
            display: flex;
        }



        .cont a {
            position: absolute;
            right: 50%;
            bottom: 15%;
            font-size: 23px;

            color: #fff;
            text-decoration: none;
            border: 2px solid #fff;
            padding: 15px;
            border-radius: 50px;
            transition: 0.3s;
        }

        .cont a:hover {
            background-color: #ffffff;
            color: #000000;
        }

        .half1 {
            width: 45%;
            text-align: left;

            height: 80vh;
            position: relative;
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            padding: 10px;
        }

        .half1 h1 {
            font-size: 45px;
            font-weight: 400;
            margin-left: 15%;
            margin-top: 15%
        }

        .half1 h4 {
            font-size: 35px;
            font-weight: 400;
            margin-left: 15%;

            margin-bottom: 20%;
        }

        .half2 {
            width: 45%;
            height: 80vh;
            text-align: left;

            position: relative;
            color: white;
        }

        .half2 p {
            margin-top: 23%;
            margin-left: 90px;
            font-size: 20px;
        }

        .vd {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 100%;
            height: 100%;
            transform: translate(-50%, -50%);
            object-fit: cover;
            z-index: -1;

        }


        .container2 {
            display: flex;
            align-items: center;
            justify-content: space-around;
            width: 70%;
            margin-left: 200px;
            height: 4vh;
            margin-top: 30px;
        }

        .card {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 80px;
            height: 80px;
            text-align: center;
            border-radius: 15px;
            background-color: white;
            margin: 0 10px;
        }

        .card img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        h1.hidden {
            display: flex;
            align-items: center;
            margin-right: 20px;
            font-size: 1.5em;
        }


        button {
            cursor: pointer;
            font-weight: 700;
            font-family: Helvetica, "sans-serif";
            transition: all .2s;
            padding: 10px 20px;
            border-radius: 100px;
            border: 1px solid transparent;
            display: flex;
            align-items: center;
            font-size: 15px;
            position: absolute;
            left: 15%;
            bottom: 15%;
            font-size: 17px;
        }

        button:hover {
            background: rgb(215, 228, 215);
        }

        button>svg {
            width: 34px;
            margin-left: 10px;
            transition: transform .3s ease-in-out;
        }

        button:hover svg {
            transform: translateX(5px);
        }

        button:active {
            transform: scale(0.95);
        }

        .card-title {
            color: #262626;
            font-size: 1.5em;
            line-height: normal;
            font-weight: 700;
            margin-bottom: 0.5em;
        }

        .small-desc {
            font-size: 1em;
            font-weight: 400;
            line-height: 1.5em;
            color: #452c2c;
        }

        .small-desc {
            font-size: 1em;
        }

        .go-corner {
            display: flex;
            align-items: center;
            justify-content: center;
            position: absolute;
            width: 2em;
            height: 2em;
            overflow: hidden;
            top: 0;
            right: 0;
            background: linear-gradient(135deg, #6293c8, #384c6c);
            border-radius: 0 4px 0 32px;
        }

        .go-arrow {
            margin-top: -4px;
            margin-right: -4px;
            color: white;
            font-family: courier, sans;
        }

        /* Common Styles for Sections */
        .section-title {
            margin-top: 60px;
            font-size: 2.5em;
            color: #333;
            margin-bottom: 40px;
            text-align: center;
        }

        .container3 {
            width: 80%;
            margin: 0 auto;
        }

        /* Flexbox Layout */
        .card-wrapper {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        /* Card Styles */
        .service-card,
        .usp-card {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            text-align: center;
            flex: 1 1 calc(25% - 20px);
            /* 4 items per row */
            margin: 10px;
            /* Margin for spacing */
            box-sizing: border-box;
            /* Ensures padding and border are included in the total width */
            display: flex;
            flex-direction: column;
            /* Aligns items vertically */
            justify-content: space-between;
            /* Distributes space between items */
        }

        /* Align button to the bottom */
        .service-card .btn,
        .usp-card .btn {
            align-self: center;
            /* Centers the button horizontally */
            margin-top: auto;
            /* Pushes the button to the bottom of the card */
        }

        .service-icon,
        .usp-icon {
            font-size: 60px;
            color: #007bff;
            margin-bottom: 20px;
        }

        .service-title,
        .usp-title {
            font-size: 1.6em;
            margin-bottom: 15px;
            color: #333;
        }

        .service-description,
        .usp-description {
            font-size: 1em;
            color: #666;
            margin-bottom: 20px;
        }

        .btn-primary {
            display: inline-block;
            padding: 12px 25px;
            font-size: 1.1em;
            color: #fff;
            background-color: #007bff;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {

            .service-card,
            .usp-card {
                flex: 1 1 calc(50% - 20px);
                /* 2 items per row on medium screens */
            }
        }

        @media (max-width: 480px) {

            .service-card,
            .usp-card {
                flex: 1 1 100%;
                /* 1 item per row on small screens */
            }
        }


        /* Common Styles for Sections */
        .section-title {
            font-size: 2.5em;
            color: #333;
            margin-bottom: 40px;
            text-align: center;
        }

        .container4 {
            width: 80%;
            margin: 0 auto;
        }

        /* Engaging Visuals Section */
        .engaging-visuals {
            padding: 60px 0;
        }

        .visuals-wrapper {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .visual-card {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            flex: 1 1 calc(25% - 20px);
            /* 4 items per row */
            margin: 10px;
            /* Margin for spacing */
            box-sizing: border-box;
            /* Ensures padding and border are included in the total width */
        }

        .visual-image {
            width: 100%;
            height: auto;
            display: block;
        }

        .visual-content {
            padding: 20px;
            text-align: center;
        }

        .visual-title {
            font-size: 1.6em;
            margin-bottom: 10px;
            color: #333;
        }

        .visual-description {
            font-size: 1em;
            color: #666;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .visual-card {
                flex: 1 1 calc(50% - 20px);
                /* 2 items per row on medium screens */
            }
        }

        @media (max-width: 480px) {
            .visual-card {
                flex: 1 1 100%;
                /* 1 item per row on small screens */
            }
        }



        .dsc {
            width: 100%;
            height: 50vh;
            display: flex;
            align-items: center;
            justify-content: center;

        }

        .dsc .h1 {
            width: 40%;
        }

        .dsc .h1 h1 {
            font-size: 46px;
            line-height: 50px;
            font-weight: 400;
            font-family: "Cairo", sans-serif;


        }

        .dsc .p {
            width: 40%;
            position: relative;
            left: 60px;
            bottom: 4%;

        }

        .dsc .p p {
            font-size: 16px;
        }

        .titre,
        .realisations {
            width: 100%;
            background-color: #000000;
            color: #fff;
            height: 50vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .titre .h1,
        .realisations .h1 {
            width: 40%;
            position: relative;
            top: -12%;
        }

        .titre .h1 h1,
        .realisations .h1 h1 {
            font-size: 46px;
            line-height: 50px;
            font-weight: 400;
            font-family: "Cairo", sans-serif;
        }

        .titre .p,
        .realisations .p {
            width: 40%;
            position: relative;
            left: 60px;
        }

        .titre .p p,
        .realisations .p p {
            font-size: 16px;
            position: relative;
        }

        .realisations .p {
            bottom: 2%;
        }

        /* .titre .p p::after,
        .realisations .p p::after {
            content: "";
            display: block;
            width: 25px;
            /* Adjust the width as needed */
        height: 2px;
        /* Adjust the height as needed */
        background-color: #02ef55;
        /* Line color */
        margin-top: 10px;
        /* Adjust the spacing between the text and the line */
        }

        */
        /* Heading hover effect */
    </style>
</head>

<body>

    @include('nav')

    <div class="container-custom">
        <video autoplay loop muted playsinline class="vd">
            <source src="{{ asset('videos/video.mp4') }}" type="video/mp4">
        </video>

        <div class="content">
            <div class="half1">
                <h1>Concrétisons ensemble l’industrie du <span style="color:#2A7EE2">futur</span> </h1>
                <div class="cont">
                    <h4>vous avez un <span style="color: #2A7EE2">projet</span> ?</h4>
                    {{-- <a href="#secteur">contactez-nous</a> --}}
                    <button>
                        <span>Contactez-nous</span>
                        <svg width="34" height="34" viewBox="0 0 74 74" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="37" cy="37" r="35.5" stroke="black" stroke-width="3"></circle>
                            <path
                                d="M25 35.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z"
                                fill="black"></path>
                        </svg>
                    </button>



                </div>
            </div>
            <div class="half2">
                <p> SOMAFIAM S.A
                    conçoit et fabrique des équipements <br>de production innovants. Nous développons des
                    <br>solutions sur-mesure en robotique, machines <br> spéciales, à l’unité ou en série.
                </p>
            </div>
        </div>
    </div>
    {{-- <div class="container-custom">
        <video autoplay loop muted plays-inline class="vd" >
            <source src="{{ asset('videos/video.mp4') }}" type="video/mp4">
        </video>
        <div class="content">
            <h1>Machinerie sur Mesure Innovante pour Votre Industrie</h1>
            <p>Votre partenaire en solutions technologiques avancées et équipements de production sur mesure</p>
            <a href="#secteur">Entrer</a>
        </div>
    </div> --}}

    <div class="dsc">
        <div class="h1">
            <h1>Nous répondons aux <br>défis techniques des <br>industriels</h1>
        </div>
        <div class="p">
            <p>Depuis plus de 25 ans, SOMAFIAM S.A
                intervient <br>dans de nombreux secteurs industriels pour apporter
                <br>des solutions adaptées à leurs besoins techniques, <br>économiques et stratégiques.
            </p>
        </div>
    </div>

    @include('slider')



    <div class="titre">
        <div class="h1">
            <h1>Nos offres s’adaptent à<br>vos problématiques ou à<br>celles de vos clients</h1>
        </div>
        <div class="p">
            <p>Nous développons des solutions innovantes pour <br>industrialiser vos nouveaux produits ou optimiser vos
                <br>process de fabrication dans une démarche « Industrie <br>du Futur ».
            </p>
            <p>Experts en automatisation, nous accompagnons <br>également les porteurs de projets et industriels
                <br>souhaitant mettre sur le marché des équipements <br>innovants et disposons des ressources
                nécessaires<br>pour leur production en série.
            </p>
        </div>
    </div>


    @include('liste')

    {{-- <div class="realisations">
        <div class="h1">
            <h1>Nos réalisations</h1>
        </div>
        <div class="p">
            <p>À travers nos dernières réalisations, découvrez <br>comment nos solutions ont permis d’industrialiser de
                <br>nouveaux produits ou d’optimiser des processus de <br>fabrication existants.
            </p>

        </div>
    </div> --}}


    @include('footer')







</body>

</html>
