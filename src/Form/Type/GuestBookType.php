<?php

namespace App\Form\Type;

use App\Entity\GuestBookEntity;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GuestBookType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
            $builder->add('username',TextType::class,['empty_data'=>'']);
            $builder->add('email',EmailType::class,['required'=>false]);
            $builder->add('subtitle',TextType::class,['empty_data'=>'']);
            $builder->add('body',TextType::class,['empty_data'=>'']);
            $builder->add('submit',SubmitType::class); 
    }

    public function configureOptions(OptionsResolver $resolver)
    {
            $resolver->setDefaults
            ([
                'data_class'=>GuestBookEntity::class,
                'csrf_protection' => true,
            ]);
                    
    }
}