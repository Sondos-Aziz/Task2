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
        <h3 class="text-center"><a href="#" class="text-danger " >إضافة كفيل</a></h3>

        <form method="post"  action="{{route('sponsor.store')}}" style="text-align: right;">
               @csrf
          <div class="container-fluid" style="text-align:right">
              <fieldset class="border" style="width: 85%;margin: auto">
                <legend class="w-auto">بيانات الكفيل   </legend>

                <div class="text-center">
                    <input type="radio"   name="type" value="شخص" id="r1" />شخصي
                    <input type="radio"  class="mr-4"   name="type" id="r2" value="مؤسسة" /> مؤسسة
                </div>

                <div  id="form1">
                        <div class="m-2">
                            <label class="ml-3 mr-1"> بطاقة التعريف </label>
                            <input type="radio"  name="definitionType" value="هوية" />هوية
                            <input type="radio"  class="mr-2" name="definitionType" value="جواز سفر" /> جواز سفر
                            <label class="m-4"> رقم بطاقة التعريف </label>
                            <input type="number" name="identificationNum"  min="0" >
                        </div>
                        <div class="m-2">
                            <label class="mr-5 ">الاسم</label>
                            <input class="mr-3" type="text" name="firstNames" >
                            <input class="mr-0" type="text" name="secondNames" >
                            <input class="mr-0" type="text" name="thirdNames" >
                            <input class="mr-0" type="text" name="fourthNames" >
                        </div>
                        <div class="m-3">
                            <label class="mr-4">المحافظة</label>
                            <select class="mr-3" name="governorate">
                                @foreach($govs as $item)
                                    <option >{{$item->name}}</option>
                                @endforeach
                            </select>
                            <label class="mr-4 ">المدينة</label>
                            <select class="mr-3" name="city">
                                @foreach($cities as $item)
                                    <option >{{$item->name}}</option>
                                @endforeach
                            </select>
                            <label class="mr-4 ">الحي</label>
                            <select class="mr-3" name="neighborhood">
                                @foreach($neighs as $item)
                                    <option >{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div >
                        <div class="m-3">
                            <label class="mr-1">تفاصيل العنوان</label>
                            <input class=" col-9" type="text" name="detailAddress" >
                        </div>
                        <div class="m-3">
                            <label class="mr-5 ">الهاتف</label>
                            <input class="mr-3" type="number" name="phone" min="0">
                            <label class="mr-4 ">الجوال</label>
                            <input class="mr-3" type="text" name="mobile" >
                        </div>
                        <div class="m-3">
                            <label class="mr-5 ">البريد</label>
                            <input class="mr-3" type="text" name="emails" >
                            <label class="mr-4 ">كلمة السر</label>
                            <input class="mr-3" type="password" name="passwords" >
                        </div>

                        <div class="m-3 mb-4"  >
                            <label class="mr-4">الجنسية</label>
                            <select class="mr-4" name="nationality">
                                @foreach($nationalities as $item)
                                    <option >{{$item->name}}</option>
                                @endforeach
                            </select>
                            <label class="mr-5 ">دولة الإقامة</label>
                            <select class="mr-4" name="countryOfResidence">
                                @foreach($countries as $item)
                                    <option >{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                </div>

                <div  id="form2">
                        <div class="m-2">
                            <label class="mr-4 ">دولة الإقامة</label>
                            <select class="mr-3" name="countryOfResidence">
                                @foreach($countries as $item)
                                    <option >{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="m-2">
                            <label class="mr-5 ">الاسم</label>
                            <input class="mr-3" type="text" name="firstName" >
                            <input class="mr-0" type="text" name="secondName" >
                            <input class="mr-0" type="text" name="thirdName" >
                            <input class="mr-0" type="text" name="fourthName" >
                        </div>
                        <div class="m-1">
                            <label class="mr-1">مسؤول الاتصال</label>
                            <input class=" col-9" type="text" name="contactPerson" >
                        </div>
                        <div class="m-2">
                            <label class="mr-5"> العنوان</label>
                            <input class="mr-2 col-9" type="text" name="address" >
                        </div>
                        <div class="m-2">
                            <label class="mr-5 ">الهاتف1</label>
                            <input class="mr-2" type="number" name="phone1" min="0">
                            <label class="mr-5 ">الهاتف2</label>
                            <input class="mr-3" type="number" name="phone2" min="0" >
                        </div>
                        <div class="m-3">
                            <label class="mr-5 ">البريد</label>
                            <input class="mr-3" type="text" name="email" >
                            <label class="mr-5 ">كلمة السر</label>
                            <input class="mr-3" type="password" name="password" >
                        </div>
                </div>
              </fieldset>

          </div>
           <div class="text-center m-3">
            <input class="btn btn-danger " type="submit" value="حفظ">
            </div>
        </form>
    </div>

<script>
    $(document).ready(function () {
        $("#form2").hide();

        //hide
        $('#r1').click(function ( ) {
            $("#form2").hide();
            $("#form1").show();

         });

        $('#r2').click(function ( ) {
            $("#form1").hide();
            $("#form2").show();

        });
    });



</script>

</body>

</html>
