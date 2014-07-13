<?php

namespace Eventos\ContactosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ContactoType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('vocativo')
            ->add('nombres')
            ->add('apellidos')
            ->add('organizacion')
            ->add('titulo1')
            ->add('titulo2')
            ->add('dir1')
            ->add('dir2')
            ->add('codigopostal')
            ->add('telefono')
            ->add('fax')
            ->add('movil')
            ->add('email')
            ->add('observaciones')
            ->add('fechadeactualizacion')
            ->add('impresion')
            ->add('horadeimpresion')
            ->add('enviadas')
            ->add('horadeenvio')
            ->add('numInvitados')
            ->add('numRespondidos')
            ->add('fechaderespuesta')
            ->add('via')
            ->add('contesto')
            ->add('ingresohora')
            ->add('ingreso')
            ->add('hora')
            ->add('codigo')
            ->add('categoria')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Eventos\ContactosBundle\Entity\Contacto'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'eventos_contactosbundle_contacto';
    }
}
