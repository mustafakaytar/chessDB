<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Alf Magne Kalleland
 * Date: 19.12.12

 */

require_once(__DIR__."/../autoload.php");

class PlayerTest extends ChessTests
{
    public function setUp(){

        parent::setUp();

    }

    /**
     * @test
     */
    public function shouldNotBeAbleToCreateUserIfUsernameExists(){
        // given
        $user = $this->createUser('user1','pass1');
        $this->assertNotNull($user->getId());
        $secondUser = $this->createUser('user1','pass2');

        // then
        $this->assertNull($secondUser->getId());
        $this->assertFalse($secondUser->isValid());
    }

    /**
     * @test
     */
    public function shouldBeAbleToFindPlayerByUsernameAndPassword(){
        // given
        $this->createUser('user1','pass1');

        // when
        $user = new PlayerByUsernamePassword('user1', 'pass1');

        // then
        $this->assertEquals(1, $user->getId());
        $this->assertEquals('user1', $user->getUsername());
        $this->assertEquals(md5('pass1'), $user->getPassword());
    }
}
