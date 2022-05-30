<?php

namespace App\DoctorSurgeriesExample\Doctors;

class DoctorBase
{
    /**
     * @return string
     */
    public function performSurgery(): string
    {
        return  $this->returnActionAsString(__FUNCTION__);
    }

    /**
     * @return string
     */
    public function performLungSurgery(): string
    {
        return  $this->returnActionAsString(__FUNCTION__);
    }

    /**
     * @return string
     */
    public function performHearthSurgery(): string
    {
        return  $this->returnActionAsString(__FUNCTION__);
    }

    /**
     * @return string
     */
    public function performPatientCheckup(): string
    {
        return  $this->returnActionAsString(__FUNCTION__);
    }

    /**
     * @return string
     */
    public function givePrescriptions(): string
    {
        return $this->returnActionAsString(__FUNCTION__);
    }

    /**
     * @param string $action
     * @return string
     */
    private function returnActionAsString(string $action): string
    {
        return $this->getDoctorType() .  ' -> ' . $action  . PHP_EOL;
    }

    /**
     * @return string
     */
    protected function getDoctorType(): string
    {
        $reflect = new \ReflectionClass($this);
        return $reflect->getShortName();
    }
}
