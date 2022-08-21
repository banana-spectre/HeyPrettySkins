<x-app-layout>
    <x-slot name="header"></x-slot>

    <div class="container-fluid"> 

        <table class="first-tablerow">
            <tr>
                <td class="col-11"> <p id="users-info"><b>Users Information</p> </td>
                <td class="col-1"><a href="{{ url('/admin/users/create') }}" title="Add New User">
                    <button id="add-button"> +New </button>
                </a></td>
            </tr>
            <tr>
                <td class="mt-2">@include('layouts.messages')</td>
            </tr>
        </table>
		
        <!--users-->
        <table class="contain">
            <tr>
                <td>
                    <table class="col-12">

                        <tr id="second-tablerow">
                            <th width="300px" class="users-info-col" style="padding-left:20px; color:white; font-size: 1.2vw;">Name</th>
                            <th width="300px" class="users-info-col" style="padding-left:20px; color:white; font-size: 1.2vw;">Email</th>
                            <th width="300px" class="users-info-col" style="padding-left:20px; color:white; font-size: 1.2vw;">Role</th>
                            <th width="153px" class="users-info-col" style="text-align:center; color:white; font-size: 1.2vw;">Actions</th>
                        </tr>

                        <tr><td><br></td></tr>

                        @foreach($users as $item)
                            @foreach($item->roles as $role)
                        <tr>
                            <td width="500px" class="users-info-col" style="padding-left:20px;">{{ $item->name }}</td>
                            <td width="500px" class="users-info-col" style="padding-left:20px;">{{ $item->email }}</td>
                            <td width="375px" class="users-info-col" style="padding-left:20px;">{{$role->display_name}}</td>
                            <td width="153px" class="users-info-col">
                                <center>
                                <div class="col-sm-1">
                                    <a class="view" href="{{ route ('users.show', $item->id) }}" title="View User" target="_self"><i class="fa fa-eye" aria-hidden="true"></i>View</a>
                                </div><br>
                                <div class="col-sm-1">
                                    <a class="view" href="{{ route ('users.edit', $item->id) }}" title="Edit User" target="_self"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a>
                                </div><br>
                                 <div class="col-sm-1">
                                    <form method="POST" action="{{ route ('users.destroy', $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="del" title="Delete User" onclick="return confirm(&quot;Confirm delete?&quot;)"><i aria-hidden="true"></i> Delete</button>
                                    </form>
                                </div>
                                </center>
                            </td>
                        </tr>
 
                        <tr>
                            <td colspan="5"><br><hr></td>
                        </tr>
                            @endforeach
                        @endforeach
                    </table> 
                </td>
            </tr>           
        </table>
        {{ $users->links() }}
        <br>
    </div>
</x-app-layout>