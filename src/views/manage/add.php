<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm thông tin dự án</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .container{
            width: 30%;
            background-color: #146EB4;
            color:  white;
            margin-top: 4rem;
            border-radius: 10px;
            padding: 1rem;
        }
        .container h1{
            text-align: center;
            font-size: 1.5rem;
            font-weight: bold;
            color:#FF9900;
        }
        label{
            margin-top: 10px;
            font-size: .8rem;
        }
    </style>
</head>

<body>
     <div class="container">
     <h1>Thêm thông tin dự án</h1>
         <div class="row">
         <form action="" method="post">
        <div class="col-md-12">
            <div class="form-group">
                <label for="">Tên dự án</label>
                <input type="text" class="form-control" require name="txtName" required/>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label for="">Năm thực hiện</label>
                <input type="text" class="form-control" require name="txtYear"  required/>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
            <label for="">Lĩnh vực</label>
            <input type="text" class="form-control" require name="txtLinhvuc" required />
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label for="">Nhiệm vụ</label>
                <input type="text" class="form-control" require name="txtPhone" required/>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label for="">Cơ quan thực hiện</label>
                <input type="text" class="form-control" require name="txtCoquanthuchien" required/>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <input type="submit" class="btn btn-dark mt-3 w-100"  name="submit" value="Save" />
            </div>
        </div>
    </form>
         </div>
     </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>