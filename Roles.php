<?php
/**
 * Created by JetBrains PhpStorm.
 * User: xait0020
 * Date: 05.02.13
 * Time: 00:52
 */
class ChessRoles
{
    private $roles = array(
        'LOGIN' => 1,
        'EDIT_GAMES' => 2,
        'ROLE_IMPORT' => 4
    );

    private $roleLabels = array(
        'LOGIN' => 'Login',
        'EDIT_GAMES' => 'Edit games',
        'ROLE_IMPORT' => 'Import games'
    );

    public function hasAccessTo(Player $user, $role){
        return $user->getAccess() & $role;
    }
}