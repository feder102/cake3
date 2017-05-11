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
                ['action' => 'delete', $telPhoneType->id_phone_type],
                ['confirm' => __('Are you sure you want to delete # {0}?', $telPhoneType->id_phone_type)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tel Phone Type'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="telPhoneType form large-9 medium-8 columns content">
    <?= $this->Form->create($telPhoneType) ?>
    <fieldset>
        <legend><?= __('Edit Tel Phone Type') ?></legend>
        <?php
            echo $this->Form->control('value');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
