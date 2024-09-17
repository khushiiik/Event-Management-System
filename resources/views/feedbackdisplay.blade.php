@extends('master')

@section('title')
<title>FeedBacks</title>
@endsection

@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <div class="d-flex flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2 ml-5">FeedBacks</h1>
    </div>

    <div class="container">
        <table class="table align-middle mb-0 bg-white text-center">
            <thead style="background-color: #d44511; color: white; box-shadow: 5px 5px 5px rgb(123, 128, 129);">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Review</th>
                </tr>
            </thead>
            <tbody>
                @foreach($feedback as $feed)
                <tr>
                    <td>{{$feed->fid}}</td>
                    <td>{{$feed->customer->cname}}</td>
                    <td>{{$feed->feedbacks}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection
