<x-layout> 







    <!-- sidebar -->
    

    <!-- main -->

    <main class=" w-screen h-screen flex flex-col">


        <!-- content -->
         <div class="px-10">
            
         </div>
    </main>

        



        


   

<!-- Script untuk menangani dropdown -->
<script>
    // Ambil elemen tombol dropdown dan menu dropdown
    const button = document.getElementById('dropdownButton');
    const menu = document.getElementById('dropdownMenu');

    // Tambahkan event listener untuk klik pada tombol dropdown
    button.addEventListener('click', function() {
        // Toggle class 'hidden' pada menu dropdown untuk menampilkannya atau menyembunyikannya
        menu.classList.toggle('hidden');
    });
</script>

</body>
</html>