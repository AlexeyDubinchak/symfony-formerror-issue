<?php

namespace AppBundle\Form;

use AppBundle\Validator\Constraints\SomeConstraint;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NoExtraFieldsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('existing_field', TextType::class, [
                'required' => true
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'allow_extra_fields' => false,
            'csrf_protection' => false,
            'constraints' => [new SomeConstraint()]
        ]);
    }

    public function getBlockPrefix()
    {
        return null;
    }
}
