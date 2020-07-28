# クエスト開始時、終了時の設定
• master_questテーブル作成
|Column|Type|option
|------|----|----|
|quest_id|int|クエストの種類|
|quest_name|varchar|クエスト名|
|open_at|timestamp|クエストがプレイ出来るようになる日時|
|close_at|timestamp|クエストがプレイ出来なくなる日時|
|item_type|int|クリア報酬の種類 1:有償クリスタル 2:無償クリスタル 3:フレンドコイン など|
