<?php
#############footer info##########
echo "<style> a {color:white;}</style>";
$footer=array("'http://start.mobilerepairtechs.com'>POS</a>",
              "'http://start.mobilerepairtechs.com'>POS</a>",
              "'http://www.cellphonerepair.com/gainesville-fl'>Website Front End</a>" ,
              "'https://www.cellphonerepair.com/gainesville-fl/login/' >Website Back End</a>",
              "'http://facebook.com/mobilerepairtechs'>Facebook</a>",
              "'./tasks.php'>Tasks</a>",
              "'http://mc.mobilerepairtechs.com'>Marketing Cards</a>",
              "'http://code.raymercedes.com/clist.php'>Craigslist Ad's</a>"

             );

sort($footer);


echo "<div style='height:20px;color:white;
      background-color:#222;bottom:0;text-align:center;
      width:100%;position:absolute;>";

echo "
        <table style='width:100%';color:white;>
           <tr style='align-text:center;width:100%;color:white;'>";


echo "<div style='color:white';>";


echo "| ";
foreach($footer as $footer) {
                                echo "<td style='text-decoration-color:white;'> <a target='_blank' href=$footer | </td>";   
                            }
echo "</div>";

echo "</div>";
?>