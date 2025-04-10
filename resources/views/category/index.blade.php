@extends("layout.default")
@section("content")

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                @if (session('message'))
                <div class="alert alert-success">{session{('message')}}</div
                @endif
            </div>
                <div class="card-header">
                    <h4>category details
                    </h4>
                        </div>
                    <a class="btn btn-primary text-sm content-justied" href="{{route("home")}}">Add</a>


            </div>
            <hr>
            <table>
                <div class="table table-bordered ">
                    <thead class="thead thead-dark">
                        <tr>
                            <td>Class of a drug</td>
                            <td>moa of a drug</td>
                        </tr>
                    </thead >
                    <tbody>
                       @foreach ( $category as $item )
                       <tr>
                        <td>{{$item->drug_class}}</td>
                        <td>{{$item->description}}</td>
                    </tr>

                       @endforeach

                    </tbody>
                </table>
                <hr>
        </div>
    </div>
</div>
@endsection
