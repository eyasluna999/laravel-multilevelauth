<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <style type="text/css">
    table{
        border: 1px solid black;
        font-size: 20px;
    }

    td{
        padding: 0.5rem;
    }
    th{
        padding: 10px;
        text-align:center;
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
    <h1>Admin Dashboard</h1>
<h2>All Users</h2>



<table>
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
    @foreach($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->street }}</td>
            <td>{{ $user->city }}</td>
            <td>{{ $user->state }}</td>
            <td>{{ $user->contactNum }}</td>
            <td>{{ $user->usertype }}</td>
            <td><a id="update" href="{{ url('admin/edit_users',$user->id) }}"> Update </a></td>
            <td><a id="delete" href="{{ url('admin/delete_users',$user->id)}}"</a>Delete</a></td>
        </tr>
    @endforeach

</table>

</center>

    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <x-dropdown-link :href="route('logout')"
                onclick="event.preventDefault();
                            this.closest('form').submit();">
            {{ __('Log Out') }}
        </x-dropdown-link>
    </form>


</body>
</html>
