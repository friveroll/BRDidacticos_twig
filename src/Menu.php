<?php

/**
 * Created by PhpStorm.
 * User: felipillo
 * Date: 27/10/14
 * Time: 11:47 AM
 */

class Menu {
    private $link;
    private $icon;
    private $text;

    public function __construct($link, $icon, $text){
        $this->setLink($link);
        $this->setIcon($icon);
        $this->setText($text);
    }

    public function getLink(){
        return $this->link;
    }

    public function setLink($link){
        $this->link = $link;
    }

    public function getIcon(){
        return $this->icon;
    }

    public function setIcon($icon){
        $this->icon = $icon;
    }

    public function getText($text){
        return $this->text;
    }

    public function setText($text){
        $this->text = $text;
    }


} 