<?php
namespace App\Test\TestCase\Form;

use App\Form\CatForm;
use Cake\TestSuite\TestCase;

/**
 * App\Form\CatForm Test Case
 */
class CatFormTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Form\CatForm
     */
    public $Cat;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->Cat = new CatForm();
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Cat);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
