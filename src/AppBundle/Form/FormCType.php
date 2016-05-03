<?php
namespace AppBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
  

class FormCType extends AbstractType{

  public function buildForm(FormBuilderInterface $builder, array $options)
  {
  	$builder
    ->add('FormA','AppBundle\Form\FormAType',array('data'=>$options['data']['entity_a']))
    ->add('FormB','AppBundle\Form\FormBType',array('data'=>$options['data']['entity_b']));
    $builder->get('FormA')->remove('submit');
    $builder->get('FormB')->remove('submit');
    $builder->add('submit',SubmitType::class,array('label'=>'Submit Form C'));
    
  }

  public function setDefaultOptions(OptionsResolverInterface $resolver)
  {
    $resolver->setDefaults(array(
      //'cascade_validation' => 'true',
      //'compound' => 'true'
    ));
  }

  public function getName()
  {
    return 'form_c';
  }	
}
?>