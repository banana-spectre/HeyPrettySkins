<x-app-layout>
    <x-slot name="header"></x-slot>

    <div class="container-fluid">
    <div class="row">
      <center>       
      <div id="create-users-container">
        <p id="create-user">EDIT USER</p>
        <form action="{{route('users.update', $user->id)}}" method="POST">
          {{method_field('PUT')}}
          {{csrf_field()}}

            <table>
              <tr>
                <td>
                  <label for="full-name"><b>Name</b></label><br>
                  <input type="text" name="name" id="name" class="form-control" value="{{$user->name}}"></br>
                </td>
              </tr>

              <tr>
                <td>   
                  <br><label for="email"><b>Email</b></label><br>
                  <input type="text" name="email" id="email" class="form-control" value="{{$user->email}}"></br>
                </td>
              </tr>
 
              <tr>
                <td>
                  <br><label for="password"><b>Password</b></label><br><br>
                  <b-radio-group v-model="password_options">
                  <input type="radio" name="password_options" value="keep">Do Not Change Password</b-radio><br>
                  <input type="radio" name="password_options" value="manual">Manually Set New Password</b-radio><br>
                  <p class="control">
                    <input type="text" class="input" name="password" id="password" placeholder="Manually give a password to this user">
                  </p>
                  </b-radio-group>
                </td>
              </tr>

              <tr>
                <label for="role" style="margin-right:200px"><b>Role</b></label>
                <p class="control" style="text-align:left; padding-left:60px;">
                  @foreach ($roles as $role)
                  <input type="radio" class="input" name="role" id="role" value="{{$role->id}}">{{ $role->display_name}}<br>
                  @endforeach
                </p>
              </tr> 

              <tr>
                <td>
                  <center><br>
                  <input type="button" onclick="window.location.href='/admin/users'" value="Close">
                  <input type="submit" value="Save" class="button is-primary">
                  </center><br>
                </td>
              </tr>
            </table>
        </form>
      </div>
    </div>
  </div>
</x-app-layout>