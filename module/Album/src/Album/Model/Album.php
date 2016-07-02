<?php
/**
 * Created by IntelliJ IDEA.
 * User: tonyxu
 * Date: 2/07/2016
 * Time: 11:46 PM
 */

namespace Album\Model;


class Album
{
    public $id;
    public $artist;
    public $title;

    public function exchangeArray($data)
    {
        $this->id     = (!empty($data['id'])) ? $data['id'] : null;
        $this->artist = (!empty($data['artist'])) ? $data['artist'] : null;
        $this->title  = (!empty($data['title'])) ? $data['title'] : null;
    }
}