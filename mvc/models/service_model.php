<?php

class Service_Model extends Model
{
	public function __construct()
	{
        parent::__construct();
	}

	public function serviceCardList()
	{
			$query = $this->database->query("SELECT * FROM service_card");
			return $query;	
    }

    public function serviceList()
	{
		// $query = $this->database->query("SELECT * FROM services");
		$query = $this->database->query("SELECT *,services.name as service_name, services.description as service_description FROM services, service_card WHERE services.ID_service_card=service_card.IDservice_card
		");
		
		return $query;				
	}
	
	public function serviceList2($id)
	{
		$query = $this->database->query("SELECT * FROM services where IDservice='".$id."'");
		$user = mysqli_fetch_array($query);
		return $user;			
	}
	
	public function reservationSaveEnd($data)
	{

		$now = new DateTime();
		echo $now->format('Y-m-d H:i:s'); 

		$ID_user = $data['ID_user'];
		$ID_service = $data['ID_service'];
		$amount =  $data['amount'];
		$type_ticket_by_name = $data['type_ticket_by_name'];
		$price = $data['price'];
		$spot_free = $data['spot_free'] - $amount;

		if ($spot_free>-1){
			try
			{
				$this->database->beginTransaction2();
				$query1 = $this->database->query("UPDATE `services` SET `spot_free` = '".$spot_free."' WHERE `services`.`IDservice` = '".$data['ID_service']."';");	
				$query = $this->database->query("INSERT INTO `reservation` (`IDreservation`, `type`, `price`, `amount`, `date`, `ID_user2`, `ID_service`) VALUES (NULL, '".$type_ticket_by_name."', '".$price."', '".$amount."', '".$now->format('Y-m-d H:i:s')."', '".$ID_user."', '".$ID_service."');");
				$this->database->commit2();
			} catch (Exception $e){
				$this->databse->rollback2();
			}	
		}
	}



}