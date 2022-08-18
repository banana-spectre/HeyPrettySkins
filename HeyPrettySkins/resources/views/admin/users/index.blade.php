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
                    <table class="first-tablerow">
			<tr>
				<td class="col-11"> <p id="users-info"><b>Users Information</p> </td>
				<td class="col-1"><a href="{{ url('/admin/users/create') }}" title="Add New User">
                    <button id="buttons"> +New </button>
                </a></td>
			</tr>
		</table>
		
        <br><br>

        <!--users-->
        <table id="head">
            <tr>
                <th class="col-1 align-items-center" id="head1">#</th>
                <th class="col-3 align-items-center" id="head2">Name</th>
                <th class="col-3 align-items-center" id="head3">Email</th>
                <th class="col-3 align-items-center" id="head5">Role</th>
                <th class="col-1 align-items-center" id="head6">Actions</th>
            </tr>
        </table>

        <br><br>

        <table class="contain">
        @foreach($users as $item)
        @foreach($item->roles as $role)
            <tr>
                <td>
                    <table class="col-12" id="list">
                        <tr class="col-12">
                            <td id="col2">{{ $item->name }}</td>
                            <td id="col3">&nbsp;&nbsp;{{ $item->email }}</td>
                            <td id="col5">{{$role->display_name}}</td>

                            <td id="col6">
                                <div class="col-sm-1">
                                    <a class="view" href="{{ route ('users.show', $item->id) }}" 
                                    title="View User" target="_self">
                                    <i class="fa fa-eye" aria-hidden="true"></i>View</a>
                                </div><br>
                                <div class="col-sm-1">
                                    <a class="view" href="{{ route ('users.edit', $item->id) }}" 
                                    title="Edit User" target="_self"><i class="fa fa-pencil-square-o" 
                                    aria-hidden="true"></i>Edit</a>
                                </div><br>
                                <div class="col-sm-1">
                                <form method="POST" action="{{ url('/admin/users' . $item->id) }}" 
                                accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="del" title="Delete User" 
                                    onclick="return confirm(&quot;Confirm delete?&quot;)">
                                    <i aria-hidden="true"></i> Delete</button>
                                </form>
                                </div>

                            </td>
                        </tr> 
                        <tr>
                            <td colspan="6"><br><hr></td>
                        </tr>
                    </table> 
                </td>
            </tr>           
            @endforeach
        @endforeach

    </table>


    <br>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>