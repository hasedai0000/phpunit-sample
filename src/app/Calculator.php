<?php

namespace App;

class Calculator
{
  // 乗算結果を返す
  public function multiply($x, $y)
  {
    return $x * $y;
  }

  // 除算結果を返す
  public function divide($x, $y)
  {
    // 意図的なバグを仕込む
    return $x % $y;
  }

  // 加算結果を返す
  public function sum($x, $y)
  {
    return $x + $y;
  }

  // 元さん結果を返す
  public function subtract($x, $y)
  {
    return $x - $y;
  }
}
