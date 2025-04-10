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
                    <h4>Product details
                    </h4>
                        </div>
                    <a class="btn btn-primary text-sm content-justied" href="{{route("prohome")}}">Add</a>


            </div>
            <hr>
            <table>
                <div class="table table-bordered ">
                    <thead class="thead thead-dark">
                        <tr>
                            <td>Product Id</td>
                            <td>category_Id</td>
                            <td>name of a product</td>
                            <td>price of a product</td>
                        </tr>
                    </thead >
<tbody>
    @foreach ($product as $item )
    <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->Category->drug_class}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->price}}</td>
    </tr>

    @endforeach
</tbody>
                </table>
                <hr>
        </div>
    </div>
</div>
@endsection
