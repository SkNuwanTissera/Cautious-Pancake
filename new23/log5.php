<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['ghgbhgbg',     1],
          ['Eat',      2],
          ['Commute',  2],
          ['sdsds TV', 2],
          ['Sleep',    70]
        ]);
        
        var options = {
          title: 'My Daily Activities'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
      <button onclick="location.reload()">Reload</button>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>

