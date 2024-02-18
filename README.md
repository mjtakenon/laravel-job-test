# Laravel10 + Vue3 Template

## 環境構築手順

### 初回起動

#### .envの作成

- 以下を実行し.envを作成

```shell
cp app/.env.local app/.env
```

#### hostsの設定

- hostsファイルにローカル環境のドメインを追記してください（管理者権限が必要です）
  - Windows：`C:\Windows\System32\drivers\etc\hosts`
  - Mac：`/etc/hosts`

```
127.0.0.1 local-template.net
::1 local-template.net
```

#### コンテナのビルド, モジュールのインストールと起動

- Windows+WSL環境で以下コマンドの実行に権限周りのエラーが出る場合、sudoをつけて実行してください

```sh
$ make init
$ make setup
```

- vite開発サーバーが立ち上がったら、以下URLにブラウザからアクセスすることで、ページが表示できます
  - http://localhost:54480
  - `/etc/hosts` に記録している場合、http://local-template.net:54480 でのアクセスも可能

### 2回目以降の起動

```sh
$ make start
```

### 終了

```sh
$ make down
```
