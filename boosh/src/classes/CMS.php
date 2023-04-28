<?php
class CMS
{
    protected $db = null; //referência ao objeto Database
    protected $books = null; //referência ao objeto Book

    public function __construct($dsn, $username, $password)
    {
        $this->db = new Database($dsn, $username, $password);
    }

    public function getBook()
    {
        if ($this->books === null) {
            $this->books = new Book($this->db);
        }
        return $this->books;
    }
}
?>