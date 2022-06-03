@component('mail::message')
<table class="table table-bordered" style="width:635px !important;" cellspacing="0" cellpadding="0"> 
    <thead>
    </thead>
    <tbody >
        <h2 style="text-align: center;">Hi {{ ucfirst($clientMailData['first_name']) . ' ' .ucfirst($clientMailData['last_name']) }}, Thankyou for your interst in the Workshop.</h2><br>
        <h4 style="text-align: center;color:rgb(222, 68, 68);">Please Click below to confirm your booking.</h4><br>
        <?php $title =  $clientMailData['name']; ?>
        <a href="https://api.whatsapp.com/send/?phone=00971565553483&title=$title"  style="background-color: #02d0d2;color: white;border: none;height: 35px;border-radius: 13px;padding: 10px;text-decoration: none;width: 120px; margin: 0 auto;display: block;">Confirm Booking</a>
   

</tbody>
</table>
@endcomponent
