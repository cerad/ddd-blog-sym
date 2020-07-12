<?php declare(strict_types=1);

namespace App\Home\Index;

use App\Core\Action\ActionInterface;
use App\Core\Action\RenderTwigTrait;
use Symfony\Component\HttpFoundation\Response;

class HomeIndexAction implements ActionInterface
{
    use RenderTwigTrait;

    public function __invoke() : Response
    {
        return $this->render('@Home/Index/index.html.twig', [
            'controller_name' => get_class($this),
        ]);
    }
}