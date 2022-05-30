<?php

require_once __DIR__  . '/../../vendor/autoload.php';

use App\DoctorSurgeriesExample\Doctors\BonesDoctor;
use App\DoctorSurgeriesExample\Doctors\FamilyDoctor;
use App\DoctorSurgeriesExample\Doctors\LungSurgeon;

$familyDoctor = new FamilyDoctor();
echo $familyDoctor->performHearthSurgery();
echo $familyDoctor->performLungSurgery();

$lungSurgeon = new LungSurgeon();
echo $lungSurgeon->performHearthSurgery();

$faceSurgeon = new BonesDoctor();
echo $faceSurgeon->performLungSurgery();
echo $faceSurgeon->performPatientCheckup();
