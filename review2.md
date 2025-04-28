# Laravel Lesson レビュー②

## Todo編集機能

### @method('PUT')を記述した行に何が出力されているか
<input type="hidden" name="_method" value="PUT">
が出力される

### findメソッドの引数に指定しているIDは何のIDか
ルート定義で指定したルートパラメータのid

### findメソッドで実行しているSQLは何か
SELECT文

### findメソッドで取得できる値は何か
DBのtodoテーブルから、指定のIDのデータ
### saveメソッドは何を基準にINSERTとUPDATEを切り替えているのか
ルート経路から、TodoController.php内で使用される関数によって、切り替えられる。

## Todo論理削除

### traitとclassの違いとは
traitは、クラスにプロパティやメソッドを追加するための機能
クラスの継承とは異なり1つのクラスに複数のトレイトを追加できる
trait自体、インスタンス化できない

### traitを使用するメリットとは
複数のクラス間でコードを共通化・再利用することが可能

## その他

### TodoControllerクラスのコンストラクタはどのタイミングで実行されるか
public function __construct(Todo $todo)
    {
        $this->todo = $todo;
    }

### RequestクラスからFormRequestクラスに変更した理由
メソッドインジェクションを利用する為に、
バリデーションルールが入ったTodoRequestに変更した

### $errorsのhasメソッドの引数・返り値は何か
引数に入力欄のname属性
返り値にバイレーションエラーが発生しているかどうか

### $errorsのfirstメソッドの引数・返り値は何か
引数に入力欄のname属性
返り値に、入力欄で出たエラーに対してのエラーメッセージ

### フレームワークとは何か
ファイルのディレクトリ構成があらかじめ決まっており、
指定のディレクトリにファイルを配置したり、指定のファイルに処理を書き加えていくことで効率よくアプリケーションを作成ができる。

### MVCはどういったアーキテクチャか
Model
View
Controller

### ORMとは何か、またLaravelが使用しているORMは何か
ORMとは、プログラミング言語のClassとデータベースのテーブルをマッピング（関連付け）することでSQLを直接操作することなく
データベースとマッピングされたClassのメソッドを用いることでDBとやり取りを行うことができます。

Laravelでは、データベースのテーブルとマッピングするClassがModel

### composer.json, composer.lockとは何か
composer.json : LaravelプロジェクトにおいてPHPの依存ライブラリやパッケージを管理する上で重要なファイル
composer.loc : Laravelプロジェクトにおける依存パッケージの管理に利用されるログファイル

### composerでインストールしたパッケージ（ライブラリ）はどのディレクトリに格納されるのか
vendor ディレクトリ