<?php
class IndexPageManager extends WebDriverTestCase{

	protected $driver = null;
	
	public function __construct(Webdriver $driver)
	{
		$this->driver = $driver; 	
	}
	
	public function getElementText($id)
	{
		return $this->driver->findElement(WebDriverBy::id($id))->getText();
	}
	
	public function getElementById($id)
	{
		return $this->driver->findElement(WebDriverBy::id($id))->getText();
	}
	
	public function getElementByClassName($className)
	{
		return $this->driver->findElement(WebDriverBy::className($className))->getText();
	}
	
	public function getElementByCssSelector($className)
	{
		return $this->driver->findElement(WebDriverBy::cssSelector($className))->getText();
	}
	
	public function getElementByLinkText($linkText)
	{
		return $this->driver->findElement(WebDriverBy::linkText($linkText))->getText();
	}
	
	public function getElementByName($name)
	{
		return $this->driver->findElement(WebDriverBy::name($name))->getAttribute('value');
	}
	
	public function getElementByXpath($name)
	{
		return $this->driver->findElement(WebDriverBy::xpath("//input[@name='" . $name . "']"))->getAttribute('value');
	}
}
?>