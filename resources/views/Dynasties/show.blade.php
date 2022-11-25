@extends('app')

@section('title', '皇帝列表')

@section('team06_theme', '朝代')

@section('team06_contents')
    <body class="antialiased">
        <!-- <h1>顯示單一朝代的視圖(view)</h1> -->
        朝代編號：{{ $dynasties->id }}<br/>
        朝代國號：{{ $dynasties->dynasty_name }}<br/>
        國起始年：{{ $dynasties->dynasty_start_year }}<br/>
        國結束年：{{ $dynasties->dynasty_end_year }}<br/>
        該朝代的所有皇帝：<br/>
    </body>

    <table>
        <tr>
            <th>皇帝編號</th>
            <th>皇帝姓名</th>
            <th>所屬朝代</th>
            <th>皇帝壽命</th>
            <th>帝登基年</th>
            <th>帝退位年</th>
            <th>操作1</th>
            <th>操作2</th>
        </tr>
        @foreach($emperors as $emperor)

            <tr>
                <td>{{ $emperor->id }}</td>
                <td>{{ $emperor->emperor_name }}</td>
                <td>{{ $emperor->dynasty->dynasty_name }}</td>
                <td>{{ $emperor->emperor_life }}</td>
                <td>{{ $emperor->emperor_start_year }}</td>
                <td>{{ $emperor->emperor_end_year }}</td>
            </tr>

         @endforeach
    </table>
@endsection