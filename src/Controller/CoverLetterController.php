<?php

namespace App\Controller;

use OpenAI;
use App\Form\CoverType;
use App\Entity\CoverLetter;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CoverLetterController extends AbstractController
{
    /**
     * @Route("/cover-letter/new", name="cover_letter_new")
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $coverLetter = new CoverLetter();
        $form = $this->createForm(CoverType::class, $coverLetter);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $apiKey = $_ENV[''];
            $client = OpenAI::client($apiKey);


            $response = $client->chat()->create([
                'model' => 'gpt-4',
                'messages' => [
                    ['role' => 'user', 'content' => "Mon nom est {$data->getNom()} {$data->getPrenom()}."],
                    ['role' => 'user', 'content' => "Diplôme : {$data->getDiplome()}."],
                    ['role' => 'user', 'content' => "Entreprise Cible : {$data->getEntreprise()}."],
                    ['role' => 'user', 'content' => "Poste cible : {$data->getPoste()}."],
                    ['role' => 'user', 'content' => "Année d'Experience pour ce poste : {$data->getExeprience()}."],
                    ['role' => 'user', 'content' => "Annonce : {$data->getAnnonce()}."],
                    ['role' => 'user', 'content' => "Génère une lettre de motivation basée sur ces informations. Les compétences spécifiques, et pourquoi l'utilisateur est un bon candidat pour ce poste."],
                ],
            ]);

            $generatedText = $response['choices'][0]['message']['content'];

            // Sauvegarde et redirection, affichage, etc.
            $entityManager->persist($coverLetter);
            $entityManager->flush();

            return $this->render('cover_letter/generated.html.twig', [
                'generatedText' => $generatedText,
            ]);
        }

        return $this->render('cover_letter/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
