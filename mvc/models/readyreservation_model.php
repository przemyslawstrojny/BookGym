<?php

class Readyreservation_Model extends Model
{
	public function __construct()
	{
        parent::__construct();
	}

	public function readyReservationList($role)
	{
		$query = $this->database->query("SELECT reservation.date, reservation.ID_user2, services.name, reservation.type, reservation.amount, reservation.price, service_card.name as company_name FROM `reservation`, `services` , `service_card` WHERE reservation.ID_service=services.IDservice and services.ID_service_card=service_card.IDservice_card and reservation.ID_user2='".$role."'	;");
		return $query;				
    }
  
    

}