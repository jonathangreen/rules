<?php

/**
 * @file
 * Contains \Drupal\rules\RulesConditionInterface.
 */

namespace Drupal\rules;

use Drupal\Core\Condition\ConditionInterface;

/**
 * Extends the core ConditionInterface to provide a negate() method.
 */
interface RulesConditionInterface extends ConditionInterface {

  /**
   * Negates the result after evaluating this condition.
   *
   * @return \Drupal\rules\RulesConditionInterface
   *   The current condition object for chaining.
   */
  public function negate();

}
