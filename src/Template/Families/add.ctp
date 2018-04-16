<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Families $family
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Families'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="families form large-9 medium-8 columns content">
    <?= $this->Form->create($family) ?>
    <fieldset>
        <legend><?= __('Add Family') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
