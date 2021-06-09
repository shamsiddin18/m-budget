<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Account management system</title>
</head>
<body>
@include("navbar")




<div class="row header-container justify-content-center">
    <div class="header">
        <h1>Budget Management System</h1>
    </div>
</div>

@if($layout == 'index')
    <div class="container-fluid mt-4">
        <div class="container-fluid mt-4">
            <div class="row justify-content-center">
                <section class="col-md-8">
                    @include("accountslist")
                </section>
            </div>
        </div>
    </div>
@elseif($layout == 'create')
    <div class="container-fluid mt-4 " id="create-form">
        <div class="row">
            <section class="col-md-7">
                @include("accountslist")
            </section>
            <section class="col-md-5">

                <div class="card mb-3">
                    <img src="https://thumb.tildacdn.com/tild3036-6534-4362-b836-306531643533/-/resize/600x/-/format/webp/J6kyb1Zhe1U.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Enter the informations of the new items</h5>
                        <form action="{{ url('/store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>TYPE</label>
                                <input name="type" type="text" class="form-control"  placeholder="Enter type">
                            </div>
                            <div class="form-group">
                                <label>Category</label>
                                <input name="category" type="text" class="form-control"  placeholder="Enter the category">
                            </div>


                            <div class="form-group">
                                <label>Data</label>
                                <input name="data" type="text" class="form-control"  placeholder="Enter data">
                            </div>

                            <div class="form-group">
                                <label>Amount</label>
                                <input name="amount" type="text" class="form-control"  placeholder="Enter the Amount">
                            </div>
                            <div class="form-group">
                                <label>Comment</label>
                                <input name="comment" type="text" class="form-control"  placeholder="Enter Comment">
                            </div>
                            <input type="submit" class="btn btn-info" value="Save">
                            <input type="reset" class="btn btn-warning" value="Reset">

                        </form>
                    </div>
                </div>

            </section>
        </div>
    </div>
@elseif($layout == 'show')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col">
                @include("accountslist")
            </section>
            <section class="col"></section>
        </div>
    </div>
@elseif($layout == 'edit')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-md-7">
                @include("accountslist")
            </section>
            <section class="col-md-5">

                <div class="card mb-3">
                    <img src="https://marketplace.canva.com/MAB7yqsko0c/1/screen_2x/canva-smart-little-schoolgirl--MAB7yqsko0c.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Update informations of items</h5>
                        <form action="{{ url('/update/'.$account->id) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>TYPE</label>
                                <input value="{{ $account->type }}" name="type" type="text" class="form-control"  placeholder="Enter type">
                            </div>
                            <div class="form-group">
                                <label>Category</label>
                                <input value="{{ $account->category }}" name="category" type="text" class="form-control"  placeholder="Enter the category">
                            </div>
                            <div class="form-group">
                                <label>Data</label>
                                <input value="{{ $account->data }}" name="data" type="text" class="form-control"  placeholder="Enter  data">
                            </div>
                            <div class="form-group">
                                <label>Amount</label>
                                <input value="{{ $account->amount }}" name="amount" type="text" class="form-control"  placeholder="Enter the Amount">
                            </div>
                            <div class="form-group">
                                <label>Comment</label>
                                <input value="{{ $account->comment }}" name="comment" type="text" class="form-control"  placeholder="Enter comment">
                            </div>
                            <input type="submit" class="btn btn-info" value="Update">
                            <input type="reset" class="btn btn-warning" value="Reset">

                        </form>
                    </div>
                </div>

            </section>
        </div>
    </div>
@endif

<footer></footer>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
