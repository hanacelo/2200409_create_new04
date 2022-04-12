@extends('layouts.app')

@section('content')
<h1>詳細確認</h1>
<table class="table table-striped">
  <thead>
    <tr>
      <th>キャンペーンタイトル</th>
      <th>詳細</th>
      <th>ユーザー名</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>{{ $make->make_title }}</td>
      <td>{{ $make->make_desc }}</td>
      <td>{{ $make->user->name }}</td>
    </tr>
  </tbody>
</table>
@endsection
