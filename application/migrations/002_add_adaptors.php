<?php if ( defined('BASEPATH') OR exit('No direct script access allowed') );

class Migration_Add_adaptors extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'id' => array('type' => 'INT', 'constraint' => 5, 'unsigned' => TRUE, 'auto_increment' => TRUE),
			'email' => array('type' => 'VARCHAR', 'constraint' => '100'),
			'created_at' => array('type' => 'INT'),
		));
		
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('early_adaptors');
	}

	public function down()
	{
		$this->dbforge->drop_table('early_adaptors');
	}
}