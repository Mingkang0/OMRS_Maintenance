<?php


class StaffManageMarriageRequestController
{
    private $module2Repository;
    
    public function __construct($module2Repository)
    {
        $this->module2Repository = $module2Repository;
    }
    public function searchPartner($icNum)
    {
        $partnerData = $this->module2Repository->searchPartner($icNum);

        return $partnerData;

    }
    
}

?>