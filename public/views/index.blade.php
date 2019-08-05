
    <div  ng-app="myApp" id="content" ng-controller="infoUserController" >
        <div class="container-fluid">
            <br class="row">
            <br class="col-md-12">
            <div class="text-center">
            <a href="#!/search" class="btn btn-secondary " id="search"> بحث عن الكفلاء</a></br></br>
            </div>

            <a href="#!/create" class="btn btn-info float-right">إضافة كفيل</a></br></br>

            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title float-right ">جميع الكفلاء</h4>
                </div>
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
                            <tr  ng-repeat="(index,item) in users">
                                <td>{{index + 1}}</td>
                                <td>{{item.firstName }} {{item.secondName}} {{item.thirdName}} {{item.fourthName}}</td>
                                <td>{{item.type}}</td>

                                <td ng-if="item.countryOfResidence == 1">فلسطين</td>
                                <td ng-if="item.countryOfResidence == 2">مصر</td>
                                <td ng-if="item.countryOfResidence == 3">لبنان</td>
                                <td ng-if="item.countryOfResidence == 4">سوريا</td>
                                <td ng-if="item.countryOfResidence == 5">الأردن</td>

                                <td>{{item.address}}</td>
                                 <td>{{item.phone1}}</td>

                                <td>
                                    <a href="#!edit/{{item.id}} " class="btn btn-primary btn-sm ">
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
        </div>
    </div>
