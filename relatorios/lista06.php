<?php 

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
?>
<?php include("../includes/top_listas.php"); ?>
			<section class="main">
				<!-- Div que mostra a soma de acidentes no período apurados -->
				<div id="relatorio">
					<center><p><h3>Relatório de Acidêntes de Trabalho no Ano de 2006</h3></p></center>
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
													foreach($xml06 -> registro as $reg){
														echo "<tr>";
														echo "<td>". $municipio06 = utf8_decode($reg -> municipio)."</td>"; 
														// Quantidade sem Categoria
											     	    echo "<td>".$semcat06 = utf8_decode($reg ->quantidade-> sem_cat)."</td>";
														//Quantidades com categoria
														echo "<td>".$tipicos06 = utf8_decode($reg ->quantidade->com_cat-> tipicos)."</td>";   
														echo "<td>".$trajeto06 = utf8_decode($reg ->quantidade->com_cat-> trajeto)."</td>"; 
														echo "<td>".$doenca06 = utf8_decode($reg ->quantidade->com_cat->  doenca)."</td>";
														$totalCity06 = (($semcat06)+($tipicos06)+($trajeto06)+($doenca06));										 
   													    echo "<td>".$totalCity06."</td>"; 
														echo "</tr>";														   
													}
												?>							
											
								    </tbody>
							</table>
					
				</div>			
				
			</section>
<?php include("../includes/footer.php"); ?>

