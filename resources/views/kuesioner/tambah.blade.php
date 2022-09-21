@extends('layouts.navbar')

@section('isi')
    <div class="container">
        <div class="d-grid gap-3">
            <div class="p-2 bg-light border row align-items-start">
                <div class="float-end">
                    <button id="btnTambah" class="btn btn-primary">Tambah Pertanyaan</button>
                    <button class='btn btn-danger float-end col-md-2' id="btnHapus" disabled>X</button>
                </div>
                <form action="" method="post">
                    @csrf
                    <label style="font-size: 30px" for="judul" class="form-label">Judul Form</label>
                    <input style="font-size: 30px" class="form-control" type="text" name="txt_judul" id="judul"><br>
                    <input class="form-control" type="text" name="txt_keterangan" id="keterangan"
                        placeholder="Keterangan Kuesioner"><br>
            </div>
            <div class="p-2 bg-light border">
                <input oninput="auto_grow(this)" class="form-control" name="txt_pertanyaan[]" id="pertanyaan">
                <p></p>
            </div>
            </form>
        </div>
    </div>
    <script>
        function auto_grow(element) {
            element.style.height = "5px";
            element.style.height = (element.scrollHeight) + "px";
        }
        var x = 1;
        var y = "button";
        $(document).ready(function() {
            $("#btnHapus").click(function() {
                // $("#pertanyaan").remove();
                // console.log(x);                
                y = y + x;
                console.log(y);
                $('.' + y).remove();
                x = x - 1;
                y = "button";
                if (x == 0) {
                    // Disable #x
                    $("#btnHapus").prop("disabled", true);
                }
            });
        });
        $(document).ready(function() {
            $("#btnTambah").click(function() {
                x = x + 1;
                y = y + x;
                // console.log();
                $("p").append(
                    "<input type='text' class='form-control mt-2 col-md-5 " + y +
                    "' name='txt_pertanyaan[]' id='pertanyaan'>"
                );
                y = "button";
                // Enable #x
                $("#btnHapus").prop("disabled", false);
            });

        });
    </script>
@endsection
