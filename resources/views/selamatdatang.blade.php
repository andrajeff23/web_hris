<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('images/logohris.png') }}" type="image/png">
    <style>
        body {
            background: linear-gradient(135deg, #fdfeff, #f1ffff);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Arial', sans-serif;
        }

        /* .welcome-card {
            background-color: rgba(180, 215, 255, 0.9);
            border-radius: 20px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0);
            /* padding: 40px; */
            text-align: center;
            width: 210px;
        } */

        .welcome-card h1 {
            color: #18100e;
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .welcome-card p {
            color: #0e0d0d;
            font-size: 1.5rem;
            margin-bottom: 30px;
        }

        .progress {
            height: 10px;
            border-radius: 5px;
            background-color: rgba(19, 70, 236, 0.3);
        }

        .progress-bar {
            width: 100%;
            transition: width 5s linear;
            background-color: #f15a30;
        }
    </style>
</head>

<body>
    <div class="welcome-card">
        <center><img src="{{ asset('images/logohris.png') }}" alt="Logo" class="logo" height="200" width="200"></center>
        {{-- <h1>HRIS ABSENSI</h1> --}}
        {{-- <p><center>PT. Belawan Indah</center></p> --}}
        {{-- <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
            </div>
        </div> --}}
    </div>

    <script>
        // Mengarahkan pengguna ke halaman login setelah 5 detik
        setTimeout(() => {
            window.location.href = '/login';
        }, 300); // 5000 milliseconds = 5 seconds
    </script>
</body>

</html>
