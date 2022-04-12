<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Survey Kepuasan Pasien</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/css/sb-admin-2.min.css'); ?>" rel="stylesheet">

</head>

<body class="bg-info">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-12">

                <div class="card o-hidden border-bottom-danger shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <img class="col-lg-5 d-none d-lg-block" src="<?= base_url('assets/img/gambar.jpg'); ?>"></img>
                            <!-- <div class="col-lg-3 d-none d-lg-block bg-login-image"></div> -->
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <!-- <h7 class="h7 text-gray-900 mb-7">Survey Kepuasan RSKIA SADEWA</h7> -->
                                        <h1 aria-colspan="">Kepuasan Pasien Rawat Inap</h1>
                                    </div>
                                    <tr>
                                        <br>
                                        <form class="user" action="<?= base_url('survey/simpan_ranap'); ?>" method="POST">
                                            <div class="jw-top-title">
                                                <h5>Masukan anda sangat berarti bagi kemajuan pelayanan kami.</h5>

                                                <div class="form-group">
                                                    <strong for="exampleFormControlInput1" class="form-label">Tanggal dan waktu perawatan:</strong>
                                                    <input type="datetime-local" class="form-control" name="tanggal_datang" value="" required>
                                                    <div class="mb-3">
                                                        <strong for="exampleFormControlInput1" class="form-label">Nama Pasien:</strong>
                                                        <input type="text" class="form-control" name="txt_nama" id="txt_nama" placeholder="">
                                                    </div>
                                                    <div class="mb-3">
                                                        <strong for="exampleFormControlInput1" class="form-label">Nama Petugas:</strong>
                                                        <input type="text" class="form-control" name="txt_petugas" id="txt_petugas" placeholder="">
                                                    </div>

                                                    <strong for="fw-bold">Bangsal:</strong>
                                                    <div class="form-group">
                                                        <select class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" id="cmb_bangsal" name="cmb_bangsal" required="" data-select2-id="cmb_dokter" tabindex="-1" aria-hidden="true">
                                                            <option value="" selected="selected" data-select2-id="2">Pilih</option>
                                                            <option value="Alengka" data-select2-id="1">Alengka</option>
                                                            <option value="Amarta" data-select2-id="2">Amarta</option>
                                                            <option value="Astina" data-select2-id="3">Astina</option>
                                                            <option value="Ayodya" data-select2-id="4">Ayodya</option>
                                                        </select><span class="select2 select2-container select2-container--bootstrap4 select2-container--below select2-container--focus" dir="ltr" data-select2-id="1" style="width: 100%;">
                                                            <input type="hidden" class="form-control form-control-sm" id="txt_NmBangsal" name="txt_NmBangsal" placeholder="Nama Bangsal">
                                                    </div>

                                                    <!-- <strong for="fw-bold">Dokter:</strong>

                                                    <div class="form-group">
                                                        <label for="txt_Nama" class="col-form-label-sm">Nama Dokter*</label>
                                                        <select class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" id="cmb_dokter" name="cmb_dokter" required="" data-select2-id="cmb_dokter" tabindex="-1" aria-hidden="true">
                                                            <option value="" selected="selected" data-select2-id="2">Pilih</option>

                                                            <option value="20200454" data-select2-id="1">dr. Achwido Arjundananto Wiyasa</option>
                                                            <option value="20180422" data-select2-id="2">dr. Ayu Kurnia Priyantiningrum</option>
                                                            <option value="20180337" data-select2-id="3">dr. Danny Sulistyowaty</option>
                                                            <option value="20200519" data-select2-id="4">dr. Fendy Andra Fahreza</option>
                                                            <option value="20180338" data-select2-id="5">dr. Myggi Rizdwike Nanda</option>
                                                            <option value="20180373" data-select2-id="1">dr. Ria Rossi</option>
                                                            <option value="20180368" data-select2-id="2">dr. Rinansita Warihwati</option>
                                                            <option value="20200453" data-select2-id="3">dr. Rr.Shinta Chandra Permata</option>
                                                            <option value="20200520" data-select2-id="4">dr. Riska Diene Pratiwi</option>
                                                            <option value="20200464" data-select2-id="5">dr. Seftiandar Mega Riandana</option>
                                                            <option value="20180413" data-select2-id="1">dr. Virgien Eka Merdekawati Salina</option>
                                                            <option value="20210539" data-select2-id="2">dr. Yane Aulia Yasmin</option>
                                                            <option value="20180340" data-select2-id="2">drg. Berty Maharani F.</option>
                                                            <option value="20180344" data-select2-id="2">drg. Elfira Maharani, M.P.H,Sp.Ort</option>
                                                            <option value="20170310" data-select2-id="2">drg. Maura Kurnia Uki Adiarti</option>
                                                            <option value="20180345" data-select2-id="2">drg. Sigit Aprianto</option>
                                                            <option value="20180346" data-select2-id="2">drg. Teleseptiserngi Dian Arisanti,Sp.KG</option>
                                                            <option value="20180348" data-select2-id="2">dr. Ariesta Christiawanti, Sp.OG</option>
                                                            <option value="20180349" data-select2-id="2">dr. Yasmini Fitriyati, Sp.OG</option>
                                                            <option value="20180350" data-select2-id="2">dr. Hasto Wardoyo, Sp.OG (K)</option>
                                                            <option value="20180351" data-select2-id="2">dr. Shofwal Widad, Sp.OG (K)</option>
                                                            <option value="20180352" data-select2-id="2">dr. Oktavianus Wahyu PTP., Sp.OG</option>
                                                            <option value="20180353" data-select2-id="2">dr. Dwi Haryadi, Sp.OG (K)</option>
                                                            <option value="20180354" data-select2-id="2">dr. Arief Kurnia, Sp.OG</option>
                                                            <option value="20180355" data-select2-id="2">dr. Supriyatiningsih, M.Kes, Sp.OG</option>
                                                            <option value="20180356" data-select2-id="2">dr. Eugenius Phyowai Ganap, Sp.OG (K)</option>
                                                            <option value="20180357" data-select2-id="2">dr. Ayu Wityasti Wardhani, Sp.OG</option>
                                                            <option value="20200467" data-select2-id="2">dr. Agung Dewanto,Sp.OG (K).,PhD</option>
                                                            <option value="20190428" data-select2-id="2">Dr.dr. Mochammad Any Ashari,Sp.OG (K)</option>
                                                            <option value="20190429" data-select2-id="2">dr. Danny Wiguna,Sp.OG</option>
                                                            <option value="20190430" data-select2-id="2">dr. Arsi Palupi,Sp.OG</option>
                                                            <option value="20180364" data-select2-id="2">dr. Ade Febrina Lestari, M.Sc., Sp.A ( K )</option>
                                                            <option value="20190424" data-select2-id="2">dr. Afiarina Dhevianty,M.Sc,Sp.A</option>
                                                            <option value="20180365" data-select2-id="2">dr. Braghmandita Widya Indraswari, M.Sc., Sp.A</option>
                                                            <option value="20180362" data-select2-id="2">dr. Dwikisworo Setyowireni, Sp.A (K)</option>
                                                            <option value="20180363" data-select2-id="2">dr. Desy Rusmawatiningtyas, M.Sc., Sp.A (K)</option>
                                                            <option value="20180361" data-select2-id="2">dr. Nini Rahmani A., Sp.A</option>
                                                            <option value="20180360" data-select2-id="2">dr. Sari Kusumastuti, Sp.A</option>
                                                            <option value="20180366" data-select2-id="2">DR.dr. Dicky Moch. Rizal, M.Kes., Sp.And., AIFM</option>
                                                            <option value="20180418" data-select2-id="2">dr. Seso Sulijaya Suyono, Sp.And</option>
                                                            <option value="20160257" data-select2-id="2">dr. Rinaldi Tri Frisianto, Sp.An</option>
                                                            <option value="20190431" data-select2-id="2">dr. Trisula Utomo, Sp.U (K)</option>
                                                            <option value="20180408" data-select2-id="2">Dr.dr. Ita Fauzia Hanoum,MCE</option>
                                                            <option value="20190433" data-select2-id="2">dr. Rahma Yuantari, MSc,Sp.PK</option>
                                                            <option value="20200522" data-select2-id="2">dr. Bustomi Kurnia,M.Sc.,Sp.Rad</option>
                                                            <option value="20200523" data-select2-id="2">dr. Sri Nurwati,Sp.Rad,M.Sc</option>
                                                        </select><span class="select2 select2-container select2-container--bootstrap4 select2-container--below select2-container--focus" dir="ltr" data-select2-id="1" style="width: 100%;">

                                                            <input type="hidden" class="form-control form-control-sm" id="txt_Nmdokter" name="txt_Nmdokter" placeholder="Nama Dokter">
                                                    </div>
                                                </div> -->

                                                    <!-- sampai sini -->

                                                    <strong for="fw-bold">1. Kenyamanan dan kebersihan Rumah Sakit?</strong>
                                                    <div class="form-group clearfix">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" id="rb_1_1" name="p1" value="Kurang Sekali" required="">
                                                            <label class="form-check-label" for="rb_1_1">Kurang Sekali</label>
                                                        </div>

                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" id="rb_1_2" name="p1" value="Kurang" required="">
                                                            <label class="form-check-label" for="rb_1_2">Kurang</label>
                                                        </div>
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" id="rb_1_3" name="p1" value="Cukup" required="">
                                                            <label class="form-check-label" for="rb_1_3">Cukup</label>
                                                        </div>
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" id="rb_1_4" name="p1" value="Baik" required="">
                                                            <label class="form-check-label" for="rb_1_4">Baik</label>
                                                        </div>
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" id="rb_1_5" name="p1" value="Baik Sekali" required="">
                                                            <label class="form-check-label" for="rb_1_5">Baik Sekali</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <strong for="">2. Kesopanan dan keramahan yang diberikan oleh petugas?</strong>
                                                    <div class="form-group clearfix">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" id="rb_2_1" name="p2" value="Kurang Sekali" required="">
                                                            <label class="form-check-label" for="rb_2_1">Kurang Sekali</label>
                                                        </div>

                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" id="rb_2_2" name="p2" value="Kurang" required="">
                                                            <label class="form-check-label" for="rb_2_2">Kurang</label>
                                                        </div>
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" id="rb_2_3" name="p2" value="Cukup" required="">
                                                            <label class="form-check-label" for="rb_2_3">Cukup</label>
                                                        </div>
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" id="rb_2_4" name="p2" value="Baik" required="">
                                                            <label class="form-check-label" for="rb_2_4">Baik</label>
                                                        </div>
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" id="rb_2_5" name="p2" value="Baik Sekali" required="">
                                                            <label class="form-check-label" for="rb_2_5">Baik Sekali</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <strong for>3. Rasa makanan untuk pasien rawat inap?</strong>
                                                    <div class="form-group clearfix">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" id="rb_3_1" name="p3" value="Kurang Sekali" required="">
                                                            <label class="form-check-label" for="rb_3_1">Kurang Sekali</label>
                                                        </div>

                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" id="rb_3_2" name="p3" value="Kurang" required="">
                                                            <label class="form-check-label" for="rb_3_2">Kurang</label>
                                                        </div>
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" id="rb_3_3" name="p3" value="Cukup" required="">
                                                            <label class="form-check-label" for="rb_3_3">Cukup</label>
                                                        </div>
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" id="rb_3_4" name="p3" value="Baik" required="">
                                                            <label class="form-check-label" for="rb_3_4">Baik</label>
                                                        </div>
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" id="rb_3_5" name="p3" value="Baik Sekali" required="">
                                                            <label class="form-check-label" for="rb_3_5">Baik Sekali</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <strong for>4. Penampilan makanan untuk pasien rawat inap?</strong>
                                                    <div class="form-group clearfix">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" id="rb_4_1" name="p4" value="Kurang Sekali" required="">
                                                            <label class="form-check-label" for="rb_4_1">Kurang Sekali</label>
                                                        </div>

                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" id="rb_4_2" name="p4" value="Kurang" required="">
                                                            <label class="form-check-label" for="rb_4_2">Kurang</label>
                                                        </div>
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" id="rb_4_3" name="p4" value="Cukup" required="">
                                                            <label class="form-check-label" for="rb_4_3">Cukup</label>
                                                        </div>
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" id="rb_4_4" name="p4" value="Baik" required="">
                                                            <label class="form-check-label" for="rb_4_4">Baik</label>
                                                        </div>
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" id="rb_4_5" name="p4" value="Baik Sekali" required="">
                                                            <label class="form-check-label" for="rb_4_5">Baik Sekali</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <strong for="fw-bold">5. Apakah anda puas atas sikap tanggap petugas medis di rumah sakit ini ?</strong>
                                                <div class="form-group clearfix">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" id="rb_5_1" name="p5" value="Ya" required="" onclick="show1('none')">
                                                        <label class="form-check-label" for="rb_5_1">Ya</label>
                                                    </div>

                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" id="rb_5_2" name="p5" value="Tidak" required="" onclick="show1('block')">
                                                        <label class="form-check-label" for="rb_5_2">Tidak</label>
                                                        <textarea class="form-control" name="tap5" id="tap5" rows="1" style="display: none;"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <strong for="">6. Apakah anda puas akan keterampilan petugas medis di rumah sakit ini ?</strong>
                                                    <div class="form-group clearfix">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" id="rb_6_1" name="p6" value="Ya" required="" onclick="show2('none')">
                                                            <label class="form-check-label" for="rb_6_1">Ya</label>
                                                        </div>

                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" id="rb_6_2" name="p6" value="Tidak" required="" onclick="show2('block')">
                                                            <label class="form-check-label" for="rb_6_2">Tidak</label>
                                                            <textarea class="form-control" name="tap6" id="tap6" rows="1" style="display: none;"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <strong for="">7. Apakah anda mendapat edukasi mengenai cara:</strong><br>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="p7a" value="Memberi ASI" id="flexCheckIndeterminate">
                                                    <label class="form-check-label" for="flexCheckIndeterminate">
                                                        Memberi ASI
                                                    </label><br>
                                                    <input class="form-check-input" type="checkbox" name="p7b" value="Menggendong bayi" id="flexCheckIndeterminate">
                                                    <label class="form-check-label" for="flexCheckIndeterminate">
                                                        Menggendong bayi
                                                    </label><br>
                                                    <input class="form-check-input" type="checkbox" name="p7c" value="Merawat payudara" id="flexCheckIndeterminate">
                                                    <label class="form-check-label" for="flexCheckIndeterminate">
                                                        Merawat payudara
                                                    </label><br>
                                                    <input class="form-check-input" type="checkbox" name="p7d" value="Merawat bayi baru lahir" id="flexCheckIndeterminate">
                                                    <label class="form-check-label" for="flexCheckIndeterminate">
                                                        Merawat bayi baru lahir
                                                    </label><br>
                                                </div>
                                                <!-- <label for="">> </label><br>
                                                <label for="">> </label><br>
                                                <label for="">> </label><br>
                                                <label for="">> </label><br> -->
                                                <div class="form-group clearfix">
                                                    <!-- <div class="icheck-primary d-inline">
                                                        <input type="radio" id="rb_7_1" name="p7" value="1" required="" onclick="show3('none')">
                                                        <label class="form-check-label" for="rb_7_1">Ya</label>
                                                    </div> -->

                                                    <!-- <div class="icheck-primary d-inline">
                                                        <label class="form-check-label" for="rb_7_2">Silahkan diisi jika tidak mendapatkan edukasi</label>
                                                        <textarea class="form-control" name="tap7" id="tap7" rows="1"></textarea>
                                                    </div> -->
                                                </div>

                                                <strong for="">8. Apakah anda merasa nyaman terhadap perawatan yang diberikan petugas medis di rumah sakit ini ?</strong>
                                                <div class="form-group clearfix">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" id="rb_8_1" name="p8" value="Ya" required="" onclick="show4('none')">
                                                        <label class="form-check-label" for="rb_8_1">Ya</label>
                                                    </div>

                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" id="rb_8_2" name="p8" value="Tidak" required="" onclick="show4('block')">
                                                        <label class="form-check-label" for="rb_8_2">Tidak</label>
                                                        <textarea class="form-control" name="tap8" id="tap8" rows="1" style="display: none;"></textarea>
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <Strong for="exampleFormControlTextarea1">Saran:</Strong>
                                                    <textarea class="form-control" name=ta_saran id="ta_saran" rows="2"></textarea>
                                                </div>

                                                <div class="mb-3">
                                                    <strong for="exampleFormControlTextarea1">Kritik:</strong>
                                                    <textarea class="form-control" name="ta_kritik" id="ta_kritik" rows="2"></textarea>
                                                </div>
                                                <button type="submit" class="btn btn-danger btn-block">Simpan</button>
                                            </div>



                                            <!-- <a href="index.html" class="btn btn-primary btn-user btn-block">
                                            Simpan
                                        </a> -->

                                            <hr>
                                            <div class="text-center">
                                                <a href="/survey" class="btn btn-outline-success mb-2" role="button" aria-pressed="true">Beranda</a>
                                            </div>
                                            <hr>
                                            <marquee behavior="center" direction="left">-- Terimakasih atas ketersediaan Anda untuk mengisi Form Kepuasan Pasien RSKIA SADEWA -- </marquee>
                                </div>
                            </div>

                            <hr>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    </div>

    </div>
    <script>
        function show1(kondisi1) {
            $('#tap5').css('display', kondisi1);
        }

        function show2(kondisi2) {
            $('#tap6').css('display', kondisi2);
        }

        function show3(kondisi3) {
            $('#tap7').css('display', kondisi3);
        }

        function show4(kondisi4) {
            $('#tap7').css('display', kondisi4);
        }
    </script>
    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

</body>

</html>