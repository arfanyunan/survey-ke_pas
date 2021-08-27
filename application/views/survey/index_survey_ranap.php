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
                                                    <strong for="fw-bold">Bangsal:</strong>
                                                    <div class="form-group">
                                                        <!-- <label for="txt_Nama" class="col-form-label-sm">Nama Dokter*</label> -->
                                                        <select class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" id="cmb_bangsal" name="cmb_bangsal" required="" data-select2-id="cmb_dokter" tabindex="-1" aria-hidden="true">
                                                            <option value="" selected="selected" data-select2-id="2">Pilih</option>
                                                            <!-- Tampilkan data bangsal -->
                                                            <option value="Alengka" data-select2-id="1">Alengka</option>
                                                            <option value="Amarta" data-select2-id="2">Amarta</option>
                                                            <option value="Astina" data-select2-id="3">Astina</option>
                                                            <option value="Ayodya" data-select2-id="4">Ayodya</option>
                                                        </select><span class="select2 select2-container select2-container--bootstrap4 select2-container--below select2-container--focus" dir="ltr" data-select2-id="1" style="width: 100%;">
                                                            <!-- <span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-cmb_dokter-container"><span class="select2-selection__rendered" id="select2-cmb_dokter-container" role="textbox" aria-readonly="true" title="Pilih">Pilih</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> -->
                                                            <input type="hidden" class="form-control form-control-sm" id="txt_NmBangsal" name="txt_NmBangsal" placeholder="Nama Bangsal">
                                                    </div>

                                                    <strong for="fw-bold">Dokter:</strong>

                                                    <div class="form-group">
                                                        <!-- <label for="txt_Nama" class="col-form-label-sm">Nama Dokter*</label> -->
                                                        <select class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" id="cmb_dokter" name="cmb_dokter" required="" data-select2-id="cmb_dokter" tabindex="-1" aria-hidden="true">
                                                            <option value="" selected="selected" data-select2-id="2">Pilih</option>
                                                            <!-- Tampilkan data dokter -->
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
                                                            <!-- <span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-cmb_dokter-container"><span class="select2-selection__rendered" id="select2-cmb_dokter-container" role="textbox" aria-readonly="true" title="Pilih">Pilih</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> -->
                                                            <input type="hidden" class="form-control form-control-sm" id="txt_Nmdokter" name="txt_Nmdokter" placeholder="Nama Dokter">
                                                    </div>
                                                </div>

                                                <!-- sampai sini -->

                                                <strong for="fw-bold">1. Kenyamanan dan kebersihan Rumah Sakit?</strong>
                                                <div class="form-group clearfix">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" id="rb_1_1" name="p1" value="1" required="">
                                                        <label class="form-check-label" for="rb_1_1">Kurang Sekali</label>
                                                    </div>

                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" id="rb_1_2" name="p1" value="2" required="">
                                                        <label class="form-check-label" for="rb_1_2">Kurang</label>
                                                    </div>
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" id="rb_1_3" name="p1" value="3" required="">
                                                        <label class="form-check-label" for="rb_1_3">Cukup</label>
                                                    </div>
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" id="rb_1_4" name="p1" value="4" required="">
                                                        <label class="form-check-label" for="rb_1_4">Baik</label>
                                                    </div>
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" id="rb_1_5" name="p1" value="5" required="">
                                                        <label class="form-check-label" for="rb_1_5">Baik Sekali</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <strong for="">2. Kejelasan Informasi dan komunikasi dengan Dokter?</strong>
                                                <div class="form-group clearfix">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" id="rb_2_1" name="p2" value="1" required="">
                                                        <label class="form-check-label" for="rb_2_1">Kurang Sekali</label>
                                                    </div>

                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" id="rb_2_2" name="p2" value="2" required="">
                                                        <label class="form-check-label" for="rb_2_2">Kurang</label>
                                                    </div>
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" id="rb_2_3" name="p2" value="3" required="">
                                                        <label class="form-check-label" for="rb_2_3">Cukup</label>
                                                    </div>
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" id="rb_2_4" name="p2" value="4" required="">
                                                        <label class="form-check-label" for="rb_2_4">Baik</label>
                                                    </div>
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" id="rb_2_5" name="p2" value="5" required="">
                                                        <label class="form-check-label" for="rb_2_5">Baik Sekali</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <strong for="">3. Tenaga medis dapat diandalkan untuk menangani pasien?</strong>
                                            <div class="form-group clearfix">
                                                <div class="icheck-primary d-inline">
                                                    <input type="radio" id="rb_3_1" name="p3" value="1" required="">
                                                    <label class="form-check-label" for="rb_3_1">Kurang Sekali</label>
                                                </div>

                                                <div class="icheck-primary d-inline">
                                                    <input type="radio" id="rb_3_2" name="p3" value="2" required="">
                                                    <label class="form-check-label" for="rb_3_2">Kurang</label>
                                                </div>
                                                <div class="icheck-primary d-inline">
                                                    <input type="radio" id="rb_3_3" name="p3" value="3" required="">
                                                    <label class="form-check-label" for="rb_3_3">Cukup</label>
                                                </div>
                                                <div class="icheck-primary d-inline">
                                                    <input type="radio" id="rb_3_4" name="p3" value="4" required="">
                                                    <label class="form-check-label" for="rb_3_4">Baik</label>
                                                </div>
                                                <div class="icheck-primary d-inline">
                                                    <input type="radio" id="rb_3_5" name="p3" value="5" required="">
                                                    <label class="form-check-label" for="rb_3_5">Baik Sekali</label>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <strong for="">4. Perhatian dari Dokter kepada Pasien?</strong>
                                                <div class="form-group clearfix">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" id="rb_4_1" name="p4" value="1" required="">
                                                        <label class="form-check-label" for="rb_4_1">Kurang Sekali</label>
                                                    </div>

                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" id="rb_4_2" name="p4" value="2" required="">
                                                        <label class="form-check-label" for="rb_4_2">Kurang</label>
                                                    </div>
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" id="rb_4_3" name="p4" value="3" required="">
                                                        <label class="form-check-label" for="rb_4_3">Cukup</label>
                                                    </div>
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" id="rb_4_4" name="p4" value="4" required="">
                                                        <label class="form-check-label" for="rb_4_4">Baik</label>
                                                    </div>
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" id="rb_4_5" name="p4" value="5" required="">
                                                        <label class="form-check-label" for="rb_4_5">Baik Sekali</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <strong for="">5. Kesopanan dan keramahan yang diberikan oleh petugas?</strong>
                                                <div class="form-group clearfix">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" id="rb_5_1" name="p5" value="1" required="">
                                                        <label class="form-check-label" for="rb_5_1">Kurang Sekali</label>
                                                    </div>

                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" id="rb_5_2" name="p5" value="2" required="">
                                                        <label class="form-check-label" for="rb_5_2">Kurang</label>
                                                    </div>
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" id="rb_5_3" name="p5" value="3" required="">
                                                        <label class="form-check-label" for="rb_5_3">Cukup</label>
                                                    </div>
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" id="rb_5_4" name="p5" value="4" required="">
                                                        <label class="form-check-label" for="rb_5_4">Baik</label>
                                                    </div>
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" id="rb_5_5" name="p5" value="5" required="">
                                                        <label class="form-check-label" for="rb_5_5">Baik Sekali</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <strong for>6. Rasa makanan untuk pasein rawat inap?</strong>
                                                <div class="form-group clearfix">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" id="rb_6_1" name="p6" value="1" required="">
                                                        <label class="form-check-label" for="rb_6_1">Kurang Sekali</label>
                                                    </div>

                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" id="rb_6_2" name="p6" value="2" required="">
                                                        <label class="form-check-label" for="rb_6_2">Kurang</label>
                                                    </div>
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" id="rb_6_3" name="p6" value="3" required="">
                                                        <label class="form-check-label" for="rb_6_3">Cukup</label>
                                                    </div>
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" id="rb_6_4" name="p6" value="4" required="">
                                                        <label class="form-check-label" for="rb_6_4">Baik</label>
                                                    </div>
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" id="rb_6_5" name="p6" value="5" required="">
                                                        <label class="form-check-label" for="rb_6_5">Baik Sekali</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <strong for>6. Penampilan makanan untuk pasein rawat inap?</strong>
                                                <div class="form-group clearfix">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" id="rb_7_1" name="p7" value="1" required="">
                                                        <label class="form-check-label" for="rb_7_1">Kurang Sekali</label>
                                                    </div>

                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" id="rb_7_2" name="p7" value="2" required="">
                                                        <label class="form-check-label" for="rb_7_2">Kurang</label>
                                                    </div>
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" id="rb_7_3" name="p7" value="3" required="">
                                                        <label class="form-check-label" for="rb_7_3">Cukup</label>
                                                    </div>
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" id="rb_7_4" name="p7" value="4" required="">
                                                        <label class="form-check-label" for="rb_7_4">Baik</label>
                                                    </div>
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" id="rb_7_5" name="p7" value="5" required="">
                                                        <label class="form-check-label" for="rb_7_5">Baik Sekali</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <a href="index.html" class="btn btn-primary btn-user btn-block">
                                            Simpan
                                        </a> -->
                                            <button type="submit" class="btn btn-danger btn-block">Simpan</button>
                                            <hr>
                                            <div class="text-center">
                                                <a href="/survey" class="btn btn-outline-success mb-2" role="button" aria-pressed="true">Beranda</a>
                                            </div>
                                            <hr>
                                            <marquee behavior="center" direction="left">-- Terikasih atas ketersediaan Anda untuk mengisi Form Kepuasan Pasien RSKIA SADEWA -- </marquee>
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

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

</body>

</html>