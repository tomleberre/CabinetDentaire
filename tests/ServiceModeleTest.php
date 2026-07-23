<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../app/modeles/ServiceModele.php';

class ServiceModeleTest extends TestCase {
    
    public function testGetTousLesServicesRetourneUnTableau() {
        $modele = new ServiceModele();
        $services = $modele->getTousLesServices();
        $this->assertIsArray($services);
    }

    public function testGetTousLesServicesNonVide() {
        $modele = new ServiceModele();
        $services = $modele->getTousLesServices();
        $this->assertNotEmpty($services);
    }
}