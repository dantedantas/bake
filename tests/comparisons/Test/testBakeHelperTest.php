<?php
declare(strict_types=1);

namespace Bake\Test\App\Test\TestCase\View\Helper;

use Bake\Test\App\View\Helper\ExampleHelper;
use Cake\TestSuite\TestCase;
use Cake\View\View;

/**
 * Bake\Test\App\View\Helper\ExampleHelper Test Case
 */
class ExampleHelperTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \Bake\Test\App\View\Helper\ExampleHelper
     */
    protected $Example;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $view = new View();
        $this->Example = new ExampleHelper($view);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Example);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
