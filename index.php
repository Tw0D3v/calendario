<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 

  function calendario($mes,$anio){
 //echo  date("l", mktime(0, 0, 0, 10, 11, 2022));
    $calendario = "<table>";
    $arraSemanas= array('L','M','M','J','V','S','D');
    $calendario.= '<tr><td>'.implode('</td><td>',$arraSemanas).'</td></tr>';
    $diaSemana= date('w',mktime(0,0,0,$mes,1,$anio));
    $diaSemana = ($diaSemana > 0) ? $diaSemana-1 : $diaSemana;
    $diasMes = date('t',mktime(0,0,0,$mes,1,$anio));
    $numSemana = 1;
    $countDias = 0;
    
    for($i = 0; $i < $diaSemana; $i++){
      $calendario.= '<td> </td>';
        $numSemana++;
    }
        
    for($list_dia = 1; $list_dia <= $diasMes; $list_dia++){
        $calendario.= '<td>';
        $calendario.= "<div>".$list_dia."</div>";
        $calendario.= '</td>';
        if($diaSemana == 6){
            $calendario.= '</tr>';
            if(($countDias+1) != $diasMes){
                $calendario.= '<tr>';
            }
            $diaSemana = -1;
            $numSemana = 0;
          }
        $numSemana++; $diaSemana++; $countDias++;
      }
 
    if($numSemana < 8){
        for($x = 1; $x <= (8 - $numSemana); $x++){
            $calendar.= '<td> </td>';
          }
}
 
    $calendario.= '</tr>';
    $calendario.= '</table>';
    return $calendario;
}

echo calendario(7,2022);



    ?> 

    <!--
    This script places a badge on your repl's full-browser view back to your repl's cover
    page. Try various colors for the theme: dark, light, red, orange, yellow, lime, green,
    teal, blue, blurple, magenta, pink!
    -->
    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
  </body>
</html>