<?php

namespace Tests\Unit;

use App\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testMultiply()
    {
        // Calculatorクラスのインスタンスを生成
        $target = new Calculator();
        // 期待値を設定
        $expected = 12;
        // 実測値を設定
        $actual = $target->multiply(3, 4);
        // 実測値と期待値が等しいか検証
        $this->assertSame($expected, $actual);
    }

    public function testSum()
    {
        // Calculatorクラスのインスタンスを生成する
        $target = new Calculator();
        // 想定する計算結果を用意
        $expected = 10;
        // sumメソッドを呼び出し、実測値を用意
        $actual = $target->sum(2, 8);
        // 期待値と実測値の値を比較して想定する結果と等しいか検証
        $this->assertSame($expected, $actual);
    }
}
