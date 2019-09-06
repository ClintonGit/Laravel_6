<!DOCTYPE HTML>
<html>
<head>
    <title>Title of the document</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="url" content="{{ URL("/") }}">

</head>
<style>
    input{
        font-size:25px;
    }
    textarea{
        font-size:25px;
    }
</style>
<script src="http://code.jquery.com/jquery-1.11.1.js" ></script>

<body>

    <input type="text" name="fname" placeholder="กรุณากรอกชื่อ" /> <br>
    <input type="text" name="lname" placeholder="กรุณากรอกนามสกุล" /> <br>
    <textarea name="address" placeholder="กรุณากรอกที่อยู่" ></textarea> <br>
    <input type="text" name="username" placeholder="กรุณากรอกชื่อผู้ใข้" /> <br>
    <input type="password" name="password" placeholder="กรุณากรอกรหัสผ่าน" /> <br>
    <input type="button" onclick="Add()" value="ส่งข้อมูล" /> <br>

</body>

</html>
<script>

    var url = $('meta[name="url"]').attr('content');


    function Add(){

        var DataForm = new FormData();

        DataForm.append('fname',$("input[name=fname]").val());
        DataForm.append('lname',$("input[name=lname]").val());
        DataForm.append('address',$("textarea[name=address]").val());
        DataForm.append('password',$("input[name=password]").val());



        $.ajax({
            contentType: false,
            url:url+'/user',
            data:DataForm,
            processData: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method:"POST",
            success:success (),
            error:error (),
        });


        function success(data) {

        }

        function error(data) {

        }

    }



</script>
