<form action="/posts" method="post">
  <input type="text" name="body" placeholder="メモ欄">
  <input type="submit" value="登録">
</form>
<ul>
  <li>メモ一覧</li>
  @foreach ($posts as $post)
    <li>{{$post->body}}</li>
  @endforeach
</ul>