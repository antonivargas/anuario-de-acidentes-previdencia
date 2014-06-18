<?php 

//Ao final do programa aqui teremos o total de acidentes no período de 5 anos
$somaTodosAcidentes;

// Iniciando a leitura dos dados de 2009
$link1 = "http://api.dataprev.gov.br/previdencia/anuario/2009/acidentes-do-trabalho.xml"; 
$xml09 = simplexml_load_file($link1);

$municipio09 = array();
$semcat09 = array();
$tipicos09 = array();
$trajeto09 = array();
$doenca09 = array();
$totalCity09;
$totalAno09=0;

foreach($xml09 -> registro as $reg){
	 //echo "<strong>Municipio</strong> ". $municipio09 = utf8_decode($reg -> municipio)."<br />"; 
	 // Quantidade sem Categoria
	 $semcat09 = utf8_decode($reg ->quantidade-> sem_cat);
	 //Quantidades com categoria
	 $tipicos09 = utf8_decode($reg ->quantidade->com_cat-> tipicos);   
	 $trajeto09 = utf8_decode($reg ->quantidade->com_cat-> trajeto); 
	 $doenca09 = utf8_decode($reg ->quantidade->com_cat->  doenca);
	 @$totalCity09 = (($semcat09)+($tipicos09)+($trajeto09)+($doenca09));
	 $totalAno09 += @$totalCity09;
	 //echo "<strong>Quantidade Total:  </strong>".$total09."<br />"; 
   
}

// Iniciando a leitura dos dados de 2008
$link2 = "http://api.dataprev.gov.br/previdencia/anuario/2008/acidentes-do-trabalho.xml"; 
$xml08 = simplexml_load_file($link2);

$municipio08 = array();
$semcat08 = array();
$tipicos08 = array();
$trajeto08 = array();
$doenca08 = array();
$totalCity08;
$totalAno08=0;

foreach($xml08 -> registro as $reg){
	 //echo "<strong>Municipio</strong> ". $municipio08 = utf8_decode($reg -> municipio)."<br />"; 
	 // Quantidade sem Categoria
	 $semcat08 = utf8_decode($reg ->quantidade-> sem_cat);
	 //Quantidades com categoria
	 $tipicos08 = utf8_decode($reg ->quantidade->com_cat-> tipicos);   
	 $trajeto08 = utf8_decode($reg ->quantidade->com_cat-> trajeto); 
	 $doenca08 = utf8_decode($reg ->quantidade->com_cat->  doenca);
	 @$totalCity08 = (($semcat08)+($tipicos08)+($trajeto08)+($doenca08));
	 $totalAno08 += @$totalCity08;

	 //echo "<strong>Quantidade Total:  </strong>".$total08."<br />"; 
   
}


// Iniciando a leitura dos dados de 2007
$link3 = "http://api.dataprev.gov.br/previdencia/anuario/2007/acidentes-do-trabalho.xml"; 
$xml07 = simplexml_load_file($link3);

$municipio07 = array();
$semcat07 = array();
$tipicos07 = array();
$trajeto07 = array();
$doenca07 = array();
$totalCity07;
$totalAno07=0;

foreach($xml07 -> registro as $reg){
	 //echo "<strong>Municipio</strong> ". $municipio07 = utf8_decode($reg -> municipio)."<br />"; 
	 // Quantidade sem Categoria
	 $semcat07 = utf8_decode($reg ->quantidade-> sem_cat);
	 //Quantidades com categoria
	 $tipicos07 = utf8_decode($reg ->quantidade->com_cat-> tipicos);   
	 $trajeto07 = utf8_decode($reg ->quantidade->com_cat-> trajeto); 
	 $doenca07 = utf8_decode($reg ->quantidade->com_cat->  doenca);
	 @$totalCity07 = (($semcat07)+($tipicos07)+($trajeto07)+($doenca07));
	 $totalAno07 += @$totalCity07;

	 //echo "<strong>Quantidade Total:  </strong>".$total07."<br />"; 
   
}

// Iniciando a leitura dos dados de 2006
$link4 = "http://api.dataprev.gov.br/previdencia/anuario/2006/acidentes-do-trabalho.xml"; 
$xml06 = simplexml_load_file($link4);

$municipio06 = array();
$semcat06 = array();
$tipicos06 = array();
$trajeto06 = array();
$doenca06 = array();
$totalCity06;
$totalAno06=0;

