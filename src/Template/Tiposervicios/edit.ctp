<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tiposervicio $tiposervicio
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tiposervicio->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tiposervicio->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tiposervicios'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Servicios'), ['controller' => 'Servicios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Servicio'), ['controller' => 'Servicios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tiposervicios form large-9 medium-8 columns content">
    <?= $this->Form->create($tiposervicio) ?>
    <fieldset>
        <legend><?= __('Edit Tiposervicio') ?></legend>
        <?php
            echo $this->Form->control('descripcion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
