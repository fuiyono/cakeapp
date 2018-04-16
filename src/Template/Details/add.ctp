<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Detail $detail
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Lista Familiares'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista Familias'), ['controller' => 'Families', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nueva Familia'), ['controller' => 'Families', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista Personas'), ['controller' => 'Persons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nueva Persona'), ['controller' => 'Persons', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="details form large-9 medium-8 columns content">
    <?= $this->Form->create($detail) ?>
    <fieldset>
        <legend><?= __('Add Detail') ?></legend>
        <?php
            echo $this->Form->control('relationship', ['options'=>['Padre' => 'Padre', 'Madre'=>'Madre', 'Hijo'=>'Hijo']]);
            echo $this->Form->control('familie_id', ['options' => $families]);
            echo $this->Form->control('person_id', ['options' => $persons]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
