<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=q, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update User</title>

    <style type="text/css">

        div{

        padding: 15px;
        }

        label{
        display: inline-block;
        width:180px;
        }

        </style>


</head>
<body>

    <center>
        <h1>
        Update User
        </h1>




        <form action="{{ url('admin/update_users',$data->id)}}" method="Post"   enctype="multipart/form-data">

            @csrf
            <div>
                <label for="">Name</label>
                <input type="text" name="name" id="" value="{{ $data->name }}">
            </div>

            <div>
                <label for="">Email </label>
                <input type="email" name="email" id="" value="{{ $data->email }}">
            </div>



            <div>
                <label for="">Street </label>
                <input type="text" name="street" id="" value="{{ $data->street }}">
            </div>

            <div>
                <label for="">City </label>
                <input type="text" name="city" id="" value="{{ $data->city }}">
            </div>


            <div>
                <label for="">State</label>
                <input type="text" name="state" id="" value="{{ $data->state }}">
            </div>

            <div>
                <label for="">Contact Number</label>
                <input maxlength="11" type="text" name="contactNum" id="" value="{{ $data->contactNum }}">
            </div>

            <div>
                <p>Define User Type</p>
                  <input type="radio" id="admin" name="usertype" value="">
                   <label for="html">admin</label><br>
                   <input type="radio" id="user" name="usertype" value="user">
                   <label for="css">user</label><br>
             </div>


            <input type="submit" value="Update User">

        </form>


    </center>

</body>
</html>
