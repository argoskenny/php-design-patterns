<?php
class ArticalContext
{
    private $articalState;

    private $statusTag;
    private $titleDisable;
    private $contentDisable;
    private $editButtonDisable;
    private $completeButtonDisable;
    private $publishButtonDisable;

    public function __construct($state) {
        switch ($state) {
            case 'edit':
            $this->articalState = new EditState($this);
                break;
            case 'complete':
            $this->articalState = new CompleteState($this);
                break;
            case 'publish':
            $this->articalState = new PublishState($this);
                break;
            default:
            $this->articalState = new EditState($this);
                break;
        }
    }

    public function setStatusTag($tag) {
        $this->statusTag = $tag;
    }

    public function setDisable($title, $content, $editButton, $completeButton, $publishButton) {
        $this->titleDisable = $title;
        $this->contentDisable = $content;
        $this->editButtonDisable = $editButton;
        $this->completeButtonDisable = $completeButton;
        $this->publishButtonDisable = $publishButton;
    }

    public function getStatusTag() {
        echo $this->statusTag;
    }

    public function getTitleDisable() {
        echo $this->titleDisable;
    }

    public function getContentDisable() {
        echo $this->contentDisable;
    }

    public function getEditButtonDisable() {
        echo $this->editButtonDisable;
    }

    public function getCompleteButtonDisable() {
        echo $this->completeButtonDisable;
    }

    public function getPublishButtonDisable() {
        echo $this->publishButtonDisable;
    }
}