<?php
// 投稿本文を取得
$content = get_the_content();

// <h2> をすべて抽出
preg_match_all('/<h2.*?>(.*?)<\/h2>/i', $content, $matches);

if (!empty($matches[1])) : ?>
    <aside class="sidebar-toc">
        <h2>目次</h2>
        <ul>
            <?php foreach ($matches[1] as $heading) : 
                $id = sanitize_title($heading); ?>
                <li><a href="#<?php echo esc_attr($id); ?>"><?php echo esc_html($heading); ?></a></li>
            <?php endforeach; ?>
        </ul>
    </aside>
<?php endif; ?>