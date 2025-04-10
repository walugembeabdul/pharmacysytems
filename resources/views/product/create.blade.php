@extends("layout.default")
@section("content")
<style>
     html,
body {
  height: 100%;
}

.form-signin {
  max-width: 330px;
  padding: 1rem;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
</style>
<main class=" w-100 m-auto mt-4 p-4">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card bg-tertiary">
                <div class="card-header">
                    <h4>add product details
                    <a class="btn btn-primary float-end" href="{{route("prostore")}}">BACK</a>
                </h4>
            </div>
                    <div class="card-body  mt-5 p-5">
                        <form action="{{route("procreate")}}" method="post">
                            @csrf
                        <div class="form-floating">
                            <input name="name" type="text" class="form-control" id="floatingInput" placeholder="town">
                            <label for="floatingInput"> product_name</label>
                            @error("product_name")
                            <span class="text-danger">{{$message}}</span
                            @enderror
                          </div>
                          <div class="form-floating">
                            <input name="price" type="float" class="form-control" id="floatingdescription" placeholder="">
                            <label for="floatingPassword">price</label>
                            @error("price")
                            <span class="text-danger">{{$message}}</span
                            @enderror
                            <div class="form-floating">
                                <label for="select">select category</label>
                            <select name="category_id" class="form-controll mt-6 mb-5 p-6" id="">
                                @foreach ($categories as $category )
                                <option value="$category->id">{{$category->drug_class}}</option>

                                @endforeach
                                @error("category_id")
                            <span class="text-danger">{{$message}}</span
                            @enderror
                            </select>
                            </div>
                            <div class="mb-3 p-4">
                                <button name="add" class="btn btn-success">Save</button>
                                        </div>
                        </form>

                    </div>
                </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
