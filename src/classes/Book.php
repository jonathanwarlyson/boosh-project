<?php 

class Book 
{
    protected $db; //guarda a ref para o objeto do Database

    public function __construct(Database $db)
    {
        $this->db = $db; //armazena a ref para o objeto Database
    }

    function get(int $id)
    {
        $sql = "SELECT b.id, b.name, b.author, b.page, b.id_genre
                FROM book AS b
                WHERE b.id = :id ";
        return $this->db->runSql($sql, [$id])->fetch(); //retorna o livro
    }

    function getAll($genre = null, $name = null, $page = null, $author = null, $limit = 1000): array
    {
        $arguments['id_genre'] = $genre; //genre id
        $arguments['name'] = $name; //name id
        $arguments['page'] = $page; //page id
        $arguments['author'] = $author; //author id
        $arguments['limit'] = $limit; //máximo de livros a retornar

        $sql = "SELECT b.id, b.name, b.author, b.page, b.id_genre
                FROM book AS b
                WHERE b.id = :id ";
        $sql .= "ORDER BY b.id DESC LIMIT :limit;"; //adiciona o máximo de livros a retornar

        return $this->db->runSql($sql, $arguments)->fetchAll(); //retorna dados
}
}
?>