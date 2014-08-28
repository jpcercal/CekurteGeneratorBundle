<?php

namespace Cekurte\GeneratorBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Import table from database type.
 *
 * @author João Paulo Cercal <sistemas@cekurte.com>
 * @version 0.1
 */
class FormImportTableFromDatabaseType extends AbstractType
{
    /**
     * {@inheritdoc}
     *
     * @author João Paulo Cercal <sistemas@cekurte.com>
     * @version 0.1
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('mappingType', 'choice', array(
                'choices'   => array(
                    'Annotation'    => 'Annotation',
                    'XML'           => 'XML',
                    'YML'           => 'YML',
                ),
            ))
            ->add('bundle', 'choice', array(
                'choices'   => $options['registeredBundles'],
            ))
        ;
    }

    /**
     * {@inheritdoc}
     *
     * @author João Paulo Cercal <sistemas@cekurte.com>
     * @version 0.1
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'registeredBundles' => array(),
        ));
    }

    /**
     * {@inheritdoc}
     *
     * @author João Paulo Cercal <sistemas@cekurte.com>
     * @version 0.1
     */
    public function getName()
    {
        return 'cekurte_generatorbundle_import_table_from_database';
    }
}
