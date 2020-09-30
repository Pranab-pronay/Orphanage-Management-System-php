<?php


class Test extends PHPUnit\Framework\TestCase{
    
    public function testSetLogin()
    {
        $stub=$this->createStub(\App\Models\user::class);
        $stub->method('setLogin')
             ->willReturn('id');
        $this->assertEquals('id',$stub->setLogin('pranab.pronay','123456'));
    }
    public function testChild()
    {
        $stub=$this->createStub(\App\Models\user::class);
        $stub->method('masud, 1-3')
             ->willReturn('id');
        $this->assertEquals('id',$stub->getChild('1'));
    }  
}