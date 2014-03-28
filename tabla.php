<?php
    $listaPersona=array("Persona1" => array("Nombre" => "Juan",
                                            "Apellido" => "Scala",
                                            "Genero" => "Masculino",
                                            ),
                        "Persona2" => array("Nombre" => "Juana",
                                            "Apellido" => "Yan",
                                            "Genero" => "Femenino",
                                            ),
                        "Persona3" => array("Nombre" => "Pedro",
                                            "Apellido" => "Esquivel",
                                            "Genero" => "Masculino",
                                            )
            );
    echo "<table><tr><td>Nombre</td><td>Apellido</td><td>Genero</td></tr>"
    foreach($listaPersona as $Persona) {
        echo "<tr><td>{$Persona['Nombre']}</td><td>{$Persona['Apellido']}</td><td>{$Persona['Genero']}</td></tr>"
    }
    echo "</table>"
?>
