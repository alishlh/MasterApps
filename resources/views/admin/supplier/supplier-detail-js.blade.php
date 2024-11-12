<script>
    //todo:slug generate
    $(document).on('click', '.show_barang_details', function (e) {
        let supplier = $(this).data('user->name');
        let barang = $(this).data('name');
        let jumlah = $(this).data('jumlah');
        let satuan = $(this).data('satuan');
        let total_harga = $(this).data('total_harga');

        $('.supplier').text(user->name);
        $('.barang').text(name);
        $('.jumlah').text(jumlah);
        $('.satuan').text(satuan);
        $('.total_harga').text(total_harga);
    });
</script>