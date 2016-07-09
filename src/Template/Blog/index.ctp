<div class="row">
    <div class="posts index col-lg-9 col-md-8 content">
      <?php foreach ($blog as $post): ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title"><?= h($post->title) ?></h2>
            </div>
            <div class="panel-body">
                  <table cellpadding="0" cellspacing="0" class="table table-hover">
                      <tbody>
                        <?php
                         if($post->created!=$post->modified) echo "<tr>Edited: ".h($post->modified)."</tr>";
                         ?>
                            <tr><td><?= h($post->content) ?></td></tr>
                            <tr><td>Created: <?= h($post->created) ?></td></tr>
                      </tbody>
                  </table>

                <nav class="paginator text-center">
                    <?= $this->Paginator->numbers([
                        'prev' => 'i:chevron-left ' . __('previous'),
                        'next' =>  __('next') . ' i:chevron-right',
                        ]) ?>
                </nav>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
