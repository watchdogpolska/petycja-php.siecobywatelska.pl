<div class="row">
    <nav class="col-lg-3 col-md-4 columns" id="actions-sidebar">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title"><?= __('Actions') ?></div>
            </div>
            <div class="list-group">
                <?= $this->Form->postLink(
                        $this->Html->icon('trash') . ' ' . __('Delete'),
                        ['action' => 'delete', $post->id],
                        [
                            'escape' => false,
                            'confirm' => __('Are you sure you want to delete # {0}?', $post->id),
                            'class' => 'list-group-item'
                        ]
                    )
                ?>
                <?= $this->Html->link(
                        $this->Html->icon('list') . ' ' . __('List Posts'),
                        ['action' => 'index'],
                        ['escape' => false, 'class' => 'list-group-item']) ?>
                <?= $this->Html->link(
                        $this->Html->icon('list') . ' ' . __('List Users'),
                        ['controller' => 'Users', 'action' => 'index'],
                        ['escape' => false, 'class' => 'list-group-item']) ?>
                <?= $this->Html->link(
                        $this->Html->icon('plus') . ' ' . __('New User'),
                        ['controller' => 'Users', 'action' => 'add'],
                        ['escape' => false, 'class' => 'list-group-item']) ?>
            </div>
        </div>
    </nav>
    <div class="posts form col-lg-9 col-md-8 content">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title"><?= __('Edit Post') ?></h2>
            </div>
            <div class="panel-body">
                <?= $this->Form->create($post, ['horizontal' => true]) ?>
                <?= $this->Form->input('title'); ?>
                <?= $this->Form->input('type', ['options' => [
                    'text' => __('Text'),
                    'link' => __('Link'),
                ], 'empty' => false]); ?>
                <div class="form-only-for-type-link">
                    <?= $this->Form->input('link_target'); ?>
                </div>
                <?= $this->Form->input('state', ['options' => [
                    'published' => __('Published'),
                    'pinned' => __('Pinned'),
                    'draft' => __('Draft')
                ], 'empty' => false]); ?>
                <div class="form-group">
                    <div class="col-sm-12">
                        <?= $this->Form->textarea('content', ['class' => 'tinymce']); ?>
                    </div>
                </div>
                <?= $this->Form->button(__('Submit')) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
<?php
$this->Html->script('//cdn.tinymce.com/4/tinymce.min.js', [
    'block' => true
]);
?>
<?php $this->append('script'); ?>
<script>tinymce.init({ selector:'.tinymce' });</script>
<script>
    (function ($) {
        function checkType() {
            if( $type.val() == 'link') {
                $('.form-only-for-type-link').show();
            }else{
                $('.form-only-for-type-link').hide();
            }
            console.log($type);
        }
        var $type = $('#type');
        $type.change(checkType);
        checkType();
    }) (jQuery)
</script>
<?php $this->end();?>
