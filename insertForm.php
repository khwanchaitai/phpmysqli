<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>บันทึกข้อมูลพนักงาน</title>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<body>
    
    <div class="container my-3">
        <h2 class="text-center">แบบฟอร์มบันทึกข้อมูล</h2>
        <!-- ส่งข้อมูลของ form -->
        <form action="insertData.php" method="POST">
            <div class="form-group">
                <label for="fisrtname">ชื่อ</label>
                <input type="text" name="fname" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="lastname">นามสกุล</label>
                <input type="text" name="lname" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="gender">เพศ</label>
                <input type="radio" name="gender" id="" value="male">ชาย
                <input type="radio" name="gender" id="" value="female">หญิง
                <input type="radio" name="gender" id="" value="other">อื่นๆ
            </div>
            <div class="form-group">
                <label for="">ทักษะ</label>
                <input type="checkbox" name="skills[]" id="" value="Java"> Java
                <input type="checkbox" name="skills[]" id="" value="PHP"> PHP
                <input type="checkbox" name="skills[]" id="" value="Python"> Python
                <input type="checkbox" name="skills[]" id="" value="HTML"> HTML
            </div>
            <input type="submit" value="บันทึกข้อมูล" class="btn btn-success">
            <input type="reset" value="ล้างข้อมูล" class="btn btn-danger">
            <a href="index.php" class="btn btn-primary">กลับหน้าแรก</a>
        </form>
        
    </div>

    
</body>
</html>