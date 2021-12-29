<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <title>สมัครสมาชิก</title>
</head>

<style>
    .bg {
        background-color: #FFF4E0;
        ;
    }
</style>

<body class="bg">
    <div class="container">
        <div class="head">

            <div class="row col-md-2 mx-auto">
                <div>
                    <img
                        src="https://scontent.xx.fbcdn.net/v/t1.15752-9/263800363_632087001314699_3746873862771308394_n.jpg?_nc_cat=110&ccb=1-5&_nc_sid=aee45a&_nc_eui2=AeEc5e_1GhX5Nj4wbhkcfOxf9HdN9pn8pZb0d032mfyllsd7Z6-TPxV20ZCrjbQuH-5u-e2jGKsnuQ8ClQGyMi79&_nc_ohc=FXfEjKEStgcAX8-h4kr&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AVKv6AYEsOS-Dda4Ui01pLCjYq15aWXC9gs4kZfmJ_iVWg&oe=61DEFE02">
                </div>
            </div>

            <!--<p><h1 class="text-center">Bakery</h1></p>-->

            <form action="">
                <div class="col-md-4 mx-auto">

                        <label for="Fname"> ชื่อ* : </label>
                        <input type="text" id="Fname" class="form-control" name="Fname" placeholder="ชื่อจริง"
                            required />

                        <label for="Lname"> นามสกุล* : </label>
                        <input type="text" id="Lname" class="form-control" name="Lname" placeholder="นามสกุล"
                            required />

                        <label for="Birthday"> วัน/เดือน/ปีเกิด* : </label>
                        <input type="date" id="Birthday" class="form-control" name="Birthday" placeholder="" required />

                        <label for="Email"> อีเมล์* : </label>
                        <input type="email" id="Email" class="form-control" name="Email" placeholder="" required />

                        <label for="Password"> รหัสผ่าน* : </label>
                        <input type="password" id="Password" class="form-control" name="Password" placeholder=""
                            required />

                        <label for="conPassword"> ยืนยันรหัสผ่าน* : </label>
                        <input type="password" id="conPassword" class="form-control" name="conPassword" placeholder=""
                            required />

                        <label for="Tel"> โทรศัพท์มือถือ* : </label>
                        <input type="text" class="form-control" id="tel" placeholder="xxx-xxx-xxxx"
                            onkeyup="autoTab2(this,2)" required />

                    <div class="form-check">
                        <br />
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox"
                                name="remember">ฉันได้อ่านและยอมรับข้อกำหนดการใช้งานและนโยบายความเป็นส่วนตัวของร้านเบเกอรี่
                        </label>
                    </div>

                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="remember">ฉันยินยอมรับข้อมูลข่าวสาร
                            กิจกรรมการขายต่างๆ ทางเราจะเก็บช้อมูลของท่านไว้เป็นความรับยอม
                            สามารถศึกษาเงื่อนไขความเป็นส่วนตัวเพื่มเติมได้ที่เว็บไซต์
                        </label>
                    </div>

                    <div class="col-md-4 mx-auto">
                        <br />
                        <button type="submit" class="btn btn-primary" id="btnSubmit">สมัครสมาชิก</button>
                    </div>

                </div>
            </form>
        </div>
</body>

<script>
    $("#btnSubmit").click(() => {
        var data = $.parseJSON(`{
            "Fname": "${$("#Fname").val()}", 
            "Lname": "${$("#Lname").val()}",
            "Birthday": "${$("#Birthday").val()}", 
            "tel": "${$("#tel").val()}",
            "Email": "${$("#Email").val()}",
            "Password": "${$("#Password").val()}",
            "conPassword": "${$("#conPassword").val()}"}`);
        console.log(data);
    })

    function autoTab2(obj2) {
        var Phone = new String("___-___-____");
        var Phone_id = new String("-");
        var returnText = new String("");
        var obj2_l = obj2.value.length;
        var obj2_l2 = obj2_l - 2;
        for (i = 0; i < Phone.length; i++) {
            if (obj2_l2 == i && Phone.charAt(i + 2) == Phone_id) {
                returnText += obj2.value + Phone_id;
                obj2.value = returnText;
            }
        }
        if (obj2_l >= Phone.length) {
            obj2.value = obj2.value.substr(0, Phone.length);
        }
    }
</script>

</html>
