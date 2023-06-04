<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Invoice</title>
  <style>
    body {
      background-color: #F6F6F6;
      margin: 0;
      padding: 0;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      margin: 0;
      padding: 0;
    }

    p {
      margin: 0;
      padding: 0;
    }

    .container {
      width: 80%;
      margin-right: auto;
      margin-left: auto;
    }

    .brand-section {
      background-color: #0d1033;
      padding: 10px 40px;
    }

    .logo {
      width: 50%;
    }

    .row {
      display: flex;
      flex-wrap: wrap;
    }

    .col-6 {
      width: 50%;
      flex: 0 0 auto;
    }

    .text-white {
      color: #fff;
    }

    .company-details {
      float: right;
      text-align: right;
    }

    .body-section {
      padding: 16px;
      border: 1px solid gray;
    }

    .heading {
      font-size: 20px;
      margin-bottom: 08px;
    }

    .sub-heading {
      color: #262626;
      margin-bottom: 05px;
    }

    table {
      background-color: #fff;
      width: 100%;
      border-collapse: collapse;
    }

    table thead tr {
      border: 1px solid #111;
      background-color: #f2f2f2;
    }

    table td {
      vertical-align: middle !important;
      text-align: center;
    }

    table th,
    table td {
      padding-top: 08px;
      padding-bottom: 08px;
    }

    .table-bordered {
      box-shadow: 0px 0px 5px 0.5px gray;
    }

    .table-bordered td,
    .table-bordered th {
      border: 1px solid #dee2e6;
    }

    .text-right {
      text-align: end;
    }

    .w-20 {
      width: 20%;
    }

    .float-right {
      float: right;
    }
  </style>
</head>

<body>

  <div class="container">
    <div class="brand-section">
      <div class="row">
        <div class="col-6">
          <h1 class="text-white">Invoice</h1>
        </div>
        <div class="col-6">
          <div class="company-details">
            <p class="text-white">assdad asd asd</p>
            <p class="text-white">+91 888555XXXX</p>
          </div>
        </div>
      </div>
    </div>

    <div class="body-section">
      <div class="">
        <div class="">
          <h2 class="heading">Invoice No.: 001</h2>
          <p class="sub-heading">Tracking No. <?php echo e($order->tracking_no); ?> </p>
          <p class="sub-heading">Order Date: <?php echo e(date('d-M-Y', strtotime($order['created_at']))); ?> </p>
          <p class="sub-heading">Email Address: <?php echo e($order->relUser->email); ?> </p>
        </div>
        <div class="">
          <p class="sub-heading">Full Name: <?php echo e($order->relShippingAddress->name); ?></p>
          <p class="sub-heading">Address: <?php echo e($order->relShippingAddress->address); ?></p>
          <p class="sub-heading">Phone Number: <?php echo e($order->relShippingAddress->contact); ?></p>
          <p class="sub-heading">City,State,Pincode: <?php echo e($order->relShippingAddress->city); ?>, <?php echo e($order->relShippingAddress->state); ?>, <?php echo e($order->relShippingAddress->pincode); ?></p>
        </div>
      </div>
    </div>

    <div class="body-section">
      <h3 class="heading">Ordered Items</h3>
      <br>
      <table class="table-bordered">
        <thead>
          <tr>
            <th>Product</th>
            <th class="w-20">Price</th>
            <th class="w-20">Quantity</th>
            <th class="w-20">Grandtotal</th>
          </tr>
        </thead>
        <tbody>
          <?php $__currentLoopData = $order->relOrderItem; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e($row->relProduct->title); ?></td>
            <td><?php echo e($row['price']); ?></td>
            <td><?php echo e($row['quantity']); ?></td>
            <td><?php echo e($row['amount']); ?></td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td colspan="3" class="text-right">Sub Total</td>
            <td> <?php echo e($order->total_amount); ?></td>
          </tr>
          <tr>
            <td colspan="3" class="text-right">Tax Total %1X</td>
            <td> 2</td>
          </tr>
          <tr>
            <td colspan="3" class="text-right">Grand Total</td>
            <td> <?php echo e($order->total_amount); ?></td>
          </tr>
        </tbody>
      </table>
      <br>
      <h3 class="heading">Payment Status: <?php echo e($order->payment_status); ?></h3>
      <h3 class="heading">Payment Mode: <?php echo e($order->payment_mode); ?></h3>
    </div>

    <div class="body-section">
      <p>&copy; Copyright 2021 - Ecommerce. All rights reserved.
        <a href="https://www.newmotivetechnology.com/" class="float-right">www.newmotivetechnology.com</a>
      </p>
    </div>
  </div>

</body>

</html><?php /**PATH C:\xampp\htdocs\eco_V1\resources\views/admin/orders/generate_invoice.blade.php ENDPATH**/ ?>