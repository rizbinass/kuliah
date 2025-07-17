<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomor 3</title>
</head>
<body>
    <script>
window.onload = function () {
var chart = new CanvasJS.Chart("chartContainer", {
    animationEnabled: true,
    theme: "light2",
    title:{
        text: ""
    },
  axisX:{
        minimum: null,
        maximum: 4,
    includeZero: false
    },
    axisY:{
    minimum: 0.050000,
        maximum: 0.065000,
        includeZero: false
    },
    data: [{        
        type: "line",
          indexLabelFontSize: 3,
        dataPoints: [   
            { x: 1 ,y: 0.061187 },
         { x: 2 ,y: 0.056539 },
            { x: 3 ,y: 0.061321 },
        ]
    }]
});
chart.render();
}
</script>
<div id="chartContainer" style="height: 500px; width: 40%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>