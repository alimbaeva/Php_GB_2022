<?php
class Task {
    private string $description;
    private string $dateCreated;
    private string $dateUpdate;
    private string $dateDone;
    private int $priority;
    private bool $isDone;

    private $user;

    public function __construct(
        string $user
    )
    {
        $this->user = $user;
    }

    public function markAsDone()
    {
        $this->dateUpdate = date('Y-m-d');
        $this->isDone = true;
//        return $this;
    }


    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description): self
    {
        $this->description = $description;
        $this->dateUpdate = date('Y-m-d');
        return $this;
    }


    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    public function setDateCreated($dateCreated): self
    {
        $this->dateCreated = $dateCreated;
        return $this;
    }

    public function getDateUpdate()
    {
        return $this->dateUpdate;
    }

    public function setDateUpdate($dateUpdate): self
    {
        $this->dateUpdate = $dateUpdate;
        return  $this;
    }

    public function getDateDone()
    {
        return $this->dateDone;
    }

    public function setDateDone($dateDone): self
    {
        $this->dateDone = $dateDone;
        return $this;
    }

    public function getPriority()
    {
        return $this->priority;
    }

    public function setPriority($priority): self
    {
        $this->priority = $priority;
        return $this;
    }

    public function isDone()
    {
        return $this->isDone;
    }

    public function setIsDone($isDone): self
    {
        $this->isDone = $isDone;
        return $this;
    }

    public function getUser()
    {
        return $this->user;
    }
}




?>