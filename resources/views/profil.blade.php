<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
    body {
        margin: 0;
        font-family: 'Poppins', sans-serif;
        background-image: linear-gradient(blue,white);
        
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    .profile-card {
        background-color: white;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        width: 300px;
        text-align: center;
    }

    .profile-picture {
        width: 100px;
        height: 100px;
        background-color: #e0e0e0;
        background-image: url("{{ asset('images/jerapah.jpg') }}");
        background-size: 100%;
        border-radius: 50%;
        margin: 0 auto 25px auto;
        border: 3px solid #fff;
        box-shadow: 0 0 8px rgba(0,0,0,0.15);
    }

    .info-item {
        background-color: #f2f2f2;
        padding: 12px 20px;
        margin-bottom: 12px;
        border-radius: 8px;
        font-weight: 600;
        color: #333;
        transition: all 0.2s ease-in-out;
    }

    .info-item:last-child {
        margin-bottom: 0;
    }

    .info-item:hover {
        transform: scale(1.05);
        background-color: #e9e9e9;
    }
    </style>
</head>
<body>
    <div class="profile-card">
        <div class="profile-picture"></div>
        
        <div class="profile-info">
            <div class="info-item">{{ $nama }}</div>
            <div class="info-item">{{ $kelas }}</div>
            <div class="info-item">{{ $npm }}</div>
        </div>
    </div>
</body>
</html>