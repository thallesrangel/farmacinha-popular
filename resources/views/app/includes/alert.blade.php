@if (Session::has('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Registrado com sucesso',
            text: '{{ session('success') }}',
            showConfirmButton: false,
            timer: 2000
        })
    </script>
@endif

@if (Session::has('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: '{{ session('error') }}',
    })
   </script>
@endif

@if (Session::has('not_found'))
   <script>
        Swal.fire({
            icon: 'error',
            title: 'Erro',
            text: '{{ session('not_found') }}',
            showConfirmButton: false,
            timer: 2000
    })
   </script>
@endif

@if (Session::has('permission_denied'))
   <script>
        Swal.fire({
            icon: 'warning',
            title: 'Permissão negada',
            text: '{{ session('permission_denied') }}',
            showConfirmButton: false,
            timer: 2000
    })
   </script>
@endif