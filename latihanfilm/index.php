<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

body {
    position: relative;
}

.form {
    width: 50%;
    margin: 50px auto;
    border: 1px solid #ddd;
    border-radius: 12px;
    background: #ffff;
    padding: 30px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
}

.form h2 {
    text-align: center;
    display: block;
    font-weight: bold;
}

.form label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
    color: #333;
}

.form input[type="text"],
      input[type="number"],
      textarea,
      input[type="file"] {
        width: 95%;
        display: block;
        padding: 12px 15px;
        border: 2px solid #e0e0e0;
        border-radius: 8px;
        outline: none;
        margin: 0 auto 20px;
        font-size: 14px;
      }

.form select {
        width: 100%;
        display: block;
        padding: 12px 15px;
        border: 2px solid #e0e0e0;
        border-radius: 8px;
        outline: none;
        margin: 0 auto 20px;
        font-size: 14px;
}

.form input[type="text"]:focus,
      input[type="number"]:focus,
      select:focus,
      textarea:focus,
      input[type="file"]:focus {
        border-color: #006ff7ff;
      }

.form textarea {
    height: 100px;            
    resize: vertical;
    font-family: inherit; 
}

.form input[type="submit"] {
    width: 100%;
    display: block;
    padding: 15px;
    background-color: #0062ff;
    color: white;
    border: none;
    border-radius: 8px;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    margin: 20px auto;
}

.form input[type="submit"]:hover {
    background-color: #005becff;
}

.con {
    margin: 40px auto;
    display: flex;
    flex-wrap: wrap;
    gap: 30px;
    justify-content: center;
    max-width: 1200px;
    padding: 0 20px;
}

.card {
    background: white;
    padding: 20px;
    border-radius: 15px;
    box-shadow: 0px 6px 20px rgba(0,0,0,0.1);
    width: 320px;      
    text-align: left;
    display: flex;
    flex-direction: column;
    align-items: center;
    border: 1px solid #f0f0f0;
}

.card img {
    width: 140px;
    height: auto;
    margin-bottom: 15px;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
}

.card-content {
    font-size: 14px;
    margin-bottom: 15px;
    text-align: left;
    width: 100%;
    line-height: 1.5;
}

.card-content p {
    margin-bottom: 8px;
}

.card-action {
    display: flex;
    gap: 12px;
    justify-content: center;
    width: 100%;
    margin-top: auto;
}

/* .aktor {
    width: 40%;
    margin: 35px auto;
    border: 2px solid #000000ff;
    border-radius: 30px;
    background: #ffff;
    padding: 20px;
} */

.sinopsis {
    text-align: center;
    margin: 15px 0;
    padding: 10px;
    background-color: #e2e2e2ff;
    border-radius: 8px;
}

.sinopsis p {
    text-align: center;
    font-size: 13px;
    line-height: 1.4;
}
    </style>
</head>
<body>
    <div class="form">
        <label for="">Judul</label>
        <input type="text" name="" id="">

        <label for="">Genre</label>
        <select name="" id="">
            <option value="">Action</option>
            <option value="">Comedy</option>
            <option value="">Romance</option>
        </select>

        <label for="">Tahun Produksi</label>
        <input type="number" name="" id="" min="1901" max="2155">

        <label for="">Sinopsis</label>
        <textarea name="" id=""></textarea>

        <label for="">Durasi</label>
        <input type="number" name="" id="">

        <label for="">Aktor 1</label>
        <input type="text" name="" id="">
        
        <label for="">Aktor 2</label>
        <input type="text" name="" id="">
        
        <label for="">Aktor 3</label>
        <input type="text" name="" id="">

        <!-- <label for="">Rating</label>
        <input type="radio" name="" id=""> -->
        
        <label for="">Poster</label>
        <input type="file" name="" id="">

        <input type="submit" value="Tambah">
    </div>

    <div class="con">
        <div class="card">
            <img src="poster/Demon Slayer.jpg" alt="" class="gambar">
            <div class="card-content">
                <p><b>Judul:</b> Demon Slayer</p>
                <p><b>Genre:</b> Action</p>
                <p><b>Tahun Terbit:</b> 2025</p>
                <p><b>Durasi:</b> Suwe Lah intine</p>
                <p><b>Aktor:</b></p>
                <div class="aktor">
                    <p>Tanjiro</p>
                </div>
                <div class="aktor">
                    <p>Giyuu</p>
                </div>
                <div class="aktor">
                    <p>Akaza</p>
                </div>
                <div class="sinopsis">
                    <p>Pertandingan Battle Adu Kekuatan ws intine KECE BANGET LAH JERE RADIT</ 
                </div>
            </div>
        </div>
    </div>
</body>
</html>