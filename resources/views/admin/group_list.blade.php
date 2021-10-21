@extends('layouts.admin')


@section('body')
<div class="container pt-4">
    <p class="h1">Groups List</p>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Members</th>
            <th scope="col">Permissions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($groups as $index => $group)
        <tr>
            <th scope="row"> {{$index + 1}} </th>
            <td>
                <a href="{{route("groups", ['id'=>$group->id])}}">
                {{$group->alias}}
                </a>
            </td>
            <td>{{$group->users->count()}}</td>
            <td>
                @foreach($group->permissions as $perm)
                   <span>{{$perm->name}}</span>
                @endforeach
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection