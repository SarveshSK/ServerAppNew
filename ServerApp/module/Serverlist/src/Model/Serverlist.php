<?php
namespace Serverlist\Model;


class Serverlist 
{
	protected $id;
	protected $model;
	protected $ram;
	protected $hdd;
	protected $location;
	protected $price;

	public function exchangeArray($data){
		$this->id = $data['id'];
		$this->model = $data['model'];
		$this->ram = $data['ram'];
		$this->hdd = $data['hdd'];
		$this->location = $data['location'];
		$this->price = $data['price'];
	}

	public function getId(){
		return $this->id;
	}

	public function getModel(){
		return $this->model;
	}

	public function getRam(){
		return $this->ram;
	}

	public function getHdd(){
		return $this->hdd;
	}

	public function getLocation(){
		return $this->location;
	}

	public function getPrice(){
		return $this->price;
	}
}