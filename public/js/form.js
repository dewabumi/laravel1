$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        }
    });

    $("#pendaftarKota").selectpicker();

    $("#pendaftarKota").change(function() {
        $("img#load1").show();
        var pendaftar_alamat_kota = $(this).val();
        $.ajax({
            type: "POST",
            dataType: "html",
            url: "/form/pilihkecamatan/" + pendaftar_alamat_kota,
            data: "pendaftar_alamat_kota=" + pendaftar_alamat_kota,
            success: function(msg) {
                $("#pendaftarKecamatan").html(msg);
                $("img#load1").hide();
                $("#pendaftarKecamatan").prop("disabled", false);
                $("#pendaftarKecamatan").selectpicker("refresh");
            }
        });
    });

    $("#pendaftarKecamatan").change(function() {
        $("img#load2").show();
        var pendaftar_alamat_kecamatan = $(this).val();
        $.ajax({
            type: "POST",
            dataType: "html",
            url: "/form/pilihKelurahan/" + pendaftar_alamat_kecamatan,
            data: "pendaftar_alamat_kecamatan=" + pendaftar_alamat_kecamatan,
            success: function(msg) {
                $("#pendaftarKelurahan").html(msg);
                $("img#load2").hide();
                $("#pendaftarKelurahan").prop("disabled", false);
                $("#pendaftarKelurahan").selectpicker("refresh");
            }
        });
    });
});
