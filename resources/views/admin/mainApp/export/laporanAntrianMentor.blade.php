<!DOCTYPE html>
<html>

<head>
    <title>Laporan Kegiatan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body style="margin-top: -40px;">

    <table style="width: 100%;border-bottom: 2px solid black;">
        <tr>
            <td style="width: 100px;">
                <img src="http://s3.jagoanstorage.com/aditia-storage/asset/logo/LOGO_LDK.jpg" style="width: 100px;margin-bottom:10px;">
            </td>
            <td>
                <b>LDK AL-Izzah Uinsu</b><br />
                Jl Williem Iskandar Psr V Medan Estate 20731<br />
                Email : dk_izzahsu@yahoo.com
            </td>
            <td style="text-align: right;">
                <h3><b>Laporan Kegiatan Ibadah</b></h3>
            </td>
        </tr>
    </table>

    <p>
        Nama Kegiatan : {{ $dataKegiatan -> nama_kegiatan }}<br/>
        Mentor : {{ $dataKegiatan -> mentorData -> nama_lengkap }}<br/>
        Tanggal Kegiatan : {{ $dataKegiatan -> tanggal_kegiatan }}
    </p>
    <div>
    <table id="tblKegiatan" class="table table-bordered table-hover" style="width:100%">
                    <thead style="border-top: 1px solid #d0d0d0;">
                        <tr>
                            <th>No</th>
                            <th>Binaan</th>
                            <th>No Antrian Awal</th>
                            <th>No Antrian Hasil MLFQ</th>
                            <th>Jenis Amalan</th>        
                        </tr>
                    </thead>
                    <tbody>
                    @php
                        $no = 1;
                    @endphp


                    @php
                    // output sholat subuh 
                    $kdSubuh = "15ddf9d2-294b-400d-9eed-6737d5af46e8";
                    $cekSubuh = DB::table('tbl_peserta') -> where('id_jenis_amalan', $kdSubuh) -> where('id_kegiatan', $idKegiatan) -> get();
                    // get data binaan 
                    @endphp

                    @foreach($cekSubuh as $subuh)
                    @php
                        $idBinaan = $subuh -> id_binaan; 
                        $dataBinaan = DB::table('tbl_profile_member') -> where('username', $idBinaan) -> first();
                    @endphp
                    <tr>
                        <td>{{ $no }}</td>
                        <td>{{ $dataBinaan -> nama_lengkap }}</td>
                        <td>{{ $idBinaan = $subuh -> ordinal;  }}</td>
                        <td>{{ $no }}</td>
                        <td>Sholat Subuh</td>
                    </tr>
                    @php
                        $no++;
                    @endphp
                    @endforeach

                    @php
                    // output sholat zuhur 
                    $kdSubuh = "d1bca0cd-7302-4922-b7a4-0eeab17d9087";
                    $cekSubuh = DB::table('tbl_peserta') -> where('id_jenis_amalan', $kdSubuh) -> where('id_kegiatan', $idKegiatan) -> get();
                    // get data binaan 
                    @endphp

                    @foreach($cekSubuh as $subuh)
                    @php
                        $idBinaan = $subuh -> id_binaan; 
                        $dataBinaan = DB::table('tbl_profile_member') -> where('username', $idBinaan) -> first();
                    @endphp
                    <tr>
                        <td>{{ $no }}</td>
                        <td>{{ $dataBinaan -> nama_lengkap }}</td>
                        <td>{{ $idBinaan = $subuh -> ordinal;  }}</td>
                        <td>{{ $no }}</td>
                        <td>Sholat Dhzuhur</td>
                    </tr>
                    @php
                        $no++;
                    @endphp
                    @endforeach

                    @php
                    // output membaca al qur'an 
                    $kdSubuh = "a59c02c1-7fb2-4505-9975-ff1086b9743e";
                    $cekSubuh = DB::table('tbl_peserta') -> where('id_jenis_amalan', $kdSubuh) -> where('id_kegiatan', $idKegiatan) -> get();
                    // get data binaan 
                    @endphp

                    @foreach($cekSubuh as $subuh)
                    @php
                        $idBinaan = $subuh -> id_binaan; 
                        $dataBinaan = DB::table('tbl_profile_member') -> where('username', $idBinaan) -> first();
                    @endphp
                    <tr>
                        <td>{{ $no }}</td>
                        <td>{{ $dataBinaan -> nama_lengkap }}</td>
                        <td>{{ $idBinaan = $subuh -> ordinal;  }}</td>
                        <td>{{ $no }}</td>
                        <td>Membaca Al-Qur'an</td>
                    </tr>
                    @php
                        $no++;
                    @endphp
                    @endforeach

                    @php
                    // output Almasurat 
                    $kdSubuh = "05b98329-1f21-4920-ad80-3f035f20a830";
                    $cekSubuh = DB::table('tbl_peserta') -> where('id_jenis_amalan', $kdSubuh) -> where('id_kegiatan', $idKegiatan) -> get();
                    // get data binaan 
                    @endphp

                    @foreach($cekSubuh as $subuh)
                    @php
                        $idBinaan = $subuh -> id_binaan; 
                        $dataBinaan = DB::table('tbl_profile_member') -> where('username', $idBinaan) -> first();
                    @endphp
                    <tr>
                        <td>{{ $no }}</td>
                        <td>{{ $dataBinaan -> nama_lengkap }}</td>
                        <td>{{ $idBinaan = $subuh -> ordinal;  }}</td>
                        <td>{{ $no }}</td>
                        <td>Almasurat</td>
                    </tr>
                    @php
                        $no++;
                    @endphp
                    @endforeach

                    @php
                    // output dhuha
                    $kdSubuh = "cba8a67e-d818-45ce-8965-59302bb37cdb";
                    $cekSubuh = DB::table('tbl_peserta') -> where('id_jenis_amalan', $kdSubuh) -> where('id_kegiatan', $idKegiatan) -> get();
                    // get data binaan 
                    @endphp

                    @foreach($cekSubuh as $subuh)
                    @php
                        $idBinaan = $subuh -> id_binaan; 
                        $dataBinaan = DB::table('tbl_profile_member') -> where('username', $idBinaan) -> first();
                    @endphp
                    <tr>
                        <td>{{ $no }}</td>
                        <td>{{ $dataBinaan -> nama_lengkap }}</td>
                        <td>{{ $idBinaan = $subuh -> ordinal;  }}</td>
                        <td>{{ $no }}</td>
                        <td>Sholat Isya</td>
                    </tr>
                    @php
                        $no++;
                    @endphp
                    @endforeach

                    @php
                    // output isya
                    $kdSubuh = "02c05b52-bfd3-4946-81ba-857a81c203f6";
                    $cekSubuh = DB::table('tbl_peserta') -> where('id_jenis_amalan', $kdSubuh) -> where('id_kegiatan', $idKegiatan) -> get();
                    // get data binaan 
                    @endphp

                    @foreach($cekSubuh as $subuh)
                    @php
                        $idBinaan = $subuh -> id_binaan; 
                        $dataBinaan = DB::table('tbl_profile_member') -> where('username', $idBinaan) -> first();
                    @endphp
                    <tr>
                        <td>{{ $no }}</td>
                        <td>{{ $dataBinaan -> nama_lengkap }}</td>
                        <td>{{ $idBinaan = $subuh -> ordinal;  }}</td>
                        <td>{{ $no }}</td>
                        <td>Sholat Dhuha</td>
                    </tr>
                    @php
                        $no++;
                    @endphp
                    @endforeach

                    </tbody>
                </table>
    </div>
    </body>
</html>