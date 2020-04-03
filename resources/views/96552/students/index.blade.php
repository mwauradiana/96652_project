@extends('layout')
@section('main')
    <div class="row">
        <div class="col-sm-12">
            <h1 class="display-3">STUDENTS</h1>
            <table class="table table-striped">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Birth_year</td>
                    <td>Email</td>
                    <td>Course</td>
                    <td>City</td>
                    <td>Country</td>
                    <td colspan = 2>Actions</td>
                </tr>
                </thead>
                <div>
                    <a style="margin: 19px;" href="{{ route('96552.students.create')}}" class="btn btn-primary">New student</a>
                </div>
                <tbody>
                @foreach($students as $student)
                    <tr>
                        <td>{{$student->id}}</td>
                        <td>{{$student->first_name}} {{$student->last_name}}</td>
                        <td>{{$student->birth_year}}</td>
                        <td>{{$student->email}}</td>
                        <td>{{$student->course}}</td>
                        <td>{{$student->job_title}}</td>
                        <td>{{$student->city}}</td>
                        <td>{{$student->country}}</td>
                        <td>
                            <a href="{{ route('$students.edit',$student->id)}}" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('$students.destroy', $student->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div>
            </div>
            <div class="col-sm-12">  @if(session()->get('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
            </div>
@endsection
