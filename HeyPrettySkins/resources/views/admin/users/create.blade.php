<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Users page!
                    <div class="row">

      <center>
        
      <div class="create-users">
        <p id="add-user">ADD USER</p>

        <br>

        <form action="{{ route('users.store') }}" method="post">
              {!! csrf_field() !!}

        <table>
          <tr>
            <td>
              <label for="first-name">Name</label>
              <br>
              <input type="text" name="name" id="name" class="form-control"></br>
            </td>
           <tr>
              <td>   
                <br>
                <label for="email">Email</label>
                <br>
                <input type="text" name="email" id="email" class="form-control"></br>
              </td>

              <td>
              <br> &emsp;&emsp;
              <label for="password">Password</label>
              <br> &emsp;&emsp;
              <input type="text" name="password" id="password" class="form-control"></br>
              </td>
            </tr>

            <tr>
              <td>
              <br>
              <label for="role">Role</label>
              <br>
                <label><input type="checkbox" name="role" value="admin">Admin</label>
                <label><input type="checkbox" name="role" value="ceo">CEO</label>
                <label><input type="checkbox" name="role" value="executive_secretary">Executive Secretary</label>
                <label><input type="checkbox" name="role" value="sales_manager">Sales Manager</label>
                <label><input type="checkbox" name="role" value="accounting_head">Accounting Head</label>
                <label><input type="checkbox" name="role" value="warehouse_manager">Warehouse Manager</label>
                <label><input type="checkbox" name="role" value="depot">Depot</label>
            </tr>

            <tr>
              <td colspan="3">
                <br>
                <input type="submit" value="Save" class="btn btn-success">
                <input type="button" onclick="window.location.href='/admin/users'" value="Close">
                </form>
              </td>
            </tr>

          </table>
        <br>
        </div>
      </center>
      </div>

    <br>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>