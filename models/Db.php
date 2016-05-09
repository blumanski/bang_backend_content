<?php
/**
 * @author Oliver Blum <blumanski@gmail.com>
 * @date 2016-01-02
 * 
 * Regarding validation, I try to get the validation as close as possible to the action
 * It is better that way as you look at it and you know exactley what validation is in place
 * and nothing can happen inbetwen.
 *  
 *
 * Menu Model database
 */

Namespace Bang\Modules\Content\Models;

Use \Bang\PdoWrapper, PDO, \Bang\Helper, Bang\Modules\Content\Models\Mail;

class Db extends \Bang\SuperModel
{
    /**
     * PDO
     * @var object
     */
    private $PDO;
    
    /**
     * ErrorLog object
     * @var object
     */
    private $ErrorLog;
    
    /**
     * Session instance
     * @var object
     */
    private $Session;
    
    /**
     * instance of language object
     * @var object
     */
    private $Lang;
    
    /**
     * Mail instance
     * @var object
     */
    private $Mail;
    
    /**
     * Contains an array with the current users data
     * @var array
     */
    private $User = array();
    
    /**
     * Set up the db model
     * @param object $di
     */
    public function __construct(\stdClass $di)
    {
        $this->PdoWrapper      	= $di->PdoWrapper;
        $this->ErrorLog 		= $di->ErrorLog;
        $this->Session	 		= $di->Session;
        $this->View				= $di->View;
        $this->Lang				= $di->View->Lang;
        
        $this->User				= $this->Session->getUser();
    }
    
    /**
     * Set mail instance
     * @param Bang\Modules\Account\Models $Mail
     */
    public function setMailInstance(\Bang\Modules\Content\Models\Mail $Mail)
    {
    	$this->Mail = $Mail;
    }
    
    /**
     * Must be in all classes
     * @return array
     */
    public function __debugInfo() {
    
    	$reflect	= new \ReflectionObject($this);
    	$varArray	= array();
    
    	foreach ($reflect->getProperties(\ReflectionProperty::IS_PUBLIC) as $prop) {
    		$propName = $prop->getName();
    		 
    		if($propName !== 'DI') {
    			//print '--> '.$propName.'<br />';
    			$varArray[$propName] = $this->$propName;
    		}
    	}
    
    	return $varArray;
    }
}