$lereng = $this->input->post('lereng', TRUE);
		if ($lereng < 8) {
			$lereng2 = 1;
		} elseif ($lereng >= 8 && $lereng <= 16) {
			$lereng2 = 2;
		} elseif ($lereng > 16 && $lereng <= 30) {
			$lereng2 = 3;
		} elseif ($lereng > 30) {
			$lereng2 = 4;
		}

$ketinggian = $this->input->post('ketinggian', TRUE);
		if ($ketinggian >= 700 && $ketinggian <= 1600) {
			$ketinggian2 = 4;
		} elseif (($ketinggian > 1600 && $ketinggian <= 1750) || ($ketinggian >= 600 && $ketinggian < 700)) {
			$ketinggian2 = 3;
		} elseif (($ketinggian > 1750 && $ketinggian <= 2000) || ($ketinggian >= 100 && $ketinggian < 600)) {
			$ketinggian2 = 2;
		} elseif (($ketinggian > 2000) || ($ketinggian < 100)) {
			$ketinggian2 = 1;
		}

$suhu = $this->input->post('suhu', TRUE);
		if ($suhu >= 16 && $suhu <= 22) {
			$suhu2 = 4;
		} elseif (($suhu >= 15 && $suhu < 16) || ($suhu > 22 && $suhu <= 24)) {
			$suhu2 = 3;
		} elseif (($suhu >= 14 && $suhu < 15) || ($suhu > 24 && $suhu <= 26)) {
			$suhu2 = 2;
		} elseif (($suhu < 14) || ($suhu > 26)) {
			$suhu2 = 1;
		}

$curah_hujan = $this->input->post('curah_hujan', TRUE);
		if ($curah_hujan >= 1200 && $curah_hujan <= 1800) {
			$curah_hujan2 = 4;
		} elseif (($curah_hujan >= 1000 && $curah_hujan < 1200) || ($curah_hujan > 1800 && $curah_hujan <= 2000)) {
			$curah_hujan2 = 3;
		} elseif (($curah_hujan > 2000 && $curah_hujan <= 3000) || ($curah_hujan >= 800 && $curah_hujan < 1000)) {
			$curah_hujan2 = 2;
		} elseif (($curah_hujan < 800) || ($curah_hujan > 3000)) {
			$curah_hujan2 = 1;
		}

$tekstur_tanah = $this->input->post('tekstur_tanah', TRUE);
		if ($tekstur_tanah <= 13 && $tekstur_tanah >= 5) {
			$tekstur_tanah2 = 4;
		} elseif ($tekstur_tanah <= 4 && $tekstur_tanah >= 3) {
			$tekstur_tanah2 = 2;
		} elseif ($tekstur_tanah <= 2 && $tekstur_tanah >= 1) {
			$tekstur_tanah2 = 1;
		}

$pH_tanah = $this->input->post('pH_tanah', TRUE);
		if ($pH_tanah >= 5.6 && $pH_tanah <= 6.6) {
			$pH_tanah2 = 4;
		} elseif ($pH_tanah > 6.6 && $pH_tanah <= 7.3) {
			$pH_tanah2 = 3;
		} elseif (($pH_tanah <= 5.5) || ($pH_tanah > 7.4)) {
			$pH_tanah2 = 2;
		} elseif ($pH_tanah = 0) {
			$pH_tanah2 = 1;
		}

$bulan_kering = $this->input->post('bulan_kering', TRUE);
		if ($bulan_kering >= 1 && $bulan_kering <= 4) {
			$bulan_kering2 = 4;
		} elseif (($bulan_kering < 1) || ($bulan_kering > 4 && $bulan_kering <= 5)) {
			$bulan_kering2 = 3;
		} elseif ($bulan_kering > 5 && $bulan_kering <= 6) {
			$bulan_kering2 = 2;
		} elseif ($bulan_kering > 6) {
			$bulan_kering2 = 1;
		}

		$where_nk = array(
			'id_nilaikriteria' => $id_nilaikriteria
		);