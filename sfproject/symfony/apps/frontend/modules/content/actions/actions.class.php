<?php
/**
 * content actions.
 *
 * @package    Blogmanagement
 * @subpackage content
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class contentActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */

    public function executeIndex()
    {
        $this->setTemplate('show');
    }

  public function executeShow()
  {
	$today = getdate();
	$this->hour = $today['hours'];
  }

}
