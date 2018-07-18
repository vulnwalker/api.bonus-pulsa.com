<?php
/**
 * This file is part of the O2System PHP Framework package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author         Steeve Andrian Salim
 * @copyright      Copyright (c) Steeve Andrian Salim
 */

// ------------------------------------------------------------------------

namespace O2System\Framework\Libraries\Ui\Codes;

// ------------------------------------------------------------------------

use O2System\Framework\Libraries\Ui\Element;

/**
 * Class Pre
 *
 * @package O2System\Framework\Libraries\Ui\Contents
 */
class Pre extends Element
{
    /**
     * Pre::__construct
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct('pre');

        if (isset($attributes[ 'id' ])) {
            $this->entity->setEntityName($attributes[ 'id' ]);
        }

        if (count($attributes)) {
            foreach ($attributes as $name => $value) {
                $this->attributes->addAttribute($name, $value);
            }
        }
    }
}