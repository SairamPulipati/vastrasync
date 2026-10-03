<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS Terminal | Men's Wedding Studio</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/favicon.svg') }}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/modern-theme.css') }}">

    <style>
        .pos-header-badge {
            background: linear-gradient(135deg, #4f46e5 0%, #3730a3 100%);
            color: #ffffff;
            padding: 8px 16px;
            border-radius: var(--radius-sm);
            font-weight: 700;
            letter-spacing: 0.5px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        .scanner-card {
            background: #ffffff;
            border-radius: var(--radius-md);
            border: 1px solid var(--border-color);
            padding: 20px;
            box-shadow: var(--shadow-sm);
        }
        .bill-card {
            background: #ffffff;
            border-radius: var(--radius-md);
            border: 1px solid var(--border-color);
            box-shadow: var(--shadow-sm);
            overflow: hidden;
        }
        .pos-summary-table td {
            padding: 8px 12px;
            vertical-align: middle;
            border: none;
        }
        .qty-badge {
            background: #e0e7ff;
            color: #3730a3;
            font-weight: 700;
            padding: 4px 10px;
            border-radius: 6px;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            transition: all 0.2s;
        }
        .qty-badge:hover {
            background: #4f46e5;
            color: #ffffff;
        }
        .grand-total-display {
            font-size: 26px;
            font-weight: 800;
            color: #10b981;
            line-height: 1;
        }
    </style>
</head>
<body>
    @include('Admin.sidebarmenu')

    <div id="main">
        <!-- Top Navigation -->
        <div class="top-navbar">
            <div class="d-flex align-items-center">
                <button class="brand-toggle-btn mr-3" onclick="openNav()" title="Toggle Sidebar">
                    <i class="fa-solid fa-bars mr-1"></i> Menu
                </button>
                <div class="pos-header-badge">
                    <i class="fa-solid fa-cash-register"></i> POS TERMINAL
                </div>
            </div>
            <div class="d-flex align-items-center">
                <a href="{{ route('Dashboard') }}" class="btn btn-sm btn-outline-secondary mr-3" style="border-radius: 8px;">
                    <i class="fa-solid fa-arrow-left mr-1"></i> Back to Dashboard
                </a>
                <div class="user-profile-badge">
                    <div class="user-avatar">
                        {{ strtoupper(substr(Auth::user()->name ?? 'C', 0, 1)) }}
                    </div>
                </div>
            </div>
        </div>

        <!-- Scanner & Customer Meta Row -->
        <div class="scanner-card mb-4">
            <div class="row align-items-center">
                <!-- Barcode Scanner Input -->
                <div class="col-lg-4 col-md-12 mb-3 mb-lg-0">
                    <label class="font-weight-bold mb-1" style="font-size: 13px; color: #1e293b;">
                        <i class="fa-solid fa-barcode text-primary mr-1"></i> Barcode Scanner / SKU
                    </label>
                    <div class="input-group">
                        <input onkeyup="poscheck()" id="posnumber" name="posnumber" type="text" class="form-control" placeholder="Scan barcode or type SKU..." autofocus style="border-radius: 8px 0 0 8px;">
                        <input type="hidden" id="randomnumber" name="randomnumber" value="{{ $randomString }}">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button" onclick="dataentered()" style="background: #4f46e5; border-color: #4f46e5; border-radius: 0 8px 8px 0;">
                                <i class="fa-solid fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                    <small class="text-muted" style="font-size: 11px;">Scans automatically at 10 digits or press Enter</small>
                </div>

                <!-- Customer Details -->
                <div class="col-lg-5 col-md-7 mb-3 mb-lg-0">
                    <div class="row">
                        <div class="col-6">
                            <label class="font-weight-bold mb-1" style="font-size: 13px; color: #1e293b;">
                                <i class="fa-solid fa-user text-muted mr-1"></i> Customer Name <span class="text-danger">*</span>
                            </label>
                            <input type="text" required id="newCustomerName" placeholder="Client Name" class="form-control" style="border-radius: 8px; font-size: 13px;">
                        </div>
                        <div class="col-6">
                            <label class="font-weight-bold mb-1" style="font-size: 13px; color: #1e293b;">
                                <i class="fa-solid fa-phone text-muted mr-1"></i> Phone <span class="text-danger">*</span>
                            </label>
                            <input type="text" required id="newCustomerPhone" placeholder="Mobile Number" class="form-control" style="border-radius: 8px; font-size: 13px;">
                        </div>
                    </div>
                </div>

                <!-- Sales Associate -->
                <div class="col-lg-3 col-md-5">
                    <label class="font-weight-bold mb-1" style="font-size: 13px; color: #1e293b;">
                        <i class="fa-solid fa-user-tag text-muted mr-1"></i> Sales Associate
                    </label>
                    <select id="salesmen" class="form-control" style="border-radius: 8px; font-size: 13px;">
                        @foreach($Salesmen as $men)
                        <option value="{{ $men->id }}">{{ $men->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Left: Cart Items Table -->
            <div class="col-lg-8 mb-4">
                <div class="bill-card p-4">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="font-weight-bold mb-0" style="color: #0f172a;">
                            <i class="fa-solid fa-cart-shopping mr-2 text-primary"></i> Current Order Items
                        </h5>
                        <span class="badge badge-light px-3 py-2" style="font-size: 12px; border: 1px solid #e2e8f0;">
                            {{ count($data) }} {{ count($data) === 1 ? 'Item' : 'Items' }}
                        </span>
                    </div>

                    <div class="table-responsive">
                        <table id="billingTable" class="table">
                            <thead>
                                <tr>
                                    <th style="width: 50px;">#</th>
                                    <th>Product Name</th>
                                    <th>Unit Price</th>
                                    <th>Qty</th>
                                    <th>Subtotal</th>
                                    <th class="text-center" style="width: 60px;">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                @forelse($data as $info)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>
                                        <div class="font-weight-bold" style="color: #1e293b;">{{ $info->productdetails->name ?? 'Custom Item' }}</div>
                                        <small class="text-muted">{{ $info->productdetails->barcode ?? '' }}</small>
                                    </td>
                                    <td>
                                        @if(($info->productdetails->type ?? '') == 'customized')
                                        <span>₹{{ number_format($info->price, 2) }}</span>
                                        <button class="btn btn-sm btn-outline-primary ml-1" onclick="priceadd('{{ $info->id }}')" title="Change Custom Price" style="border-radius: 4px; padding: 1px 6px;">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </button>
                                        @else
                                        <span>₹{{ number_format($info->price, 2) }}</span>
                                        @endif
                                    </td>
                                    <td>
                                        <span class="qty-badge" onclick="quantityadd('{{ $info->id }}')" title="Click to adjust quantity">
                                            {{ $info->quantity }} <i class="fa-solid fa-plus" style="font-size: 9px;"></i>
                                        </span>
                                    </td>
                                    <td class="font-weight-bold" style="color: #0f172a;">
                                        ₹{{ number_format($info->price * $info->quantity, 2) }}
                                    </td>
                                    <td class="text-center">
                                        <button type="button" class="btn-action-delete" onclick="deleteproduct('{{ $info->id }}')" title="Remove item">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                                @empty
                                <tr>
                                    <td colspan="6" class="text-center py-5 text-muted">
                                        <i class="fa-solid fa-basket-shopping fa-3x mb-3 text-muted" style="opacity: 0.3;"></i>
                                        <p class="mb-0">No items added to order yet. Scan barcode or SKU to begin.</p>
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Right: Order Summary & Checkout -->
            <div class="col-lg-4">
                <div class="pos-summary-box mb-4">
                    <h5 class="font-weight-bold mb-3" style="color: #0f172a;">
                        <i class="fa-solid fa-receipt mr-2 text-primary"></i> Payment Summary
                    </h5>

                    <table class="table pos-summary-table mb-3">
                        <tr>
                            <td class="text-muted font-weight-bold">Grand Total:</td>
                            <td class="text-right">
                                <span class="grand-total-display">₹<span id="grandtotal">{{ $total }}</span></span>
                                <input type="hidden" id="total" value="{{ $total }}">
                            </td>
                        </tr>
                        <tr>
                            <td class="text-muted font-weight-bold">Discount (₹):</td>
                            <td class="text-right">
                                <div class="input-group input-group-sm ml-auto" style="max-width: 140px;">
                                    <input type="number" id="discount" name="discount" placeholder="0" class="form-control text-right" style="border-radius: 6px 0 0 6px;">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" onclick="Discount()" style="border-radius: 0 6px 6px 0;">Apply</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-muted font-weight-bold">Payable Total:</td>
                            <td class="text-right font-weight-bold" style="font-size: 16px; color: #1e1b4b;">
                                ₹<span id="FinalTotal">{{ $total }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-muted font-weight-bold">Advance Payment:</td>
                            <td class="text-right">
                                <div class="input-group input-group-sm ml-auto" style="max-width: 140px;">
                                    <input type="number" id="partialpayment" name="partialpayment" placeholder="0" class="form-control text-right" style="border-radius: 6px 0 0 6px;">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" onclick="PartialPayment()" style="border-radius: 0 6px 6px 0;">Apply</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr style="border-top: 1px dashed #cbd5e1;">
                            <td class="font-weight-bold" style="color: #dc2626;">Remaining Balance:</td>
                            <td class="text-right font-weight-bold" style="font-size: 16px; color: #dc2626;">
                                ₹<span id="Balance">0</span>
                            </td>
                        </tr>
                    </table>

                    <div class="form-group mb-3">
                        <label class="font-weight-bold mb-1" style="font-size: 13px; color: #1e293b;">
                            <i class="fa-solid fa-credit-card mr-1 text-muted"></i> Payment Method
                        </label>
                        <select id="payment" class="form-control" name="paymentOptions" style="border-radius: 8px;">
                            <option value="cash">Cash Payment</option>
                            <option value="upi">UPI / QR Code</option>
                            <option value="debitCard">Debit Card</option>
                            <option value="creditCard">Credit Card</option>
                        </select>
                    </div>

                    <div class="d-flex flex-column gap-2 mt-4" style="gap: 10px;">
                        <button class="btn btn-success btn-lg btn-block font-weight-bold shadow-sm" id="purchasebutton" onclick="Print()" style="border-radius: 10px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); border: none; padding: 12px;">
                            <i class="fa-solid fa-check-circle mr-2"></i> Pay &amp; Generate Invoice
                        </button>
                        <a href="{{ url('printpdf') }}" id="printpdf" class="btn btn-info btn-lg btn-block font-weight-bold" style="display: none; border-radius: 10px;">
                            <i class="fa-solid fa-file-pdf mr-2"></i> View / Download Invoice PDF
                        </a>
                        <button class="btn btn-outline-danger btn-block" onclick="cancelAll()" style="border-radius: 8px;">
                            <i class="fa-solid fa-rotate-left mr-1"></i> Clear Cart
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/sidebar.js') }}"></script>

    <script type="text/javascript">
        $('#printpdf').hide();

        function poscheck() {
            var randomnumber = $('#randomnumber').val();
            var posnumber = $('#posnumber').val();
            if(posnumber.length == 10) {
                $('#posnumber').val('');
                $.ajax({
                    url: '{{ url("purchaseproduct") }}',
                    type: 'GET',
                    data: {
                        'posnumber': posnumber,
                        'randomnumber': randomnumber
                    },
                    dataType: 'json',
                    success: function() {
                        location.reload();
                    },
                    error: function() {
                        alert("Product not found or invalid barcode.");
                    }
                });
            }
        }

        function dataentered() {
            var posnumber = $('#posnumber').val();
            if(!posnumber) {
                alert("Please enter a SKU or Barcode");
                return;
            }
            $('#posnumber').val('');
            $.ajax({
                url: '{{ url("purchasedcustomizedproduct") }}',
                type: 'GET',
                data: { 'id': posnumber },
                dataType: 'json',
                success: function() {
                    location.reload();
                },
                error: function() {
                    alert("Unable to find custom product.");
                }
            });
        }

        function Print() {
            var totalprice = '{{ $total }}';
            var salesmen = $('#salesmen').val();
            var payment = $('#payment').val();
            var customername = $('#newCustomerName').val();
            var customernumber = $('#newCustomerPhone').val();
            var partialpayment = $('#partialpayment').val() || 0;
            var discount = $('#discount').val() || 0;
            var grandtotal = parseFloat($('#grandtotal').text()) || 0;

            if(!customername || !customernumber) {
                alert('Please enter Customer Name and Phone Number.');
                return;
            }

            if(grandtotal <= 0) {
                alert('Cart is empty. Please add products before checking out.');
                return;
            }

            $.ajax({
                url: '{{ url("purchaseproducts") }}',
                type: 'GET',
                data: {
                    'salesmen': salesmen,
                    'paymentmode': payment,
                    'customername': customername,
                    'customernumber': customernumber,
                    'totalprice': totalprice,
                    'partialpay': partialpayment,
                    'discount': discount
                },
                dataType: 'json',
                success: function(data) {
                    $('#printpdf').show();
                    $('#purchasebutton').hide();
                    alert('Sale completed successfully! Invoice ready.');
                },
                error: function() {
                    alert('Error saving transaction. Please verify data.');
                }
            });
        }

        function quantityadd(id) {
            var qunty = window.prompt("Enter new quantity:");
            if(qunty && qunty > 0) {
                $.ajax({
                    url: '{{ url("addquantity") }}',
                    type: 'GET',
                    data: {
                        'id': id,
                        'quantity': qunty
                    },
                    dataType: 'json',
                    success: function() {
                        location.reload();
                    }
                });
            }
        }

        function priceadd(id) {
            var price = window.prompt("Enter new price (₹):");
            if(price && price > 0) {
                $.ajax({
                    url: '{{ url("Addpricetoproduct") }}',
                    type: 'GET',
                    data: {
                        'id': id,
                        'price': price
                    },
                    dataType: 'json',
                    success: function() {
                        location.reload();
                    }
                });
            }
        }

        function deleteproduct(id) {
            if(confirm("Remove this item from the cart?")) {
                $.ajax({
                    url: '{{ url("DeleteProductFromBill") }}',
                    type: 'GET',
                    data: { 'id': id },
                    dataType: 'json',
                    success: function() {
                        location.reload();
                    }
                });
            }
        }

        function cancelAll() {
            if(confirm("Are you sure you want to clear the entire cart?")) {
                $.ajax({
                    url: '{{ url("cancelAll") }}',
                    type: 'GET',
                    data: {},
                    dataType: 'json',
                    success: function() {
                        location.reload();
                    }
                });
            }
        }

        function Discount() {
            var discount = parseFloat($('#discount').val()) || 0;
            var total = parseFloat($('#grandtotal').text()) || 0;
            var afterDiscount = Math.max(0, total - discount);
            $('#FinalTotal').text(afterDiscount.toFixed(2));
            PartialPayment();
        }

        function PartialPayment() {
            var finalTotal = parseFloat($('#FinalTotal').text()) || 0;
            var partial = parseFloat($('#partialpayment').val()) || 0;
            var balance = Math.max(0, finalTotal - partial);
            $('#Balance').text(balance.toFixed(2));
        }
    </script>
</body>
</html>
