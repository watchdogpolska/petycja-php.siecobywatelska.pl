<?php

$this->set('channelData', [
    'title' => __('Most Recent Posts'),
    'link' => $this->Url->build('/', true),
    'description' => __('Most recent posts.'),
    'language' => 'pl-PL'
]);

foreach ($posts as $post) {

    $created = strtotime($post->created);

    $link = [
        'controller' => 'Blog',
        'action' => 'view',
        $post->slug
    ];

    // Remove & escape any HTML to make sure the feed content will validate.
    $content = h(strip_tags($post->content));
    $content = $this->Text->truncate($content, 400, [
        'ending' => '...',
        'exact'  => true,
        'html'   => true,
    ]);

    echo  $this->Rss->item([], [
        'title' => $post->title,
        'link' => $link,
        'guid' => ['url' => $link, 'isPermaLink' => 'true'],
        'description' => $content,
        'pubDate' => $post->created
    ]);
}
