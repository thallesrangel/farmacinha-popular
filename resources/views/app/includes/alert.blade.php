@if (Session::has('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Sucesso',
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

@if (Session::has('login_error'))
   <script>
        Swal.fire({
            icon: 'error',
            title: 'Eitaaa',
            text: '{{ session('login_error') }}',
            showConfirmButton: false,
            timer: 2000
    })
   </script>
@endif

@if (Session::has('login_success'))
   <script>
        Swal.fire({
            icon: 'success',
            title: 'Tudo certo!',
            text: '{{ session('login_success') }}',
            showConfirmButton: false,
            timer: 2500
    })
   </script>
@endif

@if (Session::has('success_destroy'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Excluído',
            text: '{{ session('success_destroy') }}',
            showConfirmButton: false,
            timer: 2000
        })
    </script>
@endif

@if (Session::has('logout_success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Logout',
            text: '{{ session('logout_success') }}',
            showConfirmButton: false,
            timer: 2000
        })
    </script>
@endif
