<?php if ( defined('BASEPATH') OR exit('No direct script access allowed') );

class Migration_Add_users extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'user_id' => array('type' => 'INT', 'constraint' => 5, 'unsigned' => TRUE, 'auto_increment' => TRUE),
			'username' => array('type' => 'VARCHAR', 'constraint' => '100'),
			'password' => array('type' => 'VARCHAR', 'constraint' => '100'),
			'email' => array('type' => 'VARCHAR', 'constraint' => '100'),
			'confirmation_code' => array('type' => 'VARCHAR', 'constraint' => '100'),
			'confirmed_at' => array('type' => 'INT')
		));
		
		$this->dbforge->add_key('user_id', TRUE);
		$this->dbforge->create_table('users');
	}

	public function down()
	{
		$this->dbforge->drop_table('users');
	}
}