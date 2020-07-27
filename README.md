# ユーザーIDを用いたログインとログイン日数によるアイテム付与を実装します。
• ログインデータ保存  
• ログイン日数によるアイテムを付与  
## user_login table
|Column|Type|option
|------|----|----|
|user_id|varchar(37)|ユーザーID|
|login_day|smallint|ログインした日数|
|last_login_at|timestamp|最終ログイン日時|
|updated_at|timestamp|user_loginを作成した日時|
|created_at|timestamp|user_loginを更新した日時|
