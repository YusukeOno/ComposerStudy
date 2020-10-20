<?php
use PHPUnit\Framework\TestCase;
use yusukeono\composerstudy\Arithmetic;

class ArithmeticTest extends TestCase
{
    /**
       * @var Arithmetic
       */
    protected $object;

    /**
     * setUpは各テストメソッドが実行される前に実行する
     */
    protected function setUp(): void
    {
        // テストするオブジェクトを生成する
        $this->object = new Arithmetic();
    }

    /**
     * 足し算関数の検証
     * @test
     */
    public function ３足す５は８()
    {
        $this->assertEquals(8, $this->object->add(3, 5));
    }

    /**
     * @test
     */
    public function １５足す３０は４５()
    {
        $this->assertEquals(45, $this->object->add(15, 30));
    }

    /**
     * 引き算関数の検証
     * @test
     */
    public function １０引く３は７()
    {
        $this->assertEquals(7, $this->object->subtract(10, 3));
    }

    /**
     * @test
     */
    public function ３引く９はー６()
    {
        $this->assertEquals(-6, $this->object->subtract(3, 9));
    }

    /**
     * 掛け算関数の検証
     * @test
     */
    public function ４かける６は２４()
    {
        $this->assertEquals(24, $this->object->multiply(4, 6));
    }

    /**
     * @test
     */
    public function ４かけるー５はー２０()
    {
        $this->assertEquals(-20, $this->object->multiply(4, -5));
    }

    /**
     * 割り算関数の検証
     */
    public function testDivide()
    {
        // 引数に6,2を渡すと3が返ってくることを確認する
        $this->assertEquals(3, $this->object->divide(6, 2));
        // 引数に6,6を渡すと1が返ってくることを確認する
        $this->assertEquals(1, $this->object->divide(6, 6));
    }
}
