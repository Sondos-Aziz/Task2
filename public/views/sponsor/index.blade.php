<!DOCTYPE html>
<html lang="ar" >
<head>
    <meta charset="utf-8">


    <title>sponsor</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/dirPagination.js"></script>

</head>

<body style="direction: rtl; margin:20px; ">

<div  ng-app="myApp" id="content" ng-controller="infoUserController" >


    <div id="create" class="container">
        <h3 class="text-center"><a href="#" class="text-danger " >إضافة كفيل</a></h3>

        <form method="post" style="text-align: right;">

            <div class="container-fluid" style="text-align:right">
                <fieldset class="border" style="width: 85%;margin: auto">
                    <legend class="w-auto">بيانات الكفيل   </legend>

                    <div class="text-center">
                        <input type="radio"   name="type" ng-model="type" value="شخص" id="r1" />شخصي
                        <input type="radio"  class="mr-4"   name="type" ng-model="type" id="r2" value="مؤسسة" /> مؤسسة
                    </div>

                    <div  id="form1">
                        <div class="m-2">
                            <label class="ml-3 mr-1"> بطاقة التعريف </label>
                            <input type="radio"  name="definitionType" ng-model="definitionType" value="هوية" />هوية
                            <input type="radio"  class="mr-2" name="definitionType" ng-model="definitionType" value="جواز سفر" /> جواز سفر
                            <label class="m-4"> رقم بطاقة التعريف </label>
                            <input type="number" name="identificationNum" ng-model="identificationNum" min="0" >
                        </div>
                        <div class="m-2">
                            <label class="mr-5 ">الاسم</label>
                            <input class="mr-3" type="text" name="firstName" ng-model="firstName" >
                            <input class="mr-0" type="text" name="secondName" ng-model="secondName">
                            <input class="mr-0" type="text" name="thirdName" ng-model="thirdName">
                            <input class="mr-0" type="text" name="fourthName" ng-model="fourthName">
                        </div>
                        <div class="m-3">
                            <label class="mr-4">المحافظة</label>
                            <select class="mr-3" name="governorate" ng-model="governorate">
                                <option ng-repeat="item in govs"value="{{item.id}}" >{{item.name}}</option>

                            </select>
                            <label class="mr-4 ">المدينة</label>
                            <select class="mr-3" name="city" ng-model="city">
                                <option ng-repeat="item in cities" value="{{item.id}}" >{{item.name}}</option>
                            </select>
                            <label class="mr-4 ">الحي</label>
                            <select class="mr-3" name="neighborhood" ng-model="neighborhood">
                                <option ng-repeat="item in neighs" value="{{item.id}}" >{{item.name}}</option>
                            </select>
                        </div >
                        <div class="m-3">
                            <label class="mr-1">تفاصيل العنوان</label>
                            <input class=" col-9" type="text" name="address" ng-model="address">
                        </div>
                        <div class="m-3">
                            <label class="mr-5 ">الهاتف</label>
                            <input class="mr-3" type="number" name="phone1" ng-model="phone1" min="0">
                            <label class="mr-4 ">الجوال</label>
                            <input class="mr-3" type="text" name="mobile" ng-model="mobile">
                        </div>
                        <div class="m-3">
                            <label class="mr-5 ">البريد</label>
                            <input class="mr-3" type="text" name="email" ng-model="email">
                            <label class="mr-4 ">كلمة السر</label>
                            <input class="mr-3" type="password" name="password" ng-model="password" >
                        </div>

                        <div class="m-3 mb-4"  >
                            <label class="mr-4">الجنسية</label>
                            <select class="mr-4" name="nationality" ng-model="nationality">
                                <option ng-repeat="item in nationalities" value="{{item.id}}">{{item.name}}</option>
                            </select>
                            <label class="mr-5 ">دولة الإقامة</label>
                            <select class="mr-4" name="countryOfResidence" ng-model="countryOfResidence">
                                <option ng-repeat="item in countries" value="{{item.id}}" >{{item.name}}</option>
                            </select>
                        </div>
                    </div>

                    <div  id="form2">
                        <div class="m-2">
                            <label class="mr-4 ">دولة الإقامة</label>
                            <select class="mr-4" name="countryOfResidence" ng-model="countryOfResidence">
                                <option ng-repeat="item in countries" value="{{item.id}}" >{{item.name}}</option>
                            </select>
                        </div>
                        <div class="m-2">
                            <label class="mr-5 ">الاسم</label>
                            <input class="mr-3" type="text" name="firstName" ng-model="firstName">
                            <input class="mr-0" type="text" name="secondName" ng-model="secondName">
                            <input class="mr-0" type="text" name="thirdName" ng-model="thirdName">
                            <input class="mr-0" type="text" name="fourthName" ng-model="fourthName">
                        </div>
                        <div class="m-1">
                            <label class="mr-1">مسؤول الاتصال</label>
                            <input class=" col-9" type="text" name="contactPerson" ng-model="contactPerson">
                        </div>
                        <div class="m-2">
                            <label class="mr-5"> العنوان</label>
                            <input class="mr-2 col-9" type="text" name="address" ng-model="address">
                        </div>
                        <div class="m-2">
                            <label class="mr-5 ">الهاتف1</label>
                            <input class="mr-2" type="number" name="phone1" ng-model="phone1" min="0">
                            <label class="mr-5 ">الهاتف2</label>
                            <input class="mr-3" type="number" name="phone2" ng-model="phone2" min="0" >
                        </div>
                        <div class="m-3">
                            <label class="mr-5 ">البريد</label>
                            <input class="mr-3" type="text" name="email" ng-model="email">
                            <label class="mr-5 ">كلمة السر</label>
                            <input class="mr-3" type="password" name="password" ng-model="password" >
                        </div>
                    </div>
                </fieldset>

            </div>
            <div class="text-center m-3">
                <input class="btn btn-primary ml-5 " ng-click="addSponsor()" type="submit" value="حفظ">
                <a href="#!/" id="back" class="btn btn-danger ">رجوع</a>
            </div>
        </form>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
            <div id="buttons"> <div class="text-center">
                <a href="" class="btn btn-secondary " id="searchButton"> بحث عن الكفلاء</a></br></br>
            </div>

            <a href="" style="margin-right: 90px" class="btn btn-info float-right" id="createButton">إضافة كفيل</a><br><br>
            </div>

