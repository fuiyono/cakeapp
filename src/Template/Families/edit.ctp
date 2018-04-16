<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Family $family
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $family->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $family->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Families'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Details'), ['controller' => 'Details', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Detail'), ['controller' => 'Details', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="families form large-9 medium-8 columns content">
    <?= $this->Form->create($family) ?>
    <fieldset>
        <legend><?= __('Edit Family') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
