<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Arm Auth Roles User Model.
 *
 * @package    Arm Auth
 * @author     Devi Mandiri <devi.mandiri@gmail.com>
 * @copyright  (c) 2011 Devi Mandiri
 * @license    MIT
 */
class RolesUser extends Arm {
	
	static $table_name = 'roles_users';	
	
	static $belongs_to = array(
		array('user'),
		array('role')
	);
}