<div id="search">
  <div >
    <h3 class="text-center text-danger">  بحث عن الكفلاء</h3>

    <form method="post"   style="text-align: right;">

            <fieldset class="border" style="width: 85%;margin: auto">
                <legend class="w-auto"> محددات البحث   </legend>

                <div class="text-center">
                    <input type="radio"   name="type" ng-model="type" value="شخص" id="radio1" />شخصي
                    <input type="radio"  class="mr-4"   name="type" ng-model="type" id="radio2" value="مؤسسة" /> مؤسسة
                </div>

                <div class="m-3" id="formPersonal">
                    <div class=" row ">
                        <div class=" m-2">
                            <label class="mr-5 ">الاسم</label>
                            <input class="mr-3" type="text" name="firstName" ng-model="firstName">
                            <input class="mr-0" type="text" name="secondName"  ng-model="secondName">
                            <input class="mr-0" type="text" name="thirdName" ng-model="thirdName" >
                            <input class="mr-0" type="text" name="fourthName" ng-model="fourthName" >
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-4">
                        <label class="mr-5">المحافظة</label>
                        <select class="mr-3 " name="governorate" ng-model="governorate">
                            <option ng-repeat="item in govs" value="{{item.id}}" >{{item.name}}</option>
                        </select>
                        </div>
                        <div class="col-4">
                        <label class="mr-4 ">المدينة</label>
                        <select class="mr-3" name="city" ng-model="city">
                            <option ng-repeat="item in cities" value="{{item.id}}" >{{item.name}}</option>
                        </select>
                        </div>
                    </div >

                    <div class="row mt-3">
                        <div class="col-4">
                            <label class="mr-5">الجنسية</label>
                            <select class="mr-4 " name="nationality" ng-model="nationality">
                                <option ng-repeat="item in nationalities" value="{{item.id}}">{{item.name}}</option>

                            </select>
                        </div>
                        <div class="col-4">
                            <label class="mr-4 ">الدولة</label>
                            <select class="mr-3" name="countryOfResidence" ng-model="countryOfResidence">
                                <option ng-repeat="item in countries" value="{{item.id}}" >{{item.name}}</option>

                            </select>
                        </div>


                    </div >
                    <div >
                    <label class="mr-4"> رقم بطاقة التعريف </label>
                    <input type="number" name="identificationNum" ng-model="identificationNum"  min="0" >
                    </div>
                </div>
                <div class="m-3" id="formOrganization">
                    <div class="m-2">
                        <label class="mr-5 ">الاسم</label>
                        <input class="mr-3" type="text" name="firstName" ng-model="firstName">
                        <input class="mr-0" type="text" name="secondName"  ng-model="secondName">
                        <input class="mr-0" type="text" name="thirdName" ng-model="thirdName" >
                        <input class="mr-0" type="text" name="fourthName" ng-model="fourthName" >
                    </div>
                    <div class=" m-3 ">
                        <label class="mr-4">مسؤول الاتصال</label>
                        <input class=" col-9" type="text" name="contactPerson" ng-model="contactPerson">
                    </div>
                    <div class="col-4">
                        <label class="mr-4 ">الدولة</label>
                        <select class="mr-3" name="countryOfResidence" ng-model="countryOfResidence">
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

     <div id="table">
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
                           <tr dir-paginate ="(index , item) in users |itemsPerPage:2 ">
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
                                    <a href="#!/edit/{{item.id}} " class="btn btn-primary btn-sm ">
                                        <i >تعديل</i></a>


                                    <button type="button" class="btn btn-danger btn-sm" ng-click="confirmDelete(item.id)">
                                        <i>حذف</i></button>

                                </td>
                                </tr>
                            </tbody>
                        </table>

                        <dir-pagination-controls
                            max-size="2"
                            direction-links="true"
                            boundary-links="true"
                            on-page-change="data.getData(newPageNumber)" >
                        </dir-pagination-controls>

                    </div>
                </div>
            </div>
        </fieldset>
     </div>

  </div>
        </div>
    </div>
</div>
<script>

    $(document).ready(function () {
        $("#form2").hide();
        $("#formOrganization").hide();

        $("#search").hide();
        $("#create").hide();

        //hide
        $('#r1').click(function ( ) {
            $("#form2").hide();
            $("#form1").show();

        });

        $('#r2').click(function ( ) {
            $("#form1").hide();
            $("#form2").show();

        });

        $('#radio1').click(function ( ) {
            $("#formOrganization").hide();
            $("#formPersonal").show();

        });

        $('#radio2').click(function ( ) {
            $("#formPersonal").hide();
            $("#formOrganization").show();

        });


        $('#searchButton').click(function ( ) {
            $("#search").show();


        });

        $('#createButton').click(function () {
            $("#table").hide();
            $("#search").hide();
            $("#create").show();
            $("#buttons").hide();

        });

        $('#back').click(function () {
            $("#form2").hide();
            $("#search").hide();
            $("#create").hide();
            $("#table").show();
            $("#buttons").show();

        });
    });

</script>
 </body>
</html>

