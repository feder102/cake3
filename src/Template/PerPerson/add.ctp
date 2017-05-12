<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Per Person'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="perPerson form large-9 medium-8 columns content">
    <?= $this->Form->create($perPerson) ?>
    <fieldset>
        <legend><?= __('Add Per Person') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('surname');
            echo $this->Form->control('id_doc_type');
            echo $this->Form->control('doc_num');
            echo $this->Form->control('birth_date');
            echo $this->Form->control('id_gender', array('options'=>$perGender));
            echo $this->Form->control('id_nal');
            echo $this->Form->control('id_marital_status');
            echo $this->Form->control('id_condition');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
