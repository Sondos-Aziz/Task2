<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="utf-8">
    <title> جميع الكفلاء</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>

<body style="direction: rtl; margin:20px; ">
    <div id="content">
        <div class="container-fluid">
            <br class="row">
            <br class="col-md-12">
            <div class="text-center">
            <a href="{{route('search')}}" class="btn btn-secondary " id="search"> بحث عن الكفلاء</a></br></br>
            </div>

            <a href="{{route('sponsor.create')}}" class="btn btn-info float-right">إضافة كفيل</a></br></br>

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
                            {{--<th>--}}
                                {{--الاسم الثاني--}}
                            {{--</th>--}}
                            {{--<th>--}}
                               {{--الاسم الثالث--}}
                            {{--</th>--}}
                            {{--<th>--}}
                               {{--الاسم الرابع--}}
                            {{--</th>--}}
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
                             @foreach($users as $key=>$item)
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
{{--                        {{$users->render()}}--}}
                        <!--  links -->
                        <nav aria-label="Page navigation example">
                            <ul class="pagination ">
                                <li class="page-item"><a class="page-link" href="{{$users->url(1)}}">الأول</a></li>
                                <li class="page-item"><a class="page-link" href="{{$users->previousPageUrl()}}">السابق</a></li>
                                <li class="page-item"><a class="page-link" href="{{ $users->nextPageUrl() }}">التالي</a></li>
                                <li class="page-item"><a class="page-link" href="{{$users->url($users->lastPage())}}">الأخير</a></li>
                            </ul>
                        </nav>

                    </div>
                </div>
            </div>
        </div>
    </div>


<script>
    $('#search').click(function ( ) {
     document.getElementById("#content").show();
    console.log("jj")

    });
</script>

</body>
</html>

