<?php
// Logクラスファイルを読み込む
require_once 'Log.php';

// Logクラスのインスタンスを生成
// 1. ログファイル名
// 2. ログファイルのディレクトリパス
// 3. ログファイル名に年月を付加するか否か (初期値：TRUE)
// 4. Logクラス内でエラーが発生した場合、メッセージを出力するか否か (初期値：TRUE)
$log = new Log('error.log', 'logs', TRUE, TRUE);

// ログファイルに出力
$log->out('test');
$log->out(1);
$log->out(3.14);
// 引数はいくつ入れてもOK
$log->out(1, 3.14, $_SERVER);

// ログファイルの内容を画面に出力
// ログファイルのパスは getLogFullPath() で取得できる
echo '<pre>';
var_dump(file_get_contents($log->getLogFullPath()));
echo '</pre>';