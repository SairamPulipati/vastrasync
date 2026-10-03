<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Showroom Dashboard | VastraSync ERP</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/favicon.svg') }}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('css/modern-theme.css') }}">
</head>
<body>
    @include('Admin.sidebarmenu')

    <div id="main">
        @include('Admin.topnavbar')

        <!-- Welcome Banner -->
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4">
            <div>
                <h4 class="font-weight-bold mb-1" style="color: #0f172a;">Showroom &amp; Production Overview</h4>
                <p class="text-muted mb-0" style="font-size: 13.5px;">Live multi-branch inventory, daily retail billing, and order collections.</p>
            </div>
            <div class="mt-3 mt-md-0 d-flex" style="gap: 10px;">
                <a href="{{ route('pos') }}" class="btn-modern-primary">
                    <i class="fa-solid fa-cash-register"></i> Open POS Terminal
                </a>
            </div>
        </div>

        <!-- 6 Metrics Cards Grid -->
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="stat-card">
                    <div class="stat-card-icon icon-purple">
                        <i class="fa-solid fa-chart-line"></i>
                    </div>
                    <div class="stat-card-info">
                        <h3>₹{{ number_format($DailyAmount ?? 0, 2) }}</h3>
                        <p>Today's Net Sales</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="stat-card">
                    <div class="stat-card-icon icon-emerald">
                        <i class="fa-solid fa-calendar-days"></i>
                    </div>
                    <div class="stat-card-info">
                        <h3>₹{{ number_format($MonthAmount ?? 0, 2) }}</h3>
                        <p>Monthly Sales Revenue</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="stat-card">
                    <div class="stat-card-icon icon-amber">
                        <i class="fa-solid fa-hand-holding-dollar"></i>
                    </div>
                    <div class="stat-card-info">
                        <h3>₹{{ number_format($RecivedAmount ?? 0, 2) }}</h3>
                        <p>Today's Received Cash</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="stat-card">
                    <div class="stat-card-icon icon-sky">
                        <i class="fa-solid fa-shirt"></i>
                    </div>
                    <div class="stat-card-info">
                        <h3>{{ $product ?? 0 }}</h3>
                        <p>Active Ethnic Outfits &amp; Garments</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="stat-card">
                    <div class="stat-card-icon icon-rose">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <div class="stat-card-info">
                        <h3>{{ $customerlist ?? 0 }}</h3>
                        <p>Registered Showroom Clients</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="stat-card">
                    <div class="stat-card-icon icon-slate">
                        <i class="fa-solid fa-money-bill-transfer"></i>
                    </div>
                    <div class="stat-card-info">
                        <h3>₹{{ number_format($partialamount ?? 0, 2) }}</h3>
                        <p>Alteration &amp; Order Advances</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Transactions Card -->
        <div class="content-box p-4 mt-2">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div>
                    <h5 class="font-weight-bold mb-1" style="color: #0f172a;">Recent Showroom Sales Transactions</h5>
                    <p class="text-muted mb-0" style="font-size: 13px;">Real-time invoices generated through the POS terminal</p>
                </div>
                <span class="badge badge-light px-3 py-2" style="border: 1px solid #e2e8f0; font-size: 12px;">
                    {{ count($Sales) }} {{ count($Sales) === 1 ? 'Record' : 'Records' }}
                </span>
            </div>

            <div class="table-responsive">
                <table id="salesTable" class="table">
                    <thead>
                        <tr>
                            <th style="width: 50px;">#</th>
                            <th>Date &amp; Time</th>
                            <th>Invoice / Ref</th>
                            <th>Customer Name</th>
                            <th>Items</th>
                            <th>Total Amount</th>
                            <th class="text-center" style="width: 80px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        @foreach($Sales as $sale)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>
                                <span class="text-muted" style="font-size: 12.5px;">
                                    <i class="fa-regular fa-clock mr-1"></i>
                                    {{ \Carbon\Carbon::parse($sale->created_at)->format('d M Y, h:i A') }}
                                </span>
                            </td>
                            <td>
                                <span class="badge" style="background: #e0e7ff; color: #3730a3; font-weight: 700; padding: 4px 8px; border-radius: 6px;">
                                    #{{ $sale->transcationid }}
                                </span>
                            </td>
                            <td>
                                <div class="font-weight-bold" style="color: #0f172a;">
                                    <i class="fa-solid fa-user-circle mr-1 text-muted"></i>
                                    {{ $sale->customerdetails->name ?? 'Walk-in Client' }}
                                </div>
                                <small class="text-muted">{{ $sale->customerdetails->number ?? '' }}</small>
                            </td>
                            <td>
                                <span class="badge badge-secondary px-2 py-1" style="border-radius: 6px;">
                                    {{ count($sale->purchasedetails) }} items
                                </span>
                            </td>
                            <td class="font-weight-bold" style="color: #10b981; font-size: 14.5px;">
                                ₹{{ number_format($sale->totalpurchase, 2) }}
                            </td>
                            <td class="text-center">
                                <a href="{{ route('singletranscitiondetails', $sale->transcationid) }}" class="btn btn-sm btn-outline-primary" title="View Full Invoice" style="border-radius: 8px;">
                                    <i class="fa-solid fa-file-invoice"></i> View
                                </a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('js/sidebar.js') }}"></script>

    <script>
        $(document).ready(function () {
            $('#salesTable').DataTable({
                "pageLength": 10,
                "order": [[0, "asc"]],
                "language": {
                    "search": "<i class='fa-solid fa-magnifying-glass mr-1 text-muted'></i> Search sales:",
                    "lengthMenu": "Show _MENU_ invoices",
                    "info": "Showing _START_ to _END_ of _TOTAL_ transactions",
                    "paginate": {
                        "previous": "<i class='fa-solid fa-chevron-left'></i>",
                        "next": "<i class='fa-solid fa-chevron-right'></i>"
                    }
                }
            });
        });
    </script>
</body>
</html>