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
 * Class TestTournament
 * @package lex/slim-starter
 */
class TestTournament
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
        /* Setup */
        $discs = [
            DiscFactory::create([
                'name' => 'Buzzz',
                'manufacturer' => 'Discraft',
                'stability' => '.5',
                'plastic' => 'Z'
            ]),
            DiscFactory::create([
                'name' => 'Boss',
                'manufacturer' => 'Innova',
                'stability' => '12,4,-1,3',
                'plastic' => 'Star'
            ]),
            DiscFactory::create([
                'name' => 'Judge',
                'manufacturer' => 'Dynamic Discs',
                'stability' => '2,4,0,1',
                'plastic' => 'Classic'
            ])
        ];

        $tournament = new Tournament(
            '3 Disc Challenge',
            new Course('Kaposia', 'Minneapolis, MN', 24),
            date_create('Saturday this week'),
            2,
            new Player('Rando', 'rando@example.com',45,'Minnesota', 56789, 911, 11300, 'Kaposia', null, null),
            [
                new Volunteer('John', 'johndoe@example.com',55,'Minnesota', 'spotter'),
                new Volunteer('Jane', 'janedoe@example.com',53,'Minnesota', 'spotter')
            ]
        );

        $results = [
            new Placement(
                new Player('Andrew', 'yoquierotacobell@example.com',43,'Minnesota', 39123, 930, 10098, 'Kaposia', null, $discs),
                $tournament,
                54
            ),
            new Placement(
                new Player('Joel', 'joelthetroll@example.com',44,'North Dakota', 46909, 926, 10099, 'Trollwood', null, $discs),
                $tournament,
                52
            ),
            new Placement(
                new Player('Craig', 'crackheadcraig@example.com',45,'North Dakota', 46910, 927, 10100, 'Lincoln Park', null, $discs),
                $tournament,
                56
            )
        ];

        /* Testing */
        usort($results, function (Placement $placement1, Placement $placement2) {
            return $placement1->getScore() > $placement2->getScore();
        });
        echo '<pre>';
        var_dump($results);

        return $response;
    }
}