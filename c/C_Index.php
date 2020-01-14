<?php
//
// Конттроллер страниц.
//

class C_Index extends C_Base
{
    protected $comments;
    
	// Конструктор.
	public function __construct(){
		parent::__construct();
	}
	
	public function before(){
		parent::before();
	}
	
	public function action_index(){
        $this->set_variables();
		$this->content = $this->Template('v/v_index.php', array('comments' => $this->comments));	
	}
    
    private function set_variables(){
        ob_start();
            $com_result = $this->msql->Select("SELECT name, mail, comment FROM comments");
            foreach ($com_result as $com_value){
                $com_name = $com_value['name'];
                $com_mail = $com_value['mail'];
                $com_text = $com_value['comment'];
                require('v/v_comment.php');
            }
        $this->comments = ob_get_clean();        
    }
}
