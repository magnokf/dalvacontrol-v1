$(function() {
  $.ajax({
    url: "http://localhost/projeto/estatistica_chart.php",
    type: "GET",
    success: function(data) {
      chartData = data;
      var chartProperties = {
        caption: "Estatística CIEB 2019",
        xAxisName: "Solicitante",
        yAxisName: "Alunos",
        rotatevalues: "1",
        theme: "zune"
      };
      apiChart = new FusionCharts({
        type: "column2d",
        renderAt: "chart-container",
        width: "550",
        height: "350",
        dataFormat: "json",
        dataSource: {
          chart: chartProperties,
          data: chartData
        }
      });
      apiChart.render();
    }
  });
});