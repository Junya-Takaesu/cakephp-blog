<?php
namespace App\model\Entity;
use Cake\ORM\Entity;
class Article extends Entity
{
    protected $_accessible = [
        "*" => true,
        "id" => false,
        "slug" => false
    ];
}