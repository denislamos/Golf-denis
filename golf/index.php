<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Login</title>
    <!-- Tambahkan tautan ke Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        /* Mengatur margin dan padding pada card */
        .card {
            margin: 0 auto;
            margin-top: 20px;
            max-width: 400px;
        }

        /* Mengatur margin pada tombol login */
        .btn-primary {
            margin-top: 10px;
        }

        /* Mengatur margin pada pesan kesalahan */
        #login-error {
            margin-top: 10px;
        }

        body {
            background-image: url('./assets/gambar2.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>
    
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-xs-12">
                <div class="card">
                    <div class="card-header">Login Dulu Bosku</div>
                    <div class="card-body">
                        <form id="login-form">
                            <div class="form-group">
                                <label for="username">Username:</label>
                                <input type="text" class="form-control" id="username" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" id="password" required>
                            </div>
                            <button type="button" class="btn btn-primary" onclick="login()">Login</button>
                        </form>
                        <p id="login-error" class="text-danger mt-3"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Fungsi untuk melakukan login
        function login() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
        
            if (!username || !password) {
                // Cek apakah username atau password kosong
                document.getElementById("login-error").textContent = "Silakan isi terlebih dahulu username dan password.";
            } else if (username === "admin" && password === "admin") {
                // Jika login berhasil, arahkan ke halaman lain atau lakukan tindakan lain
                window.location.href = "cekcuaca.php";
            } else {
                // Jika login gagal, tampilkan pesan kesalahan
                document.getElementById("login-error").textContent = "Username atau password salah. Silakan coba lagi.";
            }
        }
    </script>

    <!-- Tambahkan tautan ke Bootstrap JavaScript (opsional, jika diperlukan) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
