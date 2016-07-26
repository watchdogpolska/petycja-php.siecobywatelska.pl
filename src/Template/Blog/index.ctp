
<div class="row">
    <div class="posts index col-lg-9 col-md-8 content">
        <?php foreach ($posts as $post): ?>
            <div class="panel <?= ($post->state == 'pinned') ? 'panel-primary' : 'panel-default';?>">
                <div class="panel-heading">
                    <h2 class="panel-title">
                        <?= $this->element('post-type-icon', ['post' => $post]); ?>
                        <?= $this->Html->link($post->title, ['action' => 'view', $post->slug]) ?>
                    </h2>
                </div>
                <table class="table table-hover">
                    <tbody>
                        <?php if($post->created!=$post->modified):?>
                            <tr>
                                <th scope="row"><?= __('Modification date:'); ?></th>
                                <td><?= h($post->modified) ?></td>
                            </tr>
                        <?php endif; ?>
                        <tr>
                            <th scope="row"><?= __('Creation date:'); ?> </th>
                            <td><?= h($post->created) ?></td>
                        </tr>
                        <?php if($post->has('user')):?>
                        <tr>
                            <th scole="row"><?= __('Author:') ?></th>
                            <td><?= $post->user->display_name; ?></td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
                <div class="panel-body">
                    <?php
                    $link_more = $this->Html->link(
                        __('Read more') . ' <span class="sr-only">' . h($post->title) . '</span>' ,
                        ['action' => 'view', $post->slug],
                        ['escape' => false]); ?>
                    <?= $this->Text->truncate($post->content, 255, ['exact' => false, 'ellipsis' => ' ' . $link_more]) ?>

                </div>
            </div>
        <?php endforeach; ?>
        <nav class="paginator text-center">
            <?= $this->Paginator->numbers([
                'prev' => 'i:chevron-left ' . __('previous'),
                'next' =>  __('next') . ' i:chevron-right',
                ]) ?>
        </nav>
    </div>
</div>
