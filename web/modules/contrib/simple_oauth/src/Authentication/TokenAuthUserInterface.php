<?php

namespace Drupal\simple_oauth\Authentication;

use Drupal\consumers\Entity\ConsumerInterface;
use Drupal\user\UserInterface;

/**
 * @internal
 */
interface TokenAuthUserInterface extends \IteratorAggregate, UserInterface {

  /**
   * Get the token.
   *
   * @return \Drupal\simple_oauth\Entity\Oauth2TokenInterface
   *   The provided OAuth2 token.
   */
  public function getToken();

  /**
   * Get the activated consumer.
   *
   * @return \Drupal\consumers\Entity\ConsumerInterface
   *   The activated consumer after authentication.
   */
  public function getConsumer(): ConsumerInterface;

}
