<x-app-layout>
    <x-slot name="header"> </x-slot>

<div class="container-fluid"> 

        <table class="first-tablerow">
			<tr>
				<td class="col-11"> <p id="title"><b>Monthly Sales Report</p> </td>
				<td class="col-1 date"><input type="date" name="custom_date" id="currentDate" class="form-control delivery-date"></td>
			</tr>
		</table>
		
        <br>

        <table class="contain">
            <tr>
                <td>
                    <table class="col-12">

                        <tr  id="second-tablerow">
                            <th width="365px" class="sales-name" style="padding-left:20px;">Sales Date</th>
                            <th width="280px" class="sales-name" style="padding-left:20px;">Bank</th>
                            <th width="380px" class="sales-name" style="padding-left:20px;">Deposit Date</th>
                            <th width="380px" class="sales-name" style="padding-left:20px;">Gross Sales</th>
                            <th width="380px" class="sales-name" style="padding-left:20px;">Daily Expenses</th>
                            <th width="250px" class="sales-name" style="padding-left:20px;">Net Sales</th>
                        </tr>

                        <tr>
                            <td><br></td>
                        </tr>

                        <tr>
                            <td width="365px" class="sales-info" style="padding-left:20px;">July 01, 2022</td>
                            <td width="280px" class="sales-info" style="padding-left:20px;">BDO</td>
                            <td width="380px" class="sales-info" style="padding-left:20px;">July 21, 2022</td>
                            <td width="380px" class="sales-info" style="padding-left:20px;">Php 69,367.00</td>
                            <td width="380px" class="sales-info" style="padding-left:20px;">P 160.00</td>
                            <td width="250px" class="sales-info" style="padding-left:20px;">P 52,377.00</td>
                        </tr>  

                        <tr>
                            <td colspan="6"><br><hr></td>
                        </tr>

                        <tr>
                            <td width="365px">&emsp;</td>
                            <td width="280px">&emsp;</td>
                            <td width="380px">&emsp;</td>
                            <td width="380px">&emsp;</td>
                            <td width="380px" class="sales-info" style="padding-left:20px; font-weight: bold; color: #F42B6D;">Total Sales</td>
                            <td width="250px"class="sales-info" style="padding-left:20px; font-weight: bold; color: #F42B6D;">P 104.754.00</td>
                        </tr> 

                        <tr>
                            <td colspan="6"><br></td>
                        </tr>

                </table> 
            </td>
        </tr>           
    </table>

    <br><br>

    <table id="download">
        <tr>
            <td><button>Download Report</button></td>
        </tr>
    </table>


    <br>
    </div> 

</div> 

<script>
        var today = new Date().toISOString().split('T')[0];
        document.getElementsByName("custom_date")[0].setAttribute('max', today);    
</script>

<script>
var date = new Date();
var currentDate = date.toISOString().slice(0,10);
var currentTime = date.getHours() + ':' + date.getMinutes();

document.getElementById('currentDate').value = currentDate;
document.getElementById('currentTime').value = currentTime;
</script>

</x-app-layout>

