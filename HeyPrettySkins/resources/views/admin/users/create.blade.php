<x-app-layout>
    <x-slot name="header"></x-slot>
        
  <div class="container-fluid">
    <div class="row">
      <center>       
      <div id="create-users-container">
        <p id="create-user">CREATE USER</p>
        <form action="{{route('users.store')}}" method="POST">
              {!! csrf_field() !!}

        <table>
          <tr>
            <td>
              <label for="full-name"><b>Name</b></label><br>
              <input type="text" name="name" id="name" class="form-control"></br>
            </td>
          </tr>

          <tr>
            <td>   
              <br><label for="email"><b>Email</b></label><br>
              <input type="text" name="email" id="email" class="form-control"></br>
            </td>
          </tr>

          <tr>
            <td>
              <br><label for="password"><b>Password</b></label><br>
              <input type="text" name="password" id="password" class="form-control" placeholder="Manually give a password to this user"></br>
              <!--<b-checkbox name="auto_generate" class="m-t-15" v-model="auto_password">Auto Generate Password</b-checkbox>-->
            </td>
          </tr>
          
          <tr>
            <label for="role" style="margin-right:310px"><b>Role</b></label>
            <p class="control" style="text-align:left; padding-left:60px;">
              @foreach ($roles as $role)
              <input type="radio" class="form-control" name="role" value="{{$role->id}}">{{ $role->display_name}}<br>
              @endforeach
            </p>
          </tr> 

          <tr>
            <td>
              <center><br>
              <input type="button" onclick="window.location.href='/admin/users'" value="Close">
              <input type="submit" value="Save" class="button is-success">
              </center><br>
            </td>
          </tr>
        </table>
        </form>
      </div>
    </div>
  </div>
</x-app-layout>
