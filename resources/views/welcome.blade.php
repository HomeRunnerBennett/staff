<div style="background: linear-gradient(to right, #ff758c, #ff7eb3); 
            padding: 2rem; 
            border-radius: 10px;
            color: white;
            text-align: center;">
    <h1>Welcome, {{ $user['name'] }}!</h1>
    <p style="font-size: 1.2rem;">
        You are logged in as {{ $user['role'] }}
    </p>
    @if($user['active'])
        <span style="background: #4CAF50; padding: 0.5rem; border-radius: 5px;">
            Active Account
        </span>
    @else
        <span style="background: #f44336; padding: 0.5rem; border-radius: 5px;">
            Inactive Account
        </span>
    @endif
</div>