@extends('layouts.app')


@section('content')

<div class="container">
  <form action="{{route('contact.store')}}" method="POST">
    @csrf
    氏名
    <input type="text" name="your_name" />
    <br>
    件名
    <input type="text" name="title" />
    <br>
    メールアドレス
    <input type="email" name="email" />
    <br>
    ホームページ
    <input type="url" name="url" />
    <br>
    性別
    <input type="radio" name="gender" value="0" />男性
    <input type="radio" name="gender" value="1" />女性
    <br>
    年齢
    <select name="age">
      <option value="">選択してください</option>
      <option value="1">〜１９歳</option>
      <option value="2">２０歳から２９歳</option>
      <option value="3">３０歳から３９歳</option>
      <option value="4">４０歳から４９歳</option>
      <option value="5">５０歳から５９歳</option>
      <option value="6">６０歳</option>
    </select>
    <br>
    お問い合わせ内容
    <textarea name="contact"></textarea>
    <br>
    注意事項に同意する
    <input type="checkbox" name="caution" value="1" />注意事項に同意する
    <br>

    <input type="submit" value="登録する" class="btn btn-info" />
  </form>
</div>
@endsection