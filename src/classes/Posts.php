<?php

namespace app\classes;

use app\classes\db\Database;

class Posts
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function findAllPosts()
    {
        $this->db->query('SELECT * FROM posts ORDER BY created_at DESC');

        $results = $this->db->resultSet();

        return $results;
    }

    public function createNewPost($author, $body)
    {
        $this->db->query('INSERT INTO posts (author, body, created_at) VALUES (:author, :body, NOW())');
        $this->db->bind(':author', $author);
        $this->db->bind(':body', $body);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deletePost($id)
    {
        $this->db->query('DELETE FROM posts WHERE id = :id');
        $this->db->bind(':id', $id);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}

