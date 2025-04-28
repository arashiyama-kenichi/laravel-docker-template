# Laravel Lesson レビュー②

## Todo編集機能

### @method('PUT')を記述した行に何が出力されているか
<input type="hidden" name="_method" value="PUT">
が出力される

### findメソッドの引数に指定しているIDは何のIDか
DBのtodoテーブルのIDカラム

### findメソッドで実行しているSQLは何か
UPDATE文

### findメソッドで取得できる値は何か

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
引数に'content.required'または'content.max'

### $errorsのfirstメソッドの引数・返り値は何か

### フレームワークとは何か

### MVCはどういったアーキテクチャか

### ORMとは何か、またLaravelが使用しているORMは何か

### composer.json, composer.lockとは何か

### composerでインストールしたパッケージ（ライブラリ）はどのディレクトリに格納されるのか
