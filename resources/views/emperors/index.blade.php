@extends('app')

@section('title', '皇帝列表')

@section('team06_theme', '皇帝列表')

@section('team06_contents')
    <body class="antialiased">
        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
            <ul class="actions">
                <li><a href="{{ route('emperors.create') }}" class="button next">新增皇帝</a></li>
                <li><a href="{{ route('dynasties.create') }}" class="button next">新增朝代</a></li>
                <li><a href="{{ route('emperors.senior') }}" class="button next">長壽皇帝</a></li>
                <li><a href="{{ route('emperors.BCStartYear') }}" class="button next">西元前皇帝</a></li>
                <li><a href="{{ route('emperors.ACStartYear') }}" class="button next">西元後皇帝</a></li>
            </ul>
            <form action="{{ url('emperors/dynasty_id') }}" method='POST'>
                {!! Form::label('dyn', '選取朝代外部鍵：') !!}
                {!! Form::select('dyn', $dynasties, ['class' => 'form-control']) !!}
                <input class="btn btn-default" type="submit" value="查詢" />
                @csrf
            </form>
        </div>
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
                <th>操作3</th>
            </tr>

            @foreach($emperors as $emperor)

                <tr>
                    <td>{{ $emperor->id }}</td>
                    <td>{{ $emperor->emperor_name }}</td>
                    <td>{{ $emperor->dynasty->dynasty_name }}</td>
                    <td>{{ $emperor->emperor_life }}</td>
                    <td>{{ $emperor->emperor_start_year }}</td>
                    <td>{{ $emperor->emperor_end_year }}</td>
                    <td><a href="{{ route('emperors.show', ['id'=>$emperor->id]) }}">詳細資料</a></td>
                    <td><a href="{{ route('emperors.edit', ['id'=>$emperor->id]) }}">編輯</a></td>
                    <td>
                        <form action="{{ route('emperors.destroy', ['id'=>$emperor->id]) }}" method="POST">
                            <input class="btn btn-default" type="submit" value="刪除皇帝"/>
                            @method('delete')
                            @csrf
                        </form>
                    </td>
                </tr>

            @endforeach
        </table>
    </body>
@endsection
