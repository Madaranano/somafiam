<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        /* Container for the list and image */
        .ul-div {
            width: 100%;
            height: 80vh;
            background-color: #000000;
            display: flex;
            justify-content: space-between;
            /* Space between list and image */
            align-items: flex-start;
            padding: 5%;
            box-sizing: border-box;
            overflow: hidden;
        }

        /* Style for the list */
        .infoList {
            list-style-type: none;
            padding: 0;
            margin: 0;
            width: 60%;
            /* Adjust width as needed */
        }

        /* List item styling */
        .li {
            cursor: pointer;
            padding: 10px;
            margin-bottom: 5px;
            position: relative;
        }

        /* Heading styling */
        .li h1 {
            font-size: 40px;
            color: #6d7870;
            /* Default color */
            margin: 0;
            transition: color 0.3s ease-out;
            /* Smooth color transition */
        }

        .li h1:hover {
            color: #2A7EE2;
            /* Hover color */
        }

        /* Active class for list item */
        .li.active h1 {
            color: #2A7EE2;
            /* Color when li is active */
        }

        /* Info div styling */
        .info {
            max-height: 0;
            overflow: hidden;
            opacity: 0;
            transition: max-height 0.3s ease-out, opacity 0.3s ease-out;
            padding: 0 10px;
            color: #fff;
            background-color: #000000;
            margin-left: 5%;
        }

        /* Show class for info div */
        .info.show {
            max-height: 100px;
            /* Adjust based on content size */
            opacity: 1;
            padding: 10px;
        }


        /* Image container styling */
        .image-container {
            flex-shrink: 0;
            /* Prevent the image container from shrinking */
            width: 35%;
            /* Adjust width as needed */
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            /* Ensure image doesn't overflow */
            border-radius: 10px;
            /* Rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            /* Shadow for depth */
        }

        /* Image styling */
        #displayImage {
            max-width: 100%;
            /* Ensure the image fits within the container */
            height: auto;
            /* Maintain aspect ratio */
            border-radius: 10px;
            /* Rounded corners */
            object-fit: cover;
            /* Cover the container while maintaining aspect ratio */
            transition: opacity 0.3s ease-out;
            /* Smooth opacity transition */
        }
    </style>
</head>

<body>
    <div class="ul-div">
        <ul id="infoList">
            <li class="li" data-image="{{ asset('images/liste1.jpg') }}">
                <h1>Projets technologiques innovants</h1>
                <div class="info">Partenaire industriel des innovateurs, SOMAFIAM S.A
                    vous accompagne de l’idée à
                    la
                    fabrication en série d’équipements.</div>
            </li>
            <li class="li" data-image="{{ asset('images/liste2.jpg') }}">
                <h1>Fabrication d'équipements en série</h1>
                <div class="info">L’efficience industrielle est notre métier, nous nous chargeons de la fabrication
                    en
                    série des équipements destinés à vos clients.</div>
            </li>
            <li class="li" data-image="{{ asset('images/liste3.jpg') }}">
                <h1>Robotisation - Cobotisation</h1>
                <div class="info">Fort d’un savoir-faire reconnu en intégration robotique multimarque, SOMAFIAM S.A

                    conçoit et réalise des cellules robotisées ou collaboratives.</div>
            </li>
            <li class="li" data-image="{{ asset('images/liste4.jpg') }}">
                <h1>Cellule d’assemblage flexible</h1>
                <div class="info">Résultat d’un défi technologique, nos Evolubox® ouvrent une nouvelle voie dans
                    l’automatisation des petites et moyennes séries.</div>
            </li>
            <li class="li" data-image="{{ asset('images/liste5.jpg') }}">
                <h1>Machine spéciale de production sur-mesure</h1>
                <div class="info">Passionnés par la technologie, nous concevons et réalisons des équipements de
                    pointe
                    et machines spéciales, partout où les solutions standards ne conviennent pas.</div>
            </li>
        </ul>
        <div class="image-container">
            <img id="displayImage" src="{{ asset('images/liste1.jpg') }}" alt="Displayed Image">
        </div>
    </div>

    <script>
        document.querySelectorAll('#infoList > li').forEach(item => {
            const h1 = item.querySelector('h1');
            const infoDiv = item.querySelector('.info');
            const imageSrc = item.getAttribute('data-image'); // Get image path from data attribute

            item.addEventListener('click', function() {
                const isOpen = infoDiv.classList.contains('show');

                // Remove 'active' class from all items
                document.querySelectorAll('#infoList > li').forEach(li => {
                    li.classList.remove('active');
                    li.querySelector('.info').classList.remove('show');
                });

                // Update the image src
                document.getElementById('displayImage').src = imageSrc;

                // Toggle the clicked item
                if (!isOpen) {
                    item.classList.add('active');
                    infoDiv.classList.add('show');
                }
            });
        });
    </script>
</body>

</html>
