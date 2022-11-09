@extends('app')

@section('title', '皇帝列表')

@section('team06_theme', '朝代')

@section('team06_contents')
    <body class="antialiased">
        <h1>顯示單一朝代的視圖(view)</h1>
        朝代編號：{{ $dynasties->id }}<br/>
        朝代國號：{{ $dynasties->dynasty_name }}<br/>
        國起始年：{{ $dynasties->dynasty_start_year }}<br/>
        國結束年：{{ $dynasties->dynasty_end_year }}<br/>

    </body>
@endsection