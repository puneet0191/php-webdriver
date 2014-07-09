<?php
// Copyright 2004-present Facebook. All Rights Reserved.
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.
require_once __DIR__ . '/../../Pages/IndexPageManager.php';
class BaseTest extends WebDriverTestCase {
  
  protected $pageObject = null;
   
  public function testGetTitle() {
    $this->driver->get($this->getTestPath('index.html'));
    self::assertEquals(
      'php-webdriver test page',
      $this->driver->getTitle()
    );
  }
  
  public function testGetText() {
    $this->driver->get($this->getTestPath('index.html'));
    $pageObject = new IndexPageManager($this->driver);
	self::assertEquals(
		'Welcome to the facebook/php-webdriver testing page.',
		$pageObject->getElementText('welcome')
    );
  }

  public function testGetById() {
    $this->driver->get($this->getTestPath('index.html'));
	$pageObject = new IndexPageManager($this->driver);
	self::assertEquals(
		'Test by ID',
		$pageObject->getElementById('id_test')
    );
  }

  public function testGetByClassName() {
    $this->driver->get($this->getTestPath('index.html'));
	$pageObject = new IndexPageManager($this->driver);
    self::assertEquals(
		'Test by Class',
		$pageObject->getElementByClassName('test_class')
    );
  }

  public function testGetByCssSelector() {
    $this->driver->get($this->getTestPath('index.html'));
	$pageObject = new IndexPageManager($this->driver);
    self::assertEquals(
		'Test by Class',
		$pageObject->getElementByCssSelector('.test_class')
    );
  }

  public function testGetByLinkText() {
    $this->driver->get($this->getTestPath('index.html'));
	$pageObject = new IndexPageManager($this->driver);
    self::assertEquals(
		'Click here',
		$pageObject->getElementByLinkText('Click here')
    );
  }

  public function testGetByName() {
    $this->driver->get($this->getTestPath('index.html'));
	$pageObject = new IndexPageManager($this->driver);
    self::assertEquals(
		'Test Value',
		$pageObject->getElementByName('test_name')
    );
  }

  public function testGetByXpath() {
    $this->driver->get($this->getTestPath('index.html'));
    $pageObject = new IndexPageManager($this->driver);
	self::assertEquals(
		'Test Value',
		$pageObject->getElementByXpath('test_name')
    );
  }
}