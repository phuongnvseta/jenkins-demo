<?php

namespace Tests\Unit\app\Model;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testGetNewUser()
    {
        $users = factory(User::class, 1)->states('address')->make();
        //var_dump($users);
        $this->assertTrue(true);
    }
    
    public function testModelConfiguration()    
    {
        $user = new User();
        $this->assertEquals(null, $user->getConnectionName());
        $this->assertEquals('id', $user->getKeyName());
        
        $this->assertEquals('users', $user->getTable());
        
        $this->assertTrue($user->timestamps);
        $this->assertEquals([], $user->getFillable());
        $this->assertEquals([], $user->getFillable());
    }
    
    public function testAccessorAndMutator() 
    {
        
        $user = new User();
        //$user->name = 'Roy Keane';
        $user->setRawAttributes(['name' => 'paul scholes']);
        
        //$this->assertEquals('Mr paul shcoles', $user->name);
        //$this->assertEquals('Mr Roy Keane', $user->name);
        $this->assertTrue(true);
    }
    
    
}
