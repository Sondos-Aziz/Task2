<!DOCTYPE html>
<html lang="ar" ng-app="myApp">
<head>
    <meta charset="utf-8">


    <title>sponsor</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
</head>

<body style="direction: rtl; margin:20px; ">

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7 ">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title float-right "> تعديل الكفيل</h4>

                    </div>
                    <div class="card-body">
                        <form  method="post" action="{{route('sponsor.update',$user->id)}}" >
                            @csrf
                            @method('put')

                            <div class="col-md-12">
                                <div class="form-group bmd-label-floating">
                                    <label class="control-label float-right font-weight-bold">الاسم الأول</label>
                                    <input type="text" class="form-control" name="firstName" value="{{$user->firstName}}">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group bmd-label-floating">
                                    <label class="control-label float-right font-weight-bold">الاسم الثاني</label>
                                    <input type="text" class="form-control" name="secondName" value="{{$user->secondName}}">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group bmd-label-floating">
                                    <label class="control-label float-right font-weight-bold">الاسم الثالث</label>
                                    <input type="text" class="form-control" name="thirdName" value="{{$user->thirdName}}">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group bmd-label-floating">
                                    <label class="control-label float-right font-weight-bold">الاسم الرابع</label>
                                    <input type="text" class="form-control" name="fourthName" value="{{$user->fourthName}}">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group bmd-label-floating">
                                    <label class="control-label float-right font-weight-bold">الدولة</label>
                                        <select class="form-control" name="countryOfResidence">
                                            @foreach($countries as $country)
                                                <option value="{{$country->id}}">{{$country->name}}</option>
                                            @endforeach
                                        </select>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group bmd-label-floating">
                                    <label class="control-label float-right font-weight-bold">العنوان</label>
                                    <input type="text" class="form-control" name="address" value="{{$user->address}}">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group bmd-label-floating">
                                    <label class="control-label float-right font-weight-bold">الهاتف</label>
                                    <input type="number" class="form-control" name="phone1" value="{{$user->phone1}}">
                                </div>
                            </div>



                            <div class="text-center">
                                <button type="submit" class="btn btn-primary ml-5">حفظ</button>
                                <a href="{{route('sponsor.index')}}" class="btn btn-danger ">رجوع</a>

                            </div>

                        </form>
                    </div>
                    </div>
                </div>
             </div>
         </div>
    </div>

</body>
</html>
