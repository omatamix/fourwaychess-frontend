<?php
declare(strict_types=1);
/**
 * Omatamix Container
 *
 * MIT License
 * 
 * Copyright (c) 2022 Nicholas English
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */

namespace Omatamix\Container\Test;

use Omatamix\Container\Container;
use Omatamix\Container\ContainerBuilder;
use Omatamix\Container\StaticContainer;
use PHPUnit\Framework\TestCase;

class StaticTest extends TestCase
{
    /**
     * @return void Returns nothing.
     */
    public function testStaticContainer(): void
    {
        $builder = new ContainerBuilder();
        $psrContainer = new Container($builder);
        $this->assertTrue(is_null(StaticContainer::getInstance()));
        StaticContainer::setContainer($psrContainer);
        $this->assertTrue(!is_null(StaticContainer::getInstance()));
        StaticContainer::clear();
        $this->assertTrue(is_null(StaticContainer::getInstance()));
    }
}