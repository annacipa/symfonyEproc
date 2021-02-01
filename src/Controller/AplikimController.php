<?php

namespace App\Controller;

use App\Entity\Aplikim;
use App\Form\AplikimType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/aplikim")
 */
class AplikimController extends Controller
{
    /**
     * @Route("/", name="aplikim_index", methods={"GET"})
     */
    public function index(): Response
    {
        $aplikims = $this->getDoctrine()
            ->getRepository(Aplikim::class)
            ->findAll();

        return $this->render('aplikim/index.html.twig', [
            'aplikims' => $aplikims,
        ]);
    }

    /**
     * @Route("/new", name="aplikim_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $aplikim = new Aplikim();
        $form = $this->createForm(AplikimType::class, $aplikim);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($aplikim);
            $entityManager->flush();

            return $this->redirectToRoute('aplikim_index');
        }

        return $this->render('aplikim/new.html.twig', [
            'aplikim' => $aplikim,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="aplikim_show", methods={"GET"})
     */
    public function show(Aplikim $aplikim): Response
    {
        return $this->render('aplikim/show.html.twig', [
            'aplikim' => $aplikim,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="aplikim_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Aplikim $aplikim): Response
    {
        $form = $this->createForm(AplikimType::class, $aplikim);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('aplikim_index');
        }

        return $this->render('aplikim/edit.html.twig', [
            'aplikim' => $aplikim,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="aplikim_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Aplikim $aplikim): Response
    {
        if ($this->isCsrfTokenValid('delete'.$aplikim->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($aplikim);
            $entityManager->flush();
        }

        return $this->redirectToRoute('aplikim_index');
    }
}
