<?php

use PHPUnit\Framework\TestCase;

use Grading\TaxCalculator;

class TaxCalulatorTest extends TestCase {

    private $taxCalculator;

    /**
     * @group simple
     **/
    public function testShouldPayNoTax() {
        // Given
        $taxCalculator = new TaxCalculator;
        $revenue = 75000;

        // When
        $tax = $taxCalculator->evaluate($revenue);

        // Then
        $this->assertEquals(0, $tax);
    }

    /**
     * @group simple
     **/
    public function testShouldPay5() {
        // Given
        $taxCalculator = new TaxCalculator;
        $revenue = 225000;

        // When
        $tax = $taxCalculator->evaluate($revenue);

        // Then
        $this->assertEquals(($revenue - 150000) * 0.05, $tax);
    }

    /**
     * @group simple
     **/
    public function testShouldPay10() {
        // Given
        $taxCalculator = new TaxCalculator;
        $revenue = 625000;

        // When
        $tax = $taxCalculator->evaluate($revenue);

        // Then
        $this->assertEquals(7500 + ($revenue - 300000) * 0.1, $tax);
    }

    /**
     * @group simple
     **/
    public function testShouldPay15() {
        // Given
        $taxCalculator = new TaxCalculator;
        $revenue = 625000;

        // When
        $tax = $taxCalculator->evaluate($revenue);

        // Then
        $this->assertEquals(27500 + ($revenue - 500000) * 0.15, $tax);
    }

    /**
     * @group simple
     **/
    public function testShouldPay20() {
        // Given
        $taxCalculator = new TaxCalculator;
        $revenue = 875000;

        // When
        $tax = $taxCalculator->evaluate($revenue);

        // Then
        $this->assertEquals(65000 + ($revenue - 750000) * 0.2, $tax);
    }

    /**
     * @group simple
     **/
    public function testShouldPay25() {
        // Given
        $taxCalculator = new TaxCalculator;
        $revenue = 1500000;

        // When
        $tax = $taxCalculator->evaluate($revenue);

        // Then
        $this->assertEquals(115000 + ($revenue - 1000000) * 0.25, $tax);
    }

    /**
     * @group simple
     **/
    public function testShouldPay30() {
        // Given
        $taxCalculator = new TaxCalculator;
        $revenue = 3000000;

        // When
        $tax = $taxCalculator->evaluate($revenue);

        // Then
        $this->assertEquals(365000 + ($revenue - 2000000) * 0.3, $tax);
    }

    /**
     * @group simple
     **/
    public function testShouldPay35() {
        // Given
        $taxCalculator = new TaxCalculator;
        $revenue = 4500000;

        // When
        $tax = $taxCalculator->evaluate($revenue);

        // Then
        $this->assertEquals(965000 + ($revenue - 4000000) * 0.35, $tax);
    }

}
