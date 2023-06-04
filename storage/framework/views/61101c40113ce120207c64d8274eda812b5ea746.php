<h4>I want to pay 1 USD</h4>
<form method="post" action="<?php echo URL::to('paypal'); ?>" >
    <?php echo csrf_field(); ?>
   <input type="hidden" name="amount" value="1"> 
   <input type="submit" name="paynow" value="Pay Now">
</form><?php /**PATH C:\xampp\htdocs\eco_V1\resources\views/myOrder.blade.php ENDPATH**/ ?>