<?php declare(strict_types=1);

namespace App\Blog\Model;

use Symfony\Component\Uid\Uuid;

class BlogEntity
{
    private string $id;  // Eventually want this to be BlogId ore at least Identity
    public  string $slug;

    public function __construct(string $slug = '')
    {
        $this->id = (string) Uuid::v4();
        $this->slug = $slug !== '' ? $slug: $this->id;
    }
    public function getId() : BlogId
    {
        return new BlogId(Uuid::fromString($this->id));
    }
    public function __get($name)
    {
        switch ($name) {
            case 'id': // Works though PHPStorm does not care for it
                return new BlogId(Uuid::fromString($this->id));
        }
        return null;
    }
}