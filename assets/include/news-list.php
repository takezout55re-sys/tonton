<?php
// ニュース一覧（最新順）
$newsList = array(
    array('date' => '2026.4.29', 'text' => 'マンガでわかる！とんとんの日常', 'link' => '/tonton-manga/'),
    array('date' => '2026.4.29', 'text' => '行事予定', 'link' => '/schedule/202606.html'),
    array('date' => '2026.4.1', 'text' => 'マンガでわかる！とんとんの日常', 'link' => '/tonton-manga/'),
    array('date' => '2026.4.1', 'text' => '行事予定', 'link' => '/schedule/'),
    array('date' => '2026.3.21', 'text' => 'マンガでわかる！とんとんの日常', 'link' => '/tonton-manga/'),
    array('date' => '2026.3.09', 'text' => 'とんとんのひとこま', 'link' => '/tonton-hitokoma/'),
    array('date' => '2026.3.09', 'text' => '行事予定', 'link' => '/schedule/'),
    array('date' => '2026.1.31', 'text' => 'とんとんのひとこま', 'link' => '/tonton-hitokoma/'),
    array('date' => '2026.1.31', 'text' => '行事予定', 'link' => '/schedule/'),
    array('date' => '2025.1.16', 'text' => '自己評価', 'link' => '/self-evaluation/'),
    array('date' => '2025.12.31', 'text' => '行事予定', 'link' => '/schedule/202602.html'),
    array('date' => '2025.12.31', 'text' => 'マンガでわかる！とんとんの日常', 'link' => '/tonton-manga/'),
    array('date' => '2025.12.31', 'text' => 'とんとんのひとこま', 'link' => '/tonton-hitokoma/'),
    array('date' => '2025.12.16', 'text' => 'マンガでわかる！とんとんの日常', 'link' => '/tonton-manga/'),
    array('date' => '2025.11.30', 'text' => '行事予定', 'link' => '/schedule/'),
    array('date' => '2025.11.30', 'text' => 'とんとんのひとこま', 'link' => '/tonton-hitokoma/'),
    array('date' => '2025.11.22', 'text' => 'とんとんのホームページリニューアルいたしました。', 'link' => ''),
);

// 表示件数制限（TOPページ用）
$limit = isset($newsLimit) ? $newsLimit : count($newsList);
$displayList = array_slice($newsList, 0, $limit);

// ニュースリストをHTML出力
foreach ($displayList as $news) {
    echo '<dl>';
    echo '<dt>' . $news['date'] . '</dt>';
    if (!empty($news['link'])) {
        if ($news['text'] == '自己評価') {
            echo '<dd><a href="' . $news['link'] . '">令和７年の' . $news['text'] . '</a>を更新いたしました。</dd>';
        } else {
            echo '<dd><a href="' . $news['link'] . '">' . $news['text'] . '</a>を更新いたしました。</dd>';
        }
    } else {
        echo '<dd>' . $news['text'] . '</dd>';
    }
    echo '</dl>';
}
?>
