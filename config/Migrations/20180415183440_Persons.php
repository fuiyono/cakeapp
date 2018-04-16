<?php
use Migrations\AbstractMigration;

class Persons extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
      $table = $this->table('persons');
      $table->addColumn('name', 'string', array('limit' => 200))
            ->addColumn('lastname', 'string', array('limit' => 200))
            ->addColumn('lastname2', 'string', array('limit' => 200))
            ->create();
    }
}
