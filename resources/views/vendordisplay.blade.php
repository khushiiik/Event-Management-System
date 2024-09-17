@extends('master')

@section('title')
<title>Vendors</title>
@endsection

@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">          
        <h1 class="h2">Vendors Information</h1>
    </div>

    <div class="container"> 
        <table class="table mb-0 bg-white text-center">
            <thead style="background-color: #d44511; color: white; box-shadow: 5px 5px 5px rgb(123, 128, 129);">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                   
                </tr>
            </thead>
            <tbody>
                @foreach($displaydata as $ven)
                <tr>
                    <td>{{ $ven->vid }}</td>
                    <td>{{ $ven->sname}}</td>
                    <td>{{ $ven->sdescription }}</td>
                    <td>{{ $ven->sprice }}</td>
                    {{-- <td>{{ $ven->vcategory }}</td> --}}
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection
