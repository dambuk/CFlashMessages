<?php
namespace dambuk\CFlashMessages;
/**
 * HTML Form elements.
 *
 */
class CFlashMessagesTest extends \PHPUnit_Framework_TestCase
{
public function testNewMessage() {
$el = new \dambuk\CFlashMessages\CFlashMessage();
        $el->addMessage('content', 'type');
        $res = $el->getFlashMessages();
        $exp = "<div class='type'><p>content</p></div>";
        $this->assertEquals($res, $exp, "Missmatch");
}
public function testShowMsg() {
 
$el = new \dambuk\CFlashMessages\CFlashMessage();
        $res = $el->getFlashMessages();
        $exp = null;
        $this->assertEquals($res, $exp, "Missmatch");
}
}
?>