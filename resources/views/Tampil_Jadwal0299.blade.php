<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Jadwal</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
    thead {
        background-color: #32F71E;
    }
    th, td {
        text-align: left;
        padding: 8px;
    }
    tr:nth-child(even){
        background-color: #32F71E
    }
    .button {
        background-color: #150476;
        border: none;
        color: white;
        padding: 5px 32px;
        text-align: center;
        text-decoration: none;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
    }
    </style>

</head>

<body>
    <div class="container">
        <div class="col-md-12">
            <div style="height: 20px;"></div>
                <form action="/jadwal/cari" method="GET">
                <div class="row">
                    <strong>Pencarian : </strong>
                    <div style="width: 12px;"></div>
                    <input type="text" name="nama" id="nama" placeholder="Masukkan Nama Kelas" value="{{ old('nama') }}" class="input-group-text">
                    <div style="width: 20px;"></div>
                    <input type="submit" value="cari" class="button">
                </div>
                </form>
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Id Jadwal</th>
                        <th>Nama Guru</th>
                        <th>Nama Pelajaran</th>
                        <th>Nama Kelas</th>
                    </tr>
                </thead>
                @foreach($data as $key => $dt)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $dt->id_jadwal }}</td>
                    <td>{{ $dt->nama_guru }}</td>
                    <td>{{ $dt->nama_pelajaran }}</td>
                    <td>{{ $dt->nama_kelas }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>

</body>

</html>