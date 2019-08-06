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
<div  ng-app="myApp" id="content" ng-controller="infoUserController" >
    <div class="container-fluid">
        <br class="row">
        <br class="col-md-12">
        <div class="text-center">
            <a href="" class="btn btn-secondary " id="searchButton"> بحث عن الكفلاء</a></br></br>
        </div>

        <a href="#!/create" class="btn btn-info float-right">إضافة كفيل</a></br></br>

<div id="search">
  <div  ng-controller="searchUserController">
    <h3 class="text-center text-danger">  بحث عن الكفلاء</h3>

    <form method="post"   style="text-align: right;">

            <fieldset class="border" style="width: 85%;margin: auto">
                <legend class="w-auto"> محددات البحث   </legend>

                <div class="text-center">
                    <input type="radio"   name="type" ng-model="type" value="شخص" id="r1" />شخصي
                    <input type="radio"  class="mr-4"   name="type" ng-model="type" id="r2" value="مؤسسة" /> مؤسسة
                </div>

                <div class="m-3" id="form1">
                    <div class="m-2">
                        <label class="mr-5 ">الاسم</label>
                        <input class="mr-3" type="text" name="firstName" ng-model="search.firstName">
                        <input class="mr-0" type="text" name="secondName"  ng-model="search.secondName">
                        <input class="mr-0" type="text" name="thirdName" ng-model="search.thirdName" >
                        <input class="mr-0" type="text" name="fourthName" ng-model="search.fourthName" >
                    </div>
                    <div class="row mt-3">
                        <div class="col-4">
                        <label class="mr-5">المحافظة</label>
                        <select class="mr-3 " name="governorate" ng-model="search.governorate">
                            <option ng-repeat="item in govs" value="{{item.id}}" >{{item.name}}</option>
                        </select>
                        </div>
                        <div class="col-4">
                        <label class="mr-4 ">المدينة</label>
                        <select class="mr-3" name="city" ng-model="search.city">
                            <option ng-repeat="item in cities" value="{{item.id}}" >{{item.name}}</option>
                        </select>
                        </div>
                    </div >

                    <div class="row mt-3">
                        <div class="col-4">
                            <label class="mr-5">الجنسية</label>
                            <select class="mr-4 " name="nationality" ng-model="search.nationality">
                                <option ng-repeat="item in nationalities" value="{{item.id}}">{{item.name}}</option>

                            </select>
                        </div>
                        <div class="col-4">
                            <label class="mr-4 ">الدولة</label>
                            <select class="mr-3" name="countryOfResidence" ng-model="search.countryOfResidence">
                                <option ng-repeat="item in countries" value="{{item.id}}" >{{item.name}}</option>

                            </select>
                        </div>
                    </div >
                    <div >
                    <label class="mr-4"> رقم بطاقة التعريف </label>
                    <input type="number" name="identificationNum" ng-model="search.identificationNum"  min="0" >
                    </div>
                </div>
                <div class="m-3" id="form2">
                    <div class="m-2">
                        <label class="mr-5 ">الاسم</label>
                        <input class="mr-3" type="text" name="firstName" ng-model="search.firstName">
                        <input class="mr-0" type="text" name="secondName"  ng-model="search.secondName">
                        <input class="mr-0" type="text" name="thirdName" ng-model="search.thirdName" >
                        <input class="mr-0" type="text" name="fourthName" ng-model="search.fourthName" >
                    </div>
                    <div class=" m-3 ">
                        <label class="mr-4">مسؤول الاتصال</label>
                        <input class=" col-9" type="text" name="contactPerson" ng-model="search.contactPerson">
                    </div>
                    <div class="col-4">
                        <label class="mr-4 ">الدولة</label>
                        <select class="mr-3" name="countryOfResidence" ng-model="search.countryOfResidence">
                            <option ng-repeat="item in countries" value="{{item.id}}" >{{item.name}}</option>

                        </select>
                    </div>
                </div>

            </fieldset>

        <div class="text-center m-3">
            <input class="btn btn-danger " type="submit" ng-click="doSearch()" value="بحث">

        </div>
    </form>
  </div></div>

     <div>
        <fieldset class="border" style="width: 85%;margin: auto">
            <legend class="w-auto text-right"> نتائج البحث   </legend>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="table1" class="table table-striped table-bordered" style="width:100%">
                            <thead class=" text-primary text-center">
                            <th>
                                #
                            </th>
                            <th>
                                الاسم
                            </th>
                            <th>
                                النوع
                            </th>
                            <th>
                                الدولة
                            </th>
                            <th>
                                العنوان
                            </th>
                            <th>
                                رقم الهاتف
                            </th>
                            <th>
                                عمليات
                            </th>
                            </thead>

                            <tbody class="text-center">
                           <tr ng-repeat="(index,item) in users | filter:search">
                                <td>{{index + 1}}</td>
                                <td>{{item.firstName }} {{item.secondName}} {{item.thirdName}} {{item.fourthName}}</td>
                                <td >{{item.type}}</td>

                                <td ng-if="item.countryOfResidence == 1">فلسطين</td>
                                <td ng-if="item.countryOfResidence == 2">مصر</td>
                                <td ng-if="item.countryOfResidence == 3">لبنان</td>
                                <td ng-if="item.countryOfResidence == 4">سوريا</td>
                                <td ng-if="item.countryOfResidence == 5">الأردن</td>

                                <td>{{item.address}}</td>
                                <td>{{item.phone1}}</td>

                                <td>
                                    <a href=" " class="btn btn-primary btn-sm ">
                                        <i >تعديل</i></a>


                                    <button type="button" class="btn btn-danger btn-sm" ng-click="confirmDelete(item.id)">
                                        <i>حذف</i></button>

                                </td>
                                </tr>
                            </tbody>
                        </table>
                    <!--  links -->
                        <nav aria-label="Page navigation example">
                            <ul class="pagination ">
                                <li class="page-item"><a class="page-link" href="{{users.url(1)}}">الأول</a></li>
                                <li class="page-item"><a class="page-link" href="{{users.previousPageUrl()}}">السابق</a></li>
                                <li class="page-item"><a class="page-link" href="{{users.nextPageUrl() }}">التالي</a></li>
                                <li class="page-item"><a class="page-link" href="{{users.url(users.lastPage())}}">الأخير</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </fieldset>
     </div>

  </div>
    </div></div>
<script>

    $(document).ready(function () {
        $("#form2").hide();
        $("#search").hide();

        //hide
        $('#r1').click(function ( ) {
            $("#form2").hide();
            $("#form1").show();

        });

        $('#r2').click(function ( ) {
            $("#form1").hide();
            $("#form2").show();

        });

        $('#searchButton').click(function ( ) {
            $("#search").show();

        });
    });

</script>
 </body>
</html>

