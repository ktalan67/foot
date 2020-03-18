<?php

namespace App\Controller;

use App\Entity\Championship;
use App\Form\ChampionshipType;
use App\Repository\ChampionshipRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/championship")
 */
class ChampionshipController extends AbstractController
{
    /**
     * @Route("/", name="championship_index", methods={"GET"})
     */
    public function index(ChampionshipRepository $championshipRepository): Response
    {
        return $this->render('championship/index.html.twig', [
            'championships' => $championshipRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="championship_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $championship = new Championship();
        $form = $this->createForm(ChampionshipType::class, $championship);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($championship);
            $entityManager->flush();

            return $this->redirectToRoute('championship_index');
        }

        return $this->render('championship/new.html.twig', [
            'championship' => $championship,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="championship_show", methods={"GET"})
     */
    public function show(Championship $championship): Response
    {
        return $this->render('championship/show.html.twig', [
            'championship' => $championship,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="championship_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Championship $championship): Response
    {
        $form = $this->createForm(ChampionshipType::class, $championship);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('championship_index');
        }

        return $this->render('championship/edit.html.twig', [
            'championship' => $championship,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="championship_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Championship $championship): Response
    {
        if ($this->isCsrfTokenValid('delete'.$championship->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($championship);
            $entityManager->flush();
        }

        return $this->redirectToRoute('championship_index');
    }
}
