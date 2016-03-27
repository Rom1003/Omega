<?php

namespace CoursBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class coursType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $datenow=new \datetime();
        $yearsnow=date('Y');
        $builder
            ->add('modules',EntityType::class, array('class' => 'CoursBundle\Entity\Modules', 'choice_label' => 'nom',))
            ->add('intituleCours', 'text')
            ->add('introCours', 'textarea')
            ->add('datefCours', 'date', array('data' => $datenow, 'years' => range($yearsnow,$yearsnow+4)))
            ->add('affCours','checkbox', array('required' => false, 'data'=>true))
            ->add('imageFile','file', array('required' => false))
            ->add('Publier', 'submit');
    }

}




?>