@extends('layouts.app')

@section('content')
<h1>Roupas Femininas</h1>
<div class="card" style="width: 18rem;">
  <img src="https://th.bing.com/th/id/R.3f439813744c2bd7a9580c5b207c0359?rik=g%2bbtD%2fi6W3Fs%2bQ&pid=ImgRaw&r=0" class="card-img-top" alt="...">
  <div  class="card-body">
    <h5 class="card-title">Roupa Feminina Kit completo</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <button onclick="Swal.fire('Adicionado ao carrinho com sucesso','','success')" class="btn btn-primary"><i class="fa-sharp fa-solid fa-cart-shopping"></i> Adicionar ao carrinho</button>
  </div>
</div>
<br>
<hr>
<h1>Roupas Social Masculina</h1>
<br>
<div class="card" style="width: 18rem;">
  <img src="https://th.bing.com/th/id/R.dfb1870e49883d8c8054c30eadef2e52?rik=J5g9%2fwTrCkMj2A&riu=http%3a%2f%2f3.bp.blogspot.com%2f-qNvvIRIimkg%2fUD_82WBDnqI%2fAAAAAAAAAQA%2fOSIW5gVIYeA%2fs1600%2froupa-masculina-para-golfe-e1334753415102.jpeg&ehk=LrQljeLLLvdgM90tv4jBc2hHLtY38h84N6WdBAqzTjc%3d&risl=&pid=ImgRaw&r=0" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Kit roupa masculina</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary"><i class="fa-sharp fa-solid fa-cart-shopping"></i> Adicionar ao carrinho</a>
  </div>
</div>
<hr>
<h1>Roupas Techwear</h1>
<div class="card" style="width: 18rem;">
  <img src="https://i.pinimg.com/736x/3c/24/90/3c2490026f68f6727645b375198f1f0f.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Kit Techwear</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary"><i class="fa-sharp fa-solid fa-cart-shopping"></i> Adicionar ao carrinho</a>
  </div>
</div>
@endsection