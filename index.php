<DOCTYPE html>
    <html lang="ru">

    <head>
        <meta charset="utf-8">
        <title></title>
    </head>

    <body>

        <body>
            <canvas id="circle" , height="1920px" , width="1080px"></canvas>
            </main>
            <footer>
                <div style="position: absolute; left: 0%;top:20%; width: 100%; height: 20%; color:black">
                </div>
                <script>
                function convertCSV2Array(data, delimiter = ' ') {

                    const rows = data.slice(data).split(delimiter);

                    return rows;
                }
                </script>


                <script>
                function circle(x, y) {
                    var canvas = document.getElementById('circle');
                    var obCanvas = canvas.getContext("2d");
                    obCanvas.beginPath();
                    obCanvas.arc(x, y, 1, 0, 2 * Math.PI, false);
                    obCanvas.fillStyle = 'red';
                    obCanvas.fill();
                    obCanvas.lineWidth = 1;
                    obCanvas.strokeStyle = 'red';
                    obCanvas.stroke();
                    console.log(x);
                }
                </script>


                <script type="text/javascript">
                <?php
                $filename_x = __DIR__ . '/x.txt';
                $array_x = file($filename_x);
                ?>

                <?php
                  $filename_y = __DIR__ . '/y.txt';
                $array_y = file($filename_y);
                ?>
                </script>


                <script type="text/javascript">
                const xarray = convertCSV2Array(csvFile);
                console.log(xarray)
                const yarray = convertCSV2Array(csvFileY);
                yarray.lenght = 2;
                </script>


                <?php
                    for ($i = 1; $i <= 3766; $i++) {
                        echo "<script type=\"text/javascript\">
                        circle($array_x[$i] + 1, $array_y[$i] + 1);
                        </script>
                        ";
                    }
                ?>
                </div>
                <div class="text" style="position: absolute; left: 1%;top:20%; width: 40%; height: 10%; color: white">
                    <?php ; ?> </div>
            </footer>
        </body>

    </html>