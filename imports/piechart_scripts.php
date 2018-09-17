<script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">

      // Load the Visualization API and the piechart package.
      google.load('visualization', '1.0', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Nationalities');
        data.addColumn('number', 'Players');
        data.addRows([
          ['China', 8],
          ['Japan', 7],
          ['Korea', 5],
          ['India', 5],
          ['Thailand', 5], 
          ['Indonesia', 4],
          ['Chinese Taipei', 3],
          ['Denmark', 3],
          ['Hong Kong', 3],
          ['France', 1],
          ['United States', 1],
          ['Scotland', 1],
          ['England', 1],
          ['Canada', 1],
          ['Malaysia', 1],
          ['Spain', 1]
        ]);

        // Set chart options
        var options = {'title':'Nationalities of Top 25 Badminton Single Players (Thu, 30 Nov, 00:00 am)',
                       'width':1000,
                       'height':800};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>