<?php
class CMS
{
    protected $db = null; //referência ao objeto Database
    protected $books = null; //referência ao objeto Book
    protected $genre = null; //referência ao objeto Genre

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

    public function getGenre()
    {
        if ($this->genre === null) {
            $this->genre = new Genre($this->db); 
        }
        return $this->genre;
    }
}
?>