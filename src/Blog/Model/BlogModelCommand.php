<?php declare(strict_types=1);

namespace App\Blog\Model;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class BlogModelCommand extends Command
{
    protected static $defaultName = 'blog:model';

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $blog = new BlogEntity();
        dump($blog);
        dump($blog->getId());
        dump($blog->id);

        return Command::SUCCESS;
    }
}