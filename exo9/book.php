<?php

// creation classe book et creation des getter / setter
class Book
{
    private $id;
    private $title;

    function __construct(int $id, string $title)
    {
        $this->id = $id;
        $this->title = $title;
    }

	public function getId() {
		return $this->id;
	}

	public function setId(int $id) {
		$this.$id = $id;
	}

	public function getTitle() {
		return $this->title;
	}

	public function setTitle(string $title) {
		$this->title = $title;
	}
}
