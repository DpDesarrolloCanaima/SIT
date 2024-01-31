<?php
require("config/conexionProvi.php");

$query = "SELECT id_tipo_de_dispositivo, COUNT(*) AS numero_de_repeticiones FROM datos_del_dispotivo GROUP BY id_tipo_de_dispositivo;";
$result = mysqli_query($mysqli, $query);

// Obtener los datos de la consulta
$data = [];
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = [
        "name" => $row["name"],
        "value" => $row["value"],
    ];
}
?>

// Convertir los datos a JSON
$json = json_encode($data);

// Enviar los datos JSON a la gráfica
echo $json;

<script>
// Bar Chart Example
var ctx = document.getElementById("myBarChart");
var myBarChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["Canaima 2", "Canaima 3", "Canaima 4", "Canaima 5"],
    datasets: [{
      label: "Revenue",
      backgroundColor: ['#52BE80', '#AF7AC5', '#F5B041', '#85929E'],
      hoverBackgroundColor: "#2e59d9",
      borderColor: "#4e73df",
      data: [20, 5, 300, 150],
    }],
  },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
      }
    },
    scales: {
      xAxes: [{
        time: {
          unit: 'month'
        },
        gridLines: {
          display: false,
          drawBorder: false
        },
        ticks: {
          maxTicksLimit: 6
        },
        maxBarThickness: 25,
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 800,
          maxTicksLimit: 5,
          padding: 10,
          // Include a dollar sign in the ticks
        },
        gridLines: {
          color: "rgb(234, 236, 244)",
          zeroLineColor: "rgb(234, 236, 244)",
          drawBorder: false,
          borderDash: [2],
          zeroLineBorderDash: [2]
        }
      }],
    },
    legend: {
      display: false
    },
    tooltips: {
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 14,
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
      callbacks: {
      }
    },
  }
});
</script>