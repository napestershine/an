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
        return $this->render('genus/show.html.twig', [
            'name' => $genusName
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
                'avatarUri' => '/images/leanna.jpg',
                'note' => 'Octopus asked me a riddle, outsmarted me',
                'date' => 'Dec. 10, 2016'
            ],
            [
                'id' => 2,
                'username' => 'Shine',
                'avatarUri' => '/images/ryan.jpg',
                'note' => 'I counted 8 legs... as they wrapped around me',
                'date' => 'Dec. 1, 2016'
            ],
            [
                'id' => 3,
                'username' => 'Shine',
                'avatarUri' => '/images/leanna.jpg',
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
