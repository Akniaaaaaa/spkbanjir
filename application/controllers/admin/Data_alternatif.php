<?php

class Data_alternatif extends CI_Controller
{

    public function index()
    {
        $data = [
            'page' => "Alternatif",
            'list' => $this->M_dataalternatif->tampil(),

        ];
        // $this->load->view('alternatif/index', $data);
        $this->load->view('template_admin/v_head');
        $this->load->view('template_admin/v_header');
        $this->load->view('template_admin/v_sidebar');
        $this->load->view('admin/Data_alternatif', $data);
        $this->load->view('template_admin/v_footer');
    }
    //menampilkan view create
    public function create()
    {
        $data['page'] = "Alternatif";
        $this->load->view('template_admin/v_head');
        $this->load->view('template_admin/v_header');
        $this->load->view('template_admin/v_sidebar');
        $this->load->view('admin/Create_alternatif', $data);
        $this->load->view('template_admin/v_footer');
    }
    public function tambah_aksiA()
    {
        $kelurahan       = $this->input->post('kelurahan', TRUE);
        $kecamatan       = $this->input->post('kecamatan', TRUE);

        $data = array(
            'kelurahan'      => $kelurahan,
            'kecamatan'                 => $kecamatan,
        );

        $this->M_dataalternatif->insert($data, 'tb_alternatifs');
        redirect('admin/Data_alternatif/index');
    }
    public function tambah_aksi()
    {
        $kelurahan       = $this->input->post('kelurahan', TRUE);
        $kecamatan       = $this->input->post('kecamatan', TRUE);
        $tinggi_genangan                = $this->input->post('tinggi_genangan', TRUE);
        $luas_genangan                  = $this->input->post('luas_genangan', TRUE);
        $lamanya_genangan               = $this->input->post('lamanya_genangan', TRUE);
        $frekuensi_genangan             = $this->input->post('frekuensi_genangan', TRUE);
        $kerugian_ekonomi               = $this->input->post('kerugian_ekonomi', TRUE);
        $gangguansosial_pemerintah      = $this->input->post('gangguansosial_pemerintah', TRUE);
        $kerugian_transportasi       = $this->input->post('kerugian_transportasi', TRUE);
        $kerugian_perumahan       = $this->input->post('kerugian_perumahan', TRUE);
        $hakmilikpribadi       = $this->input->post('hakmilikpribadi', TRUE);

        // $tinggi_genangan2 = "SELECT * FROM `tb_subkriteria` WHERE `tb_subkriteria`.`id_kriteria` = 1";
        // $tg2 = $this->db->query($tinggi_genangan2)->result();
        // $tg = $tg2['nama_subkriteria'];
        // $tgk = $tg2['nilai'];

        // RATING
        switch ($tinggi_genangan) {
            case $tinggi_genangan > 0.5:
                $k1 = 5;
                break;
            case $tinggi_genangan >= 0.30 && $tinggi_genangan <= 0.50:
                $k1 = 4;
                break;
            case $tinggi_genangan >= 0.20 && $tinggi_genangan < 0.30:
                $k1 = 3;
                break;
            case $tinggi_genangan >= 0.10 && $tinggi_genangan < 0.20:
                $k1 = 2;
                break;
            case $tinggi_genangan < 0.10:
                $k1 = 1;
                break;
            default:
                echo "error";
                break;
        };


        switch ($luas_genangan) {
            case $luas_genangan > 8:
                $k2 = 5;
                break;
            case $luas_genangan >= 4 && $luas_genangan <= 8:
                $k2 = 4;
                break;
            case $luas_genangan >= 2 && $luas_genangan < 4:
                $k2 = 3;
                break;
            case $luas_genangan >= 1 && $luas_genangan < 2:
                $k2 = 2;
                break;
            case $luas_genangan < 1:
                $k2 = 1;
                break;
            default:
                echo "error";
                break;
        };


        switch ($lamanya_genangan) {
            case $lamanya_genangan > 8:
                $k3 = 5;
                break;
            case $lamanya_genangan >= 4 && $lamanya_genangan <= 8:
                $k3 = 4;
                break;
            case $lamanya_genangan >= 2 && $lamanya_genangan < 4:
                $k3 = 3;
                break;
            case $lamanya_genangan >= 1 && $lamanya_genangan < 2:
                $k3 = 2;
                break;
            case $lamanya_genangan < 1:
                $k3 = 1;
                break;
            default:
                echo "error";
                break;
        };

        switch ($frekuensi_genangan) {
            case $frekuensi_genangan == "Sangat sering (10 kali/tahun)":
                $k4 = 5;
                break;
            case $frekuensi_genangan == "Sering (6 kali/tahun)":
                $k4 = 4;
                break;
            case $frekuensi_genangan == "Kurang sering (3 kali/tahun)":
                $k4 = 3;
                break;
            case $frekuensi_genangan == "Jarang (1 kali/tahun)":
                $k4 = 2;
                break;
            case $frekuensi_genangan == "Tidak pernah":
                $k4 = 1;
                break;
            default:
                echo "error";
                break;
        };

        switch ($kerugian_ekonomi) {
            case $kerugian_ekonomi == "Jika genangan air/banjir terjadi pada daerah industri, daerah komersial dan daerah perkantoran padat":
                $k5 = 4;
                break;
            case $kerugian_ekonomi == "Jika genangan air/banjir terjadi di daerah industri dan daerah komersial yang kurang padat":
                $k5 = 3;
                break;
            case $kerugian_ekonomi == "Jika genangan air/banjir memperngaruhi atau terjadi di daerah perumahan dan/atau daerah pertanian (dalam daerah perkotaan yang terbatas)":
                $k5 = 2;
                break;
            case $kerugian_ekonomi == "Jika terjadi genangan pada daerah yang jarang penduduknya dan daerah yang tidak produktif":
                $k5 = 1;
                break;
            default:
                echo "error";
                break;
        };

        switch ($gangguansosial_pemerintah) {
            case $gangguansosial_pemerintah == "Jika genangan air/banjir terjadi pada daerah yang banyak pelayanan fasilitas sosial dan fasilitas pemerintah":
                $k6 = 4;
                break;
            case $gangguansosial_pemerintah == "Jika genangan air/banjir terjadi di daerah yang sedikit pelayanan fasilitas sosial dan fasilitas pemerintah":
                $k6 = 3;
                break;
            case $gangguansosial_pemerintah == "Jika genangan air/banjir mempengaruhi atau terjadi di daerah yang pelayanan fasilitas sosial dan fasilitas pemerintah terbatas":
                $k6 = 2;
                break;
            case $gangguansosial_pemerintah == "Jika tidak ada fasilitas sosial dan fasilitas pemerintah":
                $k6 = 1;
                break;
            default:
                echo "error";
                break;
        };

        switch ($kerugian_transportasi) {
            case $kerugian_transportasi == "Jika genangan air/banjir terjadi pada daerah yang jaringan transportasinya padat":
                $k7 = 4;
                break;
            case $kerugian_transportasi == "Jika genangan air/bajir terjadi di daerah yang jaringan transportasinya kurang padat":
                $k7 = 3;
                break;
            case $kerugian_transportasi == "Jika genangan air/banjir mempengaruhi atau terjadi di daerah yang jaringan transportasinya terbatas":
                $k7 = 2;
                break;
            case $kerugian_transportasi == "Jika tidak ada jaringan jalan":
                $k7 = 1;
                break;
            default:
                echo "error";
                break;
        };

        switch ($kerugian_perumahan) {
            case $kerugian_perumahan == "Jika genangan air/banjir terjadi pada perumahan padat sekali":
                $k8 = 4;
                break;
            case $kerugian_perumahan == "Jika genangan air/banjir terjadi pada perumahan yang kurang padat":
                $k8 = 3;
                break;
            case $kerugian_perumahan == "Jika genangan air/banjir mempengaruhi atau terjadi di daerah yang hanya pada beberapa bangunan perumahan":
                $k8 = 2;
                break;
            case $kerugian_perumahan == "Jika tidak ada perumahan pada daerah genangan air/banjir":
                $k8 = 1;
                break;
            default:
                echo "error";
                break;
        };

        switch ($hakmilikpribadi) {
            case $hakmilikpribadi == "Jika kerugian lebih dari 80% nilai milik pribadi":
                $k9 = 4;
                break;
            case $hakmilikpribadi == "Jika kerugian 80% nilai milik pribadi":
                $k9 = 3;
                break;
            case $hakmilikpribadi == "Jika kerugian kurang dari 40% milik pribadi":
                $k9 = 2;
                break;
            case $hakmilikpribadi == "Tidak ada kerugian milik pribadi":
                $k9 = 1;
                break;
            default:
                echo "error";
                break;
        };


        // if ($tinggi_genangan > 0.5){
        //     $k1 = 5;
        // } elseif ($tinggi_genangan >= 0.30 && $tinggi_genangan <= 0.50){
        //     $k1 = 4;
        // } elseif ($tinggi_genangan >= 0.20 && $tinggi_genangan < 0.30){
        //     $k1 = 3;
        // } elseif ($tinggi_genangan >= 0.10 && $tinggi_genangan < 0.20){
        //     $k1 = 2;
        // } elseif ($tinggi_genangan < 0.10){
        //     $k1 = 1;
        // } else {
        //     $k1 = "Eror";
        // };

        // // if ($luas_genangan > 8){
        // //     $k2 = 5;
        // // } elseif ($luas_genangan >= 4 && $luas_genangan <= 8){
        // //     $k2 = 4;
        // // } elseif ($luas_genangan >= 2 && $luas_genangan < 4){
        // //     $k2 = 3;
        // // } elseif ($luas_genangan >= 1 && $luas_genangan < 2){
        // //     $k2 = 2;
        // // } elseif ($luas_genangan < 1){
        // //     $k2 = 1;
        // // } else {
        // //     $k2 = "Eror";
        // // };

        // if ($lamanya_genangan > 8){
        //     $k3 = 5;
        // } elseif ($lamanya_genangan >= 4 && $lamanya_genangan <= 8){
        //     $k3 = 4;
        // } elseif ($lamanya_genangan >= 2 && $lamanya_genangan < 4){
        //     $k3 = 3;
        // } elseif ($lamanya_genangan >= 1 && $lamanya_genangan < 2){
        //     $k3 = 2;
        // } elseif ($lamanya_genangan < 1){
        //     $k3 = 1;
        // } else {
        //     $k3 = "Eror";
        // };

        // if ($frekuensi_genangan == "Sangat sering (10 kali/tahun)"){
        //     $k4 = 5;
        // } elseif ($frekuensi_genangan == "Sering (6 kali/tahun)"){
        //     $k4 = 4;
        // } elseif ($frekuensi_genangan == "Kurang sering (3 kali/tahun)"){
        //     $k4 = 3;
        // } elseif ($frekuensi_genangan == "Jarang (1 kali/tahun)"){
        //     $k4 = 2;
        // } elseif ($frekuensi_genangan == "Tidak pernah"){
        //     $k4 = 1;
        // } else {
        //     $k4 = "Eror";
        // };

        // if ($kerugian_ekonomi == "Jika genangan air/banjir terjadi pada daerah industri, daerah komersial dan daerah perkantoran padat"){
        //     $k5 = 4;
        // } elseif ($kerugian_ekonomi == "Jika genangan air/banjir terjadi di daerah industri dan daerah komersial yang kurang padat"){
        //     $k5 = 3;
        // } elseif ($kerugian_ekonomi == "Jika genangan air/banjir memperngaruhi atau terjadi di daerah perumahan dan/atau daerah pertanian (dalam daerah perkotaan yang terbatas)"){
        //     $k5 = 2;
        // } elseif ($kerugian_ekonomi == "Jika terjadi genangan pada daerah yang jarang penduduknya dan daerah yang tidak produktif"){
        //     $k5 = 1;
        // } else {
        //     $k5 = "Eror";
        // };

        // if ($gangguansosial_pemerintah == "Jika genangan air/banjir terjadi pada daerah yang banyak pelayanan fasilitas sosial dan fasilitas pemerintah"){
        //     $k6 = 4;
        // } elseif ($gangguansosial_pemerintah == "Jika genangan air/banjir terjadi di daerah yang sedikit pelayanan fasilitas sosial dan fasilitas pemerintah"){
        //     $k6 = 3;
        // } elseif ($gangguansosial_pemerintah == "Jika genangan air/banjir mempengaruhi atau terjadi di daerah yang pelayanan fasilitas sosial dan fasilitas pemerintah terbatas"){
        //     $k6 = 2;
        // } elseif ($gangguansosial_pemerintah == "Jika tidak ada fasilitas sosial dan fasilitas pemerintah"){
        //     $k6 = 1;
        // } else {
        //     $k6 = "Eror";
        // };

        // if ($kerugian_transportasi == "Jika genangan air/banjir terjadi pada daerah yang jaringan transportasinya padat"){
        //     $k7 = 4;
        // } elseif ($kerugian_transportasi == "Jika genangan air/bajir terjadi di daerah yang jaringan transportasinya kurang padat"){
        //     $k7 = 3;
        // } elseif ($kerugian_transportasi == "Jika genangan air/banjir mempengaruhi atau terjadi di daerah yang jaringan transportasinya terbatas"){
        //     $k7 = 2;
        // } elseif ($kerugian_transportasi == "Jika tidak ada jaringan jalan"){
        //     $k7 = 1;
        // } else {
        //     $k7 = "Eror";
        // };

        // if ($kerugian_perumahan == "Jika genangan air/banjir terjadi pada perumahan padat sekali"){
        //     $k8 = 4;
        // } elseif ($kerugian_perumahan == "Jika genangan air/banjir terjadi pada perumahan yang kurang padat"){
        //     $k8 = 3;
        // } elseif ($kerugian_perumahan == "Jika genangan air/banjir mempengaruhi atau terjadi di daerah yang hanya pada beberapa bangunan perumahan"){
        //     $k8 = 2;
        // } elseif ($kerugian_perumahan == "Jika tidak ada perumahan pada daerah genangan air/banjir"){
        //     $k8 = 1;
        // } else {
        //     $k8 = "Eror";
        // };

        // if ($hakmilikpribadi == "Jika kerugian lebih dari 80% nilai milik pribadi"){
        //     $k9 = 4;
        // } elseif ($hakmilikpribadi == "Jika kerugian 80% nilai milik pribadi"){
        //     $k9 = 3;
        // } elseif ($hakmilikpribadi == "Jika kerugian kurang dari 40% milik pribadi"){
        //     $k9 = 2;
        // } elseif ($hakmilikpribadi == "Tidak ada kerugian milik pribadi"){
        //     $k9 = 1;
        // } else {
        //     $k9 = "Eror";
        // };

        $data = array(
            'kelurahan'     => $kelurahan,
            'kecamatan'     => $kecamatan,
            'tinggi_genangan'     => $tinggi_genangan,
            'luas_genangan'     => $luas_genangan,
            'lamanya_genangan'     => $lamanya_genangan,
            'frekuensi_genangan'     => $frekuensi_genangan,
            'kerugian_ekonomi'     => $kerugian_ekonomi,
            'gangguansosial_pemerintah'     => $gangguansosial_pemerintah,
            'kerugian_transportasi'     => $kerugian_transportasi,
            'kerugian_perumahan'     => $kerugian_perumahan,
            'hakmilikpribadi'     => $hakmilikpribadi

        );

        $this->M_dataalternatif->input_data($data, 'tb_alternatif');
        $id_alternatif      = $this->db->insert_id();

        $data2 = array(
            'id_alternatif'     => $id_alternatif,
            'k1'                => $k1,
            'k2'                => $k2,
            'k3'                => $k3,
            'k4'                => $k4,
            'k5'                => $k5,
            'k6'                => $k6,
            'k7'                => $k7,
            'k8'                => $k8,
            'k9'                => $k9
        );

        $this->M_dataalternatif->input_data($data2, 'tb_nilairating');
        $id_nilairating      = $this->db->insert_id();

        // NORMALISASI DATA
        $rating = $this->model->tampil_nilairating()->result();

        $xij1_ar = array();
        $xij2_ar = array();
        $xij3_ar = array();
        $xij4_ar = array();
        $xij5_ar = array();
        $xij6_ar = array();
        $xij7_ar = array();
        $xij8_ar = array();
        $xij9_ar = array();
        foreach ($rating as $nr) {
            $ij1 = ($nr->k1) * ($nr->k1);
            array_push($xij1_ar, $ij1);

            $ij2 = ($nr->k2) * ($nr->k2);
            array_push($xij2_ar, $ij2);

            $ij3 = ($nr->k3) * ($nr->k3);
            array_push($xij3_ar, $ij3);

            $ij4 = ($nr->k4) * ($nr->k4);
            array_push($xij4_ar, $ij4);

            $ij5 = ($nr->k5) * ($nr->k5);
            array_push($xij5_ar, $ij5);

            $ij6 = ($nr->k6) * ($nr->k6);
            array_push($xij6_ar, $ij6);

            $ij7 = ($nr->k7) * ($nr->k7);
            array_push($xij7_ar, $ij7);

            $ij8 = ($nr->k8) * ($nr->k8);
            array_push($xij8_ar, $ij8);

            $ij9 = ($nr->k9) * ($nr->k9);
            array_push($xij9_ar, $ij9);
        }

        $xij1 = array_sum($xij1_ar);
        $xij2 = array_sum($xij2_ar);
        $xij3 = array_sum($xij3_ar);
        $xij4 = array_sum($xij4_ar);
        $xij5 = array_sum($xij5_ar);
        $xij6 = array_sum($xij6_ar);
        $xij7 = array_sum($xij7_ar);
        $xij8 = array_sum($xij8_ar);
        $xij9 = array_sum($xij9_ar);

        foreach ($rating as $nr) {
            $id_nilairating = $nr->id_nilairating;
            $normalisasi = $this->db->get_where('tb_normalisasi', ['id_nilairating' => $id_nilairating])->row_array();

            $normal1 = ($nr->k1) / sqrt($xij1);
            $normal2 = ($nr->k2) / sqrt($xij2);
            $normal3 = ($nr->k3) / sqrt($xij3);
            $normal4 = ($nr->k4) / sqrt($xij4);
            $normal5 = ($nr->k5) / sqrt($xij5);
            $normal6 = ($nr->k6) / sqrt($xij6);
            $normal7 = ($nr->k7) / sqrt($xij7);
            $normal8 = ($nr->k8) / sqrt($xij8);
            $normal9 = ($nr->k9) / sqrt($xij9);

            $normalisasi_data = array(
                'k1_normalisasi'         => $normal1,
                'k2_normalisasi'         => $normal2,
                'k3_normalisasi'         => $normal3,
                'k4_normalisasi'         => $normal4,
                'k5_normalisasi'         => $normal5,
                'k6_normalisasi'         => $normal6,
                'k7_normalisasi'         => $normal7,
                'k8_normalisasi'         => $normal8,
                'k9_normalisasi'         => $normal9,
            );

            $normalisasi_data2 = array(
                'id_nilairating'          => $id_nilairating,
                'k1_normalisasi'          => $normal1,
                'k2_normalisasi'          => $normal2,
                'k3_normalisasi'          => $normal3,
                'k4_normalisasi'          => $normal4,
                'k5_normalisasi'          => $normal5,
                'k6_normalisasi'          => $normal6,
                'k7_normalisasi'          => $normal7,
                'k8_normalisasi'          => $normal8,
                'k9_normalisasi'          => $normal9,
            );


            $where = array(
                'id_nilairating' => $id_nilairating
            );

            if (isset($normalisasi)) {
                $this->model->edit($where, $normalisasi_data, 'tb_normalisasi');
            } else {
                $this->model->tambah($normalisasi_data2, 'tb_normalisasi');
                $id_normalisasi = $this->db->insert_id();
            }
        }

        // OPTIMALISASI
        $tb_kriteria = $this->model->tampil_datakriteria()->result();

        $bobot = array();
        foreach ($tb_kriteria as $tk) {
            array_push($bobot, $tk->bobot);
        }

        $tb_normalisasi = $this->model->tampil_normalisasi()->result();;
        foreach ($tb_normalisasi as $tn) {
            $id_normalisasis = $tn->id_normalisasi;
            $optimalisasi = $this->db->get_where('tb_optimalisasi', ['id_normalisasi' => $id_normalisasis])->row_array();

            $optimal1 = ($tn->k1_normalisasi) * ($bobot[0] / 100);
            $optimal2 = ($tn->k2_normalisasi) * ($bobot[1] / 100);
            $optimal3 = ($tn->k3_normalisasi) * ($bobot[2] / 100);
            $optimal4 = ($tn->k4_normalisasi) * ($bobot[3] / 100);
            $optimal5 = ($tn->k5_normalisasi) * ($bobot[4] / 100);
            $optimal6 = ($tn->k6_normalisasi) * ($bobot[5] / 100);
            $optimal7 = ($tn->k7_normalisasi) * ($bobot[6] / 100);
            $optimal8 = ($tn->k8_normalisasi) * ($bobot[7] / 100);
            $optimal9 = ($tn->k9_normalisasi) * ($bobot[8] / 100);

            $optimalisasi_data = array(
                'k1_optimalisasi'              => $optimal1,
                'k2_optimalisasi'              => $optimal2,
                'k3_optimalisasi'              => $optimal3,
                'k4_optimalisasi'           => $optimal4,
                'k5_optimalisasi'           => $optimal5,
                'k6_optimalisasi'            => $optimal6,
                'k7_optimalisasi'            => $optimal7,
                'k8_optimalisasi'            => $optimal8,
                'k9_optimalisasi'            => $optimal9,
            );

            $optimalisasi_data2 = array(
                'id_normalisasi'             => $id_normalisasi,
                'k1_optimalisasi'           => $optimal1,
                'k2_optimalisasi'           => $optimal2,
                'k3_optimalisasi'              => $optimal3,
                'k4_optimalisasi'           => $optimal4,
                'k5_optimalisasi'           => $optimal5,
                'k6_optimalisasi'            => $optimal6,
                'k7_optimalisasi'            => $optimal7,
                'k8_optimalisasi'            => $optimal8,
                'k9_optimalisasi'            => $optimal9,
            );

            $where2 = array(
                'id_normalisasi' => $id_normalisasis,
            );

            if (isset($optimalisasi)) {
                $this->model->edit($where2, $optimalisasi_data, 'tb_optimalisasi');
            } else {
                $this->model->tambah($optimalisasi_data2, 'tb_optimalisasi');
                $id_optimalisasi = $this->db->insert_id();
            }
        }

        // HITUNG MOORA YI MAX - MIN
        $tb_optimalisasi = $this->model->tampil_optimalisasi()->result();;
        foreach ($tb_optimalisasi as $to) {
            $id_optimalisasis = $to->id_optimalisasi;
            $hasil = $this->db->get_where('tb_hasil', ['id_optimalisasi' => $id_optimalisasis])->row_array();

            $hitung1 = 0;
            $hitung2 = ($to->k1_optimalisasi) + ($to->k2_optimalisasi) + ($to->k3_optimalisasi) + ($to->k4_optimalisasi) + ($to->k5_optimalisasi) + ($to->k6_optimalisasi) + ($to->k7_optimalisasi) + ($to->k8_optimalisasi) + ($to->k9_optimalisasi);
            $result     = $hitung2 - $hitung1;

            $hasil_data = array(
                'cost'                => round($hitung1, 4),
                'benefit'            => round($hitung2, 4),
                'hasil'                => round($result, 4),
            );
            $hasil_data2 = array(
                'id_optimalisasi'    => round($id_optimalisasi, 4),
                'cost'                => round($hitung1, 4),
                'benefit'            => round($hitung2, 4),
                'hasil'                => round($result, 4)
            );

            $where3 = array(
                'id_optimalisasi' => $id_optimalisasis,
            );

            if (isset($hasil)) {
                $this->model->edit($where3, $hasil_data, 'tb_hasil');
            } else {
                $this->model->tambah($hasil_data2, 'tb_hasil');
            }
        }
        // $this->session->set_flashdata('pesan','<div class="alert
        //         alert-success alert-dismissible fade show"
        //         role="alert">
        //             Data Alternatif Berhasil Ditambah !
        //             <button type="button" class="close"
        //                 data-dismiss="alert" aria-label="Close">
        //             <span aria-hidden="true">&times;</span>
        //             </button>
        //             </div>');
        redirect('admin/Data_alternatif/index');
    }

