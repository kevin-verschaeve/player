<?php

/*
 * This file is part of the Blackfire Player package.
 *
 * (c) Fabien Potencier <fabien@blackfire.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Blackfire\Player\Step;

/**
 * @author Fabien Potencier <fabien@blackfire.io>
 */
class GroupStep extends BlockStep
{
    private $key;

    public function __construct($key, $file = null, $line = null)
    {
        $this->key = $key;

        parent::__construct($file, $line);
    }

    public function getKey()
    {
        return $this->key;
    }
}
