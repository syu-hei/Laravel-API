# クエスト開始時、終了時の設定
• master_questテーブルの作成  
• user_questテーブルの作成  
• クエストのマスターデータを作成(JSONファイル)  
※マスターデータとは、アイテムの価格などユーザーに依存しないデータの事です。
## master_quest table
|Column|Type|option
|------|----|----|
|quest_id|int|クエストの種類|
|quest_name|varchar|クエスト名|
|open_at|timestamp|クエストがプレイ出来るようになる日時|
|close_at|timestamp|クエストがプレイ出来なくなる日時|
|item_type|int|クリア報酬の種類 1:有償クリスタル 2:無償クリスタル 3:フレンドコイン など|  
  
## user_quest table
|Column|Type|option
|------|----|----|
|user_id|varchar|ユーザーID|
|quest_id|int|クエストの種類|
|status|tinyint|1:出発 2:リタイア 3:クリア|
|score|int|スコア|
|clear_time|int|最速タイム|
|cleated_at|timestamp|user_quest tableを作成した日時|
|updated_at|timestamp|user_quest tableを最後に更新した日時|
