<?php
declare(strict_types=1);

namespace DGDB\Action;

use DGDB\Domain\Entity\Course;
use DGDB\Domain\Entity\Placement;
use DGDB\Domain\Entity\Player;
use DGDB\Domain\Entity\Tournament;
use DGDB\Domain\Entity\Volunteer;
use DGDB\Domain\Factory\DiscFactory;
use Psr\Container\ContainerInterface;
use Slim\Http\Request;
use Slim\Http\Response;

/**
 * Class HelloWorld
 * @package lex/slim-starter
 */
class HelloWorld
{
    /**
     * ContainerInterface
     *
     * @var ContainerInterface
     */
    protected ContainerInterface $container;

    /**
     * Constructor
     *
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container) {
        $this->container = $container;
    }

    /**
     * @param Request  $request
     * @param Response $response
     *
     * @return Response
     */
    public function __invoke(Request $request, Response $response): Response
    {
        echo 'Hello World!';
        return $response;
    }
}