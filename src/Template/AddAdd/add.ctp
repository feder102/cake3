<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Add Add'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="addAdd form large-9 medium-8 columns content">
    <?= $this->Form->create($addAdd) ?>
    <fieldset>
        <legend><?= __('Add Add Add') ?></legend>
        <?php
            echo $this->Form->control('street');
            echo $this->Form->control('number');
            echo $this->Form->control('cp');
            echo $this->Form->control('district');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
