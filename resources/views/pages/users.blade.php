@extends('layouts.app')

@section('title', 'Users - TANJ POS')

@section('content')
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem; flex-wrap: wrap; gap: 1rem;">
        <h1 style="margin: 0;">User Accounts</h1>
        <button class="btn btn-sm">+ Add User</button>
    </div>

    <div class="card">
        <div class="search-bar">
            <input type="text" class="search-input" id="userSearch" placeholder="🔍 Search users by username or name..." onkeyup="filterUsers()">
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
                        
                        $roleIcons = [
                            'admin' => '👑',
                            'cashier' => '💵',
                            'manager' => '📋',
                            'supervisor' => '👔'
                        ];
                    @endphp
                    <tr class="user-row" data-username="{{ strtolower($user->username) }}" data-name="{{ strtolower($user->full_name) }}" data-role="{{ $role }}">
                        <td>{{ $user->id }}</td>
                        <td>
                            <div class="user-cell">
                                <div class="avatar">{{ substr($user->full_name, 0, 1) }}</div>
                                <div>
                                    <strong>{{ $user->full_name }}</strong>
                                    <br>
                                    <span style="font-size: 0.8rem; color: var(--text-secondary);">{{ $roleIcons[$role] }} {{ $roleLabels[$role] }}</span>
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
        <p id="noResults" style="display: none; text-align: center; padding: 2rem; color: var(--text-secondary);">No users found matching your search.</p>
    </div>

    <div class="grid grid-3" style="margin-top: 2rem;">
        <div class="dashboard-card">
            <h3>User Stats</h3>
            <div style="display: flex; justify-content: space-between; padding: 0.5rem 0; border-bottom: 1px solid var(--border-color);">
                <span>Total Users</span>
                <strong>{{ $users->count() }}</strong>
            </div>
            <div style="display: flex; justify-content: space-between; padding: 0.5rem 0; border-bottom: 1px solid var(--border-color);">
                <span>Administrators</span>
                <strong style="color: var(--secondary);">1</strong>
            </div>
            <div style="display: flex; justify-content: space-between; padding: 0.5rem 0; border-bottom: 1px solid var(--border-color);">
                <span>Cashiers</span>
                <strong style="color: var(--primary);">2</strong>
            </div>
            <div style="display: flex; justify-content: space-between; padding: 0.5rem 0;">
                <span>Active Now</span>
                <strong style="color: var(--success);">{{ $users->count() }}</strong>
            </div>
        </div>
        <div class="dashboard-card">
            <h3>Quick Actions</h3>
            <button class="btn btn-sm" style="width: 100%; margin-bottom: 0.5rem;">👤 Create User</button>
            <button class="btn btn-sm btn-secondary" style="width: 100%; margin-bottom: 0.5rem;">📧 Send Invite</button>
            <button class="btn btn-sm btn-outline" style="width: 100%;">🔐 Reset Passwords</button>
        </div>
        <div class="dashboard-card">
            <h3>Recent Users</h3>
            @foreach($users->take(3) as $user)
                <div class="activity-item">
                    <div class="activity-icon">{{ substr($user->full_name, 0, 1) }}</div>
                    <div class="activity-content">
                        <strong>{{ $user->full_name }}</strong>
                        <span>@{{ $user->username }}</span>
                    </div>
                </div>
            @endforeach
        </div>
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
