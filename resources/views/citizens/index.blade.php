@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>People Information </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('citizens.create') }}" title="Create a project"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>Fname</th>
            <th>Lname</th>
            <th>Gender</th>
            <th>Status</th>
            <th>Village</th>
            <th>Cell</th>
            <th>Sector</th>
            <th>District</th>
            <th>Date Created</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($citizens as $citizen)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $citizen->fname }}</td>
                <td>{{ $citizen->lname }}</td>
                <td>{{ $citizen->gender }}</td>
                <td>{{ $citizen->status}}</td>
                <td>{{ $citizen->village}}</td>
                <td>{{ $citizen->cell}}</td>
                <td>{{ $citizen->sector}}</td>
                <td>{{ $citizen->district}}</td>
                <td>{{ date_format($citizen->created_at, 'jS M Y') }}</td>
                <td>
                    <form action="{{ route('citizens.destroy', $citizen->id) }}" method="POST">

                        <a href="{{ route('citizens.show', $citizen->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg">Show</i>
                        </a>

                        <a href="{{ route('citizens.edit', $citizen->id) }}">
                            <i class="fas fa-edit  fa-lg">Update</i>

                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger">Delete</i>

                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!!$citizens->links()!!}

@endsection