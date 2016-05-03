<?php
namespace AppBundle\Form;


use AppBundle\Entity\EntityForFormA;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;



class FormAType extends AbstractType{

  public function buildForm(FormBuilderInterface $builder, array $options)
  {

	$builder
	->add('field1',EmailType::class, array('label'=>'Form A Field 1'))
	->add('submit',SubmitType::class,array('label'=>'Submit From A'));

  }

  public function setDefaultOptions(OptionsResolverInterface $resolver)
  {
    $resolver->setDefaults(array(
      'data_class' => 'AppBundle\Entity\EntityForFormA'

    ));
  }

  public function getName()
  {
    return 'form_a';
  }	
}
?>