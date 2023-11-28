<!DOCTYPE html>

<html>

<head>

    <title>Hi</title>

</head>

<body>
<div class="container">

<table class="table table-bordered mt-3" border="2px" >


      <tr>

                    <th>ID</th>

                    <th>Name</th>

                    <th>Email</th>

                    <th>Create_at</th>

                    <th>Update_at</th>

                </tr>

                @foreach($users as $user)

                <tr>

                    <td>{{ $user->id }}</td>

                    <td>{{ $user->name }}</td>

                    <td>{{ $user->email }}</td>

                    <td>{{ $user->created_at }}</td>

                    <td>{{ $user->updated_at }}</td>

                </tr>

                @endforeach


     </table>


 </div>    
   
</body>

</html>