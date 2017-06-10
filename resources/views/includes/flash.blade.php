@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@elseif (session('error'))
    <div class="alert alert-danger text-center">
        {{ session('error') }}
    </div>
@endif
<script>
   setTimeout(() => {
    document.querySelector("div.alert-danger").style.display = "none";
   }, 5000);
</script>