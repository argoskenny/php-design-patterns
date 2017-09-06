<?php
abstract class ArticalState 
{
	public abstract function formateHTMLElements();
}

class EditState extends ArticalState
{
	private $context;
	
	public function __construct(ArticalContext $articalContext) 
	{
        $this->context = $articalContext;
        $this->formateHTMLElements();
	}

	public function formateHTMLElements() 
	{
        $this->context->setStatusTag('<span class="badge badge-warning">編輯中</span>');
        $this->context->setDisable("","","disabled","","disabled");
	}
}

class CompleteState extends ArticalState
{
	private $context;
	
	public function __construct(ArticalContext $articalContext) 
	{
        $this->context = $articalContext;
        $this->formateHTMLElements();
	}

	public function formateHTMLElements() 
	{
        $this->context->setStatusTag('<span class="badge badge-success">已完稿</span>');
        $this->context->setDisable("disabled","disabled","","disabled","");
	}
}

class PublishState extends ArticalState
{
	private $context;
	
	public function __construct(ArticalContext $articalContext) 
	{
        $this->context = $articalContext;
        $this->formateHTMLElements();
	}

	public function formateHTMLElements() 
	{
        $this->context->setStatusTag('<span class="badge badge-primary">已上架</span>');
        $this->context->setDisable("disabled","disabled","","disabled","disabled");
	}
}