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
                    <h4>add category details
                    <a class="btn btn-primary float-end" href="{{route("store")}}">BACK</a>
                </h4>
            </div>
                    <div class="card-body  mt-5 p-5">
                        <form action="{{route("create")}}" method="post">
                            @csrf
                        <div class="form-floating">
                            <input name="drug_class" type="text" class="form-control" id="floatingInput" placeholder="town">
                            <label for="floatingInput"> drug_class</label>
                            @error("drug_class")
                            <span class="text-danger">{{$message}}</span
                            @enderror
                          </div>
                          <div class="form-floating">
                            <input name="description" type="text" class="form-control" id="floatingdescription" placeholder="">
                            <label for="floatingPassword">drug_mechanism_of_action</label>
                            @error("description")
                            <span class="text-danger">{{$message}}</span
                            @enderror
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
