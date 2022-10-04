<?php
require_once 'TaskServise.php';
class Comment {
    private string $auther;
    private string $Task;
    private string $Text;
    private TaskServise $

    /**
     * @return string
     */
    public function getAuther()
    {
        return $this->auther;
    }

    /**
     * @param string $auther
     */
    public function setAuther($auther):self
    {
        $this->auther = $auther;
        return $this;
    }

    /**
     * @return string
     */
    public function getTask()
    {
        return $this->Task;
    }

    /**
     * @param string $Task
     */
    public function setTask($Task):self
    {
        $this->Task = $Task;
        return $this;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->Text;
    }

    /**
     * @param string $Text
     */
    public function setText($Text):self
    {
        $this->Text = $Text;
        return $this;
    }

}
?>