<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="utf-8">


    <title>sponsor</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>

<body style="direction: rtl; margin:20px; ">

  <div class="container">
    <h3 class="text-center text-danger">  بحث عن الكفلاء</h3>

    <form method="post"  action="{{'search'}}" style="text-align: right;">
        @csrf
        <div class="container-fluid" style="text-align:right">
            <fieldset class="border" style="width: 85%;margin: auto">
                <legend class="w-auto"> محددات البحث   </legend>

                <div class="text-center">
                    <input type="radio"   name="type" value="شخص" id="r1" />شخصي
                    <input type="radio"  class="mr-4"   name="type" id="r2" value="مؤسسة" /> مؤسسة
                </div>

                <div  id="form1">
                    <div class="m-2">
                        <label class="mr-5 ">الاسم</label>
                        <input class="mr-3" type="text" name="firstName" >
                        <input class="mr-0" type="text" name="secondName" >
                        <input class="mr-0" type="text" name="thirdName" >
                        <input class="mr-0" type="text" name="fourthName" >
                    </div>
                    <div class="row mt-3">
                        <div class="col-4">
                        <label class="mr-5">المحافظة</label>
                        <select class="mr-3 " name="governorate">
                            @foreach($govs as $item)
                                <option >{{$item->name}}</option>
                            @endforeach
                        </select>
                        </div>
                        <div class="col-4">
                        <label class="mr-4 ">المدينة</label>
                        <select class="mr-3" name="city">
                            @foreach($cities as $item)
                                <option >{{$item->name}}</option>
                            @endforeach
                        </select>
                        </div>
                    </div >

                    <div class="row mt-3">
                        <div class="col-4">
                            <label class="mr-5">الجنسية</label>
                            <select class="mr-4 " name="nationality">
                                @foreach($nationalities as $item)
                                    <option >{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-4">
                            <label class="mr-4 ">الدولة</label>
                            <select class="mr-3" name="countryOfResidence">
                                @foreach($countries as $item)
                                    <option >{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div >
                    <div class=" m-3 ">
                        <label class="mr-4">مسؤول الاتصال</label>
                        <input class=" col-9" type="text" name="contactPerson" >
                    </div>
                    <div >
                    <label class="mr-4"> رقم بطاقة التعريف </label>
                    <input type="number" name="identificationNum"  min="0" >
                    </div>
                </div>
            </fieldset>

        </div>
        <div class="text-center m-3">
            <input class="btn btn-danger " type="submit" value="بحث">
        </div>
    </form>

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
                            @foreach($allUsers as $key=>$item)
                                <tr >
                                    <td>{{$key + 1}}</td>
                                    <td>{{$item->firstName ." ".$item->secondName ." ".$item->thirdName ." ".$item->fourthName}}</td>
                                    <td>{{$item->type}}</td>
                                    <td>{{$item->countryOfResidence}}</td>
                                    <td>{{$item->address}}</td>
                                    <td>{{$item->phone1}}</td>

                                    <td>
                                        <a href=" {{route('sponsor.edit',$item->id)}}" class="btn btn-primary btn-sm ">
                                            <i >تعديل</i></a>

                                        <form id="delete-form-{{ $item->id }}" action="{{ route('sponsor.destroy',$item->id) }}"
                                              style="display: none;" method="POST">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                        <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                                            event.preventDefault();
                                            document.getElementById('delete-form-{{ $item->id }}').submit();
                                            }else {
                                            event.preventDefault();
                                            }"><i>حذف</i></button>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    <!--  links -->
                        <nav aria-label="Page navigation example">
                            <ul class="pagination ">
                                <li class="page-item"><a class="page-link" href="{{$allUsers->url(1)}}">الأول</a></li>
                                <li class="page-item"><a class="page-link" href="{{$allUsers->previousPageUrl()}}">السابق</a></li>
                                <li class="page-item"><a class="page-link" href="{{ $allUsers->nextPageUrl() }}">التالي</a></li>
                                <li class="page-item"><a class="page-link" href="{{$allUsers->url($allUsers->lastPage())}}">الأخير</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </fieldset>
     </div>
  </div>

 </body>
</html>

