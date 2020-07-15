<?php declare(strict_types=1);

namespace App\Blog\Model;

use Symfony\Component\Uid\Uuid;

class BlogId
{
    public Uuid $id;

    public function __construct(Uuid $id)
    {
        $this->id = $id;
    }
}