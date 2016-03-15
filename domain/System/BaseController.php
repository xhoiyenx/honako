<?php
/**
 * HONAKO APPLICATION
 * By: Hoiyen
 * Ver: 0.0.1
 * Last Update: 15/03/2016
 *
 * Domain: 
 * System
 * 
 * Description:
 * Base controller for System Domain
 */

namespace Domain\System;
use Illuminate\Routing\Controller;

abstract class BaseController extends Controller
{
  
  public function __construct()
  {
    $this->init();
  }

  /**
   * Set framework settings for system domain
   * @return void
   */
  private function init()
  {
    # define default view path for manager
    view()->addLocation( public_path('system/view') );    
  }

  protected function variables()
  {

  }
}