<?php
// Autor: ismael <idiahig064@g.educaand.es>
// El nombre por defecto es Mundo

$nombre = isset($argv[1]) ? $argv[1] : "Mundo";
@print "Hola, {$nombre}\n";