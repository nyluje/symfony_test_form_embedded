<?php
namespace AppBundle\Form;


use AppBundle\Entity\EntityForFormB;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;



class FormBType extends AbstractType{

  public function buildForm(FormBuilderInterface $builder, array $options)
  {

	$builder
	->add('field1',EmailType::class, array('label'=>'Form B Field 1'))
	->add('submit',SubmitType::class,array('label'=>'Submit From B'));

  }

  public function setDefaultOptions(OptionsResolverInterface $resolver)
  {
    $resolver->setDefaults(array(
      'data_class' => 'AppBundle\Entity\EntityForFormB'

    ));
  }

  public function getName()
  {
    return 'form_b';
  }	
}
?>