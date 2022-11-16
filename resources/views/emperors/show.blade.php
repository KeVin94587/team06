@extends('app')

@section('title', '皇帝列表')

@section('team06_theme', '朝代')

@section('team06_contents')
    <body class="antialiased">
        <!-- <h1>顯示單一皇帝的視圖(view)</h1> -->
        皇帝編號：{{ $emperors->id }}<br/>
        皇帝姓名：{{ $emperors->emperor_name }}<br/>
        所屬朝代：{{ $emperors->dynasty_id }}<br/>
        皇帝壽命：{{ $emperors->emperor_life }}<br/>
        帝登基年：{{ $emperors->emperor_start_year }}<br/>
        帝退位年：{{ $emperors->emperor_end_year }}<br/>

    </body>
@endsection