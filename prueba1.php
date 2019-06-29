<?php
$response = "<tr>
            <td class=\"bgn\" colspan=\"1\">Padrones :</td>
            <td class=\"bg\" colspan=\"3\">
              <select name=\"select\">
		
	                       
                
                
                <option value=\"00\">Incorporado al Régimen de Agentes de Retención de IGV (R.S.037-2002) a partir del 01/06/2002</option>
                
                
                
                <option value=\"00\">Excluido del Régimen de Agentes de Percepción de IGV - Venta Interna a partir del 01/02/2016</option>
                
                

				<!-- JRR - 20/09/2010 - Se a�ade cambio de Igor -->
				
                
                
                
            </select>
            <div id=\"print\" style=\"display:none;\">
            	<table cellpadding=\"3\" cellspacing=\"2\" width=\"100%\" class=\"form-table\">
	";
preg_match_all('/<option value="(.*?)"\s*>(.*?)<\/option>/', $response, $matches, PREG_SET_ORDER);
foreach ($matches as $val) {
    echo $val[1].'-'.$val[2];
}
