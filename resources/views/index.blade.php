<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Face Recognition</title>
    <script defer src="face-api.min.js"></script>
    <script defer src="script.js"></script>
    <style>
        canvas {
            position: absolute;
            margin-top: 85px;
        }

        #start-camera {
            margin: 20px 0 20px 0;
        }
        #click-photo {
            margin: 20px 0 20px 0;
        }
    </style>
</head>
<body class="d-flex flex-wrap justify-content-center">
    <div class="container">
        <div class="row mt-2">
            <div class="col d-flex justify-content-center">
                <button id="start-camera" onclick="getLocation()">Start Camera</button>
            </div>
            
        </div>
    </div>
    <div class="container">
        <div class="d-flex justify-content-center">
            {{-- video webcam --}}
            <video id="video" width="500" height="350" autoplay muted></video>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-center align-items-center">
                <button id="click-photo">Click Photo</button>
                {{-- hasil capture photo dari webcam --}}
                <canvas style="margin-top: 150px" id="canvas" width="300" height="250"></canvas>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row d-flex">   
            <div class="col-9">
                @foreach ($absens as $absensi)
                <form action="/face" method="POST">
                    @csrf
                    <input type="text" id="user_nis" name="user_nis" value="{{ $absensi->user->nis }}"/><br>
                    <textarea name="base64" id="base64" cols="30" rows="10"></textarea><br>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
                @endforeach
            </div>
            <div class="col-3 text-center">
                <p>Click the button to get your coordinates.</p>
                <p class="mt-3" id="demo"></p>
            </div>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>