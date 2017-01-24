<?php 

$samkim = array('telefono' => '0958878888','pais'=> 'Ecuador','apellido' => 'Kim', 'edad' => 28);

echo $samkim ['telefono'] . '<br />';
echo $samkim ['pais'] . '<br />';
echo $samkim ['apellido'] . '<br />';
echo $samkim ['edad'] . '<br />';

$samkim['pais'] = 'Korea';
echo $samkim ['pais'] . '<br / >';
echo 'Sam Kim es de: ' . $samkim['pais']; 



 ?>