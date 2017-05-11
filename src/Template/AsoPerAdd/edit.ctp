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
                ['action' => 'delete', $asoPerAdd->id_person],
                ['confirm' => __('Are you sure you want to delete # {0}?', $asoPerAdd->id_person)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Aso Per Add'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="asoPerAdd form large-9 medium-8 columns content">
    <?= $this->Form->create($asoPerAdd) ?>
    <fieldset>
        <legend><?= __('Edit Aso Per Add') ?></legend>
        <?php
            echo $this->Form->control('id_add_type');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
