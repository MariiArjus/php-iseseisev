<style>
body {
    background: linear-gradient(to right, #ffe4ec, #fff);
}

.card-custom {
    border: none;
    border-radius: 20px;
    box-shadow: 0 4px 15px rgba(255, 182, 193, 0.5);
}

.btn-pink {
    background-color: #ff69b4;
    color: white;
    border-radius: 25px;
}

.btn-pink:hover {
    background-color: #ff1493;
}

.title {
    color: #ff1493;
    font-weight: bold;
}

.sparkle {
    position: relative;
}

.sparkle::after {
    content: "✨";
    position: absolute;
    right: -10px;
    top: -10px;
    animation: sparkle 1.5s infinite;
}

@keyframes sparkle {
    0% {opacity: 0;}
    50% {opacity: 1;}
    100% {opacity: 0;}
}
</style>

<h2 class="text-center mb-4 title ">Võta meiega ühendust!</h2>

<div class="row g-4">

<!-- Vorm -->
<div class="col-md-6">
<div class="card card-custom p-4">

<form method="post">

<label>Nimi</label>
<input type="text" name="nimi" class="form-control mb-3" required>

<label>Email</label>
<input type="email" name="email" class="form-control mb-3" required>

<label>Sõnum</label>
<textarea name="sonum" class="form-control mb-3" rows="5" required></textarea>

<button class="btn btn-pink w-100">Saada ✨</button>

</form>

</div>
</div>

<!-- Kaart -->
<div class="col-md-6">
<div class="card card-custom p-2">

<iframe 
src="https://www.google.com/maps?q=Tallinn&output=embed"
width="100%" height="550" style="border-radius:15px;">
</iframe>

</div>
</div>

</div>
