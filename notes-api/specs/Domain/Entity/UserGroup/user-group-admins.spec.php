<?php
/**
 * File name: user-group-admins.spec.php
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

use Notes\Domain\Entity\UserGroup\Admins;

describe('Notes\Domain\Entity\UserGroup\Admins', function () {
    describe('->__construct()', function () {
        it('should return an Admin object', function () {
            $actual = new Admins();

            expect($actual)->to->be->instanceof('\Notes\Domain\Entity\UserGroup\Admins');
        });
    });
    describe('->getAdminUsers()', function () {
        it('should return the admin\'s list of users he administrators to', function () {

            $faker = \Faker\Factory::create();
            $users = $faker->userName;
            $admin = new Admins();
            expect($admin->getAdminUsers())->equal($users);
        });
    });

    describe('->setAdminUsers($array)', function () {
        it('should set and then return the admin\'s list of users as an array', function () {
            $value = array('basil30', 'ali10', 'mohammed50');
            $actual = new Admins();
            $actual->setAdminUsers($value);
            expect($actual->getAdminUsers())->equal($value);
        });
    });

    describe('->deleteUser($userName)', function () {
        it('should delete a user that the admin is responsible for', function () {
            $value = array('basil30', 'ali10', 'mohammed50');
            $actual = new Admins();
            $actual->setAdminUsers($value);
            $before = $actual->getAdminUsers();
            $user = 'ali10';
            $actual->deleteUser($user);
            $after = $actual->getAdminUsers();
            expect(in_array($user, $before));
            expect(in_array($user, $after));
        });
    });

    describe('->addUser($userName)', function () {
        it('should add a user to the admin', function () {
            $value = array('basil30', 'ali10', 'mohammed50');
            $actual = new Admins();
            $actual->setAdminUsers($value);
            $before = $actual->getAdminUsers();
            $user = 'ali10';
            $actual->addUser($user);
            $after = $actual->getAdminUsers();
            expect(in_array($user, $before));
            expect(in_array($user, $after));
        });
    });
});