foreach($xml06 -> registro as $reg){
	 //echo "<strong>Municipio</strong> ". $municipio06 = utf8_decode($reg -> municipio)."<br />"; 
	 // Quantidade sem Categoria
	 $semcat06 = utf8_decode($reg ->quantidade-> sem_cat);
	 //Quantidades com categoria
	 $tipicos06 = utf8_decode($reg ->quantidade->com_cat-> tipicos);   
	 $trajeto06 = utf8_decode($reg ->quantidade->com_cat-> trajeto); 
	 $doenca06 = utf8_decode($reg ->quantidade->com_cat->  doenca);
	 $totalCity06 = (($semcat06)+($tipicos06)+($trajeto06)+($doenca06));
	 $totalAno06 += $totalCity06;

	 //echo "<strong>Quantidade Total:  </strong>".$total06."<br />"; 
   
}

// Iniciando a leitura dos dados de 2005
$link5 = "http://api.dataprev.gov.br/previdencia/anuario/2005/acidentes-do-trabalho.xml"; 
$xml05 = simplexml_load_file($link5);

$municipio05 = array();
$semcat05 = array();
$tipicos05 = array();
$trajeto05 = array();
$doenca05 = array();
$totalCity05;
$totalAno05=0;

foreach($xml05 -> registro as $reg){
	 //echo "<strong>Municipio</strong> ". $municipio05 = utf8_decode($reg -> municipio)."<br />"; 
	 // Quantidade sem Categoria
	 $semcat05 = utf8_decode($reg ->quantidade-> sem_cat);
	 //Quantidades com categoria
	 $tipicos05 = utf8_decode($reg ->quantidade->com_cat-> tipicos);   
	 $trajeto05 = utf8_decode($reg ->quantidade->com_cat-> trajeto); 
	 $doenca05 = utf8_decode($reg ->quantidade->com_cat->  doenca);
	 $totalCity05 = (($semcat05)+($tipicos05)+($trajeto05)+($doenca05));
	 $totalAno05 += $totalCity05;

	 //echo "<strong>Quantidade Total:  </strong>".$total05."<br />"; 
   
}


//fazendo a soma dos totais anuais
$somaTodosAcidentes = ($totalAno09+$totalAno08+$totalAno07+$totalAno06+$totalAno05);
 
?>
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
			<section class="main">
				<!-- Div que mostra a soma de acidentes no período apurados -->
				<div id="soma"><center><p><h3>Total de Acidentes no Perído de 5 anos</h3><strong><?php echo $somaTodosAcidentes; ?></strong></p></center></div>
				<!-- Div que renderiza o gráfico -->
				<div id="chartdiv" style="width: 100%; height: 400px;"></div>
				<!-- Div relatório -->
				<div id="totais" style="width: 100%; height: 100px; text-align:center;">
				<?php
				
				echo "Quantidade Total Ano de 2009:  <strong>".$totalAno09."</strong> <a href='relatorios/lista09.php'>Listar Relatorio de dados por cidades</a><br />"; 
				echo "Quantidade Total Ano de 2008:  <strong>".$totalAno08."</strong> <a href='relatorios/lista08.php'>Listar Relatorio de dados por cidades</a><br />"; 
				echo "Quantidade Total Ano de 2007:  <strong>".$totalAno07."</strong> <a href='relatorios/lista07.php'>Listar Relatorio de dados por cidades</a><br />"; 
				echo "Quantidade Total Ano de 2006:  <strong>".$totalAno06."</strong> <a href='relatorios/lista06.php'>Listar Relatorio de dados por cidades</a><br />"; 
				echo "Quantidade Total Ano de 2005:  <strong>".$totalAno05."</strong> <a href='relatorios/lista05.php'>Listar Relatorio de dados por cidades</a><br />"; 
				
				?>
				</div>
			</section>
			<div class="codrops-top">
					<a href="http://ifc-camboriu.edu.br" target="blank">
						<strong>&laquo; Instituto Federal Catarinense - Campus Camboriú</strong>
					</a>
					<span class="right">
						<a href="http://dimiantoni.wordpress.com/" target="blank">
							<strong>Equipe do Projeto: Dimi Antoni Vargas e Nicolas Guerra</strong>
						</a>
					</span>
					<div class="clr"></div>
			</div>
		</div>
    </body>

</html>
