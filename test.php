<?php
include "controller/pdo.php";
include "controller/thongke.php";
$allthongke = allthongke();

?>


<html>

<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Ngày', 'Doanh thu'],
                <?php

                $allthongke = allthongke();
                // var_dump($allthongke);die;
                foreach ($allthongke as $key => $tk) {
                    extract($tk); ?>['<?php echo $tk['ngay_dat'];?>', <?php echo $tk['doanh_thu'];?>],
                <?php } ?>


             
            ]);

            var options = {
                title: 'Doanh thu trong tháng',
                curveType: 'function',
                legend: {
                    position: 'bottom'
                }
            };

            var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

            chart.draw(data, options);
        }
    </script>
</head>

<body>
    <div id="curve_chart" style="width: 900px; height: 500px"></div>
</body>

</html>