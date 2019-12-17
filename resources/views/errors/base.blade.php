
@if(!$errors->isEmpty()) 


<div class="alert-wrap" onclick='Zamknij();' id="alert-wrap">
  <div class="alert" >
    <h4 class="alert-heading">Coś poszło nie tak :/</h4>
    <ul>
        @foreach($errors->all() as $error)
            <li>
                {{$error}}
            </li>
        @endforeach
    </ul>
    <hr>
    <p class="">Sprawdź czy czegoś nie pominąłeś, jeśli nie skontaktuj się z administratorem</p>
    <a href="#">Zamknij</a>
  </div>
</div>

@endif

<script type="text/javascript">
function Zamknij(){
  document.getElementById('alert-wrap').style.display="none";
}
</script>
