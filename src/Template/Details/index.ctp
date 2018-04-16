<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Detail[]|\Cake\Collection\CollectionInterface $details
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Agregar Persona a Familia'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista de Familias'), ['controller' => 'Families', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nueva Familia'), ['controller' => 'Families', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista Personas'), ['controller' => 'Persons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nueva Persona'), ['controller' => 'Persons', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="details index large-9 medium-8 columns content">
    <h3><?= __('Details') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('relationship') ?></th>
                <th scope="col"><?= $this->Paginator->sort('familie_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('person_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($details as $detail): ?>
            <tr>
                <td><?= $this->Number->format($detail->id) ?></td>
                <td><?= h($detail->relationship) ?></td>
                <td><?= $detail->has('family') ? $this->Html->link($detail->family->name, ['controller' => 'Families', 'action' => 'view', $detail->family->id]) : '' ?></td>
                <td><?= $detail->has('person') ? $this->Html->link($detail->person->name, ['controller' => 'Persons', 'action' => 'view', $detail->person->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $detail->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $detail->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $detail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $detail->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
