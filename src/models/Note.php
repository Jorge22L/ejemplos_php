<?php

namespace Notas\EjemplosPhp\models;

use Notas\EjemplosPhp\lib\Database;
class Note extends Database{

    private string $uuid;
    private string $title;
    private string $content;
    public function __construct(private string $title, private string $content)
    {
        parent::__construct();
        $this->uuid = uniqid();
    }

    public static function createFromArray($arr):Note{
        $note = new Note($arr['title'], $arr['content']);
        $note->setUUID($arr['uudi']);
        return $note;
    }


    public function update(){
        $query = $this->connect()->prepare('UPDATE notes set title = :title, content= :content, updated = NOW() WHERE uuid = :uuid');
        $query->execute(['title' => $this->title, 'uuid'=>$this->uuid,'content'=>$this->content]);
    }

    public static function getNote($uuid){
        $db = new Database();
        $query = $db->connect()->prepare("SELECT * from notes where uuid = :uuid");
        $query->execute(['uuid'=>$uuid]);

        $note = Note::createFromArray($query->fetch(PDO::FETCH_ASSOC));
        return $note;
    }

    
    public function save () 
    {
        $query = $this->connect()->prepare("Insert into notes (uuid, title, content, updated) values (:uuid, :title, :content, NOW())");
        $query->execute(['title'=>$this->title, 'uuid'=>$this->uuid, 'content'=>$this->content]);

    }

    public function getUUID(){
        return $this->uuid;
    }
    public function setUUID($value){
        $this->uuid = $value;
    }

    public function getTitle(){
        return $this->title;
    }

    public function setTitle($value){
        $this->title = $value;
    }

    public function getContent(){
        return $this->content;
    }

    public function setContent($value){
        $this->content = $value;
    }
}