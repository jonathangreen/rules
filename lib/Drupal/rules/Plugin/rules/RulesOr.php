<?php

/**
 * @file
 * Contains Drupal\rules\Plugin\rules\RulesOr.
 */

namespace Drupal\rules\Plugin\rules;

use Drupal\Core\Condition\ConditionInterface;

/**
 * Container for consitions and actions.
 *
 * @Rules(
 *   id = "rules_or",
 *   label = @Translation("A logical Or condition")
 * )
 */
class RulesOr implements ConditionInterface {

  /**
   * List of conditions that are evaluated.
   *
   * @var array
   */
  protected $conditions = array();

  /**
   * Add a condition.
   *
   * @param ConditionInterface2 $condition
   *   The condition object.
   *
   * @return \Drupal\rules\Plugin\Action\Rule
   *   The current rule object for chaining.
   */
  public function condition(ConditionInterface $condition) {
    $conditions[] = $condition;
    return $this;
  }

  public function buildForm(array $form, array &$form_state) {
    
  }

  public function evaluate() {

  }

  public function getFormId() {
    
  }

  public function isNegated() {

  }

  public function setExecutableManager(\Drupal\Core\Executable\ExecutableManagerInterface $executableManager) {
    
  }

  public function submitForm(array &$form, array &$form_state) {

  }

  public function summary() {
    
  }

  public function validateForm(array &$form, array &$form_state) {

  }

  public function execute() {

  }

}
