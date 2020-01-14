<?php
//
// Базовый контроллер сайта.
//
abstract class C_Base extends C_Controller
{
	protected $title;		// заголовок страницы
	protected $content;		// содержание страницы
    protected $msql;        // объект БД

	// Конструктор.
	function __construct()
	{	
        $this->msql = M_MSQL::Instance();
	}
    
	protected function before()
	{	
        $this->post_method_handler();
		$this->title = 'HHTest';
		$this->content = '';
        $this->welcome = '';
	}
	
	//
	// Генерация базового шаблона
	//	
	public function render()
	{
		$vars = array('title' => $this->title, 'content' => $this->content);
		$page = $this->Template('v/v_main.php', $vars);				
		echo $page;
	}
    
    // Обработчик данных, пришедших в POST-запросе от script.js
    private function post_method_handler(){
        if($this->isPost())
		{
            print_r($_POST);
            if($_POST['add_name']){
                echo('Hi-hi');
                $new_com = array();
                $new_com['name'] = $_POST['add_name'];
                $new_com['mail'] = $_POST['add_email'];
                $new_com['comment'] = $_POST['add_comment'];
                $this->msql->Insert('comments', $new_com);
            }
		}
    }
}
