<?php

namespace App\Form;

use OpenAI\Client;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;


class CoverType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Votre Nom',
                'attr' => [
                    'placeholder' => 'Votre Nom',
                ],
            ])
            ->add('prenom', TextType::class, [
                'label' => 'Votre Prénom',
                'attr' => [
                    'placeholder' => 'Votre Prénom',
                ],
            ])
            ->add('diplome', TextareaType::class, [
                'label' => 'Votre Diplome',
                'attr' => [
                    'placeholder' => 'Votre Diplome',
                ],
            ])
            ->add('experience', NumberType::class, [
                'label' => 'Votre Expérience (en années)',
                'html5' => true,
                'attr' => [
                    'placeholder' => 'Année',
                    'min' => 0
                ],
            ])
            ->add('entreprise', TextType::class, [
                'label' => 'Votre Entreprise',
                'attr' => [
                    'placeholder' => 'Votre Entreprise',
                ],
            ])
            ->add('poste', TextType::class, [
                'label' => 'Votre Poste',
                'attr' => [
                    'placeholder' => 'Votre Poste',
                ],
            ])
            ->add('annonce', TextareaType::class, [
                'label' => 'Annonce Emploi Visée',
                'attr' => [
                    'placeholder' => 'Annonce Emploi Visée',
                ],
            ])
            ->add("submit", SubmitType::class, [
                "label" => "Générer une lettre de motivation",
                "attr" => [
                    "classe" => "btn btn-primary",
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([]);
    }
}
