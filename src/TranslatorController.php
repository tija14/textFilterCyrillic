<?php


namespace Phpmvc\Comment;


class translatorController implements \Anax\DI\IInjectionAware
{
    use \Anax\DI\TInjectable;

	public $comments;
	public $comment;
	public $filter;
	
	
	public function initialize() 
    { 
        $this->comments = new \Phpmvc\Comment\Comment(); 
        $this->comments->setDI($this->di); 
		$this->filter = new \Anax\Content\CTextFilter();
		
    } 
	
	
    public function addAction()
    {
		
		$comment = [
			'text'   => $this->request->getPost('text')
			];
		
		foreach($comment as $com){
			$content = $this->filter->toRussian($com);
		}
		
		
        $this->views->add('comment/translator', [
            'output' => $content,
			
			 'title' => "Translate from latin to crylic",
            
        ]);
		
		
    }
	
	}