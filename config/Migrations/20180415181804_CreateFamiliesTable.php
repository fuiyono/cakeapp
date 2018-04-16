<?php
use Migrations\AbstractMigration;

class CreateFamiliesTable extends AbstractMigration
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
      $table = $this->table('families');
      $table->addColumn('name', 'string', array('limit' => 100))
            ->create();
    }
}
