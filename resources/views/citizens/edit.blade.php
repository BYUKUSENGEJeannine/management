@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit citizen</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('citizens.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('citizens.update', $citizen->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Fname:</strong>
                    <input type="text" name="fname" value="{{ $citizen->fname }}" class="form-control" placeholder="fname">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Lname:</strong>
                    <input type="text" class="form-control" style="height:50px" name="lname"
                        placeholder="lname" value="{{ $citizen->lname }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>gender</strong>
                    <input type="text" name="gender" class="form-control" placeholder="{{ $citizen->gender }}"
                        value="{{ $citizen->gender }}">
                </div>
           
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>status:</strong>
                    <input type="text" name="status" class="form-control" placeholder="{{ $citizen->status}}"
                        value="{{ $citizen->status }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>village:</strong>
                    <input type="text" name="village" class="form-control" placeholder="{{ $citizen->village}}"
                        value="{{ $citizen->village }}">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>cell:</strong>
                    <input type="text" name="cell" class="form-control" placeholder="{{ $citizen->cell}}"
                        value="{{ $citizen->cell }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>sector:</strong>
                    <input type="text" name="sector" class="form-control" placeholder="{{ $citizen->sector}}"
                        value="{{ $citizen->sector }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>district:</strong>
                    <input type="text" name="district" class="form-control" placeholder="{{ $citizen->district}}"
                        value="{{ $citizen->district }}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection