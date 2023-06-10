<!doctype html>
<html lang="en">
 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Report of Buku Tamu</title>

    <style>        
        body {
            font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }

        p {
            font-size: 12px
        }

        .header {
            height: 100px;
        }

        .logo {
            width: 250px;
            height: 50px;
            float: left;
            margin-top: 10px
        }

        .text {
            margin-top: -10px;
            float: right;
            text-align: right;
        }

        .invoice-number {
            color: #23448d;
            font-style: italic;
            font-weight: bold; 
            margin-top: -10px;
        }

        .auction-date {
            text-align: right
        }

        table { 
            border-collapse: collapse; 
            margin:50px auto;
            font-size: 8px
        }

        th { 
            background: #e2e2e2; 
            font-weight: bold; 
        }

        td, th { 
            padding: 10px; 
            border: 1px solid #7d7d7d; 
            text-align: left; 
        }

        .name {
            color: #23448d;
            font-weight: bold;
        }

        i {
            font-size: 8px;
        }

        .footer-note {
            float: left;
        }

        .footer-date {
            float: right;
        }
    </style>
</head>
 
<body>
    <div class="container">
        <div class="header">
            <a href="https://imgbb.com/"><img src="https://i.ibb.co/dkVJt8s/bea.png" alt="bea" height="80" width="80" border="0"></a>
            <div class="text">
                <h4>DATA REPORT</h4>
                {{-- <p class="invoice-number">REP/{{date('Ymd', strtotime($current_time));}}/ITM/{{rand(1000, 9999)}}</p> --}}
            </div>
        </div>
        <hr>
        <div class="client">
            {{-- <p class="auction-date">Report Date: {{date('d M Y', strtotime($current_time));}}</p> --}}
            {{-- <p>Admin/Manager: {{ auth()->user()->name }}</p> --}}
            {{-- <p>Email: {{ auth()->user()->email }}</p> --}}
        </div>
        <table>
            <thead class="thead-dark">
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Telepon</th>
                  <th scope="col">Email</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Tanggal</th>
                </tr>
              </thead>
              <tbody>
                @foreach($data as $key => $item)
                <tr>
                  <th scope="row">{{$key+ 1}}</th>
                  <td>{{ $item->nama}}</td>
                  <td>{{ $item->tlp}}</td>
                  <td>{{ $item->email}}</td>
                  <td>{{ $item->alamat}}</td>
                  <td>{{ $item->created_at}}</td>
                  </tr>
                @endforeach
              </tbody>
          </table>
          <i class="footer-text">
            <p class="footer-notes" style="color: grey;">This report is valid and processed by computer
            <br>
            {{-- <p style="color: grey;" class="footer-date">Last update: {{date('d M Y, H:m', strtotime($current_time));}}</p> --}}
          </i>
    </div>
 
</body>
 
</html>