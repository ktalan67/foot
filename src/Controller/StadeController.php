<?php

namespace App\Controller;

use App\Entity\Stade;
use App\Form\StadeType;
use App\Repository\StadeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/stade")
 */
class StadeController extends AbstractController
{
    /**
     * @Route("/", name="stade_index", methods={"GET"})
     */
    public function index(StadeRepository $stadeRepository): Response
    {
        return $this->render('stade/index.html.twig', [
            'stades' => $stadeRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="stade_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $stade = new Stade();
        $form = $this->createForm(StadeType::class, $stade);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($stade);
            $entityManager->flush();

            return $this->redirectToRoute('stade_index');
        }

        return $this->render('stade/new.html.twig', [
            'stade' => $stade,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="stade_show", methods={"GET"})
     */
    public function show(Stade $stade): Response
    {
        return $this->render('stade/show.html.twig', [
            'stade' => $stade,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="stade_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Stade $stade): Response
    {
        $form = $this->createForm(StadeType::class, $stade);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('stade_index');
        }

        return $this->render('stade/edit.html.twig', [
            'stade' => $stade,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="stade_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Stade $stade): Response
    {
        if ($this->isCsrfTokenValid('delete'.$stade->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($stade);
            $entityManager->flush();
        }

        return $this->redirectToRoute('stade_index');
    }
}