    public function hapus($id_admin)
    {
        $where = array('id_alternatif' => $id_admin);
        $this->M_dataadmin->hapus_data($where, 'tb_alternatif');
        redirect('admin/Data_alternatif/index');
    }

    public function edit()
    {
        $id_alternatif                = $this->input->post('id_alternatif');
        $kelurahan                    = $this->input->post('kelurahan');
        $kecamatan                    = $this->input->post('kecamatan');
        $tinggi_genangan              = $this->input->post('tinggi_genangan');
        $luas_genangan                = $this->input->post('luas_genangan');
        $lamanya_genangan             = $this->input->post('lamanya_genangan');
        $frekuensi_genangan           = $this->input->post('frekuensi_genangan');
        $kerugian_ekonomi             = $this->input->post('kerugian_ekonomi');
        $gangguansosial_pemerintah    = $this->input->post('gangguansosial_pemerintah');
        $kerugian_transportasi        = $this->input->post('kerugian_transportasi');
        $kerugian_perumahan           = $this->input->post('kerugian_perumahan');
        $hakmilikpribadi              = $this->input->post('hakmilikpribadi');
        $data = array(
            'id_alternatif'                => $id_alternatif,
            'kelurahan'                    => $kelurahan,
            'kecamatan'                    => $kecamatan,
            'tinggi_genangan'              => $tinggi_genangan,
            'luas_genangan'                => $luas_genangan,
            'lamanya_genangan'             => $lamanya_genangan,
            'frekuensi_genangan'           => $frekuensi_genangan,
            'kerugian_ekonomi'             => $kerugian_ekonomi,
            'gangguansosial_pemerintah'    => $gangguansosial_pemerintah,
            'kerugian_transportasi'        => $kerugian_transportasi,
            'kerugian_perumahan'           => $kerugian_perumahan,
            'hakmilikpribadi'              => $hakmilikpribadi

        );
        $this->db->where('id_alternatif', $id_alternatif);
        $this->db->update('tb_alternatif', $data);
        // RATING
        switch ($tinggi_genangan) {
            case $tinggi_genangan > 0.5:
                $k1 = 5;
                break;
            case $tinggi_genangan >= 0.30 && $tinggi_genangan <= 0.50:
                $k1 = 4;
                break;
            case $tinggi_genangan >= 0.20 && $tinggi_genangan < 0.30:
                $k1 = 3;
                break;
            case $tinggi_genangan >= 0.10 && $tinggi_genangan < 0.20:
                $k1 = 2;
                break;
            case $tinggi_genangan < 0.10:
                $k1 = 1;
                break;
            default:
                echo "error";
                break;
        };


        switch ($luas_genangan) {
            case $luas_genangan > 8:
                $k2 = 5;
                break;
            case $luas_genangan >= 4 && $luas_genangan <= 8:
                $k2 = 4;
                break;
            case $luas_genangan >= 2 && $luas_genangan < 4:
                $k2 = 3;
                break;
            case $luas_genangan >= 1 && $luas_genangan < 2:
                $k2 = 2;
                break;
            case $luas_genangan < 1:
                $k2 = 1;
                break;
            default:
                echo "error";
                break;
        };


        switch ($lamanya_genangan) {
            case $lamanya_genangan > 8:
                $k3 = 5;
                break;
            case $lamanya_genangan >= 4 && $lamanya_genangan <= 8:
                $k3 = 4;
                break;
            case $lamanya_genangan >= 2 && $lamanya_genangan < 4:
                $k3 = 3;
                break;
            case $lamanya_genangan >= 1 && $lamanya_genangan < 2:
                $k3 = 2;
                break;
            case $lamanya_genangan < 1:
                $k3 = 1;
                break;
            default:
                echo "error";
                break;
        };

        switch ($frekuensi_genangan) {
            case $frekuensi_genangan == "Sangat sering (10 kali/tahun)":
                $k4 = 5;
                break;
            case $frekuensi_genangan == "Sering (6 kali/tahun)":
                $k4 = 4;
                break;
            case $frekuensi_genangan == "Kurang sering (3 kali/tahun)":
                $k4 = 3;
                break;
            case $frekuensi_genangan == "Jarang (1 kali/tahun)":
                $k4 = 2;
                break;
            case $frekuensi_genangan == "Tidak pernah":
                $k4 = 1;
                break;
            default:
                echo "error";
                break;
        };

        switch ($kerugian_ekonomi) {
            case $kerugian_ekonomi == "Jika genangan air/banjir terjadi pada daerah industri, daerah komersial dan daerah perkantoran padat":
                $k5 = 4;
                break;
            case $kerugian_ekonomi == "Jika genangan air/banjir terjadi di daerah industri dan daerah komersial yang kurang padat":
                $k5 = 3;
                break;
            case $kerugian_ekonomi == "Jika genangan air/banjir memperngaruhi atau terjadi di daerah perumahan dan/atau daerah pertanian (dalam daerah perkotaan yang terbatas)":
                $k5 = 2;
                break;
            case $kerugian_ekonomi == "Jika terjadi genangan pada daerah yang jarang penduduknya dan daerah yang tidak produktif":
                $k5 = 1;
                break;
            default:
                echo "error";
                break;
        };

        switch ($gangguansosial_pemerintah) {
            case $gangguansosial_pemerintah == "Jika genangan air/banjir terjadi pada daerah yang banyak pelayanan fasilitas sosial dan fasilitas pemerintah":
                $k6 = 4;
                break;
            case $gangguansosial_pemerintah == "Jika genangan air/banjir terjadi di daerah yang sedikit pelayanan fasilitas sosial dan fasilitas pemerintah":
                $k6 = 3;
                break;
            case $gangguansosial_pemerintah == "Jika genangan air/banjir mempengaruhi atau terjadi di daerah yang pelayanan fasilitas sosial dan fasilitas pemerintah terbatas":
                $k6 = 2;
                break;
            case $gangguansosial_pemerintah == "Jika tidak ada fasilitas sosial dan fasilitas pemerintah":
                $k6 = 1;
                break;
            default:
                echo "error";
                break;
        };

        switch ($kerugian_transportasi) {
            case $kerugian_transportasi == "Jika genangan air/banjir terjadi pada daerah yang jaringan transportasinya padat":
                $k7 = 4;
                break;
            case $kerugian_transportasi == "Jika genangan air/bajir terjadi di daerah yang jaringan transportasinya kurang padat":
                $k7 = 3;
                break;
            case $kerugian_transportasi == "Jika genangan air/banjir mempengaruhi atau terjadi di daerah yang jaringan transportasinya terbatas":
                $k7 = 2;
                break;
            case $kerugian_transportasi == "Jika tidak ada jaringan jalan":
                $k7 = 1;
                break;
            default:
                echo "error";
                break;
        };

        switch ($kerugian_perumahan) {
            case $kerugian_perumahan == "Jika genangan air/banjir terjadi pada perumahan padat sekali":
                $k8 = 4;
                break;
            case $kerugian_perumahan == "Jika genangan air/banjir terjadi pada perumahan yang kurang padat":
                $k8 = 3;
                break;
            case $kerugian_perumahan == "Jika genangan air/banjir mempengaruhi atau terjadi di daerah yang hanya pada beberapa bangunan perumahan":
                $k8 = 2;
                break;
            case $kerugian_perumahan == "Jika tidak ada perumahan pada daerah genangan air/banjir":
                $k8 = 1;
                break;
            default:
                echo "error";
                break;
        };

        switch ($hakmilikpribadi) {
            case $hakmilikpribadi == "Jika kerugian lebih dari 80% nilai milik pribadi":
                $k9 = 4;
                break;
            case $hakmilikpribadi == "Jika kerugian 80% nilai milik pribadi":
                $k9 = 3;
                break;
            case $hakmilikpribadi == "Jika kerugian kurang dari 40% milik pribadi":
                $k9 = 2;
                break;
            case $hakmilikpribadi == "Tidak ada kerugian milik pribadi":
                $k9 = 1;
                break;
            default:
                echo "error";
                break;
        };



        // if ($tinggi_genangan > 0.5){
        //     $k1 = 5;
        // } elseif ($tinggi_genangan >= 0.30 && $tinggi_genangan <= 0.50){
        //     $k1 = 4;
        // } elseif ($tinggi_genangan >= 0.20 && $tinggi_genangan < 0.30){
        //     $k1 = 3;
        // } elseif ($tinggi_genangan >= 0.10 && $tinggi_genangan < 0.20){
        //     $k1 = 2;
        // } elseif ($tinggi_genangan < 0.10){
        //     $k1 = 1;
        // } else {
        //     $k1 = "Eror";
        // };

        // if ($luas_genangan > 8){
        //     $k2 = 5;
        // } elseif ($luas_genangan >= 4 && $luas_genangan <= 8){
        //     $k2 = 4;
        // } elseif ($luas_genangan >= 2 && $luas_genangan < 4){
        //     $k2 = 3;
        // } elseif ($luas_genangan >= 1 && $luas_genangan < 2){
        //     $k2 = 2;
        // } elseif ($luas_genangan < 1){
        //     $k2 = 1;
        // } else {
        //     $k2 = "Eror";
        // };

        // if ($lamanya_genangan > 8){
        //     $k3 = 5;
        // } elseif ($lamanya_genangan >= 4 && $lamanya_genangan <= 8){
        //     $k3 = 4;
        // } elseif ($lamanya_genangan >= 2 && $lamanya_genangan < 4){
        //     $k3 = 3;
        // } elseif ($lamanya_genangan >= 1 && $lamanya_genangan < 2){
        //     $k3 = 2;
        // } elseif ($lamanya_genangan < 1){
        //     $k3 = 1;
        // } else {
        //     $k3 = "Eror";
        // };

        // if ($frekuensi_genangan == "Sangat sering (10 kali/tahun)"){
        //     $k4 = 5;
        // } elseif ($frekuensi_genangan == "Sering (6 kali/tahun)"){
        //     $k4 = 4;
        // } elseif ($frekuensi_genangan == "Kurang sering (3 kali/tahun)"){
        //     $k4 = 3;
        // } elseif ($frekuensi_genangan == "Jarang (1 kali/tahun)"){
        //     $k4 = 2;
        // } elseif ($frekuensi_genangan == "Tidak pernah"){
        //     $k4 = 1;
        // } else {
        //     $k4 = "Eror";
        // };

        // if ($kerugian_ekonomi == "Jika genangan air/banjir terjadi pada daerah industri, daerah komersial dan daerah perkantoran padat"){
        //     $k5 = 4;
        // } elseif ($kerugian_ekonomi == "Jika genangan air/banjir terjadi di daerah industri dan daerah komersial yang kurang padat"){
        //     $k5 = 3;
        // } elseif ($kerugian_ekonomi == "Jika genangan air/banjir memperngaruhi atau terjadi di daerah perumahan dan/atau daerah pertanian (dalam daerah perkotaan yang terbatas)"){
        //     $k5 = 2;
        // } elseif ($kerugian_ekonomi == "Jika terjadi genangan pada daerah yang jarang penduduknya dan daerah yang tidak produktif"){
        //     $k5 = 1;
        // } else {
        //     $k5 = "Eror";
        // };

        // if ($gangguansosial_pemerintah == "Jika genangan air/banjir terjadi pada daerah yang banyak pelayanan fasilitas sosial dan fasilitas pemerintah"){
        //     $k6 = 4;
        // } elseif ($gangguansosial_pemerintah == "Jika genangan air/banjir terjadi di daerah yang sedikit pelayanan fasilitas sosial dan fasilitas pemerintah"){
        //     $k6 = 3;
        // } elseif ($gangguansosial_pemerintah == "Jika genangan air/banjir mempengaruhi atau terjadi di daerah yang pelayanan fasilitas sosial dan fasilitas pemerintah terbatas"){
        //     $k6 = 2;
        // } elseif ($gangguansosial_pemerintah == "Jika tidak ada fasilitas sosial dan fasilitas pemerintah"){
        //     $k6 = 1;
        // } else {
        //     $k6 = "Eror";
        // };

        // if ($kerugian_transportasi == "Jika genangan air/banjir terjadi pada daerah yang jaringan transportasinya padat"){
        //     $k7 = 4;
        // } elseif ($kerugian_transportasi == "Jika genangan air/bajir terjadi di daerah yang jaringan transportasinya kurang padat"){
        //     $k7 = 3;
        // } elseif ($kerugian_transportasi == "Jika genangan air/banjir mempengaruhi atau terjadi di daerah yang jaringan transportasinya terbatas"){
        //     $k7 = 2;
        // } elseif ($kerugian_transportasi == "Jika tidak ada jaringan jalan"){
        //     $k7 = 1;
        // } else {
        //     $k7 = "Eror";
        // };

        // if ($kerugian_perumahan == "Jika genangan air/banjir terjadi pada perumahan padat sekali"){
        //     $k8 = 4;
        // } elseif ($kerugian_perumahan == "Jika genangan air/banjir terjadi pada perumahan yang kurang padat"){
        //     $k8 = 3;
        // } elseif ($kerugian_perumahan == "Jika genangan air/banjir mempengaruhi atau terjadi di daerah yang hanya pada beberapa bangunan perumahan"){
        //     $k8 = 2;
        // } elseif ($kerugian_perumahan == "Jika tidak ada perumahan pada daerah genangan air/banjir"){
        //     $k8 = 1;
        // } else {
        //     $k8 = "Eror";
        // };

        // if ($hakmilikpribadi == "Jika kerugian lebih dari 80% nilai milik pribadi"){
        //     $k9 = 4;
        // } elseif ($hakmilikpribadi == "Jika kerugian 80% nilai milik pribadi"){
        //     $k9 = 3;
        // } elseif ($hakmilikpribadi == "Jika kerugian kurang dari 40% milik pribadi"){
        //     $k9 = 2;
        // } elseif ($hakmilikpribadi == "Tidak ada kerugian milik pribadi"){
        //     $k9 = 1;
        // } else {
        //     $k9 = "Eror";
        // };

        $data2 = array(
            'id_alternatif'     => $id_alternatif,
            'k1'                => $k1,
            'k2'                => $k2,
            'k3'                => $k3,
            'k4'                => $k4,
            'k5'                => $k5,
            'k6'                => $k6,
            'k7'                => $k7,
            'k8'                => $k8,
            'k9'                => $k9
        );

        $this->db->where('id_alternatif', $id_alternatif);
        $this->db->update('tb_nilairating', $data2);
        // $this->session->set_flashdata('pesan','<div class="alert
        //         alert-warning alert-dismissible fade show"
        //         role="alert">
        //             Data Alternatif Berhasil Diedit !
        //             <button type="button" class="close"
        //                 data-dismiss="alert" aria-label="Close">
        //             <span aria-hidden="true">&times;</span>
        //             </button>
        //             </div>');
        redirect('admin/Data_alternatif/index');
    }
}
