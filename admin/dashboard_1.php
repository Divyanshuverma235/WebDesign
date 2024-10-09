<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard Chart</title>
  <!-- Include Chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
  <style>
    /* Add your CSS styles for the dashboard here */
    /* For demonstration, let's style the chart container */
    body {
      font-family: Arial, sans-serif;
    }
    header {
    text-align: center;
    background-color: #0e0d0d21;
    color: #3e3b3b;
    padding: 10px 0;
}
    main {
      padding: 20px;
    }
    #chart-container {
      width: 80%;
      margin: 20px auto;
    }
    footer {
      text-align: center;
      background-color: #333;
      color: #fff;
      padding: 10px 0;
      position: fixed;
      bottom: 0;
      width: 100%;
    }
  </style>
</head>
<body>

  <?php
  //include('includes/header.php'); 

   //include 'includes/navbar.php' ?>
  <header>
    <h1>Admin Dashboard</h1>
  </header>

  <main>
    <h2>Courses Sales Chart</h2>
    <!-- Chart Container -->
    <div id="chart-container">
      <canvas id="myChart" aria-label="Hotel Sales Chart"></canvas>
    </div>
  </main>

  <script>
    // Sample data for the chart
    var data = {
      labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July','August', 'September', 'October','November','December'],
      datasets: [{
        label: 'Sales',
        data: [565, 959, 380, 781, 526, 525, 440, 243, 745, 80, 583, 654],
        backgroundColor: 'rgba(54, 162, 235, 0.2)',
        borderColor: 'rgba(54, 162, 235, 1)',
        borderWidth: 1
      }]
    };

    // Chart configuration
    var options = {
      responsive: true,
      maintainAspectRatio: false,
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    };

    // Get the chart canvas element
    var ctx = document.getElementById('myChart').getContext('2d');

    // Create the chart
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: data,
      options: options
    });
  </script>

</body>
</html>
<?php //include ('admin_graph.php'); ?>


