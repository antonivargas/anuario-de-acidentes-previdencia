<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
        <title>Anuário Estatístico de Acidentes de Trabalho - AEAT</title>
        <link rel="stylesheet" href="css/style.css" type="text/css">
		<link rel="stylesheet" type="text/css" href="css/tema.css" />
        <script src="scripts/amcharts.js" type="text/javascript"></script>
        <script src="scripts/pie.js" type="text/javascript"></script>
        
        <script type="text/javascript">
            var chart;
            var legend;

            var chartData = [
                {
                    "ano": "<?php echo'2009';?>",
                    "value": <?php echo $totalAno09;?>
                },
                {
                    "ano": "<?php echo'2008';?>",
                    "value": <?php echo $totalAno08;?>
                },
                {
                    "ano": "<?php echo'2007';?>",
                    "value": <?php echo $totalAno07;?>
                },
                {
                    "ano": "<?php echo'2006';?>",
                    "value": <?php echo $totalAno06;?>
                },
                {
                    "ano": "<?php echo'2005';?>",
                    "value": <?php echo $totalAno05;?>
                }
            ];

            AmCharts.ready(function () {
                // PIE CHART
                chart = new AmCharts.AmPieChart();
                chart.dataProvider = chartData;
                chart.titleField = "ano";
                chart.valueField = "value";
                chart.outlineColor = "#FFFFFF";
                chart.outlineAlpha = 0.8;
                chart.outlineThickness = 2;
                chart.balloonText = "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>";
                // this makes the chart 3D
                chart.depth3D = 15;
                chart.angle = 30;

                // WRITE
                chart.write("chartdiv");
            });
        </script>
    </head>
    
    <body>
		<div class="container">
			<!-- Topo sites de dados do Governo -->
			<div class="codrops-top">
					<a href="http://dados.gov.br/dataset/anuario-estatistico-de-acidentes-de-trabalho">
						<strong>&laquo; Anuário Estatístico de Acidentes de Trabalho - AEAT</strong>
					</a>
					<span class="right">
						<a href="http://www.mpas.gov.br/">
							<strong>Ministério da Previdência Social</strong>
						</a>
					</span>
					<div class="clr"></div>
			</div>
			<header>
                <h1>Anuário Estatístico de Acidêntes de Trabalho da Previdência Social</span></h1>
            </header>