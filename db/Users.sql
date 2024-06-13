
# ユーザーテーブルの削除
DROP TABLE IF EXISTS php1_users;

# ユーザーテーブル
CREATE TABLE  php1_users(
    `id`        INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,    # ID 主キー
    `account`   VARCHAR(128) NOT NULL,                      # アカウント
    `password`  VARCHAR(255) NOT NULL                       # パスワード
);

# ユーザーデータ
INSERT INTO php1_users(`account`, `password`) VALUES 
    ( 'rtakimoto', '$2y$13$En0nG7GvRutxRwEB/RMbD.UartDV0mCzEIpMMs9lZKoaCSQ1y/jaS' ),    # ecc
    ( 'atanaka',   '$2y$13$En0nG7GvRutxRwEB/RMbD.UartDV0mCzEIpMMs9lZKoaCSQ1y/jaS' ),    # ecc
    ( 'kmomoi',    '$2y$13$En0nG7GvRutxRwEB/RMbD.UartDV0mCzEIpMMs9lZKoaCSQ1y/jaS' );    # ecc
