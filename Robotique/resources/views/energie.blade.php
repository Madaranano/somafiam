<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="{{ asset('fonts/Armata-Regular/style.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Heebo:wght@100..900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Heebo:wght@100..900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap');

        *,
        *::after,
        *:before {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
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



        .content1 {
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
            font-size: 40px;
            font-weight: 400;
            margin-left: 10%;
            margin-top: 15%;
        }

        .half1 h4 {
            font-size: 35px;
            font-weight: 400;
            margin-left: 15%;

            margin-bottom: 22%;
        }

        .half2 {
            width: 35%;
            height: 80vh;
            text-align: left;
            position: relative;
            color: white;
        }

        .half2 .p1 {
            margin-left: 90px;
            font-size: 20px;
            margin-top: 29%;

        }


        .img {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 100%;
            height: 100%;
            transform: translate(-50%, -50%);
            object-fit: cover;
            z-index: -1;

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
            margin-top: 80px;
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

        .dsc {
            width: 100%;
            height: 50vh;
            display: flex;
            /* align-items: center; */
            justify-content: space-around;
            margin-top: 40px;
            padding: 40px 0px;
            font-family: "Heebo", sans-serif;


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
            width: 29%;
            position: relative;
            left: -60px;
            bottom: 4%;
            color: #676767;

        }

        .dsc .p p {
            font-size: 16px;
            font-size: 18px;
            line-height: 26px;
        }












        .container9 {
            display: flex;
            align-items: center;
            height: 111vh;
            margin-top: 10%;
            position: relative;
        }

        .content {
            display: flex;
            align-items: center;
            background-color: #2A7EE2;
            color: white;
            padding: 40px;

            width: 50%;
            height: 100%;
            position: absolute;
            left: 120px;
            bottom: 40px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }



        .content h1 {
            margin-bottom: 20px;
            font-size: 35px;
            font-family: "Cairo", sans-serif;
            font-weight: 400;
            margin-left: 50px
        }

        .content ul {
            list-style: none;
            padding: 0;
            margin-left: 50px;
        }

        .content ul li {
            margin-bottom: 10px;
            font-size: 18px;
            padding-left: 40px;
            position: relative;
            padding: 16px 0 16px 40px;
            border-bottom: 1px solid #eaeaeb;
        }

        .content ul li::before {
            content: "";
            width: 7px;
            height: 7px;
            background-color: white;
            border-radius: 50%;
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
        }

        .image {
            width: 60%;
            height: 90vh;
            position: absolute;
            bottom: 120px;
            right: 3px;
            z-index: -1;
            background: url('{{ asset('images/slide67.jpg') }}') no-repeat center center/cover;
        }


        .dsc2 {
            width: 100%;
            height: 100vh;
            display: flex;
            /* align-items: center; */
            justify-content: space-around;
            margin-top: 40px;
            padding: 40px 0px;
            font-family: "Heebo", sans-serif;
            background-color: #000000;


        }



        .dsc2 .h1 h1 {
            font-size: 46px;
            line-height: 50px;
            margin-bottom: 40px;
            font-weight: 400;
            font-family: "Cairo", sans-serif;


        }

        .dsc2 .p {
            width: 40%;
            left: 60px;
            bottom: 9%;
            color: #ffffff;
            margin-top: 5%;
            position: relative;


        }

        .dsc2 .p p {
            font-size: 16px;
            font-size: 18px;
            line-height: 26px;
            margin-bottom: 40px
        }

        .image2 {
            width: 35%;
            height: 95%;
            margin-top: 2%;
            bottom: 120px;
            right: 3px;
            background: url('{{ asset('images/img5.jpg') }}') no-repeat center center/cover;
        }

        .button {
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
            left: -0.3%;
            bottom: -23px;
            font-size: 17px;
        }

        .button:hover {
            background: rgb(215, 228, 215);
        }

        .button>svg {
            width: 34px;
            margin-left: 10px;
            transition: transform .3s ease-in-out;
        }

        .button:hover svg {
            transform: translateX(5px);
        }

        .button:active {
            transform: scale(0.95);
        }

        .cont2 h4 {
            font-size: 30px;
            font-weight: 400;
            margin-left: -1%;
            margin-bottom: 22%;
        }

        .h4,
        .h5 {
            background-color: #000000;
            width: 100%;
            height: 15vh;
            position: relative;
            padding: 0;
            margin: 0;
        }

        .h4 h4,
        .h5 h5 {
            position: absolute;

            color: #fff;
            bottom: 0%;
            margin-left: 5%;
            font-family: "Heebo", sans-serif;
            letter-spacing: .1em;
            text-transform: uppercase;
            font-weight: 500;
        }

        .h4 h4 {
            font-size: 25px;
            bottom: 0%;


        }

        .h5 h5 {
            font-size: 25px;
            bottom: 60%;


        }
    </style>
    <title>électronique, électromécanique, électroménager</title>
</head>

<body>
    @include('nav')
    <div class="container-custom">
        <img src="{{ asset('images/slide2.jpg') }}" alt="" class="img">

        <div class="content1">
            <div class="half1">
                <h1>
                    Accompagner l'industrie <span style="color:#2A7EE2">énergie, mécanique, plasturgie, biens de
                        consommation</span></h1>
                <div class="cont">
                    <h4>vous avez un <span style="color:#2A7EE2">projet</span> ?</h4>
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
                <p class="p1"> SOMAFIAM S.A
                    soutient les industriels dans leurs projets d’industrialisation, d’optimisation des process et de
                    développement d’équipements de production innovants.</p>

            </div>
        </div>
    </div>

    <div class="dsc">
        <div class="h1">
            <h1>Gagnez en productivité avec SOMAFIAM S.A</h1>
        </div>
        <div class="p">
            <p>Les nouvelles technologies impactent les systèmes de production des industriels ainsi que leur manière de
                fabriquer les produits.</p>
            <p><span style="font-weight: 600;color: #000000;">Pour répondre à des besoins en constante évolution,</span>
                à des enjeux de compétitivité et de sécurité, les entreprises cherchent à flexibiliser la production,
                augmenter la productivité, assurer la traçabilité et la qualité des produits tout en améliorant les
                conditions de travail. Pour vous accompagner dans ces nouveaux enjeux, R&D Technology met au point des
                solutions innovantes.</p>
        </div>
    </div>

    <div class="container9">
        <div class="content">
            <div>
                <h1>Notre équipe relève vos défis</h1>
                <ul>
                    <li>Confiez-nous le développement de vos machines de production</li>
                    <li>Modernisez votre parc machines pour en faire un levier de compétitivité</li>
                    <li>Optimisez vos process existants</li>
                    <li>Renforcez vos capacités de production </li>
                    <li>Profitez de notre expertise Conseil</li>
                    <li>Augmentez la fiabilité et la disponibilité de vos équipements</li>
                    <li>Assurez la traçabilité de vos produits</li>
                    <li>Concrétisez vos projets de mise sur le marché d’équipements innovants</li>
                </ul>
            </div>
        </div>
        <div class="image"></div>
    </div>

    <div class="dsc2">
        <div class="image2"></div>

        <div class="p">
            <div class="h1">
                <h1>Des solutions de pointe pour relever vos challenges </h1>
            </div>
            <p>R&D Technology conçoit et fabrique des équipements de production adaptés à vos besoins, selon votre
                cahier des charges.</p>
            <p>L’expérience, l’engagement et la passion de nos équipes, nous permet de vous proposer des machines de
                production flexibles à fort TRS vous assurant un gain de productivité.</p>
            <p>Acteur engagé de l’industrie du futur, nous accompagnons les industriels de la mécanique, de l’énergie,
                de la plasturgie et des biens de consommation dans leurs projets d’automatisation et concrétisons les
                projets d’équipements technologiques innovants des porteurs de projet.</p>
            <div class="cont cont2">
                <h4>vous avez un <span style="color: #2A7EE2">projet</span> ?</h4>
                <button class="button">
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
    </div>
    <div class="h4">
        <h4>Nos offres</h4>
    </div>

    @include('liste')
    <div class="h5">
        <h5>NOS AUTRES SECTEURS INDUSTRIELS:
        </h5>
    </div>
    @include('slider')
    @include('footer')

</body>

</html>
