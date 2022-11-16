@extends('app')

@section('title', '朝代列表')

@section('team06_theme', '朝代列表')

@section('team06_contents')
    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
        <ul class="actions">
            <li><a href="{{ route('dynasties.create') }}" class="button next">新增朝代</a></li>
        </ul>
            <table style="text-align:center;" width="100%">
            <tr>
                <th>朝代編號</th>
                <th>朝代國號</th>
                <th>國起始年</th>
                <th>國結束年</th>
                <th>操作1</th>
                <th>操作2</th>
            </tr>
            
            @foreach($dynasties as $dynasty)
                <tr>
                    <td>{{ $dynasty->id }}</td>
                    <td>{{ $dynasty->dynasty_name }}</td>
                    <td>{{ $dynasty->dynasty_start_year }}</td>
                    <td>{{ $dynasty->dynasty_end_year }}</td>
                    <td><a href="{{ route('dynasties.show', ['id'=>$dynasty->id]) }}">詳細資料</a></td>
                    <td><a href="{{ route('dynasties.destroy', ['id'=>$dynasty->id]) }}">刪除朝代</a></td>
                </tr>
            @endforeach
            
        </table>
    </div>
@endsection