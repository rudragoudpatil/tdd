<?php
/**
 * Created by PhpStorm.
 * User: techjini
 * Date: 27/9/18
 * Time: 3:55 PM
 */

namespace Fibonacci;

use AppBundle\Fibonacci\Fibonacci;
use PHPUnit\Framework\TestCase;

class FibonacciTest extends TestCase
{
    public function testFibanocciZero(){
        //Arrange
        $expectedValue = 0;
        $fibanocciTestInstance = new Fibonacci();

        //Act
        $actualValue = $fibanocciTestInstance->getFibanocciResult(0);

        //Assert
        $this->assertSame($expectedValue,$actualValue);
    }

    public function testFibanocciOne(){
        //Arrange
        $expectedValue = 1;
        $fibanocciTestInstance = new Fibonacci();

        //Act
        $actualValue = $fibanocciTestInstance->getFibanocciResult(1);

        //Assert
        $this->assertSame($expectedValue,$actualValue);
    }

    public function testFibanocciTwo(){
        //Arrange
        $expectedValue = 2;
        $fibanocciTestInstance = new Fibonacci();

        //Act
        $actualValue = $fibanocciTestInstance->getFibanocciResult(2);

        //Assert
        $this->assertSame($expectedValue,$actualValue);
    }

    public function testFibanocciThree(){
        //Arrange
        $expectedValue = 4;
        $fibanocciTestInstance = new Fibonacci();

        //Act
        $actualValue = $fibanocciTestInstance->getFibanocciResult(3);

        //Assert
        $this->assertSame($expectedValue,$actualValue);
    }

    public function testFibanocciFour(){
        //Arrange
        $expectedValue = 7;
        $fibanocciTestInstance = new Fibonacci();

        //Act
        $actualValue = $fibanocciTestInstance->getFibanocciResult(4);

        //Assert
        $this->assertSame($expectedValue,$actualValue);
    }

    public function testFibanocciFive(){
        //Arrange
        $expectedValue = 12;
        $fibanocciTestInstance = new Fibonacci();

        //Act
        $actualValue = $fibanocciTestInstance->getFibanocciResult(5);

        //Assert
        $this->assertSame($expectedValue,$actualValue);
    }

    public function testFibanocciSix(){
        //Arrange
        $expectedValue = 20;
        $fibanocciTestInstance = new Fibonacci();

        //Act
        $actualValue = $fibanocciTestInstance->getFibanocciResult(6);

        //Assert
        $this->assertSame($expectedValue,$actualValue);
    }
}

