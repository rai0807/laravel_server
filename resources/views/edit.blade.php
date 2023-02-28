<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
        <title>お問合せ内容編集</title>    
    </head>

@section('content')

    <body>
        <main>
            <article>
                <div>
                    <h1>お問合せ内容編集</h1>

                    <div>
                        <a href="{{ route('index') }}">戻る</a>
                    </div>

                    <form action="{{ route('update', $content) }}" method="post">
                        @csrf
                         <div>
                            <label for="name">氏名</label>
                            <input type="text" name="name" value="{{ $content->name }}">
                        </div>
                        <div>
                            <label for="hurigana">フリガナ</label>
                            <input type="text" name="hurigana" value="{{ $content->furigana }}">
                        </div>
                        <div>
                            <label for="email">メールアドレス</label>
                            <input type="text" name="email" value="{{ $content->email }}">
                        </div>
                        <div>
                            <label for="tel">電話番号</label>
                            <input type="text" name="tel" value="{{ $content->tel }}">
                        </div>
                        <div>
                            <label for="message">お問合せ内容</label>
                            <textarea name="message">{{ $content->messages }}</textarea>
                        </div>
                         <button type="submit">更新</button>
                    </form>
                </div>
            </article>
        </main>
    </body>
</html>
@endsectionb