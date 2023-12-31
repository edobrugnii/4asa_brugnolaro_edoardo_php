<?php


$temperatura = $_POST['temperatura'];
$umidita = $_POST['umidita'];
$luce = $_POST['luce'];

$current_content = file_get_contents($file);
$new_content = $temperatura . ',' . $umidita . ',' . $luce . "\n";
file_put_contents($file, $current_content . $new_content);


$log_content = file_get_contents($file);
$lines = explode("\n", $log_content);

echo '<html>
<head>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<canvas id="grafico" width="800" height="400"></canvas>
<script>
var labels = [];
var temperaturaData = [];
var umiditaData = [];
var luceData = [];

';

foreach ($lines as $line) {
    $data = explode(',', $line);
    $temperatura = $data[0];
    $umidita = $data[1];
    $luce = $data[2];

    echo "labels.push('');";
    echo "temperaturaData.push($temperatura);";
    echo "umiditaData.push($umidita);";
    echo "luceData.push($luce);";
}

echo '

var ctx = document.getElementById("grafico").getContext("2d");
var myChart = new Chart(ctx, {
    type: "line",
    data: {
        labels: labels,
        datasets: [{
            label: "Temperatura",
            data: temperaturaData,
            borderColor: "orange",
            fill: false
        }, {
            label: "Umidità",
            data: umiditaData,
            borderColor: "black",
            fill: false
        }, {
            label: "Luce",
            data: luceData,
            borderColor: "yellow",
            fill: false
        }]
    }
});
</script>
</body>
</html>';