
@if(session('message'))


<div class="alert-wrap" onclick='Zamknij();' id="alert-wrap">
  <div class="alert"  >

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
