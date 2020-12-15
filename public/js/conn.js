$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        }
    });

    $("#kota").selectpicker({
        placeholder: "Pilih Kota"
    });

    $("#kota").change(function() {
        // $("img#load1").show();
        var id_regencies = $(this).val();
        $.ajax({
            type: "POST",
            dataType: "html",
            url: "/daftar/getOutlet/" + id_regencies,
            data: "id_regencies=" + id_regencies,
            success: function(msg) {
                $("select#outlet").html(msg);
                $("img#load1").hide();
                $("select#outlet").prop("disabled", false);
                $("select#outlet").selectpicker("refresh");
            }
        });
    });
    $("#outlet").change(getAjaxOutlet);

    function getAjaxOutlet() {
        // $("img#load2").show();
        var id_outlet = $("#outlet").val();
        $.ajax({
            type: "POST",
            dataType: "html",
            url: "/daftar/getProgram/" + id_outlet,
            data: "id_outlet=" + id_outlet,
            success: function(msg) {
                $("select#program").html(msg);
                $("img#load2").hide();
                $("select#program").prop("disabled", false);
                $("select#program").selectpicker("refresh");
            }
        });
    }
});
