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
 * Clear CakePHP cache
 *
 * ```php
 * <?php
 * $this->taskCakephpCacheClear()
 * ->run();
 *
 * ?>
 * ```
 */
class CacheClear extends \Qobo\Robo\AbstractCmdTask
{
    /**
     * {@inheritdoc}
     */
    protected $data = [
        'cmd'   => './bin/cake cache clear_all',
        'path'  => ['./'],
        'batch' => false
    ];

    /**
     * {@inheritdoc}
     */
    public function run()
    {
        $result = parent::run();
        if (!$result->wasSuccessful()) {
            return $result;
        }

        return Result::success($this, "Command run successfully", ['data' => $result->getData()['data'][0]['output']]);
    }
}
