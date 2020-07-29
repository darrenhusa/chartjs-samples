<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Fall 2020 Freshman Profile</title>
</head>
<body>
  <h1>1 - F1 Headcounts by FT/PT Status and Entry-types</h1>

  <h1>2 - FTFT F1 by Gender</h1>
  <canvas id="hbc-2" width="200" height="200"></canvas>
  <canvas id="pc-2" width="200" height="200"></canvas>

  <h1>3 - FTFT F1 by Ethnicity</h1>
  {{-- <canvas id="hbc-3" width="600" height="350"></canvas> --}}
  {{-- <canvas id="pc-3" width="800" height="450"></canvas> --}}

  <h1>4 - FTFT F1 by Religion</h1>
  {{-- <canvas id="hbc-4" width="600" height="350"></canvas> --}}
  {{-- <canvas id="pc-4" width="800" height="450"></canvas> --}}

  <h1>5 - FTFT F1 by Athletic Status</h1>
  {{-- <canvas id="hbc-5" width="600" height="350"></canvas> --}}
  {{-- <canvas id="pc-5" width="800" height="450"></canvas> --}}

  <h1>6 - FTFT F1 by Zero EFC Status</h1>
  {{-- <canvas id="hbc-6" width="600" height="350"></canvas> --}}
  {{-- <canvas id="pc-6" width="800" height="450"></canvas> --}}

  <h1>7 - FTFT F1 by Zero EFC Status</h1>
  {{-- <canvas id="hbc-7" width="600" height="350"></canvas> --}}
  {{-- <canvas id="pc-7" width="800" height="450"></canvas> --}}

  <h1>8</h1>
  <p>FTFT F1 by State of Primary Residence</p>
  <p>FTFT F1 Indiana Residents by County</p>
  <p>FTFT F1 Lake County Residents by City</p>

  <h1>9</h1>
  <p>Top Recruiting Sources for FTFT F1 Students</p>

  <script src="/js/app.js"></script>
  <script>
  // Horizontal Bar chart
new Chart(document.getElementById("hbc-2"), {
    type: 'horizontalBar',
    data: {
      labels: ["Female", "Male"],
      datasets: [
        {
          label: "XXXX",
          backgroundColor: ["blue", "red"],
          data: [78, 71]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'TITLE TEXT'
      }
    }
});

// Pie chart

new Chart(document.getElementById("pc-2"), {
    type: 'pie',
    data: {
      labels: ["Female", "Male"],
      datasets: [{
        label: "XXX",
        backgroundColor: ["blue", "red"],
        data: [52, 48]
      }]
    },
    options: {
      title: {
        display: true,
        text: 'TITLE'
      }
    }
});

  </script>
</body>
</html>
