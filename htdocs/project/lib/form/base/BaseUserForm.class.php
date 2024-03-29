<?php

/**
 * User form base class.
 *
 * @method User getObject() Returns the current form's model object
 *
 * @package    blank
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseUserForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                     => new sfWidgetFormInputHidden(),
      'email'                  => new sfWidgetFormInputText(),
      'contact_information_id' => new sfWidgetFormPropelChoice(array('model' => 'ContactInformation', 'add_empty' => true)),
      'salt'                   => new sfWidgetFormInputText(),
      'password'               => new sfWidgetFormInputText(),
      'password_reset_key'     => new sfWidgetFormInputText(),
      'active'                 => new sfWidgetFormInputCheckbox(),
      'created_at'             => new sfWidgetFormDateTime(),
      'updated_at'             => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                     => new sfValidatorPropelChoice(array('model' => 'User', 'column' => 'id', 'required' => false)),
      'email'                  => new sfValidatorString(array('max_length' => 128)),
      'contact_information_id' => new sfValidatorPropelChoice(array('model' => 'ContactInformation', 'column' => 'id', 'required' => false)),
      'salt'                   => new sfValidatorString(array('max_length' => 128)),
      'password'               => new sfValidatorString(array('max_length' => 128)),
      'password_reset_key'     => new sfValidatorString(array('max_length' => 16, 'required' => false)),
      'active'                 => new sfValidatorBoolean(),
      'created_at'             => new sfValidatorDateTime(array('required' => false)),
      'updated_at'             => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorAnd(array(
        new sfValidatorPropelUnique(array('model' => 'User', 'column' => array('password_reset_key'))),
        new sfValidatorPropelUnique(array('model' => 'User', 'column' => array('email'))),
      ))
    );

    $this->widgetSchema->setNameFormat('user[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'User';
  }


}
