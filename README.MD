![Zap-Tunes](src/Zap-Tunes/public/Zap-Tunes.jpg)

[![Open in Visual Studio Code](https://img.shields.io/static/v1?logo=visualstudiocode&label=&message=Open%20in%20Visual%20Studio%20Code&labelColor=2c2c32&color=007acc&logoColor=007acc)](https://open.vscode.dev/g198sato/Zap-Tunes)

# アプリ概要

# 使用技術

| 名前           | バージョン |
| :------------- | ---------: |
| PHP            |     8.0.30 |
| Laravel        |     9.47.0 |
| MySQL          |     5.7.44 |
| Vue.js         |     3.2.45 |
| Docker         |     23.0.0 |
| Docker Compose |     2.15.1 |

# インフラ構成

![インフラ構成](src/Zap-Tunes/public/infrastructure.png)

# ER 図

![ER図](src/Zap-Tunes/public/DB.jpeg)

- 「ジャンルタイプマスタ」には、ジャンルを大別するタイプ(e.g. 音楽ジャンル・楽器・雰囲気)には何が存在するかを格納します。
- 「ジャンルマスタ」には、どのようなジャンル(e.g. ロック・楽しい)が存在するかを格納します。
- 「ジャンル」には、各楽曲はどのジャンル(e.g. ロック・楽しい)に属するかを格納します。1 つの楽曲にたいしてジャンルは複数選択可能です。

# 機能一覧
