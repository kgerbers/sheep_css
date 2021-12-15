<html>
<head>

    <title>Sheep</title>
    <meta content="">
    <link href="style.css" rel="stylesheet">
</head>
<body>

<div class="sheep">
    <div class="head">
        <svg class="base" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
            <path d="M10.5,3.4C7.1,11.9,-6.6,11.8,-10,3.2C-13.5,-5.3,-6.7,-22.3,0.1,-22.2C6.9,-22.2,13.8,-5.1,10.5,3.4Z"
                  height="50px" stroke="black" stroke-width="0" style="transition: all 0.3s ease 0s;"
                  transform="translate(50 50)" width="50px">
            </path>
        </svg>

        <svg class='eyes eye-left' viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
            <circle cx="50" cy="50" r="50"/>
        </svg>
        <svg class='eyes eye-right' viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
            <circle cx="50" cy="50" r="50"/>
        </svg>

        <svg class="ears ear-left" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
            <path d="M23.1,-15.4C29.7,-10.2,34.5,-0.6,32,6.2C29.6,13,19.8,17,11.3,19.6C2.7,22.3,-4.7,23.7,-11.8,21.5C-18.9,19.2,-25.6,13.3,-28.5,5.2C-31.4,-2.9,-30.5,-13.2,-25.1,-18.2C-19.7,-23.1,-9.8,-22.7,-0.8,-22.1C8.3,-21.5,16.6,-20.7,23.1,-15.4Z"
                  height="100%" style="transition: all 0.3s ease 0s;"
                  transform="translate(50 50)" width="100%">
            </path>
        </svg>

        <svg class="ears ear-right" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
            <path d="M23.1,-15.4C29.7,-10.2,34.5,-0.6,32,6.2C29.6,13,19.8,17,11.3,19.6C2.7,22.3,-4.7,23.7,-11.8,21.5C-18.9,19.2,-25.6,13.3,-28.5,5.2C-31.4,-2.9,-30.5,-13.2,-25.1,-18.2C-19.7,-23.1,-9.8,-22.7,-0.8,-22.1C8.3,-21.5,16.6,-20.7,23.1,-15.4Z"
                  height="100%" style="transition: all 0.3s ease 0s;"
                  transform="translate(50 50)" width="100%">
            </path>
        </svg>


    </div>
    <div class="body">

        <?php
        $bodyParts = [
            // [x, y, r]
            [31, 31, 20],
            [15, 40],
            [13, 32],
            [13, 26],
            [15, 21],
            [17, 15],
            [23, 11],
            [30, 11],
            [35, 11],
            [40, 12],
            [45, 15],
            [50, 20],
            [51, 26],
            [51, 33],
            [48, 38],
            [46, 43],
            [40, 48],
            [34, 50],
            [27, 50],
            [20, 47],
        ]
        ?>

        <svg class='part' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'>
            <?php
            echo " <rect x='25' y='45' width='1.5' height='15' rx='1' class='leg'></rect>";
            echo " <rect x='40' y='45' width='1.5' height='15' rx='1' class='leg'></rect>";
            echo " <rect x='40' y='59' width='3' height='1' rx='1' class='leg'></rect>";
            echo " <rect x='23' y='59' width='3' height='1' rx='1' class='leg'></rect>";
            foreach ($bodyParts as $bodyPart) {
                $bodyPart[2] = $bodyPart[2] ?? mt_rand(3, 6);
                echo "<circle cx='" . $bodyPart[0] . "' cy='" . $bodyPart[1] . "' r='" . $bodyPart[2] . "'></circle>";
            }

            ?>
        </svg>
    </div>
</div>


</body>
</html>
