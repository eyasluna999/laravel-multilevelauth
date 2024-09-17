
<!--
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
-->


<x-guest-layout>
    <form method="POST" action="{{ url('admin/update_users',$data->id) }}">
        @csrf
<h1><center>Update User "{{ $data->name }}"</center></h1>
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$data->name" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="$data->email" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <!-- Contact Information -->
        <div class="mt-4">
            <x-input-label for="contactNum" :value="__('Contact Number')" />
            <x-text-input id="contactNum" class="block mt-1 w-full" type="number" name="contactNum" minlength="11" maxlength="11" pattern="\d{11}" :value="$data->contactNum" oninput="limitInput(this)" required autocomplete="contactNum"/>
            <x-input-error :messages="$errors->get('contact number')" class="mt-2" />
        </div>

        <!-- Street -->
        <div class="mt-4">
            <x-input-label for="street" :value="__('Street')" />
            <x-text-input id="street" class="block mt-1 w-full" type="text" name="street" :value="$data->street" required autocomplete="street" />
            <x-input-error :messages="$errors->get('street')" class="mt-2" />
        </div>

        <!-- City -->
        <div class="mt-4">
            <x-input-label for="city" :value="__('City')" />
            <x-text-input id="city" class="block mt-1 w-full" type="text" name="city" :value="$data->city" required autocomplete="username" />
            <x-input-error :messages="$errors->get('city')" class="mt-2" />
        </div>

        <!-- State -->
        <div class="mt-4">
            <x-input-label for="state" :value="__('Region')" />
            <x-text-input id="state" class="block mt-1 w-full" type="text" name="state" :value="$data->state" required autocomplete="state" />
            <x-input-error :messages="$errors->get('state')" class="mt-2" />
        </div>


        <div class="mt-4">
            <x-input-label class="mb-4" for="usertype" :value="__('User Type')"/>
            <div>
                <input type="radio" id="admin" name="usertype" value="admin"
                //Checks whether user is an admin or a user, automatically ticks the radio button of whichever usertype
                    {{ $data->usertype === 'admin' ? 'checked' : '' }}>
                <label for="admin">Admin</label><br>

                <input type="radio" id="user" name="usertype" value="user"
                    {{ $data->usertype === 'user' ? 'checked' : '' }}>
                <label for="user">User</label><br>
            </div>
        </div>

        <div class="flex items-center justify-end mt-4">

            <x-primary-button class="ms-4">
                {{ __('Update') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
<script>

function limitInput(input) {
    contactNum.value = contactNum.value.replace(/\D/, '');
    if (contactNum.value.length > 11) {
        contactNum.value = contactNum.value.slice(0, 11);

    }

}
</script>


