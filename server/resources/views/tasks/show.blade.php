<h1>タスク詳細</h1>

<p>
    タイトル: {{ $task->title }}
</p>

<p>
    {{ $task->body }}
</p>

<a href="/tasks"><button>一覧に戻る</button></a>
<a href="/tasks/{{ $task->id }}/edit"><button>編集する</button></a>
<form action="/tasks/{{ $task->id }}" method="post" style="display: inline;">
    @csrf
    @method('DELETE')
    <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};">
</form>
