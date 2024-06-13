
# カテゴリーテーブルの削除
DROP TABLE IF EXISTS php1_categories;


# カテゴリーテーブル
CREATE TABLE  php1_categories(
    `id`   INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,    # ID 主キー
    `name` VARCHAR(64)  NOT NULL                       # カテゴリー名
);


# カテゴリーデータ
INSERT INTO php1_categories( `name` ) VALUES 
    ( 'ピザ' ),
    ( 'ドリンク' ),
    ( 'デザート' );

