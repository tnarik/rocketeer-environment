<?php
namespace Tnarik\RocketeerEnvironment;

use Illuminate\Support\ServiceProvider;
use Rocketeer\Facades\Rocketeer;

/**
 * Register the Environment plugin with the Laravel framework and Rocketeer
 */
class RocketeerEnvironmentServiceProvider extends ServiceProvider {

  /**
   * Indicates if loading of the provider is deferred.
   *
   * @var bool
   */
  protected $defer = false;

  /**
   * Register classes
   *
   * @return void
   */
  public function register() {
  }

  /**
   * Boot the plugin
   *
   * @return void
   */
  public function boot() {
    Rocketeer::plugin('Tnarik\RocketeerEnvironment\RocketeerEnvironment');
  }

  /**
   * Get the services provided by the provider.
   *
   * @return array
   */
  public function provides() {
    return array();
  }

}
