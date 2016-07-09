<div class="row">
    <div class="posts index col-lg-9 col-md-8 content">
        <?php foreach ($blog as $post): ?>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title"><?= h($post->title) ?></h2>
                </div>
                <table class="table table-hover">
                    <tbody>
                        <?php if($post->created!=$post->modified):?>
                            <tr>
                                <th scope="row"><?= __('Modication date:'); ?></th>
                                <td><?= h($post->modified) ?></td>
                            </tr>
                        <?php endif; ?>
                        <tr>
                            <th scope="row"><?= __('Creation date:'); ?> </th>
                            <td><?= h($post->created) ?></td>
                        </tr>
                        <?php if($post->has('user')):?>
                        <tr>
                            <th scole="row"><?= __('Author') ?></th>
                            <td><?= $post->user->id; ?></td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
                <div class="panel-body">
                    <?= $post->content ?>
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
