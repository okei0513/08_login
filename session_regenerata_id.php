<?php
// sessionをスタートしてidを再生成しよう．
// 旧idと新idを表示しよう．

session_start(); //セッションの開始・ないとできない

$old_session_id = session_id(); //

session_regenerate_id(true);

$new_session_id = session_id();

echo "<P>{$old_session_id}</p>";
echo "<P>{$new_session_id}</p>";
