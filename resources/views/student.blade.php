<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>@lang('main.student_management')</title>
  </head>
  <body>
    @include("navbar")

    <div class="row header-container justify-content-center">
        <div class="header">
            <h1>@lang('main.student_management')</h1>
        </div>
    </div>

@if ($layout == 'index')
    <div class ='container-fluid mt-4'>
        <div class ='container-fluid mt-4'>
            <div class ="row justify-content-center">
                <section class ="col-md-7">
                    @include("studentslist")
                </section>
            </div>
        </div>
    </div>
@elseif ($layout == 'create')
    <div class ='container-fluid mt-4'>
        <div class ="row">
            <section class ="col-md-7">
                @include("studentslist")
            </section>
            <section class ="col-md-5">

                <div class="card mb-3">
                    <img src="https://mk0digitallearn7ttjx.kinstacdn.com/wp-content/uploads/2018/12/Effective-education-system-%E2%80%93-A-must-for-nation-building.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">@lang('main.enter_the_infor')</h5>
                      <form action="{{ url('/store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>CNE</label>
                            <input name="cne" type="text" class="form-control" placeholder=@lang('main.enter_cne')>
                        </div>
                        <div class="form-group">
                            <label>@lang('main.first_name')</label>
                            <input name="firstname" type="text" class="form-control" placeholder=@lang('main.enter_the_first_name')>
                        </div>
                        <div class="form-group">
                            <label>@lang('main.second_name')</label>
                            <input name="secondname" type="text" class="form-control" placeholder=@lang('main.enter_the_second_name')>
                        </div>
                        <div class="form-group">
                            <label>@lang('main.age')</label>
                            <input name="age" type="text" class="form-control" placeholder=@lang('main.enter_the_age')>
                        </div>
                        <div class="form-group">
                            <label>@lang('main.speaciality')</label>
                            <input name="specality" type="text" class="form-control" placeholder=@lang('main.enter_speciality')>
                        </div>
                        <input type="submit" class="btn btn-info" value=@lang('main.save')>
                        <input type="reset" class="btn btn-warning" value=@lang('main.reset')>
                    </form>
                    </div>
                  </div>

                
            </section>
        </div>
    </div>
@elseif ($layout == 'show')
    <div class ='container-fluid mt-4'>
        <div class ="row">
            <section class ="col">
                @include("studentslist")
            </section>
            <section class ="col"></section>
        </div>
    </div>
@elseif ($layout == 'edit')
    <div class ='container-fluid mt-4'>
        <div class ="row">
            <section class ="col-md-7">
                @include("studentslist")
            </section>
            <section class ="col-md-5">

                <div class="card mb-3">
                    <img src="https://mk0digitallearn7ttjx.kinstacdn.com/wp-content/uploads/2018/12/Effective-education-system-%E2%80%93-A-must-for-nation-building.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">@lang('main.update')</h5>
                      <form action="{{ url('/update/'.$student->id) }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>CNE</label>
                            <input value={{ $student->cne }} name="cne" type="text" class="form-control" placeholder=@lang('main.enter_cne')>
                        </div>
                        <div class="form-group">
                            <label>@lang('main.first_name')</label>
                            <input value={{ $student->firstname }} name="firstname" type="text" class="form-control" placeholder=@lang('main.enter_the_first_name')>
                        </div>
                        <div class="form-group">
                            <label>@lang('main.second_name')</label>
                            <input value={{ $student->secondname }} name="secondname" type="text" class="form-control" placeholder=@lang('main.enter_the_second_name')>
                        </div>
                        <div class="form-group">
                            <label>@lang('main.age')</label>
                            <input value={{ $student->age }} name="age" type="text" class="form-control" placeholder=@lang('main.enter_the_age')>
                        </div>
                        <div class="form-group">
                            <label>@lang('main.speaciality')</label>
                            <input value={{ $student->specality }} name="specality" type="text" class="form-control" placeholder=@lang('main.enter_speciality')>
                        </div>
                        <input type="submit" class="btn btn-info" value=@lang('main.btn_update')>
                        <input type="reset" class="btn btn-warning" value=@lang('main.reset')>
                    </form>
                    </div>
                  </div>
            </section>
        </div>
    </div>
@elseif ($layout == 'contact')
<div class ='container-fluid mt-4'>
    <div class ='container-fluid mt-4'>
        <div class ="row justify-content-center">
            <section class ="col-md-7">
                @include("contactlist")
            </section>
        </div>
    </div>
</div>
@endif

<footer></footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>