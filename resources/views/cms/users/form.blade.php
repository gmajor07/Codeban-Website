<div class="ve-cms-form-grid">
    <div class="ve-cms-field">
        <label for="name">Name</label>
        <input id="name" name="name" value="{{ old('name', $user->name) }}" type="text" required>
    </div>
    <div class="ve-cms-field">
        <label for="email">Email</label>
        <input id="email" name="email" value="{{ old('email', $user->email) }}" type="email" required>
    </div>
    <div class="ve-cms-field">
        <label for="role">Role</label>
        <select id="role" name="role" required>
            <option value="admin" @selected(old('role', $user->role) === 'admin')>Admin</option>
            <option value="editor" @selected(old('role', $user->role) === 'editor')>Editor</option>
        </select>
    </div>
    <div class="ve-cms-field">
        <label for="password">Password</label>
        <div class="ve-password-field">
            <input id="password" name="password" type="password" @required(! $user->exists) autocomplete="new-password">
            <button type="button" class="ve-password-toggle" data-toggle-password data-password-target="password" aria-label="Show password" title="Show password">
                <i class="fa fa-eye"></i>
            </button>
        </div>
    </div>
    <div class="ve-cms-field">
        <label for="password_confirmation">Confirm Password</label>
        <div class="ve-password-field">
            <input id="password_confirmation" name="password_confirmation" type="password" @required(! $user->exists) autocomplete="new-password">
            <button type="button" class="ve-password-toggle" data-toggle-password data-password-target="password_confirmation" aria-label="Show password confirmation" title="Show password confirmation">
                <i class="fa fa-eye"></i>
            </button>
        </div>
    </div>
</div>

<div class="ve-cms-form-actions">
    <button type="submit" class="ve-btn-primary"><i class="fa fa-save"></i> {{ $submitLabel }}</button>
</div>

<script>
    document.querySelectorAll('[data-toggle-password]').forEach((button) => {
        button.addEventListener('click', () => {
            const input = document.getElementById(button.dataset.passwordTarget);
            const icon = button.querySelector('i');
            const isHidden = input.type === 'password';

            input.type = isHidden ? 'text' : 'password';
            button.setAttribute('aria-label', isHidden ? 'Hide password' : 'Show password');
            button.setAttribute('title', isHidden ? 'Hide password' : 'Show password');
            icon.className = isHidden ? 'fa fa-eye-slash' : 'fa fa-eye';
        });
    });
</script>
