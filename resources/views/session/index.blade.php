<x-layout>
  <!-- Halaman Login -->
    <div class="container mt-5">
        <h2 class="text-center mb-4">Login</h2>
        <form action="/session/login" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email Address</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="pass" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
    </div>
</x-layout>

