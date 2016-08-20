<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class GenusController extends Controller
{
    /**
     * @Route("/genus/{genusName}")
     */
    public function showAction($genusName)
    {

        $funFact = 'Octopuses can change the color of their body in just *three-tenths* of a second!';

        $funFact = $this->get('markdown.parser')->transform($funFact);


        return $this->render('genus/show.html.twig', [
            'name' => $genusName,
            'funFact' => $funFact
        ]);

    }

    /**
     * @Route("/genus/{genusName}/notes", name="genus_show_notes")
     * @Method("GET")
     */
    public function getNotesAction()
    {
        $notes = [
            [
                'id' => 1,
                'username' => 'Shine',
                'avatarUri' => '/images/leanna.jpeg',
                'note' => 'Octopus asked me a riddle, outsmarted me',
                'date' => 'Dec. 10, 2016'
            ],
            [
                'id' => 2,
                'username' => 'Shine',
                'avatarUri' => '/images/ryan.jpeg',
                'note' => 'I counted 8 legs... as they wrapped around me',
                'date' => 'Dec. 1, 2016'
            ],
            [
                'id' => 3,
                'username' => 'Shine',
                'avatarUri' => '/images/leanna.jpeg',
                'note' => 'Inked!',
                'date' => 'Aug. 20, 2016'
            ],

        ];

        $data = [
            'notes' => $notes
        ];

        return new JsonResponse($data);
    }
}
