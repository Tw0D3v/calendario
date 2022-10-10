<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 

  function calendario($mes,$anio){
 
    $calendario = "<table>";
      $arraSemanas= array('L','M','M','J','V','S','D');
 
    $calendario.= '<tr><td>'.implode('</td><td>',$arraSemanas).'</td></tr>';
    $diaSemana= date('w',mktime(0,0,0,$mes,1,$anio));
    $diaSemana = ($diaSemana > 0) ? $diaSemana-1 : $diaSemana;
    $diasMes = date('t',mktime(0,0,0,$mes,1,$anio));
    $numSemana = 1;
    $countDias = 0;
    $fechaD = array();
 
    $calendario.= "<tr>";
 
    for($x = 0; $x < $diaSemana; $x++){
      $calendario.= '<td> </td>';
        $numSemana++;
    }
        
 
    for($list_day = 1; $list_day <= $diasMes; $list_day++){
        $calendario.= '<td class="calendar-day">';
         
        $class="day-number ";
        if($diaSemana == 0 || $diaSemana == 6 ){
            $class.=" not-work ";
        }
         
       
            $calendario.= "<div class='{$class}'>".$list_day."</div>";
             
        $calendario.= '</td>';
        if($diaSemana == 6){
            $calendario.= '</tr>';
            if(($countDias+1) != $diasMes){
                $calendario.= '<tr class="calendar-row">';
            }
            $diaSemana = -1;
            $numSemana = 0;
          }
        $days_in_this_week++; $diaSemana++; $countDias++;
      }
 
    if($numSemana < 8){
        for($x = 1; $x <= (8 - $numSemana); $x++){
            $calendar.= '<td class="calendar-day-np"> </td>';
          }
}
 
    $calendario.= '</tr>';
    $calendario.= '</table>';
    return $calendario;
}
 
// Le pasamos el mes, el año y el idioma
echo calendario(2,2022);



    ?> 

    <!--
    This script places a badge on your repl's full-browser view back to your repl's cover
    page. Try various colors for the theme: dark, light, red, orange, yellow, lime, green,
    teal, blue, blurple, magenta, pink!
    -->
    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
  </body>
</html>