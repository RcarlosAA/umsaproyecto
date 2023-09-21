<?php
$especialistas = $this->database
        ->getReference($this->tabla)
        ->orderByChild('nombres')
        ->equalTo($nombre)
        ->getValue();