<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Form;

class QuestionController extends AbstractController
{
    /**
     * @Route("/homepage")
     */
    public function homepage()
    {
        return new Response('sdfdsgsfsdsdgs');
    }

    /**
     * @Route("/", name="feed" )
     */

    public function feed()
    {

        $em = $this->getDoctrine()->getManager();
        $form = $em->getRepository('App:Aplikim')
            ->findAll();

        return $this->render('feed.html.twig', ['forms' => $form, ]);
    }


    /**
     * @Route("/not_found" ,name="not_found")
     */
    public function notFound()
    {
        return  $response = $this->render('404.html.twig');

    }

    //    public function forwardView($feedID, $post)
//    {
//        $response = $this->forward('App\Controller\FormContorller::show', ['form' => $post, 'id' => $feedID, ]);
//        return $response;
//    }
}

