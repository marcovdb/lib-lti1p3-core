<?php
/**
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; under version 2
 * of the License (non-upgradable).
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 *
 * Copyright (c) 2020 (original work) Open Assessment Technologies SA;
 */

declare(strict_types=1);

namespace OAT\Library\Lti1p3Core\Tests\Traits;

use OAT\Library\Lti1p3Core\Security\Key\KeyChain;
use OAT\Library\Lti1p3Core\Security\Key\KeyChainInterface;

trait KeyChainTestingTrait
{
    public function getTestingKeyChain(
        string $id = 'id',
        string $setName = 'setName',
        string $publicKey = null,
        string $privateKey = null,
        string $privateKeyPassPhrase = null
    ): KeyChainInterface {
        return new KeyChain(
            $id,
            $setName,
            $publicKey ?? getenv('KEYS_ROOT_DIR') . '/RSA/public.key',
            $privateKey ?? getenv('KEYS_ROOT_DIR') . '/RSA/private.key',
            $privateKeyPassPhrase
        );
    }
}
