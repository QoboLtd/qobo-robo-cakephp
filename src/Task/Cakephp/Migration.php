<?php
/**
 * Copyright (c) Qobo Ltd. (https://www.qobo.biz)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Qobo Ltd. (https://www.qobo.biz)
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
namespace Qobo\Robo\Task\Cakephp;

use Robo\Result;

/**
 * Run CakePHP Migration
 *
 * ```php
 * <?php
 * $this->taskCakephpMigration()
 * ->connection('test')
 * ->plugin('somePlugin')
 * ->run();
 *
 * ?>
 * ```
 */
class Migration extends \Qobo\Robo\AbstractCmdTask
{
    /**
     * {@inheritdoc}
     */
    protected $data = [
        'cmd'   => './bin/cake migrations migrate %%PLUGIN%% %%CONNECTION%%',
        'path'  => ['./'],
        'batch' => false,
        'plugin' => null,
        'connection' => null
    ];

    /**
     * {@inheritdoc}
     */
    protected $tokenKeys = [
        ['plugin', '-p '],
        ['connection', '--connection=']
    ];
}
