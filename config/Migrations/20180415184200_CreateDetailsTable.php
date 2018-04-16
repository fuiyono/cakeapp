<?php
use Migrations\AbstractMigration;

class CreateDetailsTable extends AbstractMigration
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
      $table = $this->table('details');
      $table->addColumn('relationship', 'string', array('limit' => 200))
            ->create();
      $refTable = $this->table('details');
      $refTable->addColumn('familie_id', 'integer', array('signed' => 'disable'))
               ->addForeignKey('familie_id', 'families', 'id', array('delete'=> 'CASCADE', 'update'=> 'NO_ACTION'))
               ->addColumn('person_id', 'integer', array('signed' => 'disable'))
               ->addForeignKey('person_id', 'persons', 'id', array('delete'=> 'CASCADE', 'update'=> 'NO_ACTION'))
               ->update();
    }
}
