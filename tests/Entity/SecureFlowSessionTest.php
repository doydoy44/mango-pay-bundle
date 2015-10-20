<?php

/**
 * MangoPayBundle.
 *
 * LICENSE
 *
 * This source file is subject to the MIT license and the version 3 of the GPL3
 * license that are bundled with this package in the folder licences
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to contact@uni-alteri.com so we can send you a copy immediately.
 *
 * @copyright   Copyright (c) 2009-2016 Uni Alteri (http://uni-alteri.com)
 * @copyright   Copyright (c) 2009-2016 Richard Déloge (r.deloge@uni-alteri.com)
 *
 * @link        http://teknoo.it/mangopay-bundle Project website
 *
 * @license     http://teknoo.it/license/mit         MIT License
 * @author      Richard Déloge <r.deloge@uni-alteri.com>
 */

namespace UniAlteri\MangoPayBundle\Tests\Entity;

/**
 * Class SecureFlowSession.
 *
 * @copyright   Copyright (c) 2009-2016 Uni Alteri (http://uni-alteri.com)
 * @copyright   Copyright (c) 2009-2016 Richard Déloge (r.deloge@uni-alteri.com)
 *
 * @link        http://teknoo.it/mangopay-bundle Project website
 *
 * @license     http://teknoo.it/license/mit         MIT License
 * @author      Richard Déloge <r.deloge@uni-alteri.com>
 *
 * @covers UniAlteri\MangoPayBundle\Entity\SecureFlowSession
 */
class SecureFlowSessionTest extends \PHPUnit_Framework_TestCase
{
    use EntityTestTrait;

    /**
     * Return the canonical class name of the tested entity.
     *
     * @return string
     */
    protected function getEntityClassName()
    {
        return 'UniAlteri\MangoPayBundle\Entity\SecureFlowSession';
    }

    public function testUser()
    {
        $userMock = $this->getMock('UniAlteri\MangoPayBundle\Entity\Interfaces\User\UserInterface');
        $this->checkGetter('user', $userMock);
        $this->checkSetter('user', $userMock);
    }

    public function testPayInId()
    {
        $this->checkGetter('payInId', 1234);
        $this->checkSetter('payInId', 1234);
    }

    public function testBusinessData()
    {
        $this->checkGetter('businessData', ['foo' => 'bar']);
        $this->checkSetter('businessData', ['foo' => 'bar']);
    }
}