@if (count($errors) > 0)
    <div>
        <P>
            <b>【エラー内容】</b>
        </P>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<h1>投稿タスク編集</h1>
<form action="/tasks/{{ $task->id }}" method="post">
    @csrf
    @method('PUT')
    <input type="hidden" name="id" value="{{ $task->id }}">
    <p>
        論文タイトル<br>
        <input type="string" name="title" value="{{ $task->title }}">
    </p>

    <p>
        本文<br>
        <textarea name="body">{{ $task->body }}</textarea>
    </p>
    <input type="submit" value="更新">
</form>

<a href="/tasks/{{ $task->id }}"><button>詳細に戻る</button></a>