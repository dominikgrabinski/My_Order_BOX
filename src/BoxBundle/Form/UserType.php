<?php
namespace BoxBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class UserType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('address', TextType::class, array('label' => 'Adres'))
                ->add('phone', TextType::class, array('label' => 'Numer telefonu'));
    }

    public function getParent() {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
        //return 'fos_user_registration_register';
        // Or for Symfony < 2.8
        // return 'fos_user_profile_edit';
    }

    public function getBlockPrefix() {
        return 'fos_user_registration_register';
    }

    // For Symfony 2.x
    public function getName(){
        return $this->getBlockPrefix();
    }
    
//    public function getPhone(){
//        return $this->getBlockPrefix();
//    }
}
