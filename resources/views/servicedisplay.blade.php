@extends('vandor.mastervendor')

@section('title')
    <title>Services</title>
@endsection

{{-- <p>{{session()->get('user')}}</p> --}}

@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Services</h1>
            <div>
                {{-- <a href="/pkgform" style="text-decoration: none;">
                    <button class="form-btnn">Add</button>
                </a> --}}
            </div>
        </div>

        <div class="container">
            <table class="table align-middle mb-0 bg-white text-center">
                <thead style="background-color: #d44511; color: white; box-shadow: 5px 5px 5px rgb(123, 128, 129);">
                    <tr>
                        <th>ID</th>
                        <th>Service Name</th>
                        <th>Service Description</th>
                        <th>Service Price</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($displaydata as $ser)
                    <tr>
                        <td>{{$ser->id}}</td>
                        {{-- <td>{{$ser->user->name}}</td> --}}
                        <td>{{$ser->sname}}</td>
                        <td>{{$ser->sdescription}}</td>
                        <td>{{$ser->sprice}}</td>
                        <td><a href="/editservice/{{$ser->id}}"><button class="form-btnn">Edit</button></a></td>
                        <td><a href='/deleteservice/{{$ser->id}}'><button class="form-btnn">Delete</button></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
@endsection
