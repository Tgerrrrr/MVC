<?php
class PostModel extends Model {
    public function getAll() {
        $sql = 'SELECT * FROM post';
        return $this->mysqli->query($sql);
    }

    public function getById($id) {
        $sql = "SELECT * FROM post WHERE id = $id";
        return $this->mysqli->query($sql);
    }

    public function insert($title, $content) {
        $title = $this->mysqli->real_escape_string($title);
        $content = $this->mysqli->real_escape_string($content);
        $sql = "INSERT INTO post (title, content) VALUES ('$title', '$content')";
        return $this->mysqli->query($sql);
    }

    public function update($id, $title, $content) {
        $id = (int)$id;
        $title = $this->mysqli->real_escape_string($title);
        $content = $this->mysqli->real_escape_string($content);
        $sql = "UPDATE post SET title='$title', content='$content' WHERE id=$id";
        return $this->mysqli->query($sql);
    }

    public function delete($id) {
        $id = (int)$id;
        $sql = "DELETE FROM post WHERE id = $id";
        return $this->mysqli->query($sql);
    }
}