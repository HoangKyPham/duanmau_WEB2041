
<h1 id="chart" style="width: 800px; height: 400px;">
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        // var data = google.visualization.arrayToDataTable([
        //   ['Task', 'Hours per Day'],
        //   ['Rolex',     11],
        //   ['Patek Philippe',      2],
        //   ['Richard Mile',  2],
        //   ['Omega', 2],
        //   ['Jacob & Co',    7]
        // ]);
        var data = google.visualization.arrayToDataTable([
          ['Categories', 'number'],
          <?php 
              foreach ($list_statistical as $value) {
                extract($value);
                echo"['$cate_name',    $soluong ],";
              }
            ?>
        ]);

        var options = {
          title: 'Tỉ lệ sản phẩm giữa các danh mục',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('chart'));
        chart.draw(data, options);
      }
    </script>
</h1>


