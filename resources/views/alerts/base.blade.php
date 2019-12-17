
@if(session('message'))


<div class="alert-wrap" onclick='Zamknij();' id="alert-wrap">
  <div class="alert" style="color:rgb(86, 181, 108);" >
    <h4 class="alert-heading" style="color:rgb(69, 69, 69);">Zobaczmy co my tu mamy?</h4>
    <h3>{{session('message')}}</h3>
    <hr>

    <a href="#">Kliknij gdziekolwiek aby zamknąć</a>
  </div>
</div>

@endif

<script type="text/javascript">
function Zamknij(){
  document.getElementById('alert-wrap').style.display="none";
}
</script>
