@if ($errors->any())
    <div class="alert alert-danger" id="errorAlert">
        <ul>
            @foreach ($errors->all() as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (Session()->has('success'))
    <div class="alert alert-success" id="successAlert">
        {{ Session()->get('success') }}
    </div>
@endif

<style>
    /* Tambahkan animasi fade */
    .fade {
        opacity: 1;
        transition: opacity 0.5s ease-out;
    }

    .hidden {
        opacity: 0;
        pointer-events: none;
    }
</style> 

<script>
    // Menyembunyikan pesan error setelah 3 detik
    setTimeout(function() {
        document.getElementById('errorAlert').classList.add('fade', 'hidden');
    }, 3000);

    // Menyembunyikan pesan success setelah 3 detik
    setTimeout(function() {
        document.getElementById('successAlert').classList.add('fade', 'hidden');
    }, 3000);
</script>
