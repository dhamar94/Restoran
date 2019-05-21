  <script type="text/javascript">
   $(document).ready(function() {
  
    Highcharts.chart('grafik', {

        chart: {
            type: 'column'
        },
        xAxis: {
            categories: [
                <?php foreach($chart as $key){
                     echo "' ".date("F, Y",  strtotime($key->tanggal))." ',";
                } ?>
            ]
        },

        title: {
            text: 'Grafik Laporan Keuangan'
        },

        yAxis: [{
            className: 'highcharts-color-0',
            title: {
                text: ''
            }
        }, {
            className: 'highcharts-color-1',
            opposite: true,
            title: {
                text: ''
            }
        }],

        plotOptions: {
            column: {
                borderRadius: 1
            }
        },

        series: [{
            name: 'Pendapatan',
            data: [
                <?php 
                foreach($chart as $key){
                    echo  $key->sum.",";
                }
                ?>
            ]
        },]

    });
    });
</script>