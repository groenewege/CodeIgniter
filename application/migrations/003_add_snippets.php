<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_snippets extends CI_Migration {

	public function up()
	{
		echo "\nCreating snippets table...";
		
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'smallint',
				'constraint' => 11,
				'unsigned' => TRUE,
				'null' => FALSE,
				'auto_increment' => TRUE
				),
			'code' => array(
				'type' => 'VARCHAR',
				'constraint' => 50,
				'default' => '',
				'null' => FALSE
				),
			'value' => array(
				'type' => 'TEXT',
				'null' => FALSE,
				),
			'info' => array(
				'type' => 'TEXT',
				'null' => FALSE,
				),
			'type' => array(
				'type' => 'VARCHAR',
				'constraint' => 15,
				'default' => 'input',
				'null' => FALSE
				) 
			));
		
		$this->dbforge->add_key('id', TRUE); // primary key
		$this->dbforge->add_key('code');
		$this->dbforge->create_table('snippets');

		echo "\nsnippets table created";
		echo "\n";

		// default data
		$this->db->insert('snippets', array('id'=>null,'code'=>'meta_title','value'=>'CodeIgniter', 'info' => 'website title', 'type' => 'input'));
		$this->db->insert('snippets', array('id'=>null,'code'=>'meta_description','value'=>'CodeIgniter boilerplate website', 'info' => 'website description', 'type' => 'input'));
		$this->db->insert('snippets', array('id'=>null,'code'=>'meta_keywords','value'=>'code, igniter', 'info' => 'website keywords', 'type' => 'input'));
		$this->db->insert('snippets', array('id'=>null,'code'=>'email','value'=>'gunther@groenewege.com', 'info' => 'email address', 'type' => 'input'));
	}

	public function down()
	{
		$this->dbforge->drop_table('snippets');
	}

} 