
<!-- Success Message -->
@if(session('success'))
<div class="toast toast-top toast-center">
    <div class="alert alert-success">
        <span>{{ session('success') }}</span>
    </div>
</div>
<script>
    setTimeout(function() {
        document.querySelector('.alert-success').style.display = 'none';
    }, 10000); // Hide the success message after 3 seconds (3000 milliseconds)
</script>
@endif

<!-- Error Message -->
@if(session('fail'))
<div class="toast toast-top toast-center">
    <div class="alert alert-error">
        <span>{{ session('fail') }}</span>
    </div>
</div>
<script>
    setTimeout(function() {
        document.querySelector('.alert-error').style.display = 'none';
    }, 10000); // Hide the error message after 3 seconds (3000 milliseconds)
</script>
@endif