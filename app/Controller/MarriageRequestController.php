<?php

class MarriageCourseRequestController{

private $MarriageForm;


public function __construct($MarriageForm) {
    $this->MarriageForm = $MarriageForm;

  }
public function formReligiousInfo($office,$Venue,$Date,$Capacity,$Vacancy){

  $this->MarriageForm->FormDetail($office,$Venue,$Date,$Capacity,$Vacancy);

}
}
?>