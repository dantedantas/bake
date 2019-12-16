<?php
declare(strict_types=1);

/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.1.0
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace BakeTest\Shell\Task;

use Bake\Shell\Task\BakeTask;

/**
 * Test stub for BakeShell.
 */
class ZergTask extends BakeTask
{
    public function main(): void
    {
        $this->out('Zerg generated.');
        $this->verbose('Loud noises');
    }
}
