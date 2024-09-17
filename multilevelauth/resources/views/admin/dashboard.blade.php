<!DOCTYPE html>
<html lang="en">

<head>


    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <style type="text/css">


        .content-table{
            border-collapse: collapse;
            margin-right: 25px 0;
            font-size: 0.9em;
            min-width: 400px;
            border-radius: 5px 5px 0 0;
            overflow:hidden;
            box-shadow: 0 0 20px rgba(0,0,0,0.15);
            background-color:ivory;
        }

        .content-table thead tr{
            background-color: rgb(60, 151, 167);
            color: ivory;
            text-align: left;
            font-weight: bold;
        }


        .content-table th,
        .content-table td{
            padding: 12px 15px;

        }

        .content-table tbody tr{
            border-bottom: 2px solid #ddddd;
        }

        .content-table tbody tr:nth-of-type(even){
        background-color: #f3f3f3;
        }



        .content-table tbody tr:last-of-type{
            border-bottom: 2px solid #007898;
        }

        body {
  font-family: "Roboto", sans-serif !important;
font-weight: 400;
font-style: normal;
background-color:darkseagreen
    }




    #update{
   }

    #delete{

    }

    form{
        text-align:center;
        font-size: 30px;
    }
    </style>

</head>
<body>

<center>
    <h1>Admin Panel</h1>


<table class="content-table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email Address</th>
            <th>Street</th>
            <th>City</th>
            <th>Region</th>
            <th>Contact Number</th>
            <th>User Type</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    @foreach($users as $user)
    <tbody>
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->street }}</td>
            <td>{{ $user->city }}</td>
            <td>{{ $user->state }}</td>
            <td>{{ $user->contactNum }}</td>
            <td>{{ $user->usertype }}</td>
            <td><a id="update" class="btn btn-success" href="{{ url('admin/edit_users',$user->id) }}"> Update </a></td>
            <td><a id="delete" class="btn btn-danger" href="{{ url('admin/delete_users',$user->id)}}"</a>Delete</a></td>
        </tr>
    </tbody>
    @endforeach

</table>

</center>

    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <button class="btn btn-primary" :href="route('logout')"
                onclick="event.preventDefault();
                            this.closest('form').submit();">
            {{ __('Log Out') }}


        </button>
    </form>


</body>
</html>
