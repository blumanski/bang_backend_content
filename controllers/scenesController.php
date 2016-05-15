<?php
/**
 * @author Oliver Blum <blumanski@gmail.com>
 * @date 2016-01-02
 *
 * Account -> System Controller
 * The controller handles system actions such as login. logout, password reset
 * 
 * 1. Forgot Password
 * 2. Login
 * 3. Logout
 * 4. ResetPassword
 */

Namespace Bang\Modules\Content;

Use Bang\Modules\Content\Models\Db,
	Bang\Modules\Content\Models\Scenes,
	Bang\Modules\Content\Models\Mail,
    Bang\Helper;

class scenesController extends \Bang\SuperController implements \Bang\ControllerInterface
{
	/**
	 * Modules DB Model
	 * @var object
	 */
	private $Data;
	
	/**
	 * View object
	 * @var object
	 */
	private $View;
	
	/**
	 * ErrorLog object
	 * @var object
	 */
	private $ErrorLog;
	
	/**
	 * Instance of Language object
	 * @var object
	 */
	private $Lang;
	
	/**
	 * Keeps the template overwrite folder path
	 * If a template is available in the template folder, it allows
	 * to load that template instead of the internal one.
	 * So, one can easily change templates from the template without touching
	 * the module code.
	 * @var string
	 */
	private $Overwrite;
	
	/**
	 * Instance of Mail object
	 * @var object
	 */
	private $Mail;
	
	/*
	 * Set up the class environment
	 * @param object $di
	 */
    public function __construct(\stdClass $di)
    {
        $this->path     		= dirname(dirname(__FILE__));
    	// assign class variables
    	$this->ErrorLog 		= $di->ErrorLog;
    	$this->View				= $di->View;
    	$this->Session          = $di->Session;
    	$this->Lang				= $di->View->Lang;
    	
    	// Get the current language loaded
    	$currentLang = $this->View->Lang->LangLoaded;
    	
    	$this->Overwrite = $this->getBackTplOverwrite();
    	
    	//$this->Books = new \Bang\Tools\Books();

    	// Add module language files to language array
    	$this->View->Lang->addLanguageFile($this->path.'/lang/'.$currentLang);
    	$this->View->addStyle($this->View->TemplatePath.'min/css/content.min.css', 0);
    	$this->View->addScript($this->View->TemplatePath.'min/js/content.js', 0);

    	// All of the methods in this class are login protected
    	$this->testPermisions();
    	
    	$this->Data		= new Db($di);
    	$this->Scenes 	= new Scenes($di);
    	$this->Mail	 	= new Mail($di);
    	$this->Data->setMailInstance($this->Mail);
    }
    
    /**
     * Index Action - dont want to have one here
     */
    public function indexAction() {
    	
    	$template = '';
    	
    	//$result = $this->Books->searchIsbnDbAusthor('a');
    	//$result = $this->Books->searchGoogleBooks('inauthor:Smith&maxResults=40&orderBy=relevance');
    	
    	if(file_exists($this->Overwrite.'dashboard'.DIRECTORY_SEPARATOR.'templates'.DIRECTORY_SEPARATOR.'index.php')) {
    		$template = $this->View->loadTemplate($this->Overwrite.'dashboard'.DIRECTORY_SEPARATOR.'templates'.DIRECTORY_SEPARATOR.'index.php');
    	} else {
    		$template  = $this->View->loadTemplate($this->path.DIRECTORY_SEPARATOR.'templates'.DIRECTORY_SEPARATOR.'index.php');
    	}
    	 
    	// main template
    	$this->View->setModuleTpl('content', $template);
    	
    }
    
    /**
     * Index Action - dont want to have one here
     */
    public function addSceneAction() {
    	 
    	$template = '';
    	 
    	//$result = $this->Books->searchIsbnDbAusthor('a');
    	//$result = $this->Books->searchGoogleBooks('inauthor:Smith&maxResults=40&orderBy=relevance');
    	 
    	if(file_exists($this->Overwrite.'dashboard'.DIRECTORY_SEPARATOR.'templates'.DIRECTORY_SEPARATOR.'scenes.php')) {
    		$template = $this->View->loadTemplate($this->Overwrite.'dashboard'.DIRECTORY_SEPARATOR.'templates'.DIRECTORY_SEPARATOR.'scenes.php');
    	} else {
    		$template  = $this->View->loadTemplate($this->path.DIRECTORY_SEPARATOR.'templates'.DIRECTORY_SEPARATOR.'scenes.php');
    	}
    
    	// main template
    	$this->View->setModuleTpl('content', $template);
    	 
    }

   
    /**
     * Permission test
     * 1. Test if user is logged in
     */
    public function testPermisions($login = false)
    {
    	// 1. if user is not logegd in, redirect to login with message
    	if($this->Session->loggedIn() === false) {
    		$this->Session->setError($this->Lang->get('application_notlogged_in'));
    		Helper::redirectTo('/account/index/login/');
    		exit;
    	}
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
