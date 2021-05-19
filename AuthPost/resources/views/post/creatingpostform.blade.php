@extends('layouts.front-end')

@section('content')
<style>
  body{
    background-image: url({{asset('css/images/doctor.png')}});
  }
</style>

<div class="container">
    <div class="row">
      <div class="col-lg-3">

      </div>

      <div class="col-lg-6">
        <div id="ui">
          <form class="form-group text-center">
            <h1 class="text-center">Creating Post</h1>
            <div class="row">
              <div class="col-lg-12">
                <label> Category </label>
                <select name="category" class="form-control" required>
                  <option>Category</option>
                  <option>Heart</option>
                  <option>Cancer</option>
                  <option>Vision Problem</option>
                  <option>Infants</option>
                  <option>Something else here</option>
                </select>
              </div>

              <br> <br>
              <div class="col-lg-6">
                <br>
                <label>Patient First Name</label>
                <input type="text" name="fname" class="form-control" placeholder="Enter your first name" required>
              </div>

              <div class="col-lg-6">
                <br>
                <label>Patient Last Name</label>
                <input type="text" name="lname" class="form-control" placeholder="Enter your last name">
              </div>

              <div class="col-lg-12">
                <br>
                <label>Phone number</label>
                <input type="text" name="PhoneNumber" class="form-control" placeholder="Enter your phone number.." required>

                <br>
              </div>

              <div class="col-lg-12">
                <label>Address</label>
                <textarea class="form-control" cols="30" rows="4" required></textarea>
                <br>
              </div>

              <div class="col-lg-12">

                <label>E-mail</label>
                <input type="email" name="email" class="form-control" placeholder="Enter your email.." required>

                <br>
              </div>

              <div class="col-lg-6">
                <label>Donation Amount</label>
                <input type="text" name="amount" value="RS " class="form-control" placeholder="Enter donation amount.." required>

                <br>
              </div>

              <div class="col-lg-6">
                <label>Required date</label>
                <input type="date" name="date" class="form-control" placeholder="Enter required date.." required>
                <br>
              </div>



              <div class="inputUpload">
                <label for="file-ip" class="fileLabel">upload patient picture</label>

                <input type="file" class="uploadFile" accept="image/*">

                <br><br>

                <label for="file-ip" class="fileLabel">upload medical reports</label>

                <input type="file" class="uploadFile">

              </div>

            </div>
            <input type="submit" name="submit" value="submit" class="btn btn-primary btn-block">
          </form>
        </div>
      </div>

    </div>
    <br><br><br>
  </div>




@endsection