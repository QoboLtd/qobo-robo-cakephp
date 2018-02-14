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
 * $this->taskCakephpAdminAdd()
 * ->username('vasja')
 * ->password('pupkin')
 * ->email('vasja@pupkin.me')
 * ->run();
 *
 * ?>
 * ```
 */
class AdminAdd extends \Qobo\Robo\AbstractCmdTask
{
    /**
     * {@inheritdoc}
     */
    protected $data = [
        'cmd'   => './bin/cake users addSuperuser %%USERNAME%% %%PASSWORD%% %%EMAIL%%',
        'path'  => ['./'],
        'batch' => false,
        'username' => null,
        'password' => null,
        'email' => null
    ];

    /**
     * {@inheritdoc}
     */
    protected $requiredData = [
        'username',
        'password'
    ];

    /**
     * {@inheritdoc}
     */
    protected $tokenKeys = [
        ['username', '--username='],
        ['password', '--password='],
        ['email', '--email=']
    ];
}
