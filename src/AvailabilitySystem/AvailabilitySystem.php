<?php
declare(strict_types=1);

/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PCL
 */

namespace Pimcore\Bundle\EcommerceFrameworkBundle\AvailabilitySystem;

use Pimcore\Bundle\EcommerceFrameworkBundle\Model\CheckoutableInterface;

class AvailabilitySystem implements AvailabilitySystemInterface
{
    public function getAvailabilityInfo(CheckoutableInterface $product, int $quantityScale = 1, array $products = null): Availability|AvailabilityInterface
    {
        return new Availability($product, true);
    }
}
