<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $perCondition->id_condition],
                ['confirm' => __('Are you sure you want to delete # {0}?', $perCondition->id_condition)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Per Condition'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="perCondition form large-9 medium-8 columns content">
    <?= $this->Form->create($perCondition) ?>
    <fieldset>
        <legend><?= __('Edit Per Condition') ?></legend>
        <?php
            echo $this->Form->control('value');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
