<?php
/**
 * File name: user-group-owners.spec.php
 * Project: notes-api
 * PHP version 5
 * @category  PHP
 * @author    donbstringham <donbstringham@gmail.com>
 * @copyright 2015 © donbstringham
 * @license   http://opensource.org/licenses/MIT MIT
 * @version   GIT: <git_id>
 * @link      http://donbstringham.us
 * $LastChangedDate$
 * $LastChangedBy$
 */

use Notes\Domain\Entity\UserGroup\Owners;

describe('Notes\Domain\Entity\UserGroup\Owners', function () {
    describe('->__construct()', function () {
        it('should return an Owner object', function () {
            $actual = new Owners();

            expect($actual)->to->be->instanceof('\Notes\Domain\Entity\UserGroup\Owners');
        });
    });
    describe('->getOwnerUsers()', function () {
        it('should return the owner\'s list of users', function () {

            $faker = \Faker\Factory::create();
            $users = $faker->userName;
            $owner = new Owners();
            expect($owner->getOwnerUsers())->equal($users);
        });
    });

    describe('->setOwnerUsers($array)', function () {
        it('should set and then return the owner\'s list of users as an array', function () {
            $value = array('basil30', 'ali10', 'mohammed50');
            $actual = new Owners();
            $actual->setOwnerUsers($value);
            expect($actual->getOwnerUsers())->equal($value);
        });
    });

    describe('->deleteUser($userName)', function () {
        it('should delete a user that the owner is responsible for', function () {
            $value = array('basil30', 'ali10', 'mohammed50');
            $actual = new Owners();
            $actual->setOwnerUsers($value);
            $before = $actual->getOwnerUsers();
            $user = 'ali10';
            $actual->deleteUser($user);
            $after = $actual->getOwnerUsers();
            expect(in_array($user, $before));
            expect(in_array($user, $after));
        });
    });

    describe('->addUser($userName)', function () {
        it('should add a user to the owner', function () {
            $value = array('basil30', 'ali10', 'mohammed50');
            $actual = new Owners();
            $actual->setOwnerUsers($value);
            $before = $actual->getOwnerUsers();
            $user = 'ali10';
            $actual->addUser($user);
            $after = $actual->getOwnerUsers();
            expect(in_array($user, $before));
            expect(in_array($user, $after));
        });
    });
});


