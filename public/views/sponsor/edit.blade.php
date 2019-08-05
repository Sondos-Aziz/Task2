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

<body style="direction: rtl; margin:20px; "  ng-controller="editUserController">

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7 m-auto ">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title float-right "> تعديل الكفيل</h4>

                    </div>
                    <div class="card-body">
                        <form  method="post" >
                            <input  type="hidden" name="_method" value="put">
                            <div class="col-md-12">
                                <div class="form-group bmd-label-floating">
                                    <label class="control-label float-right font-weight-bold">الاسم الأول</label>
                                    <input type="text" class="form-control" name="firstName" ng-model="user.firstName">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group bmd-label-floating">
                                    <label class="control-label float-right font-weight-bold">الاسم الثاني</label>
                                    <input type="text" class="form-control" name="secondName" ng-model="user.secondName" >
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group bmd-label-floating">
                                    <label class="control-label float-right font-weight-bold">الاسم الثالث</label>
                                    <input type="text" class="form-control" name="thirdName" ng-model="user.thirdName" >
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group bmd-label-floating">
                                    <label class="control-label float-right font-weight-bold">الاسم الرابع</label>
                                    <input type="text" class="form-control" name="fourthName" ng-model="user.fourthName" >
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group bmd-label-floating">
                                    <label class="control-label float-right font-weight-bold">الدولة</label>
                                        <select class="form-control" name="countryOfResidence"  ng-model="user.countryOfResidence">
                                            <option ng-repeat="item in countries" value="{{item.id}}" >{{item.name}}</option>
                                        </select>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group bmd-label-floating">
                                    <label class="control-label float-right font-weight-bold">العنوان</label>
                                    <input type="text" class="form-control" name="address" ng-model="user.address" >
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group bmd-label-floating">
                                    <label class="control-label float-right font-weight-bold">الهاتف</label>
                                    <input type="number" class="form-control" name="phone1" ng-model="user.phone1">
                                </div>
                            </div>



                            <div class="text-center">
                                <button type="submit" class="btn btn-primary ml-5" ng-click="update(user.id)">حفظ</button>
                                <a href="#!/" class="btn btn-danger ">رجوع</a>

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
