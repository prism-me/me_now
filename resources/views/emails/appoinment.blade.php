@component('mail::message')
<table class="table table-bordered" style="width:635px !important;" cellspacing="0" cellpadding="0"> 
    <thead>
    </thead>
    <tbody>
        <h2 style="text-align: center;"> {{ ucfirst($clientMailData['name'])  }} has booked an appointment. Please see below the details. </h2><br>
        <table class="table table-bordered" style="background-color:#eee; border-radius: 5px; width: 550px;padding: 0px 20px;"><tbody>
        <tr style="padding:.5rem 0px;">
            <td style="text-align:left;">Name</td>
            <td style="text-align:right; font-wight:15px">{{$clientMailData['name']}}</td>
        </tr>
        <tr style="padding:.5rem 0px;">
            <td style="text-align:left;">Phone Number</td>
            <td style="text-align:right; font-wight:15px">{{$clientMailData['phone_no']}}</td>
        </tr>
        <tr style="padding:.5rem 0px;">
            <td style="text-align:left;">Date</td>
            <td style="text-align:right;font-wight:15px">{{$clientMailData['date']}}</td>
        </tr>
        <tr style="padding:.5rem 0px;">
            <td style="text-align:left;">Time</td>
            <td style="text-align:right;font-wight:15px">{{$clientMailData['time']}}</td>
        </tr>
        <tr style="padding:.5rem 0px;">
            <td style="text-align:left;">Message</td>
            <td style="text-align:right;font-wight:15px">{{$clientMailData['messages']}}</td>
        </tr>
    </tbody></table><br><br>
        
        

</tbody>
</table>
@endcomponent
