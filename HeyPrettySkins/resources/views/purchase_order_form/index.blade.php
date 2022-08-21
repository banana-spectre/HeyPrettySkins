<x-app-layout>
    <x-slot name="header"></x-slot>

<div class="container-fluid"> 
    <table class="first-tablerow">
        <tr>
            <td class="col-12"> <p id="title"><b>Purchase Order Forms</p> </td>
        </tr>
        <tr>
            <td class="mt-2">@include('layouts.messages')</td>
        </tr>
    </table>

    <table class="contain">
            <tr>
                <td>
                    <table class="col-12">
                        <tr id="second-tablerow">
                            <th width="550rem" class="users-info-col" style="padding-left:20px; color:white; font-size: 1.2vw;">Sold To</th>
                            <th width="400rem" class="users-info-col" style="padding-left:20px; color:white; font-size: 1.2vw;">Date</th>
                            <th width="400rem" class="users-info-col" style="padding-left:20px; color:white; font-size: 1.2vw;">Form Number</th>
                            <th width="180rem" class="users-info-col" style="text-align:center; color:white; font-size: 1.2vw;">Action</th>
                        </tr>

                        <tr><td><br></td></tr>

                        <tr>
                            <td width="550rem" class="users-info-col" style="padding-left:20px;">Kageyama Tobio</td>
                            <td width="400rem" class="users-info-col" style="padding-left:20px;">Sepetember 21, 2022</td>
                            <td width="400rem" class="users-info-col" style="padding-left:20px;">Form-003</td>
                            <td width="180rem" class="users-info-col">
                                <center>
                                <div class="col-sm-1"><a class="view" href="#" title="View Form" target="_self"><i class="fa fa-eye" aria-hidden="true"></i>View</a></div>
                                </center>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="5"><br><hr></td>
                        </tr>

                        <tr>
                            <td width="550rem" class="users-info-col" style="padding-left:20px;">Hinata Shoyo</td>
                            <td width="400rem" class="users-info-col" style="padding-left:20px;">Sepetember 21, 2022</td>
                            <td width="400rem" class="users-info-col" style="padding-left:20px;">Form-003</td>
                            <td width="180rem" class="users-info-col">
                                <center>
                                <div class="col-sm-1"><a class="view" href="#" title="View Form" target="_self"><i class="fa fa-eye" aria-hidden="true"></i>View</a></div>
                                </center>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="5"><br><hr></td>
                        </tr>
                    </table> 
                </td>
            </tr>           
    </table>

</div>
</x-app-layout>