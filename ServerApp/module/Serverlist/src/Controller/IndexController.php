<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Serverlist\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{	
	protected $table;

	public function __construct($table)
    {
        $this->table = $table;
    }

    public function indexAction()
    {   
        $server_json_array = array();
        
    	$servers = $this->table->fetchAll();
    	/*foreach ($servers as $server){
            $servers_single_array = array('model'=>$server->getModel(), 'ram'=>$server->getRam(), 'hdd'=>$server->getHdd(), 'location'=>$server->getLocation(), 'price'=>$server->getPrice());

            //print_r($servers_single_array);
    		array_push($server_json_array, $servers_single_array);
    	}*/
        //exit();
         //echo print_r($server_json_array);
        $view = new ViewModel(array('message' => 'msg'));
        return $view;
    }
}
