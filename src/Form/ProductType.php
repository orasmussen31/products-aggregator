<?php

namespace App\Form;

use App\Entity\Product;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class product entity form
 */
class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('description')
            ->add('price')
            ->add('image')
            ->add('category')
            ->add('color')
            ->add('weight')
            ->add('status')
            ->add('platform', ChoiceType::class, [
                'choices' => [
                    'SHOPIFY' => 'SHOPIFY',
                    'WOOCOMMERCE' => 'WOOCOMMERCE',
                    'MAGENTO' => 'MAGENTO',
                    'PRESTASHOP' => 'PRESTASHOP',
                    'BIGCOMMERCE' => 'BIGCOMMERCE',
                    'OPENCART' => 'OPENCART',
                    'SQUARESPACE' => 'SQUARESPACE',
                    'WIX' => 'WIX',
                    'ECWID' => 'ECWID',
                    'CUSTOM' => 'CUSTOM',
                ],
                'expanded' => false,
                'multiple' => false,
                'placeholder' => 'Select a platform',
                'required' => false,
            ])
            ->add('siteName', ChoiceType::class, [
                'choices' => [
                    'aronhardware.com' => 'aronhardware.com',
                    'fishinghookshop.com' => 'fishinghookshop.com',
                    'glowcurrent.com' => 'glowcurrent.com',
                    'truckersdieselparts.com' => 'truckersdieselparts.com',
                    'onsitetoolshop.com' => 'onsitetoolshop.com',
                ],
                'expanded' => false,
                'multiple' => false,
                'placeholder' => 'Select a platform',
                'required' => false,
            ]);

    }

    /**
     * @param OptionsResolver $resolver
     * @return void
     */
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}
