# プレゼント機能の設定を行いました。
• user_present tableの作成  
• 付与されたアイテムをユーザーが取得したいタイミングで獲得できるよう設定  
• プレゼントのデータが大きくなりすぎないよう、プレゼントアイテムに取得期限をつけ、  
期限を過ぎたものは破棄します  
## user_present table
|Column|Type|option
|------|----|----|
|user_id|varchar|ユーザーID|
|present_id|bigint|プレゼントのID|
|item_type|smallint|1:有償クリスタル 2:無償クリスタル 3:フレンドコイン|
|item_count|int|付与個数|
|description|varchar|プレゼント表示画面での説明文|
|limited_at|timestamp|プレゼントアイテムの取得期限|
|updated_at|timestamp|user_present tableが作成された日時|
|created_at|timestamp|user_present tableが最後に更新された日時|
