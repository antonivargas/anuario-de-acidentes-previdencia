<?php 

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
?>
<?php include("../includes/top_listas.php"); ?>
			<section class="main">
				<!-- Div que mostra a soma de acidentes no período apurados -->
				<div id="relatorio">
					<center><p><h3>Relatório de Acidêntes de Trabalho no Ano de 2005</h3></p></center>
					
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
													foreach($xml05 -> registro as $reg){
														echo "<tr>";
														echo "<td>". $municipio05 = utf8_decode($reg -> municipio)."</td>"; 
														// Quantidade sem Categoria
											     	    echo "<td>".$semcat05 = utf8_decode($reg ->quantidade-> sem_cat)."</td>";
														//Quantidades com categoria
														echo "<td>".$tipicos05 = utf8_decode($reg ->quantidade->com_cat-> tipicos)."</td>";   
														echo "<td>".$trajeto05 = utf8_decode($reg ->quantidade->com_cat-> trajeto)."</td>"; 
														echo "<td>".$doenca05 = utf8_decode($reg ->quantidade->com_cat->  doenca)."</td>";
														$totalCity05 = (($semcat05)+($tipicos05)+($trajeto05)+($doenca05));										 
   													    echo "<td>".$totalCity05."</td>"; 
														echo "</tr>";														   
													}
												?>							
											
								    </tbody>
							</table>
					
				</div>			
				
			</section>
<?php include("../includes/footer.php"); ?>
