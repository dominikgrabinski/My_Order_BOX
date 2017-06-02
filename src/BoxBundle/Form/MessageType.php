<?php
namespace BoxBundle\Form;

//use Symfony\Component\Form\AbstractType;
//use Symfony\Component\Form\FormBuilderInterface;
//use Symfony\Component\Form\Extension\Core\Type\TextType;
//use Symfony\Bridge\Doctrine\Form\Type\EntityType;
//
//class MessageType extends AbstractType {
//
//    public function buildForm(FormBuilderInterface $builder, array $options) {
//        $builder->add('recipient', EntityType::class,[
//                    'class' => 'BoxBundle\Entity\User',
//                    'choice_label' => 'username']);
//    }
//
//    public function getParent() {
//        return 'FOS\MessageBundle\FormType\NewThreadMessageFormType';
//        //return 'fos_user_registration_register';
//        // Or for Symfony < 2.8
//        // return 'fos_user_profile_edit';
//    }
//
//    public function getBlockPrefix() {
//        return 'fos_message_sent';
//    }
//
//    // For Symfony 2.x
//    public function getName(){
//        return $this->getBlockPrefix();
//    }
//    
////    public function getPhone(){
////        return $this->getBlockPrefix();
////    }
//}
