<h2>Forgot Password?</h2>

@if (session('status'))
    <div>{{ session('status') }}</div>
@endif

<form method="POST" action="{{ route('password.email') }}">
    @csrf
    <label for="email">Enter your email</label>
    <input type="email" name="email" required>
    <button type="submit">Send Reset Link</button>
</form>
