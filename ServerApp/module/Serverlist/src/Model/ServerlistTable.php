<?php 
namespace Serverlist\Model;

use Zend\Db\TableGateway\TableGatewayInterface;


class ServerlistTable 
{
	protected $tableGateway;

	function __construct(TableGatewayInterface $tableGateway)
	{
		$this->tableGateway = $tableGateway;
	}

	public function fetchAll(){
		return $this->tableGateway->select();
	}
}

 ?>