<table>
<th> Cedula </th>
<th> Nombre </th>
<th> Direccion </th>
<th> Genero </th>
<th> Editar </th>
<th> Eliminar </th>
<?php

    $agenda = Agenda::instancia();

    $datos = $agenda->select();
    while($row = $datos->fetch_array()){
        echo '<tr>';
        echo '<td>',$row['Cedula'],'</td>';
        echo '<td>',$row['Nombre'],'</td>';
        echo '<td>',$row['Direccion'],'</td>';
        echo '<td>',$row['Genero'],'</td>';
        echo "<td><a href=\"index.php?accion=editar&&cedula=$row[Cedula]\">Editar</a></td>";
        echo "<td><a href=\"index.php?accion=eliminar&&cedula=$row[Cedula]\">Eliminar</a></td>";
        echo '</tr>';

    }

?>
</table>