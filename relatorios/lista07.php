<?php 

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
?>
<?php include("../includes/top_listas.php"); ?>
			<section class="main">
				<!-- Div que mostra a soma de acidentes no período apurados -->
				<div id="relatorio">
					<center><p><h3>Relatório de Acidêntes de Trabalho no Ano de 2007</h3></p></center>
							<table id="example" class="display" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>Cidade</th>
											<th>Quantidade S/ Categoria</th>
											<th>Categoria Típicos</th>
											<th>Categoria Trajeto</th>
											<th>Categoria Doença</th>
											<th>Total de Acidentes</th>
										</tr>
									</thead>
							 
									<tfoot>
										<tr>
											<th>Cidade</th>
											<th>Quantidade S/ Categoria</th>
											<th>Categoria Típicos</th>
											<th>Categoria Trajeto</th>
											<th>Categoria Doença</th>
											<th>Total de Acidentes</th>
										</tr>
									</tfoot>
									<tbody>																					
											<?php
													foreach($xml07 -> registro as $reg){
														echo "<tr>";
														echo "<td>". $municipio07 = utf8_decode($reg -> municipio)."</td>"; 
														// Quantidade sem Categoria
											     	    echo "<td>".$semcat07 = utf8_decode($reg ->quantidade-> sem_cat)."</td>";
														//Quantidades com categoria
														echo "<td>".$tipicos07 = utf8_decode($reg ->quantidade->com_cat-> tipicos)."</td>";   
														echo "<td>".$trajeto07 = utf8_decode($reg ->quantidade->com_cat-> trajeto)."</td>"; 
														echo "<td>".$doenca07 = utf8_decode($reg ->quantidade->com_cat->  doenca)."</td>";
														$totalCity07 = (($semcat07)+($tipicos07)+($trajeto07)+($doenca07));										 
   													    echo "<td>".$totalCity07."</td>"; 
														echo "</tr>";														   
													}
												?>							
											
								    </tbody>
							</table>
					
				</div>			
				
			</section>
<?php include("../includes/footer.php"); ?>
