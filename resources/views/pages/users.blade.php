@extends('layouts.app')

@section('title', 'Users - TANJ POS')

@section('content')
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem; flex-wrap: wrap; gap: 1rem;">
        <h1 style="margin: 0;">User Accounts</h1>
        <button class="btn btn-sm">+ Add User</button>
    </div>

    <div class="card">
        <div class="search-bar">
            <input type="text" class="search-input" id="userSearch" placeholder="Search users by username or name..." onkeyup="filterUsers()">
            <select class="filter-select" id="roleFilter" onchange="filterUsers()">
                <option value="">All Roles</option>
                <option value="admin">Administrator</option>
                <option value="cashier">Cashier</option>
                <option value="manager">Manager</option>
                <option value="supervisor">Supervisor</option>
            </select>
        </div>

        <table id="usersTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>User</th>
                    <th>Username</th>
                    <th>Role</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    @php
                        $role = 'cashier';
                        if (strtolower($user->username) === 'admin') $role = 'admin';
                        elseif (strtolower($user->username) === 'manager') $role = 'manager';
                        elseif (strtolower($user->username) === 'supervisor') $role = 'supervisor';
                        
                        $roleLabels = [
                            'admin' => 'Administrator',
                            'cashier' => 'Cashier',
                            'manager' => 'Manager',
                            'supervisor' => 'Supervisor'
                        ];
                    @endphp
                    <tr class="user-row" data-username="{{ strtolower($user->username) }}" data-name="{{ strtolower($user->full_name) }}" data-role="{{ $role }}">
                        <td>{{ $user->id }}</td>
                        <td>
                            <div class="user-cell">
                                <div class="avatar">{{ substr($user->full_name, 0, 1) }}</div>
                                <div>
                                    <strong>{{ $user->full_name }}</strong>
                                </div>
                            </div>
                        </td>
                        <td>{{ $user->username }}</td>
                        <td><span class="badge badge-{{ $role }}">{{ $roleLabels[$role] }}</span></td>
                        <td><span class="badge badge-active">Active</span></td>
                        <td>
                            <div class="actions">
                                <button class="action-btn view" onclick="viewUser({{ $user->id }})">View</button>
                                <button class="action-btn edit" onclick="editUser({{ $user->id }})">Edit</button>
                                <button class="action-btn delete" onclick="deleteUser({{ $user->id }})">Delete</button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <p id="noResults" style="display: none; text-align: center; padding: 2rem; color: var(--muted);">No users found matching your search.</p>
    </div>

    <script>
        function filterUsers() {
            const searchTerm = document.getElementById('userSearch').value.toLowerCase();
            const roleFilter = document.getElementById('roleFilter').value;
            const rows = document.querySelectorAll('.user-row');
            let visibleCount = 0;

            rows.forEach(row => {
                const username = row.getAttribute('data-username');
                const name = row.getAttribute('data-name');
                const role = row.getAttribute('data-role');
                
                const matchesSearch = username.includes(searchTerm) || name.includes(searchTerm);
                const matchesRole = roleFilter === '' || role === roleFilter;
                
                if (matchesSearch && matchesRole) {
                    row.style.display = '';
                    visibleCount++;
                } else {
                    row.style.display = 'none';
                }
            });

            document.getElementById('noResults').style.display = visibleCount === 0 ? 'block' : 'none';
        }

        function viewUser(id) {
            alert('View user ID: ' + id);
        }

        function editUser(id) {
            alert('Edit user ID: ' + id);
        }

        function deleteUser(id) {
            if (confirm('Are you sure you want to delete this user?')) {
                alert('Delete user ID: ' + id);
            }
        }
    </script>
@endsection
