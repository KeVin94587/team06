@extends('app')

@section('title', '皇帝列表')

@section('team06_theme', '皇帝列表')

@section('team06_contents')
    <body class="antialiased">
        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
            <a href="{{ route('players.create') }} ">新增球員</a>
            <!-- <a href="{{ route('players.index') }} ">所有球員</a>
            <a href="{{ route('players.senior') }} ">資深球員</a>
            <form action="{{ url('players/position') }}" method='POST'>
                {!! Form::label('pos', '選取位置：') !!}
                {!! Form::select('pos', $positions, ['class' => 'form-control']) !!}
                <input class="btn btn-default" type="submit" value="查詢" />
                @csrf
            </form> -->
        </div>
        <table style="text-align:center;" width="100%">
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
                    <td>{{ $emperor->dynasty_id }}</td>
                    <td>{{ $emperor->emperor_life }}</td>
                    <td>{{ $emperor->emperor_start_year }}</td>
                    <td>{{ $emperor->emperor_end_year }}</td>
                    <td><a href="{{ route('emperors.show', ['id'=>$emperor->id]) }}">詳細資料</a></td>
                    <td><a href="{{ route('emperors.destroy', ['id'=>$emperor->id]) }}">刪除皇帝</a></td>
                </tr>

            @endforeach
        </table>
    </body>
@endsection