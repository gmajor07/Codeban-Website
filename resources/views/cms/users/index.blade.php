<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Codeban CMS users.">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Users - Codeban CMS</title>
    <link rel="icon" href="{{ asset('img/core-img/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom-override.css') }}?v=2">
</head>
<body class="ve-cms-body">
    @include('cms.partials.sidebar')

    <main class="ve-cms-main">
        <header class="ve-cms-topbar">
            <div>
                <span class="ve-section-tag">Users</span>
                <h1>Manage CMS Users</h1>
            </div>
            <div class="ve-cms-actions">
                <a href="{{ route('cms.users.create') }}" class="ve-cms-view-site"><i class="fa fa-plus"></i> Add User</a>
                <form action="{{ route('logout') }}" method="post">@csrf<button type="submit"><i class="fa fa-sign-out"></i> Logout</button></form>
            </div>
        </header>

        @if (session('status'))
            <div class="ve-cms-success">{{ session('status') }}</div>
        @endif

        <section class="ve-cms-table-panel">
            <table class="ve-cms-table">
                <thead>
                    <tr>
                        <th>User</th>
                        <th>Role</th>
                        <th>Access</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                        <tr>
                            <td>
                                <strong>{{ $user->name }}</strong>
                                <span>{{ $user->email }}</span>
                            </td>
                            <td><span class="ve-cms-badge {{ $user->role === 'admin' ? 'is-active' : 'is-new' }}">{{ $user->role }}</span></td>
                            <td>{{ $user->role === 'admin' ? 'Full CMS management' : 'Content editing' }}</td>
                            <td>
                                <div class="ve-cms-row-actions">
                                    <a href="{{ route('cms.users.edit', $user) }}"><i class="fa fa-pencil"></i> Edit</a>
                                    <form action="{{ route('cms.users.destroy', $user) }}" method="post" onsubmit="return confirm('Delete this user?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"><i class="fa fa-trash"></i> Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="ve-cms-empty">No CMS users found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </section>
    </main>
</body>
</html>
