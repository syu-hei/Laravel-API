# ユーザー登録を行います。
• ユーザーID, 初期データを設定してクライアント側に返します。  
## user_profile table
|Column|Type|option
|------|----|----|
|user_id|varchar(37)|ユーザーID|
|user_name|varchar(32)|ユーザーネーム|
|crystal|int(10)|有償クリスタル|
|crystal_free|int(10)|無償クリスタル|
|friend_coin|int(10)|通貨|
|tutorial_progress|smallint(5)|チュートリアル進行状況|
|created_at|timestamp|user_profileが作成された日時|
|updated_at|timestamp|user_profileが更新された日時|
