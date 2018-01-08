<?php
use ZFT\user;

class IdentityMapStub implements User\IdentityMapInterface {

}

class DataMapperStub implements User\DataMapperInterface {

}

class UserRepositoryTest extends PHPUnit_Framework_TestCase {
    public function testCanCreateUserRepositoryObject() {
        //$user = new User\User();
        //$userRepo = new User\UserRepository();
        $identityMapStub = new IdentityMapStub();
        $dataMapStub = new DataMapperStub();
        $repository = new UserRepository($identityMap,$dataMapper);

        $this ->assertInstanceOf(UserRepository::class,$repository);

    }
}
