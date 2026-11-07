@extends('layouts.app')

@section('title', 'Customers - TANJ POS')

@section('content')
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem; flex-wrap: wrap; gap: 1rem;">
        <h1 style="margin: 0;">Customer Accounts</h1>
        <button class="btn btn-sm">+ Add Customer</button>
    </div>

    <div class="card">
        <div class="search-bar">
            <input type="text" class="search-input" id="customerSearch" placeholder="Search customers by name, email, or phone..." onkeyup="filterCustomers()">
            <select class="filter-select" id="customerFilter" onchange="filterCustomers()">
                <option value="">All Customers</option>
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
            </select>
        </div>

        <table id="customersTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Customer</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($customers as $customer)
                    <tr class="customer-row" data-name="{{ strtolower($customer->full_name) }}" data-email="{{ strtolower($customer->email) }}" data-phone="{{ $customer->phone }}">
                        <td>{{ $customer->id }}</td>
                        <td>
                            <div class="user-cell">
                                <div class="avatar">{{ substr($customer->full_name, 0, 1) }}</div>
                                <div>
                                    <strong>{{ $customer->full_name }}</strong>
                                </div>
                            </div>
                        </td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->phone }}</td>
                        <td>
                            <div class="actions">
                                <button class="action-btn view" onclick="viewCustomer({{ $customer->id }})">View</button>
                                <button class="action-btn edit" onclick="editCustomer({{ $customer->id }})">Edit</button>
                                <button class="action-btn delete" onclick="deleteCustomer({{ $customer->id }})">Delete</button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <p id="noResults" style="display: none; text-align: center; padding: 2rem; color: var(--muted);">No customers found matching your search.</p>
    </div>

    <script>
        function filterCustomers() {
            const searchTerm = document.getElementById('customerSearch').value.toLowerCase();
            const filterValue = document.getElementById('customerFilter').value;
            const rows = document.querySelectorAll('.customer-row');
            let visibleCount = 0;

            rows.forEach(row => {
                const name = row.getAttribute('data-name');
                const email = row.getAttribute('data-email');
                const phone = row.getAttribute('data-phone');
                
                const matchesSearch = name.includes(searchTerm) || email.includes(searchTerm) || phone.includes(searchTerm);
                
                if (matchesSearch) {
                    row.style.display = '';
                    visibleCount++;
                } else {
                    row.style.display = 'none';
                }
            });

            document.getElementById('noResults').style.display = visibleCount === 0 ? 'block' : 'none';
        }

        function viewCustomer(id) {
            alert('View customer ID: ' + id);
        }

        function editCustomer(id) {
            alert('Edit customer ID: ' + id);
        }

        function deleteCustomer(id) {
            if (confirm('Are you sure you want to delete this customer?')) {
                alert('Delete customer ID: ' + id);
            }
        }
    </script>
@endsection
