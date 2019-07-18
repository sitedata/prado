<?php


use Prado\Web\UI\ActiveControls\TActiveHiddenField;


/**
 * @package System.Web.UI.ActiveControls
 */
class TActiveHiddenFieldTest extends PHPUnit\Framework\TestCase {

  public function testSetValue() {
    $field = new TActiveHiddenField();
    $field->setValue('Test');
    $this->assertEquals('Test', $field->getValue());
  }
}
