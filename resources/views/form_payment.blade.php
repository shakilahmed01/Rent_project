
<form method="POST" action="{{ route('post_payment') }}" enctype="multipart/form-data">
  @csrf
  <div class="col-md-6">
      <input id="user_id" type="hidden" class="form-control @error('user_id') is-invalid @enderror" name="user_id" value="{{ Auth::user()->id }}" required autocomplete="user_id" autofocus>

      @error('user_id')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
  </div>
  <div class="form-group row">
    <label class="col-sm-12 col-md-2 col-form-label">service Type</label>
    <div class="col-sm-12 col-md-10">
      <select class="custom-select col-12" name="service_type">
        <option selected="">Choose...</option>
        <option value="Room">Room</option>
        <option value="Flat">Flat</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-12 col-md-2 col-form-label">Package Type</label>
    <div class="col-sm-12 col-md-10">
      <select class="custom-select col-12" name="package_type">
        <option selected="">Choose...</option>
        <option value="Basic">Basic</option>
        <option value="Standard">Standard</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-12 col-md-2 col-form-label">amount</label>
    <div class="col-sm-12 col-md-10">
      <input class="form-control" name="amount" placeholder="Location" type="text">
    </div>
  </div>
   <div class="form-group row">
    <label class="col-sm-12 col-md-2 col-form-label">duration</label>
    <div class="col-sm-12 col-md-10">
      <input class="form-control" name="duration" placeholder="duration" type="numeric">
    </div>
  </div>
  

  <button class="btn btn-primary" type="submit">Submit</button>



</form>
