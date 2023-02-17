['<div id=\'wprogress\' style=\'display:none;padding:2em;\'>
	<\ /div>
		<div id=\'frmadmission\' style=\'padding:1em;display:none;\'>
			<table class=\'xxfrm\' style=\'width:100%;\'>
				<colgroup>
					<col width=\'190\' />
					<col />
					<col width=\'200\' />
					<col width=\'290\' />
					<\ /colgroup>
				<tbody>
					<tr>
						<td colspan=\'4\' style=\'border-top:2px solid #777;\'>
							<table align=\'center\' class=\'invisible\'>
								<tbody>
									<tr>
										<td style=\'vertical-align:top;\'>
											<div
												style=\'padding-left:0.2em;margin-top:0.2em;color:#777;font-style:italic;font-size:0.8em;\'>
												Jaminan / Cara Bayar<\ /div>
													<div style=\'margin-top:0.3em;\'><select class=\'selectizeit\'
															style=\'width:320px;\' id=\'payplan_id\' name=\'payplan_id\'
															onchange=\'change_payplan(this,event);\'>
															<option value=\'3\' selected=\'selected\'>JKN<\ /option>
															<option value=\'71\'>JAMINAN COVID-19<\ /option>
															<option value=\'72\'>JAMINAN KIPI<\ /option>
															<option value=\'73\'>JAMINAN BAYI BARU LAHIR<\ /option>
															<option value=\'74\'>JAMINAN PERPANJANGAN MASA RAWAT<\
																	/option>
															<option value=\'75\'>JAMINAN CO-INSIDENSE<\ /option>
															<option value=\'76\'>JAMPERSAL<\ /option>
															<option value=\'5\'>JAMKESDA<\ /option>
															<option value=\'1\'>PASIEN BAYAR<\ /option>
																	<\ /select>
																		<\ /div>
																			<\ /td>
										<td>
											<div id=\'payplan_option\' style=\';padding-left:10px;\'>
												<table class=\'invisible\'>
													<colgroup>
														<col />
														<col width=\'260\' />
														<col />
														<\ /colgroup>
													<tbody>
														<tr>
															<td style=\'vertical-align:top;padding-left:0.5em;\'>
																<div id=\'dvlabelnopeserta\'
																	style=\'padding-left:0.2em;margin-top:0.2em;color:#777;font-style:italic;font-size:0.8em;line-height:20px;\'>
																	No. Peserta<\ /div><input
																			onkeydown=\'kd_no_kartu(this,event);\'
																			type=\'text\' style=\'width:200px;\'
																			name=\'no_kartu\' id=\'hno_kartu\'
																			value=\'0000080264114\' />
																		<\ /td>
															<td style=\'vertical-align:top;padding-left:0.5em;\'>
																<div
																	style=\'line-height:20px;padding-left:0.2em;margin-top:0.2em;color:#777;font-style:italic;font-size:0.8em;white-space:nowrap;\'>
																	No. SEP<\ /div><input type=\'text\'
																			style=\'width:200px;\' name=\'no_sep\'
																			id=\'no_sep\'
																			value=\'1105R0010223V000976\' />
																		<\ /td>
															<td style=\'vertical-align:top;padding-left:0.5em;\'>
																<div
																	style=\'line-height:20px;padding-left:0.2em;margin-top:0.2em;color:#777;font-style:italic;font-size:0.8em;white-space:nowrap;\'>
																	COB<\ /div><select class=\'selectizeit\'
																			style=\'width:320px;\' id=\'selcob\'
																			name=\'cob_id\'>
																			<option value=\'-\'>-<\ /option>
																			<option value=\'1\'>MANDIRI INHEALTH<\
																					/option>
																			<option value=\'5\'>ASURANSI SINAR MAS<\
																					/option>
																			<option value=\'6\'>ASURANSI TUGU MANDIRI<\
																					/option>
																			<option value=\'7\'>ASURANSI MITRA MAPARYA<\
																					/option>
																			<option value=\'8\'>ASURANSI AXA MANDIRI
																				FINANSIAL SERVICE<\ /option>
																			<option value=\'9\'>ASURANSI AXA FINANSIAL
																				INDONESIA<\ /option>
																			<option value=\'10\'>LIPPO GENERAL INSURANCE
																				<\ /option>
																			<option value=\'11\'>ARTHAGRAHA GENERAL
																				INSURANSE<\ /option>
																			<option value=\'12\'>TUGU PRATAMA INDONESIA
																				<\ /option>
																			<option value=\'13\'>ASURANSI BINA DANA ARTA
																				<\ /option>
																			<option value=\'14\'>ASURANSI JIWA SINAR MAS
																				MSIG<\ /option>
																			<option value=\'15\'>AVRIST ASSURANCE<\
																					/option>
																			<option value=\'16\'>ASURANSI JIWA SRAYA<\
																					/option>
																			<option value=\'17\'>ASURANSI JIWA CENTRAL
																				ASIA RAYA<\ /option>
																			<option value=\'18\'>ASURANSI TAKAFUL
																				KELUARGA<\ /option>
																			<option value=\'19\'>ASURANSI JIWA GENERALI
																				INDONESIA<\ /option>
																			<option value=\'20\'>ASURANSI ASTRA BUANA<\
																					/option>
																			<option value=\'21\'>ASURANSI UMUM MEGA<\
																					/option>
																			<option value=\'22\'>ASURANSI MULTI ARTHA
																				GUNA<\ /option>
																			<option value=\'23\'>ASURANSI AIA INDONESIA
																				<\ /option>
																			<option value=\'24\'>ASURANSI JIWA EQUITY
																				LIFE INDONESIA<\ /option>
																			<option value=\'25\'>ASURANSI JIWA RECAPITAL
																				<\ /option>
																			<option value=\'26\'>GREAT EASTERN LIFE
																				INDONESIA<\ /option>
																			<option value=\'27\'>ASURANSI ADISARANA
																				WANAARTHA<\ /option>
																			<option value=\'28\'>ASURANSI JIWA BRINGIN
																				JIWA SEJAHTERA<\ /option>
																			<option value=\'29\'>BOSOWA ASURANSI<\
																					/option>
																			<option value=\'30\'>MNC LIFE ASSURANCE<\
																					/option>
																			<option value=\'31\'>ASURANSI AVIVA
																				INDONESIA<\ /option>
																			<option value=\'32\'>ASURANSI CENTRAL ASIA
																				RAYA<\ /option>
																			<option value=\'33\'>ASURANSI ALLIANZ LIFE
																				INDONESIA<\ /option>
																			<option value=\'34\'>ASURANSI BINTANG<\
																					/option>
																			<option value=\'35\'>TOKIO MARINE LIFE
																				INSURANCE INDONESIA<\ /option>
																			<option value=\'36\'>MALACCA TRUST WUWUNGAN
																				<\ /option>
																			<option value=\'37\'>ASURANSI JASA INDONESIA
																				<\ /option>
																			<option value=\'38\'>ASURANSI JIWA MANULIFE
																				INDONESIA<\ /option>
																			<option value=\'39\'>ASURANSI BANGUN ASKRIDA
																				<\ /option>
																			<option value=\'40\'>ASURANSI JIWA SEQUIS
																				FINANCIAL<\ /option>
																			<option value=\'41\'>ASURANSI AXA INDONESIA
																				<\ /option>
																			<option value=\'42\'>BNI LIFE<\ /option>
																			<option value=\'43\'>ACE LIFE INSURANCE<\
																					/option>
																			<option value=\'44\'>CITRA INTERNATIONAL
																				UNDERWRITERS<\ /option>
																			<option value=\'45\'>ASURANSI RELIANCE
																				INDONESIA<\ /option>
																			<option value=\'46\'>HANWHA LIFE INSURANCE
																				INDONESIA<\ /option>
																			<option value=\'47\'>ASURANSI DAYIN MITRA<\
																					/option>
																			<option value=\'48\'>ASURANSI ADIRA DINAMIKA
																				<\ /option>
																			<option value=\'49\'>PAN PASIFIC INSURANCE<\
																					/option>
																			<option value=\'50\'>ASURANSI SAMSUNG TUGU<\
																					/option>
																			<option value=\'51\'>ASURANSI UMUM BUMI
																				PUTERA MUDA 1967<\ /option>
																			<option value=\'52\'>ASURANSI JIWA KRESNA<\
																					/option>
																			<option value=\'53\'>ASURANSI RAMAYANA<\
																					/option>
																			<option value=\'54\'>VICTORIA INSURANCE<\
																					/option>
																			<option value=\'55\'>ASURANSI JIWA BERSAMA
																				BUMIPUTERA 1912<\ /option>
																			<option value=\'56\'>FWD LIFE INDONESIA<\
																					/option>
																			<option value=\'57\'>ASURANSI TAKAFUL
																				KELUARGA<\ /option>
																			<option value=\'58\'>ASURANSI TUGU KRESNA
																				PRATAMA<\ /option>
																			<option value=\'59\'>SOMPO INSURANCE<\
																					/option>
																					<\ /select>
																						<\ /td>
															<td
																style=\'vertical-align:top;padding-top:2px;white-space:nowrap;\'>
																<div
																	style=\'line-height:17px;padding-left:0.2em;margin-top:0.2em;color:#777;font-style:italic;font-size:0.8em;\'>
																	&nbsp;<\ /div>
																		<\ /td>
																			<\ /tr>
																				<\ /tbody>
																					<\ /table>
																						<\ /div>
																							<\ /td>
																								<\ /tr>
																									<\ /tbody>
																										<\ /table>
																											<\ /td>
																												<\ /tr>
														<tr>
															<td><input type=\'hidden\' id=\'h_admission_type\'
																	value=\'outpatient\' />Jenis Rawat<\ /td>
															<td><input type=\'radio\'
																	onchange=\'chg_jenis(\"outpatient\",this,event);\'
																	checked=\'1\' id=\'admission_type_rajal\'
																	name=\'admission_type\'
																	value=\'outpatient\' />&nbsp;<label
																	for=\'admission_type_rajal\' class=\'xlnk\'>Jalan<\
																		/label>&nbsp;&nbsp;<input type=\'radio\'
																			onchange=\'chg_jenis(\"inpatient\",this,event);\'
																			id=\'admission_type_ranap\'
																			name=\'admission_type\'
																			value=\'inpatient\' />&nbsp;<label
																			for=\'admission_type_ranap\'
																			class=\'xlnk\'>Inap<\ /label>
																				&nbsp;&nbsp;<span id=\'sp_jenis_igd\'
																					style=\'display:none;\'><input
																						type=\'radio\'
																						onchange=\'chg_jenis(\"emergency\",this,event);\'
																						id=\'admission_type_igd\'
																						name=\'admission_type\'
																						value=\'emergency\' />&nbsp;<label
																						for=\'admission_type_igd\'
																						class=\'xlnk\'>IGD<\ /label>
																							<\ /span><span
																									id=\'sp_icu_ind\'
																									style=\'display:none;margin-left:2em;position:absolute;margin-top:-2px;\'><span
																										id=\'sp_upgrade_class\'
																										style=\'\'><img
																											src=\'/E-Klaim/images/question_mark24.png\'
																											style=\'cursor:default;vertical-align:middle;\'
																											data-html=\'true\'
																											data-tooltip=\'Check
																											jika kelas
																											pelayanan
																											berbeda
																											dengan kelas
																											haknya.\' />&nbsp;<input
																											onchange=\'chg_upgrade_class(this,event);\'
																											type=\'checkbox\'
																											id=\'upgrade_class_ind\'
																											name=\'upgrade_class_ind\'
																											value=\'1\' />
																										<label
																											class=\'xlnk\'
																											for=\'upgrade_class_ind\'>Naik/Turun
																											Kelas<\
																												/label>
																												&nbsp;&nbsp;&nbsp;&nbsp;
																												<\
																													/span>
																													<span
																														style=\'margin-top:-2px;\'><img
																															src=\'/E-Klaim/images/question_mark24.png\'
																															style=\'cursor:default;vertical-align:middle;\'
																															data-html=\'true\'
																															data-tooltip=\'Untuk
																															perbaikan
																															tarif:<br />Check
																														jika
																														selama
																														periode
																														perawatan
																														ada
																														episode
																														rawat
																														intensif
																														(ICU/ICCU/NICU/PICU/HCU/dll.)\'/>&nbsp;<input
																															onchange=\'chg_icu(this,event);\'
																															type=\'checkbox\'
																															id=\'icu_ind\'
																															name=\'icu_ind\'
																															value=\'1\' />
																														<label
																															class=\'xlnk\'
																															for=\'icu_ind\'>Ada
																															Rawat
																															Intensif
																															<\
																																/label>
																																<\
																																	/span>
																																	<\
																																		/span>
																																		<\
																																			/span>
																																			<span
																																				id=\'sp_rj_ex\'
																																				style=\'position:absolute;margin-left:2em;margin-top:-2px;\'>&nbsp;&nbsp;&nbsp;<img
																																					src=\'/E-Klaim/images/question_mark24.png\'
																																					style=\'cursor:default;vertical-align:middle;\'
																																					data-html=\'true\'
																																					data-tooltip=\'Check
																																					jika
																																					mendapatkan
																																					pelayanan
																																					kelas
																																					eksekutif.\' />&nbsp;<input
																																					onchange=\'chg_op_class(this,event);\'
																																					type=\'checkbox\'
																																					id=\'outpatient_class_executive\'
																																					name=\'executive_class_ind\'
																																					value=\'1\' />
																																				<label
																																					class=\'xlnk\'
																																					for=\'outpatient_class_executive\'>Kelas
																																					Eksekutif
																																					<\
																																						/label>
																																						<\
																																							/span>
																																							<\
																																								/td>
															<td>Kelas Hak<\ /td>
															<td><span id=\'spkelasrajal\'>-<\ /span><span
																			id=\'spkelasranap\'
																			style=\'display:none;\'><input
																				class=\'tariff_class\'
																				onchange=\'chg_ip_class(this,event);\'
																				type=\'radio\' checked=\'1\'
																				value=\'kelas_3\' id=\'tariff_class_3\'
																				name=\'tariff_class\' />&nbsp;<label
																				for=\'tariff_class_3\'
																				class=\'xlnk\'>Kelas 3<\ /label>
																					&nbsp;&nbsp;<input
																						class=\'tariff_class\'
																						onchange=\'chg_ip_class(this,event);\'
																						type=\'radio\' value=\'kelas_2\'
																						id=\'tariff_class_2\'
																						name=\'tariff_class\' />&nbsp;<label
																						for=\'tariff_class_2\'
																						class=\'xlnk\'>Kelas 2<\ /label>
																							&nbsp;&nbsp;<input
																								class=\'tariff_class\'
																								onchange=\'chg_ip_class(this,event);\'
																								type=\'radio\'
																								value=\'kelas_1\'
																								id=\'tariff_class_1\'
																								name=\'tariff_class\' />&nbsp;<label
																								for=\'tariff_class_1\'
																								class=\'xlnk\'>Kelas 1<\
																									/label>&nbsp;&nbsp;
																									<\ /span>
																										<\ /td>
																											<\ /tr>
														<tr>
															<td>Tanggal Rawat<\ /td>
															<td>
																<table class=\'invisible\' align=\'center\'
																	style=\'width:100%;\'>
																	<colgroup>
																		<col width=\'15%\' />
																		<col width=\'35%\' />
																		<col width=\'15%\' />
																		<col width=\'35%\' />
																		<\ /colgroup>
																	<tbody>
																		<tr>
																			<td style=\'text-align:right;\'>Masuk :<\
																					/td>
																			<td style=\'text-align:left;\'>&nbsp;<span
																					id=\'spadmission_dttm\'
																					class=\'xlnk\'
																					onclick=\'_changedatetime(\"spadmission_dttm\",\"admission_dttm\",\"datetime\",false,false);\'>6
																					Feb 2023 00:00<\ /span><input
																							type=\'hidden\'
																							id=\'admission_dttm\'
																							value=\'2023-02-06
																							00:00:00\'
																							name=\'admission_dttm\' />
																						<\ /td>
																			<td style=\'text-align:right;\'>Pulang :<\
																					/td>
																			<td style=\'text-align:left;\'>&nbsp;<span
																					id=\'spdischarge_dttm\'
																					style=\'display:none;\'
																					class=\'xlnk\'
																					onclick=\'_changedatetime(\"spdischarge_dttm\",\"discharge_dttm\",\"datetime\",false,false);\'>6
																					Feb 2023 00:00<\ /span><span
																							id=\'spdischarge_dttm_rajal\'
																							style=\'\'>6 Feb 2023 00:00
																							<\ /span><input
																									type=\'hidden\'
																									id=\'discharge_dttm\'
																									value=\'2023-02-06
																									00:00:00\'
																									name=\'discharge_dttm\' />
																								<\ /td>
																									<\ /tr>
																										<\ /tbody>
																											<\ /table>
																												<\ /td>
																			<td>Umur<\ /td>
																			<td id=\'age\'>54 tahun<\ /td>
																					<\ /td>
																						<\ /tr>
																		<tr>
																			<td>Cara Masuk<\ /td>
																			<td colspan=\'3\'><select
																					class=\'selectizeit\'
																					style=\'width:300px;\'
																					name=\'cara_masuk\'
																					id=\'cara_masuk\'>
																					<option value=\'gp\'>Rujukan FKTP<\
																							/option>
																					<option value=\'hosp-trans\'>Rujukan
																						FKRTL<\ /option>
																					<option value=\'mp\'>Rujukan Dokter
																						Spesialis<\ /option>
																					<option value=\'outp\'>Dari Rawat
																						Jalan<\ /option>
																					<option value=\'inp\'>Dari Rawat
																						Inap<\ /option>
																					<option value=\'emd\'>Dari Rawat
																						Darurat<\ /option>
																					<option value=\'born\'>Lahir di
																						Rumah Sakit<\ /option>
																					<option value=\'nursing\'>Rujukan
																						dari Panti Jompo<\ /option>
																					<option value=\'psych\'>Rujukan dari
																						Rumah Sakit Jiwa<\ /option>
																					<option value=\'rehab\'>Rujukan dari
																						Fasilitas Rehabilitasi<\
																							/option>
																					<option value=\'other\'>Lain-lain<\
																							/option>
																							<\ /select>
																								<\ /td>
																									<\ /tr>
																		<tr id=\'tr_episode\' style=\'display:none;\'>
																			<td>Episode Ruang Rawat<\ /td>
																			<td>
																				<div id=\'dv_episode_selector\'
																					style=\'\'><select
																						id=\'sel_episode\'
																						onchange=\'chg_sel_episode(this,event);\'
																						style=\'width:420px;\'
																						class=\'selectizeit\'>
																						<option value=\'\'>Tambah
																							episode<\ /option>
																						<option value=\'7\'>ICU tekanan
																							negatif dengan ventilator<\
																								/option>
																						<option value=\'8\'>ICU tekanan
																							negatif tanpa ventilator<\
																								/option>
																						<option value=\'9\'>ICU tanpa
																							tekanan negatif dengan
																							ventilator<\ /option>
																						<option value=\'10\'>ICU tanpa
																							tekanan negatif tanpa
																							ventilator<\ /option>
																						<option value=\'11\'>Isolasi
																							tekanan negatif<\ /option>
																						<option value=\'12\'>Isolasi
																							tanpa tekanan negatif<\
																								/option>
																								<\ /select>
																									<\ /div>
																										<div id=\'dv_episode_content\'
																											style=\'width:470px;\'>
																											<div id=\'dv_ttl_eps_los\'
																												style=\'display:none;\'>
																												<div
																													style=\'display:flex;flex-wrap:wrap;align-content:flex-start;\'>
																													<div
																														style=\'flex-grow:3;color:#888888;\'>
																														Total
																														<\
																															/div>
																															<div
																																style=\'text-align:right;flex-grow:0;\'>
																																<input
																																	disabled=\'1\'
																																	type=\'text\'
																																	id=\'inp_ttl_eps_los\'
																																	style=\'border:0;background-color:transparent;width:40px;text-align:center;\'
																																	value=\'0\' />&nbsp;<span
																																	style=\'color:#888888\'>hari
																																	<\
																																		/span>
																																		<\
																																			/div>
																																			<\
																																				/div>
																																				<\
																																					/div>
																																					<\
																																						/div>
																																						<input
																																							type=\'hidden\'
																																							name=\'episodes\'
																																							id=\'inp_episodes\'
																																							value=\'\' />
																																						<\
																																							/td>
																			<td colspan=\'2\'
																				style=\'vertical-align:middle;text-align:center;\'>
																				<div style=\'display:inline-block\'>
																					Total Episode Ruang Rawat Dijamin
																					(<span class=\'discreet\'>hari<\
																							/span>): <span
																								id=\'sp_covid_eps_los\'>1
																								<\ /span>
																									<\ /div>
																										<\ /td>
																											<\ /tr>
																		<tr id=\'tr_bayi_lahir_status\'
																			style=\'display:none;\'>
																			<td style=\'\'>Nama Ibu<\ /td>
																			<td style=\'\' id=\'ibu_person_nm\'>
																				<\ /td>
																			<td style=\'text-align:right;\'>Status
																				Kelainan<\ /td>
																			<td style=\'vertical-align:top;text-align:left;\'
																				id=\'td_sel_bayi_lahir_status\'><select
																					onchange=\'hide_grouper_result();\'
																					class=\'selectizeit\'
																					style=\'width:200px;\'
																					id=\'bayi_lahir_status_cd\'
																					name=\'bayi_lahir_status_cd\'>
																					<option value=\'1\'>Tanpa Kelainan<\
																							/option>
																					<option value=\'2\'>Dengan Kelainan
																						<\ /option>
																							<\ /select>
																								<\ /td>
																									<\ /tr>
																		<tr id=\'tr_covid19_status\'
																			style=\'display:none;\'>
																			<td style=\'text-align:right;\'>Status
																				COVID-19<\ /td>
																			<td style=\'vertical-align:top;text-align:left;\'
																				id=\'td_sel_covid19_status\'><select
																					onchange=\'update_form();\'
																					class=\'selectizeit\'
																					style=\'width:200px;\'
																					id=\'covid19_status_cd\'
																					name=\'covid19_status_cd\'>
																					<option value=\'4\'>Suspek<\
																							/option>
																					<option value=\'5\'>Probabel<\
																							/option>
																					<option value=\'3\'>Terkonfirmasi<\
																							/option>
																							<\ /select>
																								<\ /td>
																			<td style=\'\'>Komorbid / Komplikasi<\ /td>
																			<td style=\'\'><input type=\'radio\'
																					value=\'1\' name=\'cc_ind\'
																					onchange=\'hide_grouper_result();\'
																					id=\'cc_ind_yes\' /> <label
																					for=\'cc_ind_yes\'
																					class=\'xlnk\'>Ada<\ /label>
																						&nbsp;&nbsp;<input
																							type=\'radio\' value=\'0\'
																							name=\'cc_ind\'
																							onchange=\'hide_grouper_result();\'
																							id=\'cc_ind_no\'
																							checked=\'1\' /> <label
																							for=\'cc_ind_no\'
																							class=\'xlnk\'>Tidak Ada<\
																								/label>&nbsp;&nbsp;<\
																									/td>
																									<\ /tr>
																		<tr id=\'tr_covid19_param3\'
																			style=\'display:none;\'>
																			<td>Kriteria Akses NAAT<\ /td>
																			<td><span id=\'sp_akses_naat_ap\'
																					style=\'\'><input type=\'radio\'
																						value=\'A\' name=\'akses_naat\'
																						onchange=\'hide_grouper_result();\'
																						id=\'akses_naat_a\' /> <label
																						for=\'akses_naat_a\'
																						class=\'xlnk\'>Kriteria A<\
																							/label>&nbsp;&nbsp;<input
																								type=\'radio\'
																								value=\'B\'
																								name=\'akses_naat\'
																								onchange=\'hide_grouper_result();\'
																								id=\'akses_naat_b\' />
																							<label for=\'akses_naat_b\'
																								class=\'xlnk\'>Kriteria
																								B<\ /label>
																									&nbsp;&nbsp;<input
																										type=\'radio\'
																										value=\'C\'
																										name=\'akses_naat\'
																										onchange=\'hide_grouper_result();\'
																										id=\'akses_naat_c\'
																										checked=\'1\' />
																									<label
																										for=\'akses_naat_c\'
																										class=\'xlnk\'>Kriteria
																										C<\ /label>
																											&nbsp;&nbsp;
																											<\ /span>
																												<span
																													id=\'sp_akses_naat_na\'
																													style=\'\'>-
																													<\
																														/span>
																														<\
																															/td>
																			<td>Isolasi di RS<\ /td>
																			<td><span id=\'sp_isoman_ap\'
																					style=\'display:none;\'><input
																						type=\'radio\' value=\'1\'
																						name=\'isoman_ind\'
																						onchange=\'update_isoman();\'
																						id=\'isoman_ind_yes\' /> <label
																						for=\'isoman_ind_yes\'
																						class=\'xlnk\'>Ya<\ /label>
																							&nbsp;&nbsp;<input
																								type=\'radio\'
																								value=\'0\'
																								name=\'isoman_ind\'
																								onchange=\'update_isoman();\'
																								id=\'isoman_ind_no\'
																								checked=\'1\' /> <label
																								for=\'isoman_ind_no\'
																								class=\'xlnk\'>Tidak<\
																									/label>&nbsp;&nbsp;
																									<\ /span><span
																											id=\'sp_isoman_na\'
																											style=\'\'>-
																											<\ /span>
																												<\ /td>
																													<\
																														/tr>
																		<tr id=\'tr_covid19_param2\'
																			style=\'display:none;\'>
																			<td>RS Darurat / Lapangan<\ /td>
																			<td><input type=\'radio\' value=\'1\'
																					name=\'rs_darurat_ind\'
																					onchange=\'update_rs_darurat();\'
																					id=\'rs_darurat_ind_yes\' /> <label
																					for=\'rs_darurat_ind_yes\'
																					class=\'xlnk\'>Ya<\ /label>
																						&nbsp;&nbsp;<input
																							type=\'radio\' value=\'0\'
																							name=\'rs_darurat_ind\'
																							onchange=\'update_rs_darurat();\'
																							id=\'rs_darurat_ind_no\'
																							checked=\'1\' /> <label
																							for=\'rs_darurat_ind_no\'
																							class=\'xlnk\'>Tidak<\
																								/label>&nbsp;&nbsp;<\
																									/td>
																			<td>Co-Insidens<\ /td>
																			<td><input type=\'radio\' value=\'1\'
																					name=\'co_insidence_ind\'
																					onchange=\'hide_grouper_result();\'
																					id=\'co_insidence_ind_yes\' />
																				<label for=\'co_insidence_ind_yes\'
																					class=\'xlnk\'>Ya<\ /label>
																						&nbsp;&nbsp;<input
																							type=\'radio\' value=\'0\'
																							name=\'co_insidence_ind\'
																							onchange=\'hide_grouper_result();\'
																							id=\'co_insidence_ind_no\'
																							checked=\'1\' /> <label
																							for=\'co_insidence_ind_no\'
																							class=\'xlnk\'>Tidak<\
																								/label>&nbsp;&nbsp;<\
																									/td>
																									<\ /tr>
																		<tr id=\'tr_covid19_param4_cgrp\'
																			style=\'display:none;\'>
																			<td>RS Darurat / Lapangan<\ /td>
																			<td><span id=\'cgrp_sp_rs_darurat_ap\'
																					style=\'\'><input type=\'radio\'
																						value=\'1\'
																						name=\'cgrp_rs_darurat_ind\'
																						onchange=\'cgrp_update_rs_darurat();\'
																						id=\'cgrp_rs_darurat_ind_yes\' />
																					<label
																						for=\'cgrp_rs_darurat_ind_yes\'
																						class=\'xlnk\'>Ya<\ /label>
																							&nbsp;&nbsp;<input
																								type=\'radio\'
																								value=\'0\'
																								name=\'cgrp_rs_darurat_ind\'
																								onchange=\'cgrp_update_rs_darurat();\'
																								id=\'cgrp_rs_darurat_ind_no\'
																								checked=\'1\' /> <label
																								for=\'cgrp_rs_darurat_ind_no\'
																								class=\'xlnk\'>Tidak<\
																									/label>&nbsp;&nbsp;
																									<\ /span><span
																											id=\'cgrp_sp_rs_darurat_na\'
																											style=\'display:none;\'>-
																											<\ /span>
																												<\ /td>
																			<td>Isolasi di RS<\ /td>
																			<td><span id=\'cgrp_sp_isoman_ap\'
																					style=\'\'><input type=\'radio\'
																						value=\'1\'
																						name=\'cgrp_isoman_ind\'
																						onchange=\'cgrp_update_isoman();\'
																						id=\'cgrp_isoman_ind_yes\' />
																					<label for=\'cgrp_isoman_ind_yes\'
																						class=\'xlnk\'>Ya<\ /label>
																							&nbsp;&nbsp;<input
																								type=\'radio\'
																								value=\'0\'
																								name=\'cgrp_isoman_ind\'
																								onchange=\'cgrp_update_isoman();\'
																								id=\'cgrp_isoman_ind_no\'
																								checked=\'1\' /> <label
																								for=\'cgrp_isoman_ind_no\'
																								class=\'xlnk\'>Tidak<\
																									/label>&nbsp;&nbsp;
																									<\ /span><span
																											id=\'cgrp_sp_isoman_na\'
																											style=\'display:none;\'>-
																											<\ /span>
																												<\ /td>
																													<\
																														/tr>
																		<tr id=\'tr_upgrade_class\'
																			style=\'display:none;\'>
																			<td><img src=\'/E-Klaim/images/question_mark24.png\'
																					style=\'cursor:default;vertical-align:middle;\'
																					data-qtipopts=\'position:{ my:\"top
																					left\", at:\"bottom center\" }\'
																					data-tooltip=\'Masukkan naik/turun
																					kelas yang diambil
																					pasien.\' />&nbsp;Kelas Pelayanan<\
																					/td>
																			<td id=\'td_upgrade_class\'><span
																					id=\'sp_upgrade_class_class_3\'
																					style=\'\'><input
																						class=\'inp_upgrade_class_class\'
																						disabled=\'1\'
																						onchange=\'change_upgrade_class_class(this,event);\'
																						type=\'radio\' value=\'kelas_3\'
																						id=\'upgrade_class_class_3\'
																						name=\'upgrade_class_class\' />&nbsp;<label
																						for=\'upgrade_class_class_3\'
																						class=\'xlnk\'>Kelas 3<\ /label>
																							&nbsp;&nbsp;<\ /span><span
																									id=\'sp_upgrade_class_class_2\'
																									style=\'\'><input
																										class=\'inp_upgrade_class_class\'
																										onchange=\'change_upgrade_class_class(this,event);\'
																										type=\'radio\'
																										value=\'kelas_2\'
																										id=\'upgrade_class_class_2\'
																										name=\'upgrade_class_class\' />&nbsp;<label
																										for=\'upgrade_class_class_2\'
																										class=\'xlnk\'>Kelas
																										2<\ /label>
																											&nbsp;&nbsp;
																											<\ /span>
																												<span
																													id=\'sp_upgrade_class_class_1\'
																													style=\'\'><input
																														class=\'inp_upgrade_class_class\'
																														onchange=\'change_upgrade_class_class(this,event);\'
																														type=\'radio\'
																														value=\'kelas_1\'
																														id=\'upgrade_class_class_1\'
																														name=\'upgrade_class_class\' />&nbsp;<label
																														for=\'upgrade_class_class_1\'
																														class=\'xlnk\'>Kelas
																														1
																														<\
																															/label>
																															&nbsp;&nbsp;
																															<\
																																/span>
																																<span
																																	id=\'sp_upgrade_class_class_vip\'><input
																																		class=\'inp_upgrade_class_class\'
																																		onchange=\'change_upgrade_class_class(this,event);\'
																																		type=\'radio\'
																																		value=\'vip\'
																																		id=\'upgrade_class_class_vip\'
																																		name=\'upgrade_class_class\' />&nbsp;<label
																																		for=\'upgrade_class_class_vip\'
																																		class=\'xlnk\'>Diatas
																																		Kelas
																																		1
																																		<\
																																			/label>
																																			&nbsp;&nbsp;
																																			<\
																																				/span>
																																				<span
																																					id=\'sp_upgrade_class_class_vvip\'
																																					style=\'display:none;\'><input
																																						class=\'inp_upgrade_class_class\'
																																						onchange=\'change_upgrade_class_class(this,event);\'
																																						type=\'radio\'
																																						value=\'vvip\'
																																						id=\'upgrade_class_class_vvip\'
																																						name=\'upgrade_class_class\' />&nbsp;<label
																																						for=\'upgrade_class_class_vvip\'
																																						class=\'xlnk\'>Kelas
																																						VVIP
																																						<\
																																							/label>
																																							&nbsp;&nbsp;
																																							<\
																																								/span>
																																								<input
																																									type=\'hidden\'
																																									id=\'turun_kelas_ind\'
																																									value=\'\' />
																																								<\
																																									/td>
																			<td><img src=\'/E-Klaim/images/question_mark24.png\'
																					style=\'cursor:default;vertical-align:middle;\'
																					data-html=\'true\'
																					data-tooltip=\'Masukkan jumlah hari
																					naik kelas rawat\' />&nbsp;Lama
																				(<span style=\'color:#888;\'>hari<\
																						/span>)<\ /td>
																			<td><input onclick=\'_dsa(this);\'
																					type=\'number\' min=\'0\'
																					max=\'100\' value=\'0\'
																					name=\'upgrade_class_los\'
																					id=\'upgrade_class_los\'
																					style=\'width:60px;text-align:center;\' />
																				<\ /td>
																					<\ /tr>
																		<tr id=\'tr_icu\' style=\'display:none;\'>
																			<td><img src=\'/E-Klaim/images/question_mark24.png\'
																					style=\'cursor:default;vertical-align:middle;\'
																					data-html=\'true\'
																					data-tooltip=\'Masukkan waktu
																					intubasi dan
																					extubasi\' />&nbsp;Ventilator<\ /td>
																			<td>
																				<table class=\'invisible\'
																					style=\'width:100%;\'>
																					<colgroup>
																						<col width=\'50\' />
																						<col width=\'70\' />
																						<col width=\'30%\' />
																						<col width=\'15%\' />
																						<col width=\'30%\' />
																						<\ /colgroup>
																					<tbody>
																						<tr>
																							<td><input type=\'checkbox\'
																									value=\'1\'
																									id=\'ventilator_use\'
																									onchange=\'chg_ventilator_use(this,event);\'
																									name=\'ventilator_use\' />&nbsp;<label
																									for=\'ventilator_use\'
																									class=\'xlnk\'>Ya<\
																										/label>
																										<\ /td>
																							<td style=\'text-align:right;display:none;\'
																								class=\'td-vent-time\'>
																								Intubasi :<\ /td>
																							<td style=\'text-align:left;display:none;\'
																								class=\'td-vent-time\'>
																								&nbsp;<span
																									id=\'sp_ventilator_start_dttm\'
																									class=\'xlnk\'
																									onclick=\'_changedatetime(\"sp_ventilator_start_dttm\",\"ventilator_start_dttm\",\"datetime\",false,false);\'>????-??-??
																									<\ /span><input
																											type=\'hidden\'
																											id=\'ventilator_start_dttm\'
																											value=\'0000-00-00
																											00:00:00\'
																											name=\'ventilator_start_dttm\' />
																										<\ /td>
																							<td style=\'text-align:right;display:none;\'
																								class=\'td-vent-time\'>
																								Ekstubasi :<\ /td>
																							<td style=\'text-align:left;display:none;\'
																								class=\'td-vent-time\'>
																								&nbsp;<span
																									id=\'sp_ventilator_stop_dttm\'
																									class=\'xlnk\'
																									onclick=\'_changedatetime(\"sp_ventilator_stop_dttm\",\"ventilator_stop_dttm\",\"datetime\",false,false);\'>????-??-??
																									<\ /span><input
																											type=\'hidden\'
																											id=\'ventilator_stop_dttm\'
																											value=\'0000-00-00
																											00:00:00\'
																											name=\'ventilator_stop_dttm\' />
																										<\ /td>
																											<\ /tr>
																												<\
																													/tbody>
																													<\
																														/table>
																														<\
																															/td>
																							<td><img src=\'/E-Klaim/images/question_mark24.png\'
																									style=\'cursor:default;vertical-align:middle;\'
																									data-qtipopts=\'position:{
																									my:\"top left\",
																									at:\"bottom center\"
																									}\'
																									data-tooltip=\'Untuk
																									perbaikan
																									tarif:<br />Masukan
																								total jumlah hari rawat
																								intensif\'/>&nbsp;Rawat
																								Intensif (<span
																									style=\'color:#888;\'>hari
																									<\ /span>)<\ /td>
																							<td><input
																									onclick=\'_dsa(this);\'
																									type=\'number\'
																									min=\'0\'
																									max=\'100\'
																									value=\'0\'
																									name=\'icu_los\'
																									id=\'icu_los\'
																									style=\'width:60px;text-align:center;\' />
																								<\ /td>
																									<\ /tr>
																						<tr>
																							<td>LOS<\ /td>
																							<td
																								style=\'display:flex;justify-content:space-between;\'>
																								<div><span id=\'los\'>1
																										<\ /span>
																											&nbsp;<span
																												style=\'color:#888;\'>hari
																												<\
																													/span>
																													<\
																														/div>
																														<div id=\'dv_igd_los\'
																															style=\'display:none;\'>
																															(
																															<span
																																id=\'los_in_hour\'>00:00
																																<\
																																	/span>
																																	&nbsp;<span
																																		style=\'color:#888;\'>jam
																																		<\
																																			/span>
																																			)
																																			<\
																																				/div>
																																				<\
																																					/td>
																							<td>Berat Lahir (<span
																									style=\'color:#888;\'>gram
																									<\ /span>)<\ /td>
																							<td><span style=\'\'
																									id=\'sp_bw_na\'>-<\
																										/span><input
																											onclick=\'_dsa(this);\'
																											id=\'birth_weight\'
																											name=\'birth_weight\'
																											style=\'display:none;width:60px;text-align:center;\'
																											type=\'number\'
																											value=\'0\' />
																										<\ /td>
																											<\ /tr>
																							<td>ADL Score<\ /td>
																							<td>
																								<table
																									class=\'invisible\'
																									align=\'center\'
																									style=\'width:100%;\'>
																									<colgroup>
																										<col
																											width=\'25%\' />
																										<col
																											width=\'25%\' />
																										<col
																											width=\'25%\' />
																										<col
																											width=\'25%\' />
																										<\ /colgroup>
																									<tbody>
																										<tr>
																											<td
																												style=\'text-align:right;\'>
																												Sub
																												Acute :
																												<\ /td>
																											<td
																												style=\'text-align:left;\'>
																												&nbsp;<span
																													id=\'spadl1\'
																													style=\'\'>-
																													<\
																														/span>
																														<input
																															style=\'display:none;text-align:center;width:45px;\'
																															name=\'adl1\'
																															id=\'adl1\'
																															value=\'12\'
																															min=\'12\'
																															max=\'60\'
																															step=\'1\'
																															type=\'number\'
																															onclick=\'_dsa(this);\' />
																														<\
																															/td>
																											<td
																												style=\'text-align:right;\'>
																												Chronic
																												:<\ /td>
																											<td
																												style=\'text-align:left;\'>
																												&nbsp;<span
																													id=\'spadl2\'
																													style=\'\'>-
																													<\
																														/span>
																														<input
																															style=\'display:none;text-align:center;width:45px;\'
																															name=\'adl2\'
																															id=\'adl2\'
																															value=\'12\'
																															min=\'12\'
																															max=\'60\'
																															step=\'1\'
																															type=\'number\'
																															onclick=\'_dsa(this);\' />
																														<\
																															/td>
																															<\
																																/tr>
																																<\
																																	/tbody>
																																	<\
																																		/table>
																																		<\
																																			/td>
																											<td>Cara
																												Pulang<\
																													/td>
																											<td><select
																													onchange=\'chg_discharge_disposition(this,event);\'
																													class=\'selectizeit\'
																													style=\'width:250px;\'
																													id=\'discharge\'
																													name=\'discharge\'>
																													<option
																														value=\'home\'
																														selected=\'1\'>
																														Atas
																														Persetujuan
																														Dokter
																														<\
																															/option>
																													<option
																														value=\'transfer\'>
																														Dirujuk
																														<\
																															/option>
																													<option
																														value=\'refuse\'>
																														Atas
																														Permintaan
																														Sendiri
																														<\
																															/option>
																													<option
																														value=\'deceased\'>
																														Meninggal
																														<\
																															/option>
																													<option
																														value=\'other\'>
																														Lain-Lain
																														<\
																															/option>
																															<\
																																/select>
																																<\
																																	/td>
																																	<\
																																		/tr>
																										<tr>
																											<td>DPJP<\
																													/td>
																											<td><select
																													id=\'attending_doctor\'
																													onchange=\'hide_grouper_result();\'
																													name=\'attending_doctor\'
																													class=\'selectizeitadd\'
																													style=\'width:400px;\'>
																													<option
																														value=\'\'>
																														<\
																															/option>
																													<option
																														value=\'187|\'>
																														<\
																															/option>
																													<option
																														value=\'211|DR.
																														ABEDNEGO
																														AGUNG
																														WICAKSONO\'>
																														DR.
																														ABEDNEGO
																														AGUNG
																														WICAKSONO
																														<\
																															/option>
																													<option
																														value=\'37|DR.
																														ACHMAD
																														DAHLAN
																														KADIR,
																														SP.OG\'>
																														DR.
																														ACHMAD
																														DAHLAN
																														KADIR,
																														SP.OG
																														<\
																															/option>
																													<option
																														value=\'204|DR.
																														ADITYA
																														NAUFAL
																														RAMZY\'>
																														DR.
																														ADITYA
																														NAUFAL
																														RAMZY
																														<\
																															/option>
																													<option
																														value=\'160|DR.
																														AFIYAH,
																														SP.PD\'>
																														DR.
																														AFIYAH,
																														SP.PD
																														<\
																															/option>
																													<option
																														value=\'147|DR.
																														AHMAD
																														ZAKI\'>
																														DR.
																														AHMAD
																														ZAKI
																														<\
																															/option>
																													<option
																														value=\'22|DR.
																														ANDRIANI
																														SETIYANINGSIH\'>
																														DR.
																														ANDRIANI
																														SETIYANINGSIH
																														<\
																															/option>
																													<option
																														value=\'183|DR.
																														ANNA
																														AFIDATUL
																														ISMA\'>
																														DR.
																														ANNA
																														AFIDATUL
																														ISMA
																														<\
																															/option>
																													<option
																														value=\'76|DR.
																														APRILIANI.R.N\'>
																														DR.
																														APRILIANI.R.N
																														<\
																															/option>
																													<option
																														value=\'95|DR.
																														ASIH
																														SUPRIHATIN\'>
																														DR.
																														ASIH
																														SUPRIHATIN
																														<\
																															/option>
																													<option
																														value=\'209|DR.
																														ASMA&#039;UL
																														KHOLIFIA,M.SC,SP.A\'>
																														DR.
																														ASMA\'UL
																														KHOLIFIA,M.SC,SP.A
																														<\
																															/option>
																													<option
																														value=\'47|DR.
																														BAIR
																														GINTING,
																														SP.BS.\'>
																														DR.
																														BAIR
																														GINTING,
																														SP.BS.
																														<\
																															/option>
																													<option
																														value=\'44|DR.
																														BARKAH
																														FAJAR
																														RIYADI,
																														SP.B\'>
																														DR.
																														BARKAH
																														FAJAR
																														RIYADI,
																														SP.B
																														<\
																															/option>
																													<option
																														value=\'1|DR.
																														BHIMA
																														PRATJAHJA,
																														SP.M\'>
																														DR.
																														BHIMA
																														PRATJAHJA,
																														SP.M
																														<\
																															/option>
																													<option
																														value=\'34|DR.
																														BOEDI
																														SISWANTORO,
																														SP.THT\'>
																														DR.
																														BOEDI
																														SISWANTORO,
																														SP.THT
																														<\
																															/option>
																													<option
																														value=\'196|DR.
																														BRILIANTI
																														NOVI
																														PUTRI
																														SULISTIANI\'>
																														DR.
																														BRILIANTI
																														NOVI
																														PUTRI
																														SULISTIANI
																														<\
																															/option>
																													<option
																														value=\'185|DR.
																														CHOIRUL
																														HADI,
																														SPU\'>
																														DR.
																														CHOIRUL
																														HADI,
																														SPU
																														<\
																															/option>
																													<option
																														value=\'31|DR.
																														DAMAYANTI,
																														SP.KK\'>
																														DR.
																														DAMAYANTI,
																														SP.KK
																														<\
																															/option>
																													<option
																														value=\'21|DR.
																														DEVI
																														IRA
																														MUTIA
																														SARI,
																														SP.
																														KK\'>
																														DR.
																														DEVI
																														IRA
																														MUTIA
																														SARI,
																														SP.
																														KK
																														<\
																															/option>
																													<option
																														value=\'199|DR.
																														DIMAS
																														WIDAYU,
																														SP.GK\'>
																														DR.
																														DIMAS
																														WIDAYU,
																														SP.GK
																														<\
																															/option>
																													<option
																														value=\'73|DR.
																														DINAWATI\'>
																														DR.
																														DINAWATI
																														<\
																															/option>
																													<option
																														value=\'173|DR.
																														DJOKO
																														HANDOJO,
																														MSI.MED.,
																														SP.B.,
																														SP.B(K)
																														ONK.FICS\'>
																														DR.
																														DJOKO
																														HANDOJO,
																														MSI.MED.,
																														SP.B.,
																														SP.B(K)
																														ONK.FICS
																														<\
																															/option>
																													<option
																														value=\'6|DR.
																														FAISHOL
																														BALFAS,
																														SP.PD\'>
																														DR.
																														FAISHOL
																														BALFAS,
																														SP.PD
																														<\
																															/option>
																													<option
																														value=\'148|DR.
																														FENTY
																														ISWANINGTYAS\'>
																														DR.
																														FENTY
																														ISWANINGTYAS
																														<\
																															/option>
																													<option
																														value=\'19|DR.
																														FERRA
																														TRESNADEWI\'>
																														DR.
																														FERRA
																														TRESNADEWI
																														<\
																															/option>
																													<option
																														value=\'192|DR.
																														H.
																														M.
																														MURTAZAM\'>
																														DR.
																														H.
																														M.
																														MURTAZAM
																														<\
																															/option>
																													<option
																														value=\'24|DR.
																														H.
																														MUSMEN
																														BERNAWI,SP.S\'>
																														DR.
																														H.
																														MUSMEN
																														BERNAWI,SP.S
																														<\
																															/option>
																													<option
																														value=\'13|DR.
																														H.M
																														MURTAZAM,
																														SP.A\'>
																														DR.
																														H.M
																														MURTAZAM,
																														SP.A
																														<\
																															/option>
																													<option
																														value=\'25|DR.
																														HARI
																														SUKO
																														W.
																														SP.OT,
																														FICS,
																														MH.KES\'>
																														DR.
																														HARI
																														SUKO
																														W.
																														SP.OT,
																														FICS,
																														MH.KES
																														<\
																															/option>
																													<option
																														value=\'177|DR.
																														HARIS
																														MA,
																														M.SI.MED.
																														SPB.\'>
																														DR.
																														HARIS
																														MA,
																														M.SI.MED.
																														SPB.
																														<\
																															/option>
																													<option
																														value=\'197|DR.
																														HAVINA
																														HARI
																														SUKO,
																														SP.KFR\'>
																														DR.
																														HAVINA
																														HARI
																														SUKO,
																														SP.KFR
																														<\
																															/option>
																													<option
																														value=\'46|DR.
																														HAYATI
																														SALMA\'>
																														DR.
																														HAYATI
																														SALMA
																														<\
																															/option>
																													<option
																														value=\'15|DR.
																														HENNY
																														ROSITA,SP.KJ\'>
																														DR.
																														HENNY
																														ROSITA,SP.KJ
																														<\
																															/option>
																													<option
																														value=\'8|DR.
																														HISYAM
																														ATTAMIMI,
																														SP.JP\'>
																														DR.
																														HISYAM
																														ATTAMIMI,
																														SP.JP
																														<\
																															/option>
																													<option
																														value=\'16|DR.
																														HJ.
																														IDA
																														IRIANTI,
																														SP.PD
																														FINASIM\'>
																														DR.
																														HJ.
																														IDA
																														IRIANTI,
																														SP.PD
																														FINASIM
																														<\
																															/option>
																													<option
																														value=\'10|DR.
																														I.G.
																														NYOMAN
																														AGUNG,
																														SP.PD\'>
																														DR.
																														I.G.
																														NYOMAN
																														AGUNG,
																														SP.PD
																														<\
																															/option>
																													<option
																														value=\'168|DR.
																														ILHAM
																														RAMADHANIS\'>
																														DR.
																														ILHAM
																														RAMADHANIS
																														<\
																															/option>
																													<option
																														value=\'51|DR.
																														ISWANDI,
																														SP.A\'>
																														DR.
																														ISWANDI,
																														SP.A
																														<\
																															/option>
																													<option
																														value=\'9|DR.
																														JULIAN
																														PRINGGO,
																														MSI.
																														MED.
																														SP.B\'>
																														DR.
																														JULIAN
																														PRINGGO,
																														MSI.
																														MED.
																														SP.B
																														<\
																															/option>
																													<option
																														value=\'206|DR.
																														JULIAN
																														PRINGGO,M.SI.MED,SPB,SPB(ONK)\'
																														selected=\'1\'>
																														DR.
																														JULIAN
																														PRINGGO,M.SI.MED,SPB,SPB(ONK)
																														<\
																															/option>
																													<option
																														value=\'201|DR.
																														KARTIKA
																														DWI
																														KURNIASARI\'>
																														DR.
																														KARTIKA
																														DWI
																														KURNIASARI
																														<\
																															/option>
																													<option
																														value=\'2|DR.
																														KEN
																														RAMADHAN,SP.U\'>
																														DR.
																														KEN
																														RAMADHAN,SP.U
																														<\
																															/option>
																													<option
																														value=\'32|DR.
																														KRISTINA
																														DIAN
																														ISMAYAWATI,
																														SP.M\'>
																														DR.
																														KRISTINA
																														DIAN
																														ISMAYAWATI,
																														SP.M
																														<\
																															/option>
																													<option
																														value=\'205|DR.
																														LAK\'>
																														DR.
																														LAK
																														<\
																															/option>
																													<option
																														value=\'181|DR.
																														LAKSMI
																														INDIRA
																														KARTINI
																														TEDJO,
																														SP.N\'>
																														DR.
																														LAKSMI
																														INDIRA
																														KARTINI
																														TEDJO,
																														SP.N
																														<\
																															/option>
																													<option
																														value=\'12|DR.
																														LAURENZ
																														L.
																														PATTISELANNO,SP.P\'>
																														DR.
																														LAURENZ
																														L.
																														PATTISELANNO,SP.P
																														<\
																															/option>
																													<option
																														value=\'184|DR.
																														LOURENSIA
																														BRIGITA
																														ASTERN
																														PRAHA\'>
																														DR.
																														LOURENSIA
																														BRIGITA
																														ASTERN
																														PRAHA
																														<\
																															/option>
																													<option
																														value=\'17|DR.
																														LUKMAN
																														HAKIM,
																														SP.
																														THT\'>
																														DR.
																														LUKMAN
																														HAKIM,
																														SP.
																														THT
																														<\
																															/option>
																													<option
																														value=\'11|DR.
																														M.
																														TEGUH
																														IMANTO,
																														SP.B(K)
																														ONK.\'>
																														DR.
																														M.
																														TEGUH
																														IMANTO,
																														SP.B(K)
																														ONK.
																														<\
																															/option>
																													<option
																														value=\'27|DR.
																														M.
																														YASIN,SP.OG\'>
																														DR.
																														M.
																														YASIN,SP.OG
																														<\
																															/option>
																													<option
																														value=\'84|DR.
																														MALITA
																														BUDIWAN,
																														SP.R\'>
																														DR.
																														MALITA
																														BUDIWAN,
																														SP.R
																														<\
																															/option>
																													<option
																														value=\'159|DR.
																														MARINA
																														RATNA
																														SARI,
																														SP.A\'>
																														DR.
																														MARINA
																														RATNA
																														SARI,
																														SP.A
																														<\
																															/option>
																													<option
																														value=\'29|DR.
																														MIRA
																														ASTUTI,
																														SP.PD\'>
																														DR.
																														MIRA
																														ASTUTI,
																														SP.PD
																														<\
																															/option>
																													<option
																														value=\'48|DR.
																														MISKIYATUL
																														KHOLIDAH\'>
																														DR.
																														MISKIYATUL
																														KHOLIDAH
																														<\
																															/option>
																													<option
																														value=\'203|DR.
																														MOCH
																														TAUFIK
																														MAHAR,SP.
																														M\'>
																														DR.
																														MOCH
																														TAUFIK
																														MAHAR,SP.
																														M
																														<\
																															/option>
																													<option
																														value=\'202|DR.
																														MUHAMAD
																														WARTONO\'>
																														DR.
																														MUHAMAD
																														WARTONO
																														<\
																															/option>
																													<option
																														value=\'101|DR.
																														MUHAMMAD
																														IHWANUDIN
																														HANIF\'>
																														DR.
																														MUHAMMAD
																														IHWANUDIN
																														HANIF
																														<\
																															/option>
																													<option
																														value=\'178|DR.
																														MUHAMMAD
																														SYARIF,
																														SP.JP\'>
																														DR.
																														MUHAMMAD
																														SYARIF,
																														SP.JP
																														<\
																															/option>
																													<option
																														value=\'167|DR.
																														NAILA
																														MISKIYAUN
																														NISA\'>
																														DR.
																														NAILA
																														MISKIYAUN
																														NISA
																														<\
																															/option>
																													<option
																														value=\'89|DR.
																														NIEKE
																														INDRAWATI\'>
																														DR.
																														NIEKE
																														INDRAWATI
																														<\
																															/option>
																													<option
																														value=\'40|DR.
																														RAGIL
																														SAMPURNA\'>
																														DR.
																														RAGIL
																														SAMPURNA
																														<\
																															/option>
																													<option
																														value=\'136|DR.
																														RAHMAN
																														SUWARDI\'>
																														DR.
																														RAHMAN
																														SUWARDI
																														<\
																															/option>
																													<option
																														value=\'194|DR.
																														RENDY
																														YOGA
																														ARDIAN,
																														SP.
																														A\'>
																														DR.
																														RENDY
																														YOGA
																														ARDIAN,
																														SP.
																														A
																														<\
																															/option>
																													<option
																														value=\'86|DR.
																														ROSITA\'>
																														DR.
																														ROSITA
																														<\
																															/option>
																													<option
																														value=\'91|DR.
																														ROVI
																														PANJI\'>
																														DR.
																														ROVI
																														PANJI
																														<\
																															/option>
																													<option
																														value=\'38|DR.
																														RUSTANTI,
																														SP.S.
																														MS.C\'>
																														DR.
																														RUSTANTI,
																														SP.S.
																														MS.C
																														<\
																															/option>
																													<option
																														value=\'193|DR.
																														RYAN\'>
																														DR.
																														RYAN
																														<\
																															/option>
																													<option
																														value=\'179|DR.
																														RYAN
																														ARIANTO,
																														MSI.MED.,
																														SP.B-KBD\'>
																														DR.
																														RYAN
																														ARIANTO,
																														MSI.MED.,
																														SP.B-KBD
																														<\
																															/option>
																													<option
																														value=\'30|DR.
																														SAFINA
																														MUTMAINAH\'>
																														DR.
																														SAFINA
																														MUTMAINAH
																														<\
																															/option>
																													<option
																														value=\'210|DR.
																														SAFINA
																														MUTMAINAH,
																														SP.P\'>
																														DR.
																														SAFINA
																														MUTMAINAH,
																														SP.P
																														<\
																															/option>
																													<option
																														value=\'45|DR.
																														SANDY
																														AGUSTIAN\'>
																														DR.
																														SANDY
																														AGUSTIAN
																														<\
																															/option>
																													<option
																														value=\'125|DR.
																														SHINTA
																														ARYA
																														PUDYASWATI\'>
																														DR.
																														SHINTA
																														ARYA
																														PUDYASWATI
																														<\
																															/option>
																													<option
																														value=\'198|DR.
																														SILVI
																														RISDIALINA\'>
																														DR.
																														SILVI
																														RISDIALINA
																														<\
																															/option>
																													<option
																														value=\'180|DR.
																														SITI
																														PATTIHATUN
																														NASYIROH,
																														SP.OG\'>
																														DR.
																														SITI
																														PATTIHATUN
																														NASYIROH,
																														SP.OG
																														<\
																															/option>
																													<option
																														value=\'85|DR.
																														SITI
																														SUTISTOWATI\'>
																														DR.
																														SITI
																														SUTISTOWATI
																														<\
																															/option>
																													<option
																														value=\'14|DR.
																														STEFANUS
																														SP.KFR\'>
																														DR.
																														STEFANUS
																														SP.KFR
																														<\
																															/option>
																													<option
																														value=\'5|DR.
																														SURYO
																														ADI
																														WIBOWO,
																														SP.OG.\'>
																														DR.
																														SURYO
																														ADI
																														WIBOWO,
																														SP.OG.
																														<\
																															/option>
																													<option
																														value=\'35|DR.
																														SYAICHU
																														ALI
																														YUSNI,
																														SP.BS\'>
																														DR.
																														SYAICHU
																														ALI
																														YUSNI,
																														SP.BS
																														<\
																															/option>
																													<option
																														value=\'55|DR.
																														THERESIA
																														MARTINA\'>
																														DR.
																														THERESIA
																														MARTINA
																														<\
																															/option>
																													<option
																														value=\'69|DR.
																														TITIS\'>
																														DR.
																														TITIS
																														<\
																															/option>
																													<option
																														value=\'182|DR.
																														TRI
																														EDHIE,
																														SP.
																														B\'>
																														DR.
																														TRI
																														EDHIE,
																														SP.
																														B
																														<\
																															/option>
																													<option
																														value=\'4|DR.
																														TRI
																														WAHYU
																														SUKARNOWATI,
																														SP.PD\'>
																														DR.
																														TRI
																														WAHYU
																														SUKARNOWATI,
																														SP.PD
																														<\
																															/option>
																													<option
																														value=\'143|DR.
																														TRIYOGO
																														SANTOSO,
																														SP.
																														AN\'>
																														DR.
																														TRIYOGO
																														SANTOSO,
																														SP.
																														AN
																														<\
																															/option>
																													<option
																														value=\'188|DR.
																														UDTIEK
																														MUNCAR
																														PRAEVIA\'>
																														DR.
																														UDTIEK
																														MUNCAR
																														PRAEVIA
																														<\
																															/option>
																													<option
																														value=\'164|DR.
																														YAUMULARINAH,SP.OG\'>
																														DR.
																														YAUMULARINAH,SP.OG
																														<\
																															/option>
																													<option
																														value=\'26|DR.
																														ZAENAL
																														ARIFIN
																														R.,SP.B\'>
																														DR.
																														ZAENAL
																														ARIFIN
																														R.,SP.B
																														<\
																															/option>
																													<option
																														value=\'208|DR.
																														ZAINAL
																														ARIFIN
																														R,SPB
																														FINACS\'>
																														DR.
																														ZAINAL
																														ARIFIN
																														R,SPB
																														FINACS
																														<\
																															/option>
																													<option
																														value=\'189|DR.AFIYAH\'>
																														DR.AFIYAH
																														<\
																															/option>
																													<option
																														value=\'190|DR.ANDRIANI
																														SETIYANINGSIH\'>
																														DR.ANDRIANI
																														SETIYANINGSIH
																														<\
																															/option>
																													<option
																														value=\'200|DR.BEJO
																														LANANG
																														SAPRONO\'>
																														DR.BEJO
																														LANANG
																														SAPRONO
																														<\
																															/option>
																													<option
																														value=\'191|DR.DJOKO\'>
																														DR.DJOKO
																														<\
																															/option>
																													<option
																														value=\'195|DR.TRI\'>
																														DR.TRI
																														<\
																															/option>
																													<option
																														value=\'176|DRG
																														IWAN
																														SURJA
																														WINATA
																														SP
																														BM\'>
																														DRG
																														IWAN
																														SURJA
																														WINATA
																														SP
																														BM
																														<\
																															/option>
																													<option
																														value=\'49|DRG.
																														ERIANA
																														M.H,
																														SP.
																														PERIO\'>
																														DRG.
																														ERIANA
																														M.H,
																														SP.
																														PERIO
																														<\
																															/option>
																													<option
																														value=\'23|DRG.
																														ILHAM
																														PBS\'>
																														DRG.
																														ILHAM
																														PBS
																														<\
																															/option>
																													<option
																														value=\'3|DRG.
																														LINDA
																														ERMIZA
																														SP.BM\'>
																														DRG.
																														LINDA
																														ERMIZA
																														SP.BM
																														<\
																															/option>
																													<option
																														value=\'60|DRG.
																														RIEKA
																														SILVIANI
																														L\'>
																														DRG.
																														RIEKA
																														SILVIANI
																														L
																														<\
																															/option>
																													<option
																														value=\'36|DRG.
																														RUTH
																														CH.
																														ROSILAWATI\'>
																														DRG.
																														RUTH
																														CH.
																														ROSILAWATI
																														<\
																															/option>
																													<option
																														value=\'212|STEFA\'>
																														STEFA
																														<\
																															/option>
																															<\
																																/select>
																																<\
																																	/td>
																											<td>Jenis
																												Tarif<\
																													/td>
																											<td><select
																													class=\'selectizeit\'
																													style=\'width:270px;\'
																													onchange=\'hide_grouper_result();\'
																													id=\'rs_tariff\'
																													name=\'rs_tariff\'>
																													<option
																														value=\'BP\'>
																														TARIF
																														RS
																														KELAS
																														B
																														PEMERINTAH
																														<\
																															/option>
																															<\
																																/select>
																																<\
																																	/td>
																																	<\
																																		/tr>
																										<tr id=\'tr_jkn_sitb\'
																											style=\'\'>
																											<td
																												style=\'line-height:1.8em;\'>
																												Pasien
																												TB<\
																													/td>
																											<td
																												colspan=\'3\'>
																												<input
																													onchange=\'chg_jkn_sitb();\'
																													type=\'checkbox\'
																													value=\'1\'
																													id=\'ck_jkn_sitb_checked_ind\'
																													name=\'jkn_sitb_checked_ind\' />&nbsp;<label
																													for=\'ck_jkn_sitb_checked_ind\'
																													class=\'xlnk\'>Ya
																													<\
																														/label>
																														&nbsp;&nbsp;&nbsp;&nbsp;<span
																															id=\'sp_input_jkn_sitb_noreg\'
																															style=\'display:none;\'><input
																																type=\'text\'
																																value=\'\'
																																name=\'jkn_sitb_noreg\'
																																id=\'jkn_sitb_noreg\'
																																style=\'width:200px\'
																																placeholder=\'Nomor
																																Register
																																SITB\' />&nbsp;<input
																																id=\'btn_validate_jkn_sitb_noreg\'
																																type=\'button\'
																																value=\'Validasi\'
																																onclick=\'validate_jkn_sitb_noreg();\' /><input
																																id=\'btn_reedit_validate_jkn_sitb_noreg\'
																																style=\'display:none;\'
																																type=\'button\'
																																value=\'Ubah\'
																																onclick=\'edit_validate_jkn_sitb_noreg();\' />&nbsp;&nbsp;&nbsp;<span
																																id=\'progress_jkn_sitb_noreg\'>
																																<\
																																	/span>
																																	<\
																																		/span>
																																		<\
																																			/td>
																																			<\
																																				/tr>
																										<tr id=\'tr_jkn_co_insidense\'
																											style=\'\'>
																											<td
																												style=\'line-height:1.8em;\'>
																												Co-Insidense
																												COVID-19
																												<\ /td>
																											<td
																												colspan=\'3\'>
																												<input
																													onchange=\'chg_co_insidense();\'
																													type=\'checkbox\'
																													value=\'1\'
																													id=\'ck_co_insidense\'
																													name=\'co_insidence_ind_jkn\' />&nbsp;<label
																													for=\'ck_co_insidense\'
																													class=\'xlnk\'>Ya
																													<\
																														/label>
																														&nbsp;&nbsp;&nbsp;&nbsp;<span
																															id=\'sp_input_covid19_no_sep\'
																															style=\'display:none;\'><input
																																type=\'text\'
																																value=\'\'
																																name=\'covid19_no_sep\'
																																id=\'covid19_no_sep\'
																																style=\'width:200px\'
																																placeholder=\'Nomor
																																Klaim
																																COVID-19\' />&nbsp;<input
																																id=\'btn_validate_covid19_no_sep\'
																																type=\'button\'
																																value=\'Validasi\'
																																onclick=\'validate_covid19_no_sep();\' /><input
																																id=\'btn_reedit_validate_covid19_no_sep\'
																																style=\'display:none;\'
																																type=\'button\'
																																value=\'Ubah\'
																																onclick=\'edit_validate_covid19_no_sep();\' />&nbsp;&nbsp;&nbsp;<span
																																id=\'progress_covid19_no_sep\'>
																																<\
																																	/span>
																																	<\
																																		/span>
																																		<\
																																			/td>
																																			<\
																																				/tr>
																										<tr id=\'tr_pex\'
																											style=\'display:none;\'>
																											<td
																												colspan=\'2\'>
																												&nbsp;<\
																													/td>
																											<td>
																												<div
																													id=\'dvcaption_pex\'>
																													<img src=\'/E-Klaim/images/question_mark24.png\'
																														style=\'cursor:default;vertical-align:middle;\'
																														data-html=\'true\'
																														data-tooltip=\'Untuk
																														poli
																														eksekutif:<br />Masukkan
																													nilai
																													tagihan
																													untuk
																													poli
																													eksekutif
																													<span
																														style=\"color:black;font-weight:bold;\">yang
																														dibayar
																														oleh
																														pasien
																														<\
																															/span>
																															.
																															Mohon
																															diisi
																															dengan
																															benar\'/>&nbsp;Tarif
																															Poli
																															Eks.
																															<\
																																/div>
																																<\
																																	/td>
																											<td>
																												<div id=\'dvinput_pex\'
																													style=\'text-align:left;\'>
																													<input
																														onclick=\'_dsa(this);\'
																														value=\'0\'
																														id=\'billing_amount_pex\'
																														name=\'billing_amount_pex\'
																														onkeydown=\'setTimeout(\"chg_billing_pex();\",10);\'
																														type=\'number\'
																														style=\'text-align:center;width:100px;\' /><span
																														style=\'float:right;\'><span
																															class=\'discreet\'>Rp
																															<\
																																/span>
																																<span
																																	style=\'font-size:1.2em;\'
																																	id=\'billing_amount_pex_txt\'>0
																																	<\
																																		/span>
																																		<\
																																			/span>
																																			<\
																																				/div>
																																				<\
																																					/td>
																																					<\
																																						/tr>
																										<tr
																											id=\'tr_billing_group\'>
																											<td colspan=\'4\'
																												style=\'font-size:0.9em;padding:1em;padding-left:3em;background:linear-gradient(to
																												right,
																												rgba(0,0,0,0.0)
																												0%,
																												rgba(0,0,0,0)
																												100%);\'>
																												<input
																													type=\'hidden\'
																													value=\'0\'
																													name=\'billing_amount\'
																													id=\'billing_amount\' />
																												<table
																													class=\'xxlist\'
																													style=\'table-layout:fixed;width:100%;border:0;\'>
																													<tbody>
																														<tr>
																															<td colspan=\'6\'
																																style=\'text-align:center;border-top:0;\'>
																																<img src=\'/E-Klaim/images/question_mark24.png\'
																																	style=\'cursor:default;vertical-align:middle;\'
																																	data-html=\'true\'
																																	data-tooltip=\'Total
																																	nilai
																																	tertagih
																																	pada
																																	perawatan
																																	dalam
																																	satu
																																	episode,
																																	tidak
																																	termasuk
																																	item
																																	tagihan
																																	pada
																																	<strong>Tarif
																																Non
																																INA-CBG
																																<\
																																	/strong>
																																	yang
																																	tersebut
																																	dibawah.\'/>&nbsp;<span
																																		style=\'font-style:italic;color:#888;\'>Tarif
																																		Rumah
																																		Sakit
																																		:
																																		<\
																																			/span>
																																			&nbsp;<span
																																				style=\'font-size:1.11em;color:#888;\'>Rp
																																				<\
																																					/span>
																																					&nbsp;
																																					<div style=\'display:inline-block;border-left:0;font-size:1.5em;text-align:left;\'
																																						id=\'tdbilling_amount\'>
																																						0
																																						<\
																																							/div>
																																							<\
																																								/td>
																																								<\
																																									/tr>
																														<tr>
																															<td
																																style=\'text-align:right;\'>
																																<img src=\'/E-Klaim/images/question_mark24.png\'
																																	style=\'cursor:default;vertical-align:middle;\'
																																	data-html=\'true\'
																																	data-tooltip=\'Total
																																	tarif
																																	untuk
																																	tindakan
																																	medik
																																	non-operatif
																																	dan
																																	non-invasif
																																	(tidak
																																	dilakukan
																																	di
																																	kamar
																																	operasi),
																																	seperti
																																	contoh
																																	:
																																	kateterisasi
																																	jantung.\' />&nbsp;Prosedur
																																Non
																																Bedah
																																<\
																																	/td>
																															<td
																																style=\'border-left:0;\'>
																																<input
																																	type=\'text\'
																																	autocomplete=\'off\'
																																	class=\'billing_group\'
																																	onclick=\'_dsa(this);\'
																																	style=\'text-align:center;width:8em;\'
																																	value=\'0\'
																																	name=\'procedure_amt\'
																																	id=\'procedure_amt\'
																																	onkeydown=\'kp_chg_billing(this,event);\' />
																																<\
																																	/td>
																															<td
																																style=\'text-align:right;\'>
																																<img src=\'/E-Klaim/images/question_mark24.png\'
																																	style=\'cursor:default;vertical-align:middle;\'
																																	data-html=\'true\'
																																	data-tooltip=\'Total
																																	tarif
																																	untuk
																																	tindakan
																																	medik
																																	operatif
																																	maupun
																																	invasif
																																	yang
																																	dilakukan
																																	di
																																	kamar
																																	operasi.\' />&nbsp;Prosedur
																																Bedah
																																<\
																																	/td>
																															<td
																																style=\'border-left:0;\'>
																																<input
																																	type=\'text\'
																																	autocomplete=\'off\'
																																	class=\'billing_group\'
																																	onclick=\'_dsa(this);\'
																																	style=\'text-align:center;width:8em;\'
																																	value=\'0\'
																																	name=\'surgical_amt\'
																																	id=\'surgical_amt\'
																																	onkeydown=\'kp_chg_billing(this,event);\' />
																																<\
																																	/td>
																															<td
																																style=\'text-align:right;\'>
																																<img src=\'/E-Klaim/images/question_mark24.png\'
																																	style=\'cursor:default;vertical-align:middle;\'
																																	data-html=\'true\'
																																	data-tooltip=\'Total
																																	tarif
																																	untuk
																																	konsul,
																																	visite
																																	atau
																																	pun
																																	pemeriksaan
																																	oleh
																																	dokter
																																	umum/spesialis/sub-spesialis
																																	dalam
																																	satu
																																	episode.\' />&nbsp;Konsultasi
																																<\
																																	/td>
																															<td
																																style=\'border-left:0;\'>
																																<input
																																	type=\'text\'
																																	autocomplete=\'off\'
																																	class=\'billing_group\'
																																	onclick=\'_dsa(this);\'
																																	style=\'text-align:center;width:8em;\'
																																	value=\'0\'
																																	name=\'consul_amt\'
																																	id=\'consul_amt\'
																																	onkeydown=\'kp_chg_billing(this,event);\' />
																																<\
																																	/td>
																																	<\
																																		/tr>
																														<tr>
																															<td
																																style=\'text-align:right;\'>
																																<img src=\'/E-Klaim/images/question_mark24.png\'
																																	style=\'cursor:default;vertical-align:middle;\'
																																	data-html=\'true\'
																																	data-tooltip=\'Total
																																	tarif
																																	untuk
																																	konsul
																																	atau
																																	visite
																																	tenaga
																																	ahli
																																	dalam
																																	satu
																																	episode,
																																	seperti
																																	contoh:
																																	konsul
																																	nutrisionis
																																	atau
																																	fisioterapis.\' />&nbsp;Tenaga
																																Ahli
																																<\
																																	/td>
																															<td
																																style=\'border-left:0;\'>
																																<input
																																	type=\'text\'
																																	autocomplete=\'off\'
																																	class=\'billing_group\'
																																	onclick=\'_dsa(this);\'
																																	style=\'text-align:center;width:8em;\'
																																	value=\'0\'
																																	name=\'expert_amt\'
																																	id=\'expert_amt\'
																																	onkeydown=\'kp_chg_billing(this,event);\' />
																																<\
																																	/td>
																															<td
																																style=\'text-align:right;\'>
																																<img src=\'/E-Klaim/images/question_mark24.png\'
																																	style=\'cursor:default;vertical-align:middle;\'
																																	data-html=\'true\'
																																	data-tooltip=\'Total
																																	tarif
																																	untuk
																																	tindakan
																																	keperawatan
																																	seperti
																																	buka
																																	jahitan,
																																	perawatan
																																	luka,
																																	dan
																																	lainnya
																																	dalam
																																	satu
																																	episode.\' />&nbsp;Keperawatan
																																<\
																																	/td>
																															<td
																																style=\'border-left:0;\'>
																																<input
																																	type=\'text\'
																																	autocomplete=\'off\'
																																	class=\'billing_group\'
																																	onclick=\'_dsa(this);\'
																																	style=\'text-align:center;width:8em;\'
																																	value=\'0\'
																																	name=\'nursing_amt\'
																																	id=\'nursing_amt\'
																																	onkeydown=\'kp_chg_billing(this,event);\' />
																																<\
																																	/td>
																															<td
																																style=\'text-align:right;\'>
																																<img src=\'/E-Klaim/images/question_mark24.png\'
																																	style=\'cursor:default;vertical-align:middle;\'
																																	data-html=\'true\'
																																	data-tooltip=\'Total
																																	tarif
																																	untuk
																																	tindakan
																																	penunjang
																																	di
																																	luar
																																	laboratorium
																																	maupun
																																	radiologi
																																	dalam
																																	satu
																																	episode,
																																	seperti
																																	contoh
																																	Echo,
																																	EKG,
																																	Holter,
																																	dll.\' />&nbsp;Penunjang
																																<\
																																	/td>
																															<td
																																style=\'border-left:0;\'>
																																<input
																																	type=\'text\'
																																	autocomplete=\'off\'
																																	class=\'billing_group\'
																																	onclick=\'_dsa(this);\'
																																	style=\'text-align:center;width:8em;\'
																																	value=\'0\'
																																	name=\'ancillary_amt\'
																																	id=\'ancillary_amt\'
																																	onkeydown=\'kp_chg_billing(this,event);\' />
																																<\
																																	/td>
																																	<\
																																		/tr>
																														<tr>
																															<td
																																style=\'text-align:right;\'>
																																<img src=\'/E-Klaim/images/question_mark24.png\'
																																	style=\'cursor:default;vertical-align:middle;\'
																																	data-html=\'true\'
																																	data-tooltip=\'Total
																																	tarif
																																	untuk
																																	pemeriksaan
																																	radiologi
																																	dalam
																																	satu
																																	episode,
																																	meliputi
																																	diantaranya
																																	X-Ray,
																																	USG,
																																	MRI,
																																	CT-Scan,
																																	Angiogram,
																																	dll.\' />&nbsp;Radiologi
																																<\
																																	/td>
																															<td
																																style=\'border-left:0;\'>
																																<input
																																	type=\'text\'
																																	autocomplete=\'off\'
																																	class=\'billing_group\'
																																	onclick=\'_dsa(this);\'
																																	style=\'text-align:center;width:8em;\'
																																	value=\'0\'
																																	name=\'radiology_amt\'
																																	id=\'radiology_amt\'
																																	onkeydown=\'kp_chg_billing(this,event);\' />
																																<\
																																	/td>
																															<td
																																style=\'text-align:right;\'>
																																<img src=\'/E-Klaim/images/question_mark24.png\'
																																	style=\'cursor:default;vertical-align:middle;\'
																																	data-html=\'true\'
																																	data-tooltip=\'Total
																																	tarif
																																	untuk
																																	pemeriksaan
																																	laboratorium
																																	dalam
																																	satu
																																	episode,
																																	meliputi
																																	diantaranya
																																	Mikrobiologi,
																																	Patologi
																																	Anatomi,
																																	Patologi
																																	Klinik,
																																	Hematologi,
																																	Hemostasis,
																																	dll.\' />&nbsp;Laboratorium
																																<\
																																	/td>
																															<td
																																style=\'border-left:0;\'>
																																<input
																																	type=\'text\'
																																	autocomplete=\'off\'
																																	class=\'billing_group\'
																																	onclick=\'_dsa(this);\'
																																	style=\'text-align:center;width:8em;\'
																																	value=\'0\'
																																	name=\'laboratory_amt\'
																																	id=\'laboratory_amt\'
																																	onkeydown=\'kp_chg_billing(this,event);\' />
																																<\
																																	/td>
																															<td
																																style=\'text-align:right;\'>
																																<img src=\'/E-Klaim/images/question_mark24.png\'
																																	style=\'cursor:default;vertical-align:middle;\'
																																	data-html=\'true\'
																																	data-tooltip=\'Total
																																	tarif
																																	pemakaian
																																	darah
																																	dalam
																																	satu
																																	episode.\' />&nbsp;Pelayanan
																																Darah
																																<\
																																	/td>
																															<td
																																style=\'border-left:0;\'>
																																<input
																																	type=\'text\'
																																	autocomplete=\'off\'
																																	class=\'billing_group\'
																																	onclick=\'_dsa(this);\'
																																	style=\'text-align:center;width:8em;\'
																																	value=\'0\'
																																	name=\'blood_amt\'
																																	id=\'blood_amt\'
																																	onkeydown=\'kp_chg_billing(this,event);\' />
																																<\
																																	/td>
																																	<\
																																		/tr>
																														<tr>
																															<td
																																style=\'text-align:right;\'>
																																<img src=\'/E-Klaim/images/question_mark24.png\'
																																	style=\'cursor:default;vertical-align:middle;\'
																																	data-html=\'true\'
																																	data-tooltip=\'Total
																																	tarif
																																	untuk
																																	tindakan
																																	rehabilitasi,
																																	meliputi
																																	Fisioterapi,
																																	Terapi
																																	Okupasi,
																																	Rehabilitasi
																																	Psikososial,
																																	dll.\' />&nbsp;Rehabilitasi
																																<\
																																	/td>
																															<td
																																style=\'border-left:0;\'>
																																<input
																																	type=\'text\'
																																	autocomplete=\'off\'
																																	class=\'billing_group\'
																																	onclick=\'_dsa(this);\'
																																	style=\'text-align:center;width:8em;\'
																																	value=\'0\'
																																	name=\'rehab_amt\'
																																	id=\'rehab_amt\'
																																	onkeydown=\'kp_chg_billing(this,event);\' />
																																<\
																																	/td>
																															<td
																																style=\'text-align:right;\'>
																																<img src=\'/E-Klaim/images/question_mark24.png\'
																																	style=\'cursor:default;vertical-align:middle;\'
																																	data-html=\'true\'
																																	data-tooltip=\'Total
																																	tarif
																																	kamar/akomodasi
																																	pasien
																																	dalam
																																	satu
																																	episode,
																																	termasuk
																																	recovery
																																	room,
																																	tarif
																																	administrasi
																																	pasien
																																	baik
																																	rawat
																																	jalan
																																	maupun
																																	rawat
																																	inap.\' />&nbsp;Kamar
																																/
																																Akomodasi
																																<\
																																	/td>
																															<td
																																style=\'border-left:0;\'>
																																<input
																																	type=\'text\'
																																	autocomplete=\'off\'
																																	class=\'billing_group\'
																																	onclick=\'_dsa(this);\'
																																	style=\'text-align:center;width:8em;\'
																																	value=\'0\'
																																	name=\'room_amt\'
																																	id=\'room_amt\'
																																	onkeydown=\'kp_chg_billing(this,event);\' />
																																<\
																																	/td>
																															<td
																																style=\'text-align:right;\'>
																																<img src=\'/E-Klaim/images/question_mark24.png\'
																																	style=\'cursor:default;vertical-align:middle;\'
																																	data-html=\'true\'
																																	data-tooltip=\'Total
																																	tarif
																																	kamar/akomodasi
																																	pasien
																																	di
																																	ruang
																																	intensif
																																	dalam
																																	satu
																																	episode.
																																	Misal:
																																	ICU,
																																	ICCU,
																																	NICU,
																																	PICU,
																																	HCU,
																																	dll.\' />&nbsp;Rawat
																																Intensif
																																<\
																																	/td>
																															<td
																																style=\'border-left:0;\'>
																																<input
																																	type=\'text\'
																																	autocomplete=\'off\'
																																	class=\'billing_group\'
																																	onclick=\'_dsa(this);\'
																																	style=\'text-align:center;width:8em;\'
																																	value=\'0\'
																																	name=\'intensive_amt\'
																																	id=\'intensive_amt\'
																																	onkeydown=\'kp_chg_billing(this,event);\' />
																																<\
																																	/td>
																																	<\
																																		/tr>
																														<tr>
																															<td
																																style=\'text-align:right;\'>
																																<img src=\'/E-Klaim/images/question_mark24.png\'
																																	style=\'cursor:default;vertical-align:middle;\'
																																	data-html=\'true\'
																																	data-tooltip=\'Total
																																	tarif
																																	obat-obatan
																																	yg
																																	diberikan
																																	selama
																																	episode
																																	pelayanan
																																	rawat
																																	inap
																																	atau
																																	rawat
																																	jalan
																																	(untuk
																																	7
																																	hari)
																																	diluar
																																	obat
																																	kemoterapi
																																	dan
																																	diluar
																																	obat
																																	kronis
																																	untuk
																																	23
																																	hari.\' />&nbsp;Obat
																																<\
																																	/td>
																															<td
																																style=\'border-left:0;\'>
																																<input
																																	type=\'text\'
																																	autocomplete=\'off\'
																																	class=\'billing_group\'
																																	onclick=\'_dsa(this);\'
																																	style=\'text-align:center;width:8em;\'
																																	value=\'0\'
																																	name=\'drug_amt\'
																																	id=\'drug_amt\'
																																	onkeydown=\'kp_chg_billing(this,event);\' />
																																<\
																																	/td>
																															<td
																																style=\'text-align:right;\'>
																																<img src=\'/E-Klaim/images/question_mark24.png\'
																																	style=\'cursor:default;vertical-align:middle;\'
																																	data-html=\'true\'
																																	data-tooltip=\'Total
																																	tarif
																																	obat-obatan
																																	yg
																																	diberikan
																																	kepada
																																	pasien
																																	rawat
																																	jalan
																																	untuk
																																	23
																																	hari.\' />&nbsp;Obat
																																Kronis
																																<\
																																	/td>
																															<td
																																style=\'border-left:0;\'>
																																<input
																																	type=\'text\'
																																	autocomplete=\'off\'
																																	class=\'billing_group\'
																																	onclick=\'_dsa(this);\'
																																	style=\'text-align:center;width:8em;\'
																																	value=\'0\'
																																	name=\'drug_chronic_amt\'
																																	id=\'drug_chronic_amt\'
																																	onkeydown=\'kp_chg_billing(this,event);\' />
																																<\
																																	/td>
																															<td
																																style=\'text-align:right;\'>
																																<img src=\'/E-Klaim/images/question_mark24.png\'
																																	style=\'cursor:default;vertical-align:middle;\'
																																	data-html=\'true\'
																																	data-tooltip=\'Total
																																	tarif
																																	obat-obatan
																																	kemoterapi
																																	rawat
																																	jalan
																																	maupun
																																	rawat
																																	inap
																																	dalam
																																	satu
																																	episode
																																	pelayanan.\' />&nbsp;Obat
																																Kemoterapi
																																<\
																																	/td>
																															<td
																																style=\'border-left:0;\'>
																																<input
																																	type=\'text\'
																																	autocomplete=\'off\'
																																	class=\'billing_group\'
																																	onclick=\'_dsa(this);\'
																																	style=\'text-align:center;width:8em;\'
																																	value=\'0\'
																																	name=\'drug_chemo_amt\'
																																	id=\'drug_chemo_amt\'
																																	onkeydown=\'kp_chg_billing(this,event);\' />
																																<\
																																	/td>
																																	<\
																																		/tr>
																														<tr>
																															<td
																																style=\'text-align:right;\'>
																																<img src=\'/E-Klaim/images/question_mark24.png\'
																																	style=\'cursor:default;vertical-align:middle;\'
																																	data-html=\'true\'
																																	data-tooltip=\'Total
																																	tarif
																																	alat
																																	kesehatan
																																	yang
																																	diberikan
																																	kepada
																																	pasien
																																	dalam
																																	satu
																																	episode.
																																	Misalkan:
																																	Stent,
																																	Implan,
																																	dll\' />&nbsp;Alkes
																																<\
																																	/td>
																															<td
																																style=\'border-left:0;\'>
																																<input
																																	type=\'text\'
																																	autocomplete=\'off\'
																																	class=\'billing_group\'
																																	onclick=\'_dsa(this);\'
																																	style=\'text-align:center;width:8em;\'
																																	value=\'0\'
																																	name=\'device_amt\'
																																	id=\'device_amt\'
																																	onkeydown=\'kp_chg_billing(this,event);\' />
																																<\
																																	/td>
																															<td
																																style=\'text-align:right;\'>
																																<img src=\'/E-Klaim/images/question_mark24.png\'
																																	style=\'cursor:default;vertical-align:middle;\'
																																	data-html=\'true\'
																																	data-tooltip=\'BMHP=Bahan
																																	Medis
																																	Habis
																																	Pakai.
																																	Yaitu
																																	total
																																	tarif
																																	bahan
																																	medis
																																	habis
																																	pakai,
																																	di
																																	luar
																																	paket
																																	perawatan
																																	yang
																																	diberikan
																																	kepada
																																	pasien
																																	selama
																																	satu
																																	episode
																																	perawatan,
																																	seperti
																																	contoh
																																	:
																																	pemakaian
																																	oksigen,
																																	jelly,
																																	alkohol,
																																	dsb.\' />&nbsp;BMHP
																																<\
																																	/td>
																															<td
																																style=\'border-left:0;\'>
																																<input
																																	type=\'text\'
																																	autocomplete=\'off\'
																																	class=\'billing_group\'
																																	onclick=\'_dsa(this);\'
																																	style=\'text-align:center;width:8em;\'
																																	value=\'0\'
																																	name=\'consumable_amt\'
																																	id=\'consumable_amt\'
																																	onkeydown=\'kp_chg_billing(this,event);\' />
																																<\
																																	/td>
																															<td
																																style=\'text-align:right;\'>
																																<img src=\'/E-Klaim/images/question_mark24.png\'
																																	style=\'cursor:default;vertical-align:middle;\'
																																	data-html=\'true\'
																																	data-tooltip=\'Total
																																	tarif
																																	sewa
																																	alat
																																	medis
																																	yang
																																	digunakan
																																	dalam
																																	tindakan
																																	tertentu,
																																	seperti
																																	contoh:
																																	Ventilator,
																																	Nebulizer,
																																	Syringe
																																	Pump,
																																	dll.\' />&nbsp;Sewa
																																Alat
																																<\
																																	/td>
																															<td
																																style=\'border-left:0;\'>
																																<input
																																	type=\'text\'
																																	autocomplete=\'off\'
																																	class=\'billing_group\'
																																	onclick=\'_dsa(this);\'
																																	style=\'text-align:center;width:8em;\'
																																	value=\'0\'
																																	name=\'device_rent_amt\'
																																	id=\'device_rent_amt\'
																																	onkeydown=\'kp_chg_billing(this,event);\' />
																																<\
																																	/td>
																																	<\
																																		/tr>
																														<tr class=\'tr_covid19_penunjang_pengurang\'
																															style=\'display:none;\'>
																															<td colspan=\'6\'
																																style=\'text-align:center;padding-top:2em;font-style:italic;color:#888;\'>
																																Faktor
																																pengurang,
																																pilih
																																checkbox
																																pemeriksaan
																																penunjang
																																berikut
																																yang
																																tidak
																																dilakukan:
																																<\
																																	/td>
																																	<\
																																		/tr>
																														<tr class=\'tr_covid19_penunjang_pengurang\'
																															style=\'display:none;\'>
																															<td style=\'text-align:center;\'
																																colspan=\'2\'>
																																<input
																																	type=\'checkbox\'
																																	class=\'penunjang_pengurang\'
																																	style=\'text-align:center;\'
																																	value=\'152000\'
																																	name=\'lab_asam_laktat\'
																																	id=\'lab_asam_laktat\'
																																	onchange=\'kp_chg_billing(this,event);\' />&nbsp;<label
																																	for=\'lab_asam_laktat\'
																																	class=\'xlnk\'>Asam
																																	Laktat
																																	<\
																																		/label>
																																		<\
																																			/td>
																															<td style=\'text-align:center;\'
																																colspan=\'2\'>
																																<input
																																	type=\'checkbox\'
																																	class=\'penunjang_pengurang\'
																																	style=\'text-align:center;\'
																																	value=\'400000\'
																																	name=\'lab_procalcitonin\'
																																	id=\'lab_procalcitonin\'
																																	onchange=\'kp_chg_billing(this,event);\' />&nbsp;<label
																																	for=\'lab_procalcitonin\'
																																	class=\'xlnk\'>Procalcitonin
																																	<\
																																		/label>
																																		<\
																																			/td>
																															<td style=\'text-align:center;\'
																																colspan=\'2\'>
																																<input
																																	type=\'checkbox\'
																																	class=\'penunjang_pengurang\'
																																	style=\'text-align:center;\'
																																	value=\'136000\'
																																	name=\'lab_crp\'
																																	id=\'lab_crp\'
																																	onchange=\'kp_chg_billing(this,event);\' />&nbsp;<label
																																	for=\'lab_crp\'
																																	class=\'xlnk\'>CRP
																																	<\
																																		/label>
																																		<\
																																			/td>
																																			<\
																																				/tr>
																														<tr class=\'tr_covid19_penunjang_pengurang\'
																															style=\'display:none;\'>
																															<td style=\'text-align:center;\'
																																colspan=\'2\'>
																																<input
																																	type=\'checkbox\'
																																	class=\'penunjang_pengurang\'
																																	style=\'text-align:center;\'
																																	value=\'326000\'
																																	name=\'lab_kultur\'
																																	id=\'lab_kultur\'
																																	onchange=\'kp_chg_billing(this,event);\' />&nbsp;<label
																																	for=\'lab_kultur\'
																																	class=\'xlnk\'>Kultur
																																	MO
																																	(aerob)
																																	dengan
																																	resistansi
																																	<\
																																		/label>
																																		<\
																																			/td>
																															<td style=\'text-align:center;\'
																																colspan=\'2\'>
																																<input
																																	type=\'checkbox\'
																																	class=\'penunjang_pengurang\'
																																	style=\'text-align:center;\'
																																	value=\'192000\'
																																	name=\'lab_d_dimer\'
																																	id=\'lab_d_dimer\'
																																	onchange=\'kp_chg_billing(this,event);\' />&nbsp;<label
																																	for=\'lab_d_dimer\'
																																	class=\'xlnk\'>D
																																	Dimer
																																	<\
																																		/label>
																																		<\
																																			/td>
																															<td style=\'text-align:center;\'
																																colspan=\'2\'>
																																<input
																																	type=\'checkbox\'
																																	class=\'penunjang_pengurang\'
																																	style=\'text-align:center;\'
																																	value=\'172000\'
																																	name=\'lab_pt\'
																																	id=\'lab_pt\'
																																	onchange=\'kp_chg_billing(this,event);\' />&nbsp;<label
																																	for=\'lab_pt\'
																																	class=\'xlnk\'>PT
																																	<\
																																		/label>
																																		<\
																																			/td>
																																			<\
																																				/tr>
																														<tr class=\'tr_covid19_penunjang_pengurang\'
																															style=\'display:none;\'>
																															<td style=\'text-align:center;\'
																																colspan=\'2\'>
																																<input
																																	type=\'checkbox\'
																																	class=\'penunjang_pengurang\'
																																	style=\'text-align:center;\'
																																	value=\'172000\'
																																	name=\'lab_aptt\'
																																	id=\'lab_aptt\'
																																	onchange=\'kp_chg_billing(this,event);\' />&nbsp;<label
																																	for=\'lab_aptt\'
																																	class=\'xlnk\'>APTT
																																	<\
																																		/label>
																																		<\
																																			/td>
																															<td style=\'text-align:center;\'
																																colspan=\'2\'>
																																<input
																																	type=\'checkbox\'
																																	class=\'penunjang_pengurang\'
																																	style=\'text-align:center;\'
																																	value=\'19000\'
																																	name=\'lab_waktu_pendarahan\'
																																	id=\'lab_waktu_pendarahan\'
																																	onchange=\'kp_chg_billing(this,event);\' />&nbsp;<label
																																	for=\'lab_waktu_pendarahan\'
																																	class=\'xlnk\'>Waktu
																																	Pendarahan
																																	<\
																																		/label>
																																		<\
																																			/td>
																															<td style=\'text-align:center;\'
																																colspan=\'2\'>
																																<input
																																	type=\'checkbox\'
																																	class=\'penunjang_pengurang\'
																																	style=\'text-align:center;\'
																																	value=\'151000\'
																																	name=\'lab_anti_hiv\'
																																	id=\'lab_anti_hiv\'
																																	onchange=\'kp_chg_billing(this,event);\' />&nbsp;<label
																																	for=\'lab_anti_hiv\'
																																	class=\'xlnk\'>Anti
																																	HIV
																																	<\
																																		/label>
																																		<\
																																			/td>
																																			<\
																																				/tr>
																														<tr class=\'tr_covid19_penunjang_pengurang\'
																															style=\'display:none;\'>
																															<td style=\'text-align:center;\'
																																colspan=\'2\'>
																																<input
																																	type=\'checkbox\'
																																	class=\'penunjang_pengurang\'
																																	style=\'text-align:center;\'
																																	value=\'86000\'
																																	name=\'lab_analisa_gas\'
																																	id=\'lab_analisa_gas\'
																																	onchange=\'kp_chg_billing(this,event);\' />&nbsp;<label
																																	for=\'lab_analisa_gas\'
																																	class=\'xlnk\'>Analisa
																																	Gas
																																	<\
																																		/label>
																																		<\
																																			/td>
																															<td style=\'text-align:center;\'
																																colspan=\'2\'>
																																<input
																																	type=\'checkbox\'
																																	class=\'penunjang_pengurang\'
																																	style=\'text-align:center;\'
																																	value=\'25000\'
																																	name=\'lab_albumin\'
																																	id=\'lab_albumin\'
																																	onchange=\'kp_chg_billing(this,event);\' />&nbsp;<label
																																	for=\'lab_albumin\'
																																	class=\'xlnk\'>Albumin
																																	<\
																																		/label>
																																		<\
																																			/td>
																															<td style=\'text-align:center;\'
																																colspan=\'2\'>
																																<input
																																	type=\'checkbox\'
																																	class=\'penunjang_pengurang\'
																																	style=\'text-align:center;\'
																																	value=\'115000\'
																																	name=\'rad_thorax_ap_pa\'
																																	id=\'rad_thorax_ap_pa\'
																																	onchange=\'kp_chg_billing(this,event);\' />&nbsp;<label
																																	for=\'rad_thorax_ap_pa\'
																																	class=\'xlnk\'>Thorax
																																	AP
																																	/
																																	PA
																																	<\
																																		/label>
																																		<\
																																			/td>
																																			<\
																																				/tr>
																														<tr class=\'tr_covid19_meninggal\'
																															style=\'display:none;\'>
																															<td colspan=\'6\'
																																style=\'text-align:center;padding-top:2em;font-style:italic;color:#888;\'>
																																Khusus
																																pasien
																																COVID-19
																																yang
																																meninggal
																																dunia:
																																<\
																																	/td>
																																	<\
																																		/tr>
																														<tr class=\'tr_covid19_meninggal\'
																															style=\'display:none;\'>
																															<td style=\'text-align:center;\'
																																colspan=\'2\'>
																																<input
																																	type=\'checkbox\'
																																	class=\'jenazah\'
																																	style=\'text-align:center;\'
																																	value=\'550000\'
																																	name=\'pemulasaraan\'
																																	id=\'pemulasaraan\'
																																	onchange=\'kp_chg_billing(this,event);\' />&nbsp;<label
																																	for=\'pemulasaraan\'
																																	class=\'xlnk\'>Pemulasaraan
																																	Jenazah
																																	<\
																																		/label>
																																		<\
																																			/td>
																															<td style=\'text-align:center;\'
																																colspan=\'2\'>
																																<input
																																	type=\'checkbox\'
																																	class=\'jenazah\'
																																	style=\'text-align:center;\'
																																	value=\'100000\'
																																	name=\'kantong\'
																																	id=\'kantong\'
																																	onchange=\'kp_chg_billing(this,event);\' />&nbsp;<label
																																	for=\'kantong\'
																																	class=\'xlnk\'>Kantong
																																	Jenazah
																																	<\
																																		/label>
																																		<\
																																			/td>
																															<td style=\'text-align:center;\'
																																colspan=\'2\'>
																																<input
																																	type=\'checkbox\'
																																	class=\'jenazah\'
																																	style=\'text-align:center;\'
																																	value=\'1750000\'
																																	name=\'peti\'
																																	id=\'peti\'
																																	onchange=\'kp_chg_billing(this,event);\' />&nbsp;<label
																																	for=\'peti\'
																																	class=\'xlnk\'>Peti
																																	Jenazah
																																	<\
																																		/label>
																																		<\
																																			/td>
																																			<\
																																				/tr>
																														<tr class=\'tr_covid19_meninggal\'
																															style=\'display:none;\'>
																															<td style=\'text-align:center;\'
																																colspan=\'2\'>
																																<input
																																	type=\'checkbox\'
																																	class=\'jenazah\'
																																	style=\'text-align:center;\'
																																	value=\'260000\'
																																	name=\'plastik\'
																																	id=\'plastik\'
																																	onchange=\'kp_chg_billing(this,event);\' />&nbsp;<label
																																	for=\'plastik\'
																																	class=\'xlnk\'>Plastik
																																	Erat
																																	<\
																																		/label>
																																		<\
																																			/td>
																															<td style=\'text-align:center;\'
																																colspan=\'2\'>
																																<input
																																	type=\'checkbox\'
																																	class=\'jenazah\'
																																	style=\'text-align:center;\'
																																	value=\'100000\'
																																	name=\'desinfektan_jenazah\'
																																	id=\'desinfektan_jenazah\'
																																	onchange=\'kp_chg_billing(this,event);\' />&nbsp;<label
																																	for=\'desinfektan_jenazah\'
																																	class=\'xlnk\'>Desinfektan
																																	Jenazah
																																	<\
																																		/label>
																																		<\
																																			/td>
																															<td style=\'text-align:center;\'
																																colspan=\'2\'>
																																<input
																																	type=\'checkbox\'
																																	class=\'jenazah\'
																																	style=\'text-align:center;\'
																																	value=\'500000\'
																																	name=\'mobil\'
																																	id=\'mobil\'
																																	onchange=\'kp_chg_billing(this,event);\' />&nbsp;<label
																																	for=\'mobil\'
																																	class=\'xlnk\'>Transport
																																	Mobil
																																	<\
																																		/label>
																																		<\
																																			/td>
																																			<\
																																				/tr>
																														<tr class=\'tr_covid19_meninggal\'
																															style=\'display:none;\'>
																															<td style=\'text-align:center;\'
																																colspan=\'2\'>
																																<\
																																	/td>
																															<td style=\'border-left:0;text-align:center;\'
																																colspan=\'2\'>
																																<input
																																	type=\'checkbox\'
																																	class=\'jenazah\'
																																	style=\'text-align:center;\'
																																	value=\'100000\'
																																	name=\'desinfektan_mobil\'
																																	id=\'desinfektan_mobil\'
																																	onchange=\'kp_chg_billing(this,event);\' />&nbsp;<label
																																	for=\'desinfektan_mobil\'
																																	class=\'xlnk\'>Desinfektan
																																	Mobil
																																	<\
																																		/label>
																																		<\
																																			/td>
																															<td style=\'border-left:0;\'
																																colspan=\'2\'>
																																<\
																																	/td>
																																	<\
																																		/tr>
																														<tr class=\'tr_covid19_terapi_plasma\'
																															style=\'display:none;\'>
																															<td colspan=\'6\'
																																style=\'text-align:center;padding-top:2em;font-style:italic;color:#888;\'>
																																<span
																																	id=\'sp_terapi_plasma_header\'>Tambahan
																																	Terapi
																																	Plasma
																																	Konvalesen
																																	@
																																	Rp
																																	2.250.000,-
																																	/
																																	kantong:
																																	<\
																																		/span>
																																		<\
																																			/td>
																																			<\
																																				/tr>
																														<tr class=\'tr_covid19_terapi_plasma\'
																															style=\'display:none;\'>
																															<td colspan=\'6\'
																																style=\'text-align:center;\'>
																																<span
																																	id=\'sp_terapi_plasma_caption\'>Jumlah
																																	Kantong
																																	Plasma:
																																	<\
																																		/span>
																																		&nbsp;&nbsp;<input
																																			type=\'text\'
																																			autocomplete=\'off\'
																																			class=\'terapi_plasma\'
																																			onclick=\'_dsa(this);\'
																																			style=\'text-align:center;width:8em;\'
																																			value=\'0\'
																																			name=\'terapi_konvalesen\'
																																			id=\'terapi_konvalesen\'
																																			onkeydown=\'kp_chg_terapi_konvalesen(this,event);\' />
																																		<\
																																			/td>
																																			<\
																																				/tr>
																														<tr>
																															<td colspan=\'6\'
																																style=\'padding-top:2em;text-align:center;font-style:italic;color:#888;\'>
																																<input
																																	type=\'checkbox\'
																																	disabled=\'1\'
																																	checked=\'1\'
																																	value=\'1\' />&nbsp;Menyatakan
																																benar
																																bahwa
																																data
																																tarif
																																yang
																																tersebut
																																di
																																atas
																																adalah
																																benar
																																sesuai
																																dengan
																																kondisi
																																yang
																																sesungguhnya.
																																<\
																																	/td>
																																	<\
																																		/tr>
																																		<\
																																			/tbody>
																																			<\
																																				/table>
																																				<\
																																					/td>
																																					<\
																																						/tr>
																														<tr id=\'tr_upload_files\'
																															style=\'display:none;\'>
																															<td colspan=\'4\'
																																id=\'td_upload_files\'
																																style=\'text-align:left;padding:1em;border-top:2px
																																solid
																																#777;\'>
																																<div
																																	style=\'padding:1em;text-align:center;\'>
																																	Unggah
																																	Berkas
																																	Pendukung
																																	Klaim
																																	<\
																																		/div>
																																		<div class=\'dvupload
																																			dropzone
																																			div_click_pilih_resume_medis
																																			upload_grouper_covid\'
																																			id=\'upload_resume_medis\'>
																																			<table
																																				class=\'invisible\'
																																				style=\'width:100%;\'>
																																				<colgroup>
																																					<col
																																						width=\'25%\' />
																																					<col />
																																					<col
																																						width=\'25%\' />
																																					<\
																																						/colgroup>
																																				<tbody>
																																					<tr>
																																						<td
																																							style=\'text-align:left;\'>
																																							Resume
																																							Medis
																																							<\
																																								/td>
																																						<td
																																							style=\'text-align:left;\'>
																																							<div class=\'dv_silakan_drop\'
																																								style=\'text-align:center;\'>
																																								<div>
																																									Silakan
																																									seret
																																									dan
																																									jatuhkan
																																									berkas
																																									disini
																																									<\
																																										/div>
																																										<\
																																											/div>
																																											<\
																																												/td>
																																						<td
																																							style=\'text-align:right;\'>
																																							[
																																							<span
																																								class=\'ylnk
																																								sp_click_pilih_resume_medis\'>pilih
																																								berkas
																																								<\
																																									/span>
																																									]
																																									<\
																																										/td>
																																										<\
																																											/tr>
																																											<\
																																												/tbody>
																																												<\
																																													/table>
																																													<div
																																														id=\'preview_resume_medis\'>
																																														<\
																																															/div>
																																															<div class=\'doc_viewer\'
																																																id=\'viewer_resume_medis\'
																																																style=\'display:none;\'>
																																																<\
																																																	/div>
																																																	<\
																																																		/div>
																																																		<div class=\'dvupload
																																																			dropzone
																																																			div_click_pilih_ruang_rawat\'
																																																			id=\'upload_ruang_rawat\'>
																																																			<table
																																																				class=\'invisible\'
																																																				style=\'width:100%;\'>
																																																				<colgroup>
																																																					<col
																																																						width=\'30%\' />
																																																					<col />
																																																					<\
																																																						/colgroup>
																																																				<tbody>
																																																					<tr>
																																																						<td
																																																							style=\'text-align:left;\'>
																																																							Ruang
																																																							Perawatan
																																																							<\
																																																								/td>
																																																						<td
																																																							style=\'text-align:left;\'>
																																																							<div class=\'dv_silakan_drop\'
																																																								style=\'text-align:center;\'>
																																																								Silakan
																																																								seret
																																																								dan
																																																								jatuhkan
																																																								berkas
																																																								disini
																																																								<\
																																																									/div>
																																																									<\
																																																										/td>
																																																						<td
																																																							style=\'text-align:right;\'>
																																																							[
																																																							<span
																																																								class=\'ylnk
																																																								sp_click_pilih_ruang_rawat\'>pilih
																																																								berkas
																																																								<\
																																																									/span>
																																																									]
																																																									<\
																																																										/td>
																																																										<\
																																																											/tr>
																																																											<\
																																																												/tbody>
																																																												<\
																																																													/table>
																																																													<div
																																																														id=\'preview_ruang_rawat\'>
																																																														<\
																																																															/div>
																																																															<div class=\'doc_viewer\'
																																																																id=\'viewer_ruang_rawat\'
																																																																style=\'display:none;\'>
																																																																<\
																																																																	/div>
																																																																	<\
																																																																		/div>
																																																																		<div class=\'dvupload
																																																																			dropzone
																																																																			div_click_pilih_laboratorium\'
																																																																			id=\'upload_laboratorium\'>
																																																																			<table
																																																																				class=\'invisible\'
																																																																				style=\'width:100%;\'>
																																																																				<colgroup>
																																																																					<col
																																																																						width=\'30%\' />
																																																																					<col />
																																																																					<\
																																																																						/colgroup>
																																																																				<tbody>
																																																																					<tr>
																																																																						<td
																																																																							style=\'text-align:left;\'>
																																																																							Hasil
																																																																							Laboratorium
																																																																							<\
																																																																								/td>
																																																																						<td
																																																																							style=\'text-align:left;\'>
																																																																							<div class=\'dv_silakan_drop\'
																																																																								style=\'text-align:center;\'>
																																																																								Silakan
																																																																								seret
																																																																								dan
																																																																								jatuhkan
																																																																								berkas
																																																																								disini
																																																																								<\
																																																																									/div>
																																																																									<\
																																																																										/td>
																																																																						<td
																																																																							style=\'text-align:right;\'>
																																																																							[
																																																																							<span
																																																																								class=\'ylnk
																																																																								sp_click_pilih_laboratorium\'>pilih
																																																																								berkas
																																																																								<\
																																																																									/span>
																																																																									]
																																																																									<\
																																																																										/td>
																																																																										<\
																																																																											/tr>
																																																																											<\
																																																																												/tbody>
																																																																												<\
																																																																													/table>
																																																																													<div
																																																																														id=\'preview_laboratorium\'>
																																																																														<\
																																																																															/div>
																																																																															<div class=\'doc_viewer\'
																																																																																id=\'viewer_laboratorium\'
																																																																																style=\'display:none;\'>
																																																																																<\
																																																																																	/div>
																																																																																	<\
																																																																																		/div>
																																																																																		<div class=\'dvupload
																																																																																			dropzone
																																																																																			div_click_pilih_radiologi\'
																																																																																			id=\'upload_radiologi\'>
																																																																																			<table
																																																																																				class=\'invisible\'
																																																																																				style=\'width:100%;\'>
																																																																																				<colgroup>
																																																																																					<col
																																																																																						width=\'30%\' />
																																																																																					<col />
																																																																																					<\
																																																																																						/colgroup>
																																																																																				<tbody>
																																																																																					<tr>
																																																																																						<td
																																																																																							style=\'text-align:left;\'>
																																																																																							Hasil
																																																																																							Radiologi
																																																																																							<\
																																																																																								/td>
																																																																																						<td
																																																																																							style=\'text-align:left;\'>
																																																																																							<div class=\'dv_silakan_drop\'
																																																																																								style=\'text-align:center;\'>
																																																																																								Silakan
																																																																																								seret
																																																																																								dan
																																																																																								jatuhkan
																																																																																								berkas
																																																																																								disini
																																																																																								<\
																																																																																									/div>
																																																																																									<\
																																																																																										/td>
																																																																																						<td
																																																																																							style=\'text-align:right;\'>
																																																																																							[
																																																																																							<span
																																																																																								class=\'ylnk
																																																																																								sp_click_pilih_radiologi\'>pilih
																																																																																								berkas
																																																																																								<\
																																																																																									/span>
																																																																																									]
																																																																																									<\
																																																																																										/td>
																																																																																										<\
																																																																																											/tr>
																																																																																											<\
																																																																																												/tbody>
																																																																																												<\
																																																																																													/table>
																																																																																													<div
																																																																																														id=\'preview_radiologi\'>
																																																																																														<\
																																																																																															/div>
																																																																																															<div class=\'doc_viewer\'
																																																																																																id=\'viewer_radiologi\'
																																																																																																style=\'display:none;\'>
																																																																																																<\
																																																																																																	/div>
																																																																																																	<\
																																																																																																		/div>
																																																																																																		<div class=\'dvupload
																																																																																																			dropzone
																																																																																																			div_click_pilih_penunjang_lain\'
																																																																																																			id=\'upload_penunjang_lain\'>
																																																																																																			<table
																																																																																																				class=\'invisible\'
																																																																																																				style=\'width:100%;\'>
																																																																																																				<colgroup>
																																																																																																					<col
																																																																																																						width=\'30%\' />
																																																																																																					<col />
																																																																																																					<\
																																																																																																						/colgroup>
																																																																																																				<tbody>
																																																																																																					<tr>
																																																																																																						<td
																																																																																																							style=\'text-align:left;\'>
																																																																																																							Hasil
																																																																																																							Penunjang
																																																																																																							Lainnya
																																																																																																							<\
																																																																																																								/td>
																																																																																																						<td
																																																																																																							style=\'text-align:left;\'>
																																																																																																							<div class=\'dv_silakan_drop\'
																																																																																																								style=\'text-align:center;\'>
																																																																																																								Silakan
																																																																																																								seret
																																																																																																								dan
																																																																																																								jatuhkan
																																																																																																								berkas
																																																																																																								disini
																																																																																																								<\
																																																																																																									/div>
																																																																																																									<\
																																																																																																										/td>
																																																																																																						<td
																																																																																																							style=\'text-align:right;\'>
																																																																																																							[
																																																																																																							<span
																																																																																																								class=\'ylnk
																																																																																																								sp_click_pilih_penunjang_lain\'>pilih
																																																																																																								berkas
																																																																																																								<\
																																																																																																									/span>
																																																																																																									]
																																																																																																									<\
																																																																																																										/td>
																																																																																																										<\
																																																																																																											/tr>
																																																																																																											<\
																																																																																																												/tbody>
																																																																																																												<\
																																																																																																													/table>
																																																																																																													<div
																																																																																																														id=\'preview_penunjang_lain\'>
																																																																																																														<\
																																																																																																															/div>
																																																																																																															<div class=\'doc_viewer\'
																																																																																																																id=\'viewer_penunjang_lain\'
																																																																																																																style=\'display:none;\'>
																																																																																																																<\
																																																																																																																	/div>
																																																																																																																	<\
																																																																																																																		/div>
																																																																																																																		<div class=\'dvupload
																																																																																																																			dropzone
																																																																																																																			div_click_pilih_resep_obat\'
																																																																																																																			id=\'upload_resep_obat\'>
																																																																																																																			<table
																																																																																																																				class=\'invisible\'
																																																																																																																				style=\'width:100%;\'>
																																																																																																																				<colgroup>
																																																																																																																					<col
																																																																																																																						width=\'30%\' />
																																																																																																																					<col />
																																																																																																																					<\
																																																																																																																						/colgroup>
																																																																																																																				<tbody>
																																																																																																																					<tr>
																																																																																																																						<td
																																																																																																																							style=\'text-align:left;\'>
																																																																																																																							Resep
																																																																																																																							Obat
																																																																																																																							/
																																																																																																																							Alkes
																																																																																																																							<\
																																																																																																																								/td>
																																																																																																																						<td
																																																																																																																							style=\'text-align:left;\'>
																																																																																																																							<div class=\'dv_silakan_drop\'
																																																																																																																								style=\'text-align:center;\'>
																																																																																																																								Silakan
																																																																																																																								seret
																																																																																																																								dan
																																																																																																																								jatuhkan
																																																																																																																								berkas
																																																																																																																								disini
																																																																																																																								<\
																																																																																																																									/div>
																																																																																																																									<\
																																																																																																																										/td>
																																																																																																																						<td
																																																																																																																							style=\'text-align:right;\'>
																																																																																																																							[
																																																																																																																							<span
																																																																																																																								class=\'ylnk
																																																																																																																								sp_click_pilih_resep_obat\'>pilih
																																																																																																																								berkas
																																																																																																																								<\
																																																																																																																									/span>
																																																																																																																									]
																																																																																																																									<\
																																																																																																																										/td>
																																																																																																																										<\
																																																																																																																											/tr>
																																																																																																																											<\
																																																																																																																												/tbody>
																																																																																																																												<\
																																																																																																																													/table>
																																																																																																																													<div
																																																																																																																														id=\'preview_resep_obat\'>
																																																																																																																														<\
																																																																																																																															/div>
																																																																																																																															<div class=\'doc_viewer\'
																																																																																																																																id=\'viewer_resep_obat\'
																																																																																																																																style=\'display:none;\'>
																																																																																																																																<\
																																																																																																																																	/div>
																																																																																																																																	<\
																																																																																																																																		/div>
																																																																																																																																		<div class=\'dvupload
																																																																																																																																			dropzone
																																																																																																																																			div_click_pilih_tagihan\'
																																																																																																																																			id=\'upload_tagihan\'>
																																																																																																																																			<table
																																																																																																																																				class=\'invisible\'
																																																																																																																																				style=\'width:100%;\'>
																																																																																																																																				<colgroup>
																																																																																																																																					<col
																																																																																																																																						width=\'30%\' />
																																																																																																																																					<col />
																																																																																																																																					<\
																																																																																																																																						/colgroup>
																																																																																																																																				<tbody>
																																																																																																																																					<tr>
																																																																																																																																						<td
																																																																																																																																							style=\'text-align:left;\'>
																																																																																																																																							Tagihan
																																																																																																																																							(<span
																																																																																																																																								style=\'font-style:italic;\'>Billing
																																																																																																																																								<\
																																																																																																																																									/span>
																																																																																																																																									)
																																																																																																																																									<\
																																																																																																																																										/td>
																																																																																																																																						<td
																																																																																																																																							style=\'text-align:left;\'>
																																																																																																																																							<div class=\'dv_silakan_drop\'
																																																																																																																																								style=\'text-align:center;\'>
																																																																																																																																								Silakan
																																																																																																																																								seret
																																																																																																																																								dan
																																																																																																																																								jatuhkan
																																																																																																																																								berkas
																																																																																																																																								disini
																																																																																																																																								<\
																																																																																																																																									/div>
																																																																																																																																									<\
																																																																																																																																										/td>
																																																																																																																																						<td
																																																																																																																																							style=\'text-align:right;\'>
																																																																																																																																							[
																																																																																																																																							<span
																																																																																																																																								class=\'ylnk
																																																																																																																																								sp_click_pilih_tagihan\'>pilih
																																																																																																																																								berkas
																																																																																																																																								<\
																																																																																																																																									/span>
																																																																																																																																									]
																																																																																																																																									<\
																																																																																																																																										/td>
																																																																																																																																										<\
																																																																																																																																											/tr>
																																																																																																																																											<\
																																																																																																																																												/tbody>
																																																																																																																																												<\
																																																																																																																																													/table>
																																																																																																																																													<div
																																																																																																																																														id=\'preview_tagihan\'>
																																																																																																																																														<\
																																																																																																																																															/div>
																																																																																																																																															<div class=\'doc_viewer\'
																																																																																																																																																id=\'viewer_tagihan\'
																																																																																																																																																style=\'display:none;\'>
																																																																																																																																																<\
																																																																																																																																																	/div>
																																																																																																																																																	<\
																																																																																																																																																		/div>
																																																																																																																																																		<div class=\'dvupload
																																																																																																																																																			dropzone
																																																																																																																																																			div_click_pilih_kartu_identitas
																																																																																																																																																			upload_grouper_covid\'
																																																																																																																																																			id=\'upload_kartu_identitas\'>
																																																																																																																																																			<table
																																																																																																																																																				class=\'invisible\'
																																																																																																																																																				style=\'width:100%;\'>
																																																																																																																																																				<colgroup>
																																																																																																																																																					<col
																																																																																																																																																						width=\'30%\' />
																																																																																																																																																					<col />
																																																																																																																																																					<\
																																																																																																																																																						/colgroup>
																																																																																																																																																				<tbody>
																																																																																																																																																					<tr>
																																																																																																																																																						<td
																																																																																																																																																							style=\'text-align:left;\'>
																																																																																																																																																							Kartu
																																																																																																																																																							Identitas
																																																																																																																																																							<\
																																																																																																																																																								/td>
																																																																																																																																																						<td
																																																																																																																																																							style=\'text-align:left;\'>
																																																																																																																																																							<div class=\'dv_silakan_drop\'
																																																																																																																																																								style=\'text-align:center;\'>
																																																																																																																																																								Silakan
																																																																																																																																																								seret
																																																																																																																																																								dan
																																																																																																																																																								jatuhkan
																																																																																																																																																								berkas
																																																																																																																																																								disini
																																																																																																																																																								<\
																																																																																																																																																									/div>
																																																																																																																																																									<\
																																																																																																																																																										/td>
																																																																																																																																																						<td
																																																																																																																																																							style=\'text-align:right;\'>
																																																																																																																																																							[
																																																																																																																																																							<span
																																																																																																																																																								class=\'ylnk
																																																																																																																																																								sp_click_pilih_kartu_identitas\'>pilih
																																																																																																																																																								berkas
																																																																																																																																																								<\
																																																																																																																																																									/span>
																																																																																																																																																									]
																																																																																																																																																									<\
																																																																																																																																																										/td>
																																																																																																																																																										<\
																																																																																																																																																											/tr>
																																																																																																																																																											<\
																																																																																																																																																												/tbody>
																																																																																																																																																												<\
																																																																																																																																																													/table>
																																																																																																																																																													<div
																																																																																																																																																														id=\'preview_kartu_identitas\'>
																																																																																																																																																														<\
																																																																																																																																																															/div>
																																																																																																																																																															<div class=\'doc_viewer\'
																																																																																																																																																																id=\'viewer_kartu_identitas\'
																																																																																																																																																																style=\'display:none;\'>
																																																																																																																																																																<\
																																																																																																																																																																	/div>
																																																																																																																																																																	<\
																																																																																																																																																																		/div>
																																																																																																																																																																		<div class=\'dvupload
																																																																																																																																																																			dropzone
																																																																																																																																																																			div_click_pilih_dokumen_kipi\'
																																																																																																																																																																			id=\'upload_dokumen_kipi\'
																																																																																																																																																																			style=\'display:none;\'>
																																																																																																																																																																			<table
																																																																																																																																																																				class=\'invisible\'
																																																																																																																																																																				style=\'width:100%;\'>
																																																																																																																																																																				<colgroup>
																																																																																																																																																																					<col
																																																																																																																																																																						width=\'30%\' />
																																																																																																																																																																					<col />
																																																																																																																																																																					<\
																																																																																																																																																																						/colgroup>
																																																																																																																																																																				<tbody>
																																																																																																																																																																					<tr>
																																																																																																																																																																						<td
																																																																																																																																																																							style=\'text-align:left;\'>
																																																																																																																																																																							Dokumen
																																																																																																																																																																							KIPI
																																																																																																																																																																							<\
																																																																																																																																																																								/td>
																																																																																																																																																																						<td
																																																																																																																																																																							style=\'text-align:left;\'>
																																																																																																																																																																							<div class=\'dv_silakan_drop\'
																																																																																																																																																																								style=\'text-align:center;\'>
																																																																																																																																																																								Silakan
																																																																																																																																																																								seret
																																																																																																																																																																								dan
																																																																																																																																																																								jatuhkan
																																																																																																																																																																								berkas
																																																																																																																																																																								disini
																																																																																																																																																																								<\
																																																																																																																																																																									/div>
																																																																																																																																																																									<\
																																																																																																																																																																										/td>
																																																																																																																																																																						<td
																																																																																																																																																																							style=\'text-align:right;\'>
																																																																																																																																																																							[
																																																																																																																																																																							<span
																																																																																																																																																																								class=\'ylnk
																																																																																																																																																																								sp_click_pilih_dokumen_kipi\'>pilih
																																																																																																																																																																								berkas
																																																																																																																																																																								<\
																																																																																																																																																																									/span>
																																																																																																																																																																									]
																																																																																																																																																																									<\
																																																																																																																																																																										/td>
																																																																																																																																																																										<\
																																																																																																																																																																											/tr>
																																																																																																																																																																											<\
																																																																																																																																																																												/tbody>
																																																																																																																																																																												<\
																																																																																																																																																																													/table>
																																																																																																																																																																													<div
																																																																																																																																																																														id=\'preview_dokumen_kipi\'>
																																																																																																																																																																														<\
																																																																																																																																																																															/div>
																																																																																																																																																																															<div class=\'doc_viewer\'
																																																																																																																																																																																id=\'viewer_dokumen_kipi\'
																																																																																																																																																																																style=\'display:none;\'>
																																																																																																																																																																																<\
																																																																																																																																																																																	/div>
																																																																																																																																																																																	<\
																																																																																																																																																																																		/div>
																																																																																																																																																																																		<div class=\'dvupload
																																																																																																																																																																																			dropzone
																																																																																																																																																																																			div_click_pilih_bebas_biaya
																																																																																																																																																																																			upload_grouper_covid\'
																																																																																																																																																																																			id=\'upload_bebas_biaya\'>
																																																																																																																																																																																			<table
																																																																																																																																																																																				class=\'invisible\'
																																																																																																																																																																																				style=\'width:100%;\'>
																																																																																																																																																																																				<colgroup>
																																																																																																																																																																																					<col
																																																																																																																																																																																						width=\'30%\' />
																																																																																																																																																																																					<col />
																																																																																																																																																																																					<\
																																																																																																																																																																																						/colgroup>
																																																																																																																																																																																				<tbody>
																																																																																																																																																																																					<tr>
																																																																																																																																																																																						<td
																																																																																																																																																																																							style=\'text-align:left;\'>
																																																																																																																																																																																							Surat
																																																																																																																																																																																							Bebas
																																																																																																																																																																																							Biaya
																																																																																																																																																																																							<\
																																																																																																																																																																																								/td>
																																																																																																																																																																																						<td
																																																																																																																																																																																							style=\'text-align:left;\'>
																																																																																																																																																																																							<div class=\'dv_silakan_drop\'
																																																																																																																																																																																								style=\'text-align:center;\'>
																																																																																																																																																																																								Silakan
																																																																																																																																																																																								seret
																																																																																																																																																																																								dan
																																																																																																																																																																																								jatuhkan
																																																																																																																																																																																								berkas
																																																																																																																																																																																								disini
																																																																																																																																																																																								<\
																																																																																																																																																																																									/div>
																																																																																																																																																																																									<\
																																																																																																																																																																																										/td>
																																																																																																																																																																																						<td
																																																																																																																																																																																							style=\'text-align:right;\'>
																																																																																																																																																																																							[
																																																																																																																																																																																							<span
																																																																																																																																																																																								class=\'ylnk
																																																																																																																																																																																								sp_click_pilih_bebas_biaya\'>pilih
																																																																																																																																																																																								berkas
																																																																																																																																																																																								<\
																																																																																																																																																																																									/span>
																																																																																																																																																																																									]
																																																																																																																																																																																									<\
																																																																																																																																																																																										/td>
																																																																																																																																																																																										<\
																																																																																																																																																																																											/tr>
																																																																																																																																																																																											<\
																																																																																																																																																																																												/tbody>
																																																																																																																																																																																												<\
																																																																																																																																																																																													/table>
																																																																																																																																																																																													<div
																																																																																																																																																																																														id=\'preview_bebas_biaya\'>
																																																																																																																																																																																														<\
																																																																																																																																																																																															/div>
																																																																																																																																																																																															<div class=\'doc_viewer\'
																																																																																																																																																																																																id=\'viewer_bebas_biaya\'
																																																																																																																																																																																																style=\'display:none;\'>
																																																																																																																																																																																																<\
																																																																																																																																																																																																	/div>
																																																																																																																																																																																																	<\
																																																																																																																																																																																																		/div>
																																																																																																																																																																																																		<div class=\'dvupload
																																																																																																																																																																																																			dropzone
																																																																																																																																																																																																			div_click_pilih_surat_kematian
																																																																																																																																																																																																			upload_grouper_covid\'
																																																																																																																																																																																																			id=\'upload_surat_kematian\'>
																																																																																																																																																																																																			<table
																																																																																																																																																																																																				class=\'invisible\'
																																																																																																																																																																																																				style=\'width:100%;\'>
																																																																																																																																																																																																				<colgroup>
																																																																																																																																																																																																					<col
																																																																																																																																																																																																						width=\'30%\' />
																																																																																																																																																																																																					<col />
																																																																																																																																																																																																					<\
																																																																																																																																																																																																						/colgroup>
																																																																																																																																																																																																				<tbody>
																																																																																																																																																																																																					<tr>
																																																																																																																																																																																																						<td
																																																																																																																																																																																																							style=\'text-align:left;\'>
																																																																																																																																																																																																							Surat
																																																																																																																																																																																																							Kematian
																																																																																																																																																																																																							<\
																																																																																																																																																																																																								/td>
																																																																																																																																																																																																						<td
																																																																																																																																																																																																							style=\'text-align:left;\'>
																																																																																																																																																																																																							<div class=\'dv_silakan_drop\'
																																																																																																																																																																																																								style=\'text-align:center;\'>
																																																																																																																																																																																																								Silakan
																																																																																																																																																																																																								seret
																																																																																																																																																																																																								dan
																																																																																																																																																																																																								jatuhkan
																																																																																																																																																																																																								berkas
																																																																																																																																																																																																								disini
																																																																																																																																																																																																								<\
																																																																																																																																																																																																									/div>
																																																																																																																																																																																																									<\
																																																																																																																																																																																																										/td>
																																																																																																																																																																																																						<td
																																																																																																																																																																																																							style=\'text-align:right;\'>
																																																																																																																																																																																																							[
																																																																																																																																																																																																							<span
																																																																																																																																																																																																								class=\'ylnk
																																																																																																																																																																																																								sp_click_pilih_surat_kematian\'>pilih
																																																																																																																																																																																																								berkas
																																																																																																																																																																																																								<\
																																																																																																																																																																																																									/span>
																																																																																																																																																																																																									]
																																																																																																																																																																																																									<\
																																																																																																																																																																																																										/td>
																																																																																																																																																																																																										<\
																																																																																																																																																																																																											/tr>
																																																																																																																																																																																																											<\
																																																																																																																																																																																																												/tbody>
																																																																																																																																																																																																												<\
																																																																																																																																																																																																													/table>
																																																																																																																																																																																																													<div
																																																																																																																																																																																																														id=\'preview_surat_kematian\'>
																																																																																																																																																																																																														<\
																																																																																																																																																																																																															/div>
																																																																																																																																																																																																															<div class=\'doc_viewer\'
																																																																																																																																																																																																																id=\'viewer_surat_kematian\'
																																																																																																																																																																																																																style=\'display:none;\'>
																																																																																																																																																																																																																<\
																																																																																																																																																																																																																	/div>
																																																																																																																																																																																																																	<\
																																																																																																																																																																																																																		/div>
																																																																																																																																																																																																																		<div class=\'dvupload
																																																																																																																																																																																																																			dropzone
																																																																																																																																																																																																																			div_click_pilih_lain_lain\'
																																																																																																																																																																																																																			id=\'upload_lain_lain\'>
																																																																																																																																																																																																																			<table
																																																																																																																																																																																																																				class=\'invisible\'
																																																																																																																																																																																																																				style=\'width:100%;\'>
																																																																																																																																																																																																																				<colgroup>
																																																																																																																																																																																																																					<col
																																																																																																																																																																																																																						width=\'30%\' />
																																																																																																																																																																																																																					<col />
																																																																																																																																																																																																																					<\
																																																																																																																																																																																																																						/colgroup>
																																																																																																																																																																																																																				<tbody>
																																																																																																																																																																																																																					<tr>
																																																																																																																																																																																																																						<td
																																																																																																																																																																																																																							style=\'text-align:left;\'>
																																																																																																																																																																																																																							Lain-lain
																																																																																																																																																																																																																							<\
																																																																																																																																																																																																																								/td>
																																																																																																																																																																																																																						<td
																																																																																																																																																																																																																							style=\'text-align:left;\'>
																																																																																																																																																																																																																							<div class=\'dv_silakan_drop\'
																																																																																																																																																																																																																								style=\'text-align:center;\'>
																																																																																																																																																																																																																								Silakan
																																																																																																																																																																																																																								seret
																																																																																																																																																																																																																								dan
																																																																																																																																																																																																																								jatuhkan
																																																																																																																																																																																																																								berkas
																																																																																																																																																																																																																								disini
																																																																																																																																																																																																																								<\
																																																																																																																																																																																																																									/div>
																																																																																																																																																																																																																									<\
																																																																																																																																																																																																																										/td>
																																																																																																																																																																																																																						<td
																																																																																																																																																																																																																							style=\'text-align:right;\'>
																																																																																																																																																																																																																							[
																																																																																																																																																																																																																							<span
																																																																																																																																																																																																																								class=\'ylnk
																																																																																																																																																																																																																								sp_click_pilih_lain_lain\'>pilih
																																																																																																																																																																																																																								berkas
																																																																																																																																																																																																																								<\
																																																																																																																																																																																																																									/span>
																																																																																																																																																																																																																									]
																																																																																																																																																																																																																									<\
																																																																																																																																																																																																																										/td>
																																																																																																																																																																																																																										<\
																																																																																																																																																																																																																											/tr>
																																																																																																																																																																																																																											<\
																																																																																																																																																																																																																												/tbody>
																																																																																																																																																																																																																												<\
																																																																																																																																																																																																																													/table>
																																																																																																																																																																																																																													<div
																																																																																																																																																																																																																														id=\'preview_lain_lain\'>
																																																																																																																																																																																																																														<\
																																																																																																																																																																																																																															/div>
																																																																																																																																																																																																																															<div class=\'doc_viewer\'
																																																																																																																																																																																																																																id=\'viewer_lain_lain\'
																																																																																																																																																																																																																																style=\'display:none;\'>
																																																																																																																																																																																																																																<\
																																																																																																																																																																																																																																	/div>
																																																																																																																																																																																																																																	<\
																																																																																																																																																																																																																																		/div>
																																																																																																																																																																																																																																		<div class=\'dvupload
																																																																																																																																																																																																																																			dropzone
																																																																																																																																																																																																																																			div_click_pilih_bukti_layanan\'
																																																																																																																																																																																																																																			id=\'upload_bukti_layanan\'>
																																																																																																																																																																																																																																			<table
																																																																																																																																																																																																																																				class=\'invisible\'
																																																																																																																																																																																																																																				style=\'width:100%;\'>
																																																																																																																																																																																																																																				<colgroup>
																																																																																																																																																																																																																																					<col
																																																																																																																																																																																																																																						width=\'25%\' />
																																																																																																																																																																																																																																					<col />
																																																																																																																																																																																																																																					<col
																																																																																																																																																																																																																																						width=\'25%\' />
																																																																																																																																																																																																																																					<\
																																																																																																																																																																																																																																						/colgroup>
																																																																																																																																																																																																																																				<tbody>
																																																																																																																																																																																																																																					<tr>
																																																																																																																																																																																																																																						<td
																																																																																																																																																																																																																																							style=\'text-align:left;\'>
																																																																																																																																																																																																																																							Bukti
																																																																																																																																																																																																																																							Penerimaan
																																																																																																																																																																																																																																							Layanan
																																																																																																																																																																																																																																							<\
																																																																																																																																																																																																																																								/td>
																																																																																																																																																																																																																																						<td
																																																																																																																																																																																																																																							style=\'text-align:left;\'>
																																																																																																																																																																																																																																							<div class=\'dv_silakan_drop\'
																																																																																																																																																																																																																																								style=\'text-align:center;\'>
																																																																																																																																																																																																																																								<div>
																																																																																																																																																																																																																																									Silakan
																																																																																																																																																																																																																																									seret
																																																																																																																																																																																																																																									dan
																																																																																																																																																																																																																																									jatuhkan
																																																																																																																																																																																																																																									berkas
																																																																																																																																																																																																																																									disini
																																																																																																																																																																																																																																									<\
																																																																																																																																																																																																																																										/div>
																																																																																																																																																																																																																																										<\
																																																																																																																																																																																																																																											/div>
																																																																																																																																																																																																																																											<\
																																																																																																																																																																																																																																												/td>
																																																																																																																																																																																																																																						<td
																																																																																																																																																																																																																																							style=\'text-align:right;\'>
																																																																																																																																																																																																																																							[
																																																																																																																																																																																																																																							<span
																																																																																																																																																																																																																																								class=\'ylnk
																																																																																																																																																																																																																																								sp_click_pilih_bukti_layanan\'>pilih
																																																																																																																																																																																																																																								berkas
																																																																																																																																																																																																																																								<\
																																																																																																																																																																																																																																									/span>
																																																																																																																																																																																																																																									]
																																																																																																																																																																																																																																									<\
																																																																																																																																																																																																																																										/td>
																																																																																																																																																																																																																																										<\
																																																																																																																																																																																																																																											/tr>
																																																																																																																																																																																																																																											<\
																																																																																																																																																																																																																																												/tbody>
																																																																																																																																																																																																																																												<\
																																																																																																																																																																																																																																													/table>
																																																																																																																																																																																																																																													<div
																																																																																																																																																																																																																																														id=\'preview_bukti_layanan\'>
																																																																																																																																																																																																																																														<\
																																																																																																																																																																																																																																															/div>
																																																																																																																																																																																																																																															<div class=\'doc_viewer\'
																																																																																																																																																																																																																																																id=\'viewer_bukti_layanan\'
																																																																																																																																																																																																																																																style=\'display:none;\'>
																																																																																																																																																																																																																																																<\
																																																																																																																																																																																																																																																	/div>
																																																																																																																																																																																																																																																	<\
																																																																																																																																																																																																																																																		/div>
																																																																																																																																																																																																																																																		<div class=\'dvupload
																																																																																																																																																																																																																																																			dropzone
																																																																																																																																																																																																																																																			div_click_pilih_laporan_operasi\'
																																																																																																																																																																																																																																																			id=\'upload_laporan_operasi\'>
																																																																																																																																																																																																																																																			<table
																																																																																																																																																																																																																																																				class=\'invisible\'
																																																																																																																																																																																																																																																				style=\'width:100%;\'>
																																																																																																																																																																																																																																																				<colgroup>
																																																																																																																																																																																																																																																					<col
																																																																																																																																																																																																																																																						width=\'25%\' />
																																																																																																																																																																																																																																																					<col />
																																																																																																																																																																																																																																																					<col
																																																																																																																																																																																																																																																						width=\'25%\' />
																																																																																																																																																																																																																																																					<\
																																																																																																																																																																																																																																																						/colgroup>
																																																																																																																																																																																																																																																				<tbody>
																																																																																																																																																																																																																																																					<tr>
																																																																																																																																																																																																																																																						<td
																																																																																																																																																																																																																																																							style=\'text-align:left;\'>
																																																																																																																																																																																																																																																							Laporan
																																																																																																																																																																																																																																																							Operasi
																																																																																																																																																																																																																																																							<\
																																																																																																																																																																																																																																																								/td>
																																																																																																																																																																																																																																																						<td
																																																																																																																																																																																																																																																							style=\'text-align:left;\'>
																																																																																																																																																																																																																																																							<div class=\'dv_silakan_drop\'
																																																																																																																																																																																																																																																								style=\'text-align:center;\'>
																																																																																																																																																																																																																																																								<div>
																																																																																																																																																																																																																																																									Silakan
																																																																																																																																																																																																																																																									seret
																																																																																																																																																																																																																																																									dan
																																																																																																																																																																																																																																																									jatuhkan
																																																																																																																																																																																																																																																									berkas
																																																																																																																																																																																																																																																									disini
																																																																																																																																																																																																																																																									<\
																																																																																																																																																																																																																																																										/div>
																																																																																																																																																																																																																																																										<\
																																																																																																																																																																																																																																																											/div>
																																																																																																																																																																																																																																																											<\
																																																																																																																																																																																																																																																												/td>
																																																																																																																																																																																																																																																						<td
																																																																																																																																																																																																																																																							style=\'text-align:right;\'>
																																																																																																																																																																																																																																																							[
																																																																																																																																																																																																																																																							<span
																																																																																																																																																																																																																																																								class=\'ylnk
																																																																																																																																																																																																																																																								sp_click_pilih_laporan_operasi\'>pilih
																																																																																																																																																																																																																																																								berkas
																																																																																																																																																																																																																																																								<\
																																																																																																																																																																																																																																																									/span>
																																																																																																																																																																																																																																																									]
																																																																																																																																																																																																																																																									<\
																																																																																																																																																																																																																																																										/td>
																																																																																																																																																																																																																																																										<\
																																																																																																																																																																																																																																																											/tr>
																																																																																																																																																																																																																																																											<\
																																																																																																																																																																																																																																																												/tbody>
																																																																																																																																																																																																																																																												<\
																																																																																																																																																																																																																																																													/table>
																																																																																																																																																																																																																																																													<div
																																																																																																																																																																																																																																																														id=\'preview_laporan_operasi\'>
																																																																																																																																																																																																																																																														<\
																																																																																																																																																																																																																																																															/div>
																																																																																																																																																																																																																																																															<div class=\'doc_viewer\'
																																																																																																																																																																																																																																																																id=\'viewer_laporan_operasi\'
																																																																																																																																																																																																																																																																style=\'display:none;\'>
																																																																																																																																																																																																																																																																<\
																																																																																																																																																																																																																																																																	/div>
																																																																																																																																																																																																																																																																	<\
																																																																																																																																																																																																																																																																		/div>
																																																																																																																																																																																																																																																																		<div style=\'text-align:right;border-top:1px
																																																																																																																																																																																																																																																																			solid
																																																																																																																																																																																																																																																																			#bbb;padding:1em;background-color:#dddddd;clear:both;\'>
																																																																																																																																																																																																																																																																			<span
																																																																																																																																																																																																																																																																				id=\'sp_progress_reupload\'>
																																																																																																																																																																																																																																																																				<\
																																																																																																																																																																																																																																																																					/span>
																																																																																																																																																																																																																																																																					&nbsp;&nbsp;<input
																																																																																																																																																																																																																																																																						type=\'button\'
																																																																																																																																																																																																																																																																						onclick=\'reupload_all(this,event);\'
																																																																																																																																																																																																																																																																						value=\'Sinkronisasi
																																																																																																																																																																																																																																																																						Semua
																																																																																																																																																																																																																																																																						Berkas\' />
																																																																																																																																																																																																																																																																					<\
																																																																																																																																																																																																																																																																						/div>
																																																																																																																																																																																																																																																																						<\
																																																																																																																																																																																																																																																																							/td>
																																																																																																																																																																																																																																																																							<\
																																																																																																																																																																																																																																																																								/tr>
																																																																																																																																																																																																																																																					<tr>
																																																																																																																																																																																																																																																						<td colspan=\'4\'
																																																																																																																																																																																																																																																							style=\'text-align:left;padding:1em;border-top:2px
																																																																																																																																																																																																																																																							solid
																																																																																																																																																																																																																																																							#777;\'>
																																																																																																																																																																																																																																																							<ul class=\'ultab\'
																																																																																																																																																																																																																																																								style=\'margin-left:2em;\'>
																																																																																																																																																																																																																																																								<li id=\'litab_0\'
																																																																																																																																																																																																																																																									class=\'ultabsel_greyrev\'
																																																																																																																																																																																																																																																									onclick=\'pnltab(\"0\",this,event);\'>
																																																																																																																																																																																																																																																									<span
																																																																																																																																																																																																																																																										class=\'xlnk\'>Coding
																																																																																																																																																																																																																																																										UNU
																																																																																																																																																																																																																																																										Grouper
																																																																																																																																																																																																																																																										<\
																																																																																																																																																																																																																																																											/span>
																																																																																																																																																																																																																																																											<\
																																																																																																																																																																																																																																																												/li>
																																																																																																																																																																																																																																																								<li id=\'litab_1\'
																																																																																																																																																																																																																																																									class=\'\'
																																																																																																																																																																																																																																																									onclick=\'pnltab(\"1\",this,event);\'>
																																																																																																																																																																																																																																																									<span
																																																																																																																																																																																																																																																										class=\'xlnk\'>Coding
																																																																																																																																																																																																																																																										INA
																																																																																																																																																																																																																																																										Grouper
																																																																																																																																																																																																																																																										<\
																																																																																																																																																																																																																																																											/span>
																																																																																																																																																																																																																																																											<\
																																																																																																																																																																																																																																																												/li>
																																																																																																																																																																																																																																																												<\
																																																																																																																																																																																																																																																													/ul>
																																																																																																																																																																																																																																																													<div style=\'min-height:100px;margin-bottom:10px;border:1px
																																																																																																																																																																																																																																																														solid
																																																																																																																																																																																																																																																														#999999;clear:both;padding:4px;\'>
																																																																																																																																																																																																																																																														<div id=\'dvtab_0\'
																																																																																																																																																																																																																																																															style=\'padding:1em;\'>
																																																																																																																																																																																																																																																															<div>
																																																																																																																																																																																																																																																																<div class=\'panel_item_container
																																																																																																																																																																																																																																																																	diag_v5\'>
																																																																																																																																																																																																																																																																	<table
																																																																																																																																																																																																																																																																		class=\'invisible\'
																																																																																																																																																																																																																																																																		style=\'width:100%;\'>
																																																																																																																																																																																																																																																																		<tbody>
																																																																																																																																																																																																																																																																			<tr>
																																																																																																																																																																																																																																																																				<td>Diagnosa
																																																																																																																																																																																																																																																																					(<span
																																																																																																																																																																																																																																																																						style=\'color:#888;font-size:0.9em;\'>ICD-10
																																																																																																																																																																																																																																																																						<\
																																																																																																																																																																																																																																																																							/span>
																																																																																																																																																																																																																																																																							):
																																																																																																																																																																																																																																																																							<\
																																																																																																																																																																																																																																																																								/td>
																																																																																																																																																																																																																																																																				<td
																																																																																																																																																																																																																																																																					style=\'text-align:right;\'>
																																																																																																																																																																																																																																																																					<input
																																																																																																																																																																																																																																																																						type=\'text\'
																																																																																																																																																																																																																																																																						placeholder=\'Cari
																																																																																																																																																																																																																																																																						Diagnosa\'
																																																																																																																																																																																																																																																																						class=\'searchBox\'
																																																																																																																																																																																																																																																																						style=\'width:150px;\'
																																																																																																																																																																																																																																																																						id=\'qicd10searchbox_1011_3\'
																																																																																																																																																																																																																																																																						onkeypress=\'qicd10press(\"\",\"1011\",\"3\",this,event)\' />
																																																																																																																																																																																																																																																																					<\
																																																																																																																																																																																																																																																																						/td>
																																																																																																																																																																																																																																																																						<\
																																																																																																																																																																																																																																																																							/tr>
																																																																																																																																																																																																																																																																							<\
																																																																																																																																																																																																																																																																								/tbody>
																																																																																																																																																																																																																																																																								<\
																																																																																																																																																																																																																																																																									/table>
																																																																																																																																																																																																																																																																									<div id=\'qicd10container_1011_3\'
																																																																																																																																																																																																																																																																										style=\'padding-top:1em;display:none;padding-left:40px;\'>
																																																																																																																																																																																																																																																																										<\
																																																																																																																																																																																																																																																																											/div>
																																																																																																																																																																																																																																																																											<input
																																																																																																																																																																																																																																																																												type=\'hidden\'
																																																																																																																																																																																																																																																																												class=\'ids\'
																																																																																																																																																																																																																																																																												name=\'panelitem_1011_3\'
																																																																																																																																																																																																																																																																												id=\'qpanelvalue_1011_3\'
																																																																																																																																																																																																																																																																												value=\'\' /><input
																																																																																																																																																																																																																																																																												type=\'hidden\'
																																																																																																																																																																																																																																																																												id=\'qsingle_1011_3\'
																																																																																																																																																																																																																																																																												value=\'0\' /><input
																																																																																																																																																																																																																																																																												type=\'hidden\'
																																																																																																																																																																																																																																																																												class=\'attribs\'
																																																																																																																																																																																																																																																																												id=\'qattrib_1011_3\'
																																																																																																																																																																																																																																																																												value=\'\' />
																																																																																																																																																																																																																																																																											<\
																																																																																																																																																																																																																																																																												/div>
																																																																																																																																																																																																																																																																												<\
																																																																																																																																																																																																																																																																													/div>
																																																																																																																																																																																																																																																																													<div style=\'border-top:1px
																																																																																																																																																																																																																																																																														solid
																																																																																																																																																																																																																																																																														#bbb;\'>
																																																																																																																																																																																																																																																																														<div class=\'panel_item_container
																																																																																																																																																																																																																																																																															proc_v5\'>
																																																																																																																																																																																																																																																																															<table
																																																																																																																																																																																																																																																																																class=\'invisible\'
																																																																																																																																																																																																																																																																																style=\'width:100%;\'>
																																																																																																																																																																																																																																																																																<tbody>
																																																																																																																																																																																																																																																																																	<tr>
																																																																																																																																																																																																																																																																																		<td>Prosedur
																																																																																																																																																																																																																																																																																			(<span
																																																																																																																																																																																																																																																																																				style=\'color:#888;font-size:0.9em;\'>ICD-9-CM
																																																																																																																																																																																																																																																																																				<\
																																																																																																																																																																																																																																																																																					/span>
																																																																																																																																																																																																																																																																																					):
																																																																																																																																																																																																																																																																																					<\
																																																																																																																																																																																																																																																																																						/td>
																																																																																																																																																																																																																																																																																		<td
																																																																																																																																																																																																																																																																																			style=\'text-align:right;\'>
																																																																																																																																																																																																																																																																																			<input
																																																																																																																																																																																																																																																																																				type=\'text\'
																																																																																																																																																																																																																																																																																				placeholder=\'Cari
																																																																																																																																																																																																																																																																																				Prosedur\'
																																																																																																																																																																																																																																																																																				class=\'searchBox\'
																																																																																																																																																																																																																																																																																				style=\'width:150px;\'
																																																																																																																																																																																																																																																																																				id=\'qicd9procsearchbox_1012_1\'
																																																																																																																																																																																																																																																																																				onkeypress=\'qicd9procpress(\"\",\"1012\",\"1\",this,event)\' />
																																																																																																																																																																																																																																																																																			<\
																																																																																																																																																																																																																																																																																				/td>
																																																																																																																																																																																																																																																																																				<\
																																																																																																																																																																																																																																																																																					/tr>
																																																																																																																																																																																																																																																																																					<\
																																																																																																																																																																																																																																																																																						/tbody>
																																																																																																																																																																																																																																																																																						<\
																																																																																																																																																																																																																																																																																							/table>
																																																																																																																																																																																																																																																																																							<div id=\'qicd9proccontainer_1012_1\'
																																																																																																																																																																																																																																																																																								style=\'padding-top:1em;display:none;padding-left:40px;\'>
																																																																																																																																																																																																																																																																																								<\
																																																																																																																																																																																																																																																																																									/div>
																																																																																																																																																																																																																																																																																									<input
																																																																																																																																																																																																																																																																																										type=\'hidden\'
																																																																																																																																																																																																																																																																																										class=\'ids\'
																																																																																																																																																																																																																																																																																										name=\'panelitem_1012_1\'
																																																																																																																																																																																																																																																																																										id=\'qpanelvalue_1012_1\'
																																																																																																																																																																																																																																																																																										value=\'\' /><input
																																																																																																																																																																																																																																																																																										type=\'hidden\'
																																																																																																																																																																																																																																																																																										id=\'qsingle_1012_1\'
																																																																																																																																																																																																																																																																																										value=\'0\' /><input
																																																																																																																																																																																																																																																																																										type=\'hidden\'
																																																																																																																																																																																																																																																																																										class=\'attribs\'
																																																																																																																																																																																																																																																																																										id=\'qattrib_1012_1\'
																																																																																																																																																																																																																																																																																										value=\'\' />
																																																																																																																																																																																																																																																																																									<\
																																																																																																																																																																																																																																																																																										/div>
																																																																																																																																																																																																																																																																																										<\
																																																																																																																																																																																																																																																																																											/div>
																																																																																																																																																																																																																																																																																											<\
																																																																																																																																																																																																																																																																																												/div>
																																																																																																																																																																																																																																																																																												<div id=\'dvtab_1\'
																																																																																																																																																																																																																																																																																													style=\'padding:1em;display:none;\'>
																																																																																																																																																																																																																																																																																													<div
																																																																																																																																																																																																																																																																																														style=\'text-align:right;padding:1em;\'>
																																																																																																																																																																																																																																																																																														[
																																																																																																																																																																																																																																																																																														<span
																																																																																																																																																																																																																																																																																															class=\'xlnk\'
																																																																																																																																																																																																																																																																																															onclick=\'import_coding(\"99400\",\"32\");\'>import
																																																																																																																																																																																																																																																																																															coding
																																																																																																																																																																																																																																																																																															<\
																																																																																																																																																																																																																																																																																																/span>
																																																																																																																																																																																																																																																																																																]
																																																																																																																																																																																																																																																																																																<\
																																																																																																																																																																																																																																																																																																	/div>
																																																																																																																																																																																																																																																																																																	<div
																																																																																																																																																																																																																																																																																																		id=\'dv_inagrouper_coding\'>
																																																																																																																																																																																																																																																																																																		<div>
																																																																																																																																																																																																																																																																																																			<div class=\'panel_item_container
																																																																																																																																																																																																																																																																																																				diag_v6\'>
																																																																																																																																																																																																																																																																																																				<table
																																																																																																																																																																																																																																																																																																					class=\'invisible\'
																																																																																																																																																																																																																																																																																																					style=\'width:100%;\'>
																																																																																																																																																																																																																																																																																																					<tbody>
																																																																																																																																																																																																																																																																																																						<tr>
																																																																																																																																																																																																																																																																																																							<td>Diagnosa
																																																																																																																																																																																																																																																																																																								(<span
																																																																																																																																																																																																																																																																																																									style=\'color:#888;font-size:0.9em;\'>ICD-10
																																																																																																																																																																																																																																																																																																									<\
																																																																																																																																																																																																																																																																																																										/span>
																																																																																																																																																																																																																																																																																																										):
																																																																																																																																																																																																																																																																																																										<\
																																																																																																																																																																																																																																																																																																											/td>
																																																																																																																																																																																																																																																																																																							<td
																																																																																																																																																																																																																																																																																																								style=\'text-align:right;\'>
																																																																																																																																																																																																																																																																																																								<input
																																																																																																																																																																																																																																																																																																									type=\'text\'
																																																																																																																																																																																																																																																																																																									placeholder=\'Cari
																																																																																																																																																																																																																																																																																																									Diagnosa\'
																																																																																																																																																																																																																																																																																																									class=\'searchBox\'
																																																																																																																																																																																																																																																																																																									style=\'width:150px;\'
																																																																																																																																																																																																																																																																																																									id=\'qicd10searchbox_1011_4\'
																																																																																																																																																																																																																																																																																																									onkeypress=\'inagrouper_qicd10press(\"\",\"1011\",\"4\",this,event)\' />
																																																																																																																																																																																																																																																																																																								<\
																																																																																																																																																																																																																																																																																																									/td>
																																																																																																																																																																																																																																																																																																									<\
																																																																																																																																																																																																																																																																																																										/tr>
																																																																																																																																																																																																																																																																																																										<\
																																																																																																																																																																																																																																																																																																											/tbody>
																																																																																																																																																																																																																																																																																																											<\
																																																																																																																																																																																																																																																																																																												/table>
																																																																																																																																																																																																																																																																																																												<div class=\'dvicd10container\'
																																																																																																																																																																																																																																																																																																													id=\'qicd10container_1011_4\'
																																																																																																																																																																																																																																																																																																													style=\'padding-top:1em;display:none;padding-left:40px;\'>
																																																																																																																																																																																																																																																																																																													<\
																																																																																																																																																																																																																																																																																																														/div>
																																																																																																																																																																																																																																																																																																														<input
																																																																																																																																																																																																																																																																																																															type=\'hidden\'
																																																																																																																																																																																																																																																																																																															class=\'ids\'
																																																																																																																																																																																																																																																																																																															name=\'panelitem_1011_4\'
																																																																																																																																																																																																																																																																																																															id=\'qpanelvalue_1011_4\'
																																																																																																																																																																																																																																																																																																															value=\'\' /><input
																																																																																																																																																																																																																																																																																																															type=\'hidden\'
																																																																																																																																																																																																																																																																																																															id=\'qsingle_1011_4\'
																																																																																																																																																																																																																																																																																																															value=\'0\' /><input
																																																																																																																																																																																																																																																																																																															type=\'hidden\'
																																																																																																																																																																																																																																																																																																															class=\'attribs\'
																																																																																																																																																																																																																																																																																																															id=\'qattrib_1011_4\'
																																																																																																																																																																																																																																																																																																															value=\'\' />
																																																																																																																																																																																																																																																																																																														<\
																																																																																																																																																																																																																																																																																																															/div>
																																																																																																																																																																																																																																																																																																															<\
																																																																																																																																																																																																																																																																																																																/div>
																																																																																																																																																																																																																																																																																																																<div style=\'border-top:1px
																																																																																																																																																																																																																																																																																																																	solid
																																																																																																																																																																																																																																																																																																																	#bbb;\'>
																																																																																																																																																																																																																																																																																																																	<div class=\'panel_item_container
																																																																																																																																																																																																																																																																																																																		proc_v6\'>
																																																																																																																																																																																																																																																																																																																		<table
																																																																																																																																																																																																																																																																																																																			class=\'invisible\'
																																																																																																																																																																																																																																																																																																																			style=\'width:100%;\'>
																																																																																																																																																																																																																																																																																																																			<tbody>
																																																																																																																																																																																																																																																																																																																				<tr>
																																																																																																																																																																																																																																																																																																																					<td>Prosedur
																																																																																																																																																																																																																																																																																																																						(<span
																																																																																																																																																																																																																																																																																																																							style=\'color:#888;font-size:0.9em;\'>ICD-9-CM
																																																																																																																																																																																																																																																																																																																							<\
																																																																																																																																																																																																																																																																																																																								/span>
																																																																																																																																																																																																																																																																																																																								):
																																																																																																																																																																																																																																																																																																																								<\
																																																																																																																																																																																																																																																																																																																									/td>
																																																																																																																																																																																																																																																																																																																					<td
																																																																																																																																																																																																																																																																																																																						style=\'text-align:right;\'>
																																																																																																																																																																																																																																																																																																																						<input
																																																																																																																																																																																																																																																																																																																							type=\'text\'
																																																																																																																																																																																																																																																																																																																							placeholder=\'Cari
																																																																																																																																																																																																																																																																																																																							Prosedur\'
																																																																																																																																																																																																																																																																																																																							class=\'searchBox\'
																																																																																																																																																																																																																																																																																																																							style=\'width:150px;\'
																																																																																																																																																																																																																																																																																																																							id=\'qicd9procsearchbox_1012_2\'
																																																																																																																																																																																																																																																																																																																							onkeypress=\'inagrouper_qicd9procpress(\"\",\"1012\",\"2\",-99,this,event)\' />
																																																																																																																																																																																																																																																																																																																						<\
																																																																																																																																																																																																																																																																																																																							/td>
																																																																																																																																																																																																																																																																																																																							<\
																																																																																																																																																																																																																																																																																																																								/tr>
																																																																																																																																																																																																																																																																																																																								<\
																																																																																																																																																																																																																																																																																																																									/tbody>
																																																																																																																																																																																																																																																																																																																									<\
																																																																																																																																																																																																																																																																																																																										/table>
																																																																																																																																																																																																																																																																																																																										<div class=\'dvicd9cmcontainer\'
																																																																																																																																																																																																																																																																																																																											id=\'qicd9proccontainer_1012_2\'
																																																																																																																																																																																																																																																																																																																											style=\'padding-top:1em;display:none;padding-left:40px;\'>
																																																																																																																																																																																																																																																																																																																											<\
																																																																																																																																																																																																																																																																																																																												/div>
																																																																																																																																																																																																																																																																																																																												<input
																																																																																																																																																																																																																																																																																																																													type=\'hidden\'
																																																																																																																																																																																																																																																																																																																													class=\'ids\'
																																																																																																																																																																																																																																																																																																																													name=\'panelitem_1012_2\'
																																																																																																																																																																																																																																																																																																																													id=\'qpanelvalue_1012_2\'
																																																																																																																																																																																																																																																																																																																													value=\'\' /><input
																																																																																																																																																																																																																																																																																																																													type=\'hidden\'
																																																																																																																																																																																																																																																																																																																													id=\'qsingle_1012_2\'
																																																																																																																																																																																																																																																																																																																													value=\'0\' /><input
																																																																																																																																																																																																																																																																																																																													type=\'hidden\'
																																																																																																																																																																																																																																																																																																																													class=\'attribs\'
																																																																																																																																																																																																																																																																																																																													id=\'qattrib_1012_2\'
																																																																																																																																																																																																																																																																																																																													value=\'\' />
																																																																																																																																																																																																																																																																																																																												<\
																																																																																																																																																																																																																																																																																																																													/div>
																																																																																																																																																																																																																																																																																																																													<\
																																																																																																																																																																																																																																																																																																																														/div>
																																																																																																																																																																																																																																																																																																																														<\
																																																																																																																																																																																																																																																																																																																															/div>
																																																																																																																																																																																																																																																																																																																															<\
																																																																																																																																																																																																																																																																																																																																/div>
																																																																																																																																																																																																																																																																																																																																<\
																																																																																																																																																																																																																																																																																																																																	/div>
																																																																																																																																																																																																																																																																																																																																	<\
																																																																																																																																																																																																																																																																																																																																		/td>
																																																																																																																																																																																																																																																																																																																																		<\
																																																																																																																																																																																																																																																																																																																																			/tr>
																																																																																																																																																																																																																																																																																																																				<tr
																																																																																																																																																																																																																																																																																																																					class=\'jkn_data_klinis\'>
																																																																																																																																																																																																																																																																																																																					<td colspan=\'4\'
																																																																																																																																																																																																																																																																																																																						style=\'text-align:center;padding:1em;border-top:2px
																																																																																																																																																																																																																																																																																																																						solid
																																																																																																																																																																																																																																																																																																																						#777;\'>
																																																																																																																																																																																																																																																																																																																						<div
																																																																																																																																																																																																																																																																																																																							style=\'text-align:center;padding:1em;\'>
																																																																																																																																																																																																																																																																																																																							Data
																																																																																																																																																																																																																																																																																																																							Klinis
																																																																																																																																																																																																																																																																																																																							<\
																																																																																																																																																																																																																																																																																																																								/div>
																																																																																																																																																																																																																																																																																																																								<table
																																																																																																																																																																																																																																																																																																																									class=\'xxlist\'
																																																																																																																																																																																																																																																																																																																									style=\'width:100%;border:0;\'>
																																																																																																																																																																																																																																																																																																																									<tbody>
																																																																																																																																																																																																																																																																																																																										<tr>
																																																																																																																																																																																																																																																																																																																											<td style=\'text-align:center;padding:2em;\'
																																																																																																																																																																																																																																																																																																																												colspan=\'6\'>
																																																																																																																																																																																																																																																																																																																												<div
																																																																																																																																																																																																																																																																																																																													class=\'frm_title\'>
																																																																																																																																																																																																																																																																																																																													Tekanan
																																																																																																																																																																																																																																																																																																																													Darah
																																																																																																																																																																																																																																																																																																																													(mmHg):
																																																																																																																																																																																																																																																																																																																													<\
																																																																																																																																																																																																																																																																																																																														/div>
																																																																																																																																																																																																																																																																																																																														<div
																																																																																																																																																																																																																																																																																																																															style=\'display:flex;justify-content:center;gap:10px;\'>
																																																																																																																																																																																																																																																																																																																															<div>
																																																																																																																																																																																																																																																																																																																																<input
																																																																																																																																																																																																																																																																																																																																	name=\'jkn_sistole\'
																																																																																																																																																																																																																																																																																																																																	value=\'0\'
																																																																																																																																																																																																																																																																																																																																	id=\'jkn_sistole\'
																																																																																																																																																																																																																																																																																																																																	type=\'text\'
																																																																																																																																																																																																																																																																																																																																	style=\'width:60px;text-align:center;\' />
																																																																																																																																																																																																																																																																																																																																<div
																																																																																																																																																																																																																																																																																																																																	style=\'font-size:0.8em;margin-top:0.5em;\'>
																																																																																																																																																																																																																																																																																																																																	Sistole
																																																																																																																																																																																																																																																																																																																																	<\
																																																																																																																																																																																																																																																																																																																																		/div>
																																																																																																																																																																																																																																																																																																																																		<\
																																																																																																																																																																																																																																																																																																																																			/div>
																																																																																																																																																																																																																																																																																																																																			<div>
																																																																																																																																																																																																																																																																																																																																				<input
																																																																																																																																																																																																																																																																																																																																					name=\'jkn_diastole\'
																																																																																																																																																																																																																																																																																																																																					value=\'0\'
																																																																																																																																																																																																																																																																																																																																					id=\'jkn_diastole\'
																																																																																																																																																																																																																																																																																																																																					type=\'text\'
																																																																																																																																																																																																																																																																																																																																					style=\'width:60px;text-align:center;\' />
																																																																																																																																																																																																																																																																																																																																				<div
																																																																																																																																																																																																																																																																																																																																					style=\'font-size:0.8em;margin-top:0.5em;\'>
																																																																																																																																																																																																																																																																																																																																					Diastole
																																																																																																																																																																																																																																																																																																																																					<\
																																																																																																																																																																																																																																																																																																																																						/div>
																																																																																																																																																																																																																																																																																																																																						<\
																																																																																																																																																																																																																																																																																																																																							/div>
																																																																																																																																																																																																																																																																																																																																							<\
																																																																																																																																																																																																																																																																																																																																								/div>
																																																																																																																																																																																																																																																																																																																																								<\
																																																																																																																																																																																																																																																																																																																																									/td>
																																																																																																																																																																																																																																																																																																																																									<\
																																																																																																																																																																																																																																																																																																																																										/tr>
																																																																																																																																																																																																																																																																																																																										<tr id=\'tr_jkn_apgar\'
																																																																																																																																																																																																																																																																																																																											style=\'display:none;\'>
																																																																																																																																																																																																																																																																																																																											<td style=\'text-align:center;padding:1em;padding-bottom:2em;\'
																																																																																																																																																																																																																																																																																																																												colspan=\'6\'>
																																																																																																																																																																																																																																																																																																																												<style>
																																																																																																																																																																																																																																																																																																																													\ntable.apgar tbody tr td {
																																																																																																																																																																																																																																																																																																																														padding: 0.3em;
																																																																																																																																																																																																																																																																																																																														text-align: center;
																																																																																																																																																																																																																																																																																																																														padding-bottom: 0.5em;
																																																																																																																																																																																																																																																																																																																													}

																																																																																																																																																																																																																																																																																																																													\ntable.apgar tbody tr td.apgar-caption {
																																																																																																																																																																																																																																																																																																																														padding: 0;
																																																																																																																																																																																																																																																																																																																														text-align: left;
																																																																																																																																																																																																																																																																																																																														transform: rotate(20deg) translate(20px, 0px);
																																																																																																																																																																																																																																																																																																																													}

																																																																																																																																																																																																																																																																																																																													<\/style><div style=\'text-align:center;
																																																																																																																																																																																																																																																																																																																													padding:1em;
																																																																																																																																																																																																																																																																																																																													\'>APGAR Score<\/div><table align=\'center\' class=\'invisible apgar\'><tbody><tr><td style=\'style=\'line-height:28px;
																																																																																																																																																																																																																																																																																																																													font-size:0.8em;
																																																																																																																																																																																																																																																																																																																													\'>1 menit<\/td><td><input name=\'jkn_apgar_1_appearance\' value=\'\' id=\'jkn_apgar_1_appearance\' type=\'text\' style=\'width:30px;
																																																																																																																																																																																																																																																																																																																													text-align:center;
																																																																																																																																																																																																																																																																																																																													\'/><\/td><td><input name=\'jkn_apgar_1_pulse\' value=\'\' id=\'jkn_apgar_1_pulse\' type=\'text\' style=\'width:30px;
																																																																																																																																																																																																																																																																																																																													text-align:center;
																																																																																																																																																																																																																																																																																																																													\'/><\/td><td><input name=\'jkn_apgar_1_grimace\' value=\'\' id=\'jkn_apgar_1_grimace\' type=\'text\' style=\'width:30px;
																																																																																																																																																																																																																																																																																																																													text-align:center;
																																																																																																																																																																																																																																																																																																																													\'/><\/td><td><input name=\'jkn_apgar_1_activity\' value=\'\' id=\'jkn_apgar_1_activity\' type=\'text\' style=\'width:30px;
																																																																																																																																																																																																																																																																																																																													text-align:center;
																																																																																																																																																																																																																																																																																																																													\'/><\/td><td><input name=\'jkn_apgar_1_respiration\' value=\'\' id=\'jkn_apgar_1_respiration\' type=\'text\' style=\'width:30px;
																																																																																																																																																																																																																																																																																																																													text-align:center;
																																																																																																																																																																																																																																																																																																																													\'/><\/td><\/tr><tr><td style=\'style=\'line-height:28px;
																																																																																																																																																																																																																																																																																																																													font-size:0.8em;
																																																																																																																																																																																																																																																																																																																													\'>5 menit<\/td><td><input name=\'jkn_apgar_5_appearance\' value=\'\' id=\'jkn_apgar_5_appearance\' type=\'text\' style=\'width:30px;
																																																																																																																																																																																																																																																																																																																													text-align:center;
																																																																																																																																																																																																																																																																																																																													\'/><\/td><td><input name=\'jkn_apgar_5_pulse\' value=\'\' id=\'jkn_apgar_5_pulse\' type=\'text\' style=\'width:30px;
																																																																																																																																																																																																																																																																																																																													text-align:center;
																																																																																																																																																																																																																																																																																																																													\'/><\/td><td><input name=\'jkn_apgar_5_grimace\' value=\'\' id=\'jkn_apgar_5_grimace\' type=\'text\' style=\'width:30px;
																																																																																																																																																																																																																																																																																																																													text-align:center;
																																																																																																																																																																																																																																																																																																																													\'/><\/td><td><input name=\'jkn_apgar_5_activity\' value=\'\' id=\'jkn_apgar_5_activity\' type=\'text\' style=\'width:30px;
																																																																																																																																																																																																																																																																																																																													text-align:center;
																																																																																																																																																																																																																																																																																																																													\'/><\/td><td><input name=\'jkn_apgar_5_respiration\' value=\'\' id=\'jkn_apgar_5_respiration\' type=\'text\' style=\'width:30px;
																																																																																																																																																																																																																																																																																																																													text-align:center;
																																																																																																																																																																																																																																																																																																																													\'/><\/td><\/tr><tr><td class=\'apgar-caption\'><\/td><td class=\'apgar-caption\'>appear.<\/td><td class=\'apgar-caption\'>pulse<\/td><td class=\'apgar-caption\'>grimace<\/td><td class=\'apgar-caption\'>activity<\/td><td class=\'apgar-caption\'>resp.<\/td><\/tr><\/tbody><\/table><\/td><\/tr><tr class=\'tr_jkn_persalinan\'><td style=\'text-align:center;
																																																																																																																																																																																																																																																																																																																													padding:2em;
																																																																																																																																																																																																																																																																																																																													\' colspan=\'2\'><div class=\'frm_title\'>Usia Kehamilan (minggu):<\/div><div style=\'display:flex;
																																																																																																																																																																																																																																																																																																																													justify-content:center;
																																																																																																																																																																																																																																																																																																																													gap:10px;
																																																																																																																																																																																																																																																																																																																													\'><div><input name=\'jkn_usia_kehamilan\' value=\'\' id=\'jkn_usia_kehamilan\' type=\'text\' style=\'width:60px;
																																																																																																																																																																																																																																																																																																																													text-align:center;
																																																																																																																																																																																																																																																																																																																													\'/><\/div><\/div><\/td><td style=\'text-align:center;
																																																																																																																																																																																																																																																																																																																													padding:2em;
																																																																																																																																																																																																																																																																																																																													\' colspan=\'2\'><div class=\'frm_title\'>Riwayat Kehamilan Sebelumnya:<\/div><div style=\'display:flex;
																																																																																																																																																																																																																																																																																																																													justify-content:center;
																																																																																																																																																																																																																																																																																																																													gap:10px;
																																																																																																																																																																																																																																																																																																																													\'><div><input name=\'jkn_gravida\' value=\'\' id=\'jkn_gravida\' type=\'text\' style=\'width:60px;
																																																																																																																																																																																																																																																																																																																													text-align:center;
																																																																																																																																																																																																																																																																																																																													\'/><div style=\'font-size:0.8em;
																																																																																																																																																																																																																																																																																																																													margin-top:0.5em;
																																																																																																																																																																																																																																																																																																																													\'>Gravida<\/div><\/div><div><input name=\'jkn_partus\' value=\'\' id=\'jkn_partus\' type=\'text\' style=\'width:60px;
																																																																																																																																																																																																																																																																																																																													text-align:center;
																																																																																																																																																																																																																																																																																																																													\'/><div style=\'font-size:0.8em;
																																																																																																																																																																																																																																																																																																																													margin-top:0.5em;
																																																																																																																																																																																																																																																																																																																													\'>Partus<\/div><\/div><div><input name=\'jkn_abortus\' value=\'\' id=\'jkn_abortus\' type=\'text\' style=\'width:60px;
																																																																																																																																																																																																																																																																																																																													text-align:center;
																																																																																																																																																																																																																																																																																																																													\'/><div style=\'font-size:0.8em;
																																																																																																																																																																																																																																																																																																																													margin-top:0.5em;
																																																																																																																																																																																																																																																																																																																													\'>Abortus<\/div><\/div><\/div><\/td><td style=\'text-align:left;
																																																																																																																																																																																																																																																																																																																													padding:2em;
																																																																																																																																																																																																																																																																																																																													\' colspan=\'2\'><div class=\'frm_title\'>Onset Kontraksi:<\/div><div style=\'display:flex;
																																																																																																																																																																																																																																																																																																																													display:flex;
																																																																																																																																																																																																																																																																																																																													align-items: center;
																																																																																																																																																																																																																																																																																																																													justify-content: center;
																																																																																																																																																																																																																																																																																																																													\'><div style=\'\'><div><input checked=\'checked\' type=\'radio\' id=\'jkn_ck_spontan\' value=\'spontan\' name=\'jkn_onset_kontraksi\'/>&nbsp;
																																																																																																																																																																																																																																																																																																																													<label for=\'jkn_ck_spontan\' class=\'xlnk\'>Timbul Spontan<\/label><\/div><div><input type=\'radio\' id=\'jkn_ck_induksi\' value=\'induksi\' name=\'jkn_onset_kontraksi\'/>&nbsp;
																																																																																																																																																																																																																																																																																																																													<label for=\'jkn_ck_induksi\' class=\'xlnk\'>Dengan Induksi<\/label><\/div><div><input type=\'radio\' id=\'jkn_ck_non_spontan_non_induksi\' value=\'non_spontan_non_induksi\' name=\'jkn_onset_kontraksi\'/>&nbsp;
																																																																																																																																																																																																																																																																																																																													<label for=\'jkn_ck_non_spontan_non_induksi\' class=\'xlnk\'>SC Tanpa Kontraksi/Induksi<\/label><\/div><\/div><\/div><\/td><\/tr><tr class=\'tr_jkn_persalinan\'><td colspan=\'6\' style=\'padding:2em;
																																																																																																																																																																																																																																																																																																																													\'><div class=\'frm_title\'>Kelahiran:<\/div><div id=\'jkn_persalinan_container\'><\/div><div style=\'display:flex;
																																																																																																																																																																																																																																																																																																																													justify-content:center;
																																																																																																																																																																																																																																																																																																																													gap:10px;
																																																																																																																																																																																																																																																																																																																													margin-top:2em;
																																																																																																																																																																																																																																																																																																																													margin-bottom:1em;
																																																																																																																																																																																																																																																																																																																													\'><input type=\'button\' value=\'Tambah Kelahiran\' onclick=\'jkn_delivery_add();
																																																																																																																																																																																																																																																																																																																													\'/><\/div><\/td><\/tr><\/tbody><\/table><\/td><\/tr><tr id=\'tr_form_jampersal_data\'><td colspan=\'4\' style=\'text-align:left;
																																																																																																																																																																																																																																																																																																																													padding:2em;
																																																																																																																																																																																																																																																																																																																													border-top:2px solid #777;

																																																																																																																																																																																																																																																																																																																													\'><style>\n.frm_title {
																																																																																																																																																																																																																																																																																																																														margin-bottom: 1em;
																																																																																																																																																																																																																																																																																																																														text-align: center;
																																																																																																																																																																																																																																																																																																																														font-style: italic;
																																																																																																																																																																																																																																																																																																																														font-size: 0.9em;
																																																																																																																																																																																																																																																																																																																														color: #777777;
																																																																																																																																																																																																																																																																																																																													}

																																																																																																																																																																																																																																																																																																																													\ntextarea::placeholder {
																																																																																																																																																																																																																																																																																																																														line-height: 1.2em;
																																																																																																																																																																																																																																																																																																																													}

																																																																																																																																																																																																																																																																																																																													<\/style><div style=\'text-align:center;
																																																																																																																																																																																																																																																																																																																													padding:1em;
																																																																																																																																																																																																																																																																																																																													\' id=\'form_robson_title\'>Form Data Jampersal<\/div><table class=\'xxlist\' style=\'table-layout:fixed;
																																																																																																																																																																																																																																																																																																																													width:100%;
																																																																																																																																																																																																																																																																																																																													border:0;
																																																																																																																																																																																																																																																																																																																													\'><tbody><tr class=\'jampersal-data\' style=\'display:none;
																																																																																																																																																																																																																																																																																																																													\'><td style=\'text-align:center;
																																																																																																																																																																																																																																																																																																																													padding:2em;
																																																																																																																																																																																																																																																																																																																													\' colspan=\'2\'><div class=\'frm_title\'>Nomor Rujukan:<\/div><div style=\'display:flex;
																																																																																																																																																																																																																																																																																																																													justify-content:center;
																																																																																																																																																																																																																																																																																																																													gap:10px;
																																																																																																																																																																																																																																																																																																																													\'><input type=\'text\' name=\'nomor_rujukan\' value=\'\' style=\'width:150px;
																																																																																																																																																																																																																																																																																																																													text-align:center;
																																																																																																																																																																																																																																																																																																																													\'/><\/div><\/div><\/td><td style=\'text-align:center;
																																																																																																																																																																																																																																																																																																																													padding:2em;
																																																																																																																																																																																																																																																																																																																													\' colspan=\'2\'><div class=\'frm_title\'>Faskes Perujuk:<\/div><div style=\'display:flex;
																																																																																																																																																																																																																																																																																																																													justify-content:center;
																																																																																																																																																																																																																																																																																																																													gap:10px;
																																																																																																																																																																																																																																																																																																																													\'><input type=\'text\' name=\'kode_perujuk\' value=\'\' style=\'width:150px;
																																																																																																																																																																																																																																																																																																																													text-align:center;
																																																																																																																																																																																																																																																																																																																													\'/><\/div><\/div><\/td><td style=\'text-align:center;
																																																																																																																																																																																																																																																																																																																													padding:2em;
																																																																																																																																																																																																																																																																																																																													\' colspan=\'2\'><div class=\'frm_title\'>Cara Masuk:<\/div><div style=\'display:flex;
																																																																																																																																																																																																																																																																																																																													justify-content:center;
																																																																																																																																																																																																																																																																																																																													gap:10px;
																																																																																																																																																																																																																																																																																																																													\'><div><input checked=\'checked\' type=\'radio\' id=\'ck_cara_masuk_rujukan_fktp\' value=\'rujukan_fktp\' name=\'cara_masuk\'/>&nbsp;
																																																																																																																																																																																																																																																																																																																													<label for=\'ck_cara_masuk_rujukan_fktp\' class=\'xlnk\'>Rujukan FKTP<\/label><\/div><div><input type=\'radio\' id=\'ck_cara_masuk_rujukan_fkrtl\' value=\'rujukan_fkrtl\' name=\'cara_masuk\'/>&nbsp;
																																																																																																																																																																																																																																																																																																																													<label for=\'ck_cara_masuk_rujukan_fkrtl\' class=\'xlnk\'>Rujukan FKRTL<\/label><\/div><div><input type=\'radio\' id=\'ck_cara_masuk_emergensi\' value=\'emergensi\' name=\'cara_masuk\'/>&nbsp;
																																																																																																																																																																																																																																																																																																																													<label for=\'ck_cara_masuk_emergensi\' class=\'xlnk\'>Emergensi<\/label><\/div><\/div><\/td><\/tr><tr><td style=\'text-align:center;
																																																																																																																																																																																																																																																																																																																													padding:2em;
																																																																																																																																																																																																																																																																																																																													\' colspan=\'2\'><div class=\'frm_title\'>Usia Kehamilan (minggu):<\/div><div style=\'display:flex;
																																																																																																																																																																																																																																																																																																																													justify-content:center;
																																																																																																																																																																																																																																																																																																																													gap:10px;
																																																																																																																																																																																																																																																																																																																													\'><div><input name=\'usia_kehamilan\' value=\'0\' id=\'usia_kehamilan\' type=\'text\' style=\'width:60px;
																																																																																																																																																																																																																																																																																																																													text-align:center;
																																																																																																																																																																																																																																																																																																																													\'/><\/div><\/div><\/td><td style=\'text-align:center;
																																																																																																																																																																																																																																																																																																																													padding:2em;
																																																																																																																																																																																																																																																																																																																													\' colspan=\'2\'><div class=\'frm_title\'>Tekanan Darah (mmHg):<\/div><div style=\'display:flex;
																																																																																																																																																																																																																																																																																																																													justify-content:center;
																																																																																																																																																																																																																																																																																																																													gap:10px;
																																																																																																																																																																																																																																																																																																																													\'><div><input name=\'sistole\' value=\'0\' id=\'sistole\' type=\'text\' style=\'width:60px;
																																																																																																																																																																																																																																																																																																																													text-align:center;
																																																																																																																																																																																																																																																																																																																													\'/><div style=\'font-size:0.8em;
																																																																																																																																																																																																																																																																																																																													margin-top:0.5em;
																																																																																																																																																																																																																																																																																																																													\'>Sistole<\/div><\/div><div><input name=\'diastole\' value=\'0\' id=\'diastole\' type=\'text\' style=\'width:60px;
																																																																																																																																																																																																																																																																																																																													text-align:center;
																																																																																																																																																																																																																																																																																																																													\'/><div style=\'font-size:0.8em;
																																																																																																																																																																																																																																																																																																																													margin-top:0.5em;
																																																																																																																																																																																																																																																																																																																													\'>Diastole<\/div><\/div><\/div><\/td><td style=\'text-align:center;
																																																																																																																																																																																																																																																																																																																													padding:2em;
																																																																																																																																																																																																																																																																																																																													\' colspan=\'2\'><div class=\'frm_title\'>Riwayat Kehamilan Sebelumnya:<\/div><div style=\'display:flex;
																																																																																																																																																																																																																																																																																																																													justify-content:center;
																																																																																																																																																																																																																																																																																																																													gap:10px;
																																																																																																																																																																																																																																																																																																																													\'><div><input name=\'gravida\' value=\'0\' id=\'gravida\' type=\'text\' style=\'width:60px;
																																																																																																																																																																																																																																																																																																																													text-align:center;
																																																																																																																																																																																																																																																																																																																													\'/><div style=\'font-size:0.8em;
																																																																																																																																																																																																																																																																																																																													margin-top:0.5em;
																																																																																																																																																																																																																																																																																																																													\'>Gravida<\/div><\/div><div><input name=\'partus\' value=\'0\' id=\'partus\' type=\'text\' style=\'width:60px;
																																																																																																																																																																																																																																																																																																																													text-align:center;
																																																																																																																																																																																																																																																																																																																													\'/><div style=\'font-size:0.8em;
																																																																																																																																																																																																																																																																																																																													margin-top:0.5em;
																																																																																																																																																																																																																																																																																																																													\'>Partus<\/div><\/div><div><input name=\'abortus\' value=\'0\' id=\'abortus\' type=\'text\' style=\'width:60px;
																																																																																																																																																																																																																																																																																																																													text-align:center;
																																																																																																																																																																																																																																																																																																																													\'/><div style=\'font-size:0.8em;
																																																																																																																																																																																																																																																																																																																													margin-top:0.5em;
																																																																																																																																																																																																																																																																																																																													\'>Abortus<\/div><\/div><\/div><\/td><\/tr><tr><td style=\'text-align:left;
																																																																																																																																																																																																																																																																																																																													padding:2em;
																																																																																																																																																																																																																																																																																																																													\' colspan=\'2\'><div class=\'frm_title\'>Onset Kontraksi:<\/div><div style=\'display:flex;
																																																																																																																																																																																																																																																																																																																													display:flex;
																																																																																																																																																																																																																																																																																																																													align-items: center;
																																																																																																																																																																																																																																																																																																																													justify-content: center;
																																																																																																																																																																																																																																																																																																																													\'><div style=\'\'><div><input checked=\'checked\' type=\'radio\' id=\'ck_spontan\' value=\'spontan\' name=\'onset_kontraksi\'/>&nbsp;
																																																																																																																																																																																																																																																																																																																													<label for=\'ck_spontan\' class=\'xlnk\'>Timbul Spontan<\/label><\/div><div><input type=\'radio\' id=\'ck_induksi\' value=\'induksi\' name=\'onset_kontraksi\'/>&nbsp;
																																																																																																																																																																																																																																																																																																																													<label for=\'ck_induksi\' class=\'xlnk\'>Dengan Induksi<\/label><\/div><div><input type=\'radio\' id=\'ck_non_spontan_non_induksi\' value=\'non_spontan_non_induksi\' name=\'onset_kontraksi\'/>&nbsp;
																																																																																																																																																																																																																																																																																																																													<label for=\'ck_non_spontan_non_induksi\' class=\'xlnk\'>SC Tanpa Kontraksi/Induksi<\/label><\/div><\/div><\/div><\/td><td style=\'text-align:center;
																																																																																																																																																																																																																																																																																																																													padding:2em;
																																																																																																																																																																																																																																																																																																																													\' colspan=\'2\'><div class=\'frm_title\'>Riwayat SC Sebelumnya:<\/div><div style=\'display:flex;
																																																																																																																																																																																																																																																																																																																													justify-content:center;
																																																																																																																																																																																																																																																																																																																													gap:10px;
																																																																																																																																																																																																																																																																																																																													\'><div><input name=\'riwayat_sc\' value=\'0\' id=\'riwayat_sc\' type=\'text\' style=\'width:60px;
																																																																																																																																																																																																																																																																																																																													text-align:center;
																																																																																																																																																																																																																																																																																																																													\'/><div style=\'font-size:0.8em;
																																																																																																																																																																																																																																																																																																																													margin-top:0.5em;
																																																																																																																																																																																																																																																																																																																													\'>Jumlah SC<\/div><\/div><\/div><\/td><td style=\'text-align:center;
																																																																																																																																																																																																																																																																																																																													padding:2em;
																																																																																																																																																																																																																																																																																																																													\' colspan=\'2\'><div class=\'frm_title\'>Kuretase:<\/div><div style=\'display:flex;
																																																																																																																																																																																																																																																																																																																													justify-content:center;
																																																																																																																																																																																																																																																																																																																													gap:10px;
																																																																																																																																																																																																																																																																																																																													\'><div><input checked=\'checked\' type=\'radio\' id=\'ck_kuretase_no\' value=\'0\' name=\'kuretase\'/>&nbsp;
																																																																																																																																																																																																																																																																																																																													<label for=\'ck_kuretase_no\' class=\'xlnk\'>Tidak<\/label><\/div><div><input type=\'radio\' id=\'ck_kuretase_yes\' value=\'1\' name=\'kuretase\'/>&nbsp;
																																																																																																																																																																																																																																																																																																																													<label for=\'ck_kuretase_yes\' class=\'xlnk\'>Ya<\/label><\/div><\/div><\/td><\/tr><tr><td colspan=\'6\' style=\'padding:2em;
																																																																																																																																																																																																																																																																																																																													\'><div class=\'frm_title\'>Kelahiran:<\/div><div id=\'persalinan_container\'><\/div><div style=\'display:flex;
																																																																																																																																																																																																																																																																																																																													justify-content:center;
																																																																																																																																																																																																																																																																																																																													gap:10px;
																																																																																																																																																																																																																																																																																																																													margin-top:2em;
																																																																																																																																																																																																																																																																																																																													margin-bottom:1em;
																																																																																																																																																																																																																																																																																																																													\'><input type=\'button\' value=\'Tambah Kelahiran\' onclick=\'delivery_add();
																																																																																																																																																																																																																																																																																																																													\'/><\/div><\/td><\/tr><tr class=\'jampersal-data\' style=\'display:none;
																																																																																																																																																																																																																																																																																																																													\'><td colspan=\'3\' style=\'padding:2em;
																																																																																																																																																																																																																																																																																																																													\'><div class=\'frm_title\'>Anamnesa:<\/div><div style=\'display:flex;
																																																																																																																																																																																																																																																																																																																													justify-content:center;
																																																																																																																																																																																																																																																																																																																													gap:10px;
																																																																																																																																																																																																																																																																																																																													margin-top:1em;
																																																																																																																																																																																																																																																																																																																													margin-bottom:1em;
																																																																																																																																																																																																																																																																																																																													\'><textarea style=\'width:100%;
																																																																																																																																																																																																																																																																																																																													max-width:600px;
																																																																																																																																																																																																																																																																																																																													font-family:courier;
																																																																																																																																																																																																																																																																																																																													\' name=\'anamnesa\' placeholder=\'Anamnesa (naratif)\'><\/textarea><\/div><\/td><td colspan=\'3\' style=\'padding:2em;
																																																																																																																																																																																																																																																																																																																													\'><div class=\'frm_title\'>Indikasi Rawat Inap:<\/div><div style=\'display:flex;
																																																																																																																																																																																																																																																																																																																													justify-content:center;
																																																																																																																																																																																																																																																																																																																													gap:10px;
																																																																																																																																																																																																																																																																																																																													margin-top:1em;
																																																																																																																																																																																																																																																																																																																													margin-bottom:1em;
																																																																																																																																																																																																																																																																																																																													\'><textarea style=\'width:100%;
																																																																																																																																																																																																																																																																																																																													max-width:600px;
																																																																																																																																																																																																																																																																																																																													font-family:courier;
																																																																																																																																																																																																																																																																																																																													\' name=\'indikasi_ranap\' placeholder=\'Indikasi rawat inap (naratif)\'><\/textarea><\/div><\/td><\/tr><tr class=\'jampersal-data\' style=\'display:none;
																																																																																																																																																																																																																																																																																																																													\'><td colspan=\'3\' style=\'padding:2em;
																																																																																																																																																																																																																																																																																																																													\'><div class=\'frm_title\'>Diagnosa Primer:<\/div><div style=\'display:flex;
																																																																																																																																																																																																																																																																																																																													justify-content:center;
																																																																																																																																																																																																																																																																																																																													gap:10px;
																																																																																																																																																																																																																																																																																																																													margin-top:1em;
																																																																																																																																																																																																																																																																																																																													margin-bottom:1em;
																																																																																																																																																																																																																																																																																																																													\'><textarea style=\'width:100%;
																																																																																																																																																																																																																																																																																																																													max-width:600px;
																																																																																																																																																																																																																																																																																																																													font-family:courier;
																																																																																																																																																																																																																																																																																																																													\' name=\'diagnosa_primer\' placeholder=\'Diagnosa primer (naratif)\'><\/textarea><\/div><\/td><td colspan=\'3\' style=\'padding:2em;
																																																																																																																																																																																																																																																																																																																													\'><div class=\'frm_title\'>Diagnosa Sekunder:<\/div><div style=\'display:flex;
																																																																																																																																																																																																																																																																																																																													justify-content:center;
																																																																																																																																																																																																																																																																																																																													gap:10px;
																																																																																																																																																																																																																																																																																																																													margin-top:1em;
																																																																																																																																																																																																																																																																																																																													margin-bottom:1em;
																																																																																																																																																																																																																																																																																																																													\'><textarea style=\'width:100%;
																																																																																																																																																																																																																																																																																																																													max-width:600px;
																																																																																																																																																																																																																																																																																																																													font-family:courier;
																																																																																																																																																																																																																																																																																																																													\' name=\'diagnosa_sekunder\' placeholder=\'Diagnosa sekunder (naratif)\'><\/textarea><\/div><\/td><\/tr><tr class=\'jampersal-data\' style=\'display:none;
																																																																																																																																																																																																																																																																																																																													\'><td colspan=\'3\' style=\'padding:2em;
																																																																																																																																																																																																																																																																																																																													vertical-align:top;
																																																																																																																																																																																																																																																																																																																													\'><div class=\'frm_title\'>Prosedur:<\/div><div style=\'display:flex;
																																																																																																																																																																																																																																																																																																																													justify-content:center;
																																																																																																																																																																																																																																																																																																																													gap:10px;
																																																																																																																																																																																																																																																																																																																													margin-top:1em;
																																																																																																																																																																																																																																																																																																																													margin-bottom:1em;
																																																																																																																																																																																																																																																																																																																													\'><textarea style=\'width:100%;
																																																																																																																																																																																																																																																																																																																													max-width:600px;
																																																																																																																																																																																																																																																																																																																													font-family:courier;
																																																																																																																																																																																																																																																																																																																													\' name=\'prosedur\' placeholder=\'Prosedur (naratif)\'><\/textarea><\/div><\/td><td colspan=\'3\' style=\'padding:2em;
																																																																																																																																																																																																																																																																																																																													vertical-align:top;
																																																																																																																																																																																																																																																																																																																													\'><div class=\'frm_title\'>Operasi:<\/div><div style=\'display:flex;
																																																																																																																																																																																																																																																																																																																													justify-content:center;
																																																																																																																																																																																																																																																																																																																													gap:10px;
																																																																																																																																																																																																																																																																																																																													margin-top:1em;
																																																																																																																																																																																																																																																																																																																													margin-bottom:1em;
																																																																																																																																																																																																																																																																																																																													\'><input type=\'text\' style=\'width:100%;
																																																																																																																																																																																																																																																																																																																													max-width:600px;
																																																																																																																																																																																																																																																																																																																													font-family:courier;
																																																																																																																																																																																																																																																																																																																													\' name=\'nama_operasi\' placeholder=\'Nama Operasi\' value=\'\'/><\/div><div style=\'display:flex;
																																																																																																																																																																																																																																																																																																																													justify-content:center;
																																																																																																																																																																																																																																																																																																																													gap:10px;
																																																																																																																																																																																																																																																																																																																													margin-top:1em;
																																																																																																																																																																																																																																																																																																																													margin-bottom:1em;
																																																																																																																																																																																																																																																																																																																													\'><textarea style=\'width:100%;
																																																																																																																																																																																																																																																																																																																													max-width:600px;
																																																																																																																																																																																																																																																																																																																													font-family:courier;
																																																																																																																																																																																																																																																																																																																													\' name=\'laporan_operasi\' placeholder=\'Laporan Operasi\'><\/textarea><\/div><\/td><\/tr><tr><td colspan=\'6\'>&nbsp;
																																																																																																																																																																																																																																																																																																																													<\/td><\/tr><\/table><\/td><\/tr><tr id=\'trbutton\' style=\'\'><td style=\'text-align:left;
																																																																																																																																																																																																																																																																																																																													border-top:2px solid #777;
																																																																																																																																																																																																																																																																																																																													background-color:#cccccc;
																																																																																																																																																																																																																																																																																																																													\'><input type=\'button\' value=\'Hapus Klaim\' onclick=\'delete_admission(\"881937\", this, event);
																																																																																																																																																																																																																																																																																																																													\'/><\/td><td colspan=\'3\' style=\'border-left:0;
																																																																																																																																																																																																																																																																																																																													border-top:2px solid #777;
																																																																																																																																																																																																																																																																																																																													background-color:#cccccc;
																																																																																																																																																																																																																																																																																																																													\'><div style=\'text-align:right;
																																																																																																																																																																																																																																																																																																																													\'><input type=\'button\' value=\'Simpan\' onclick=\'save_admission(\"881937\", this, event);
																																																																																																																																																																																																																																																																																																																													\' style=\'width:100px;
																																																																																																																																																																																																																																																																																																																													\'/>&nbsp;
																																																																																																																																																																																																																																																																																																																													<input type=\'button\' value=\'Grouper\' class=\'grouperbutton\' style=\'width:100px;
																																																																																																																																																																																																																																																																																																																													\' onclick=\'grouper(\"881937\", this, event);
																																																																																																																																																																																																																																																																																																																													\' style=\'width:100px;
																																																																																																																																																																																																																																																																																																																													\'/><\/div><\/td><\/tr><tr><td colspan=\'4\' style=\'border:0;
																																																																																																																																																																																																																																																																																																																													\'><div style=\'text-align:left;
																																																																																																																																																																																																																																																																																																																													\' id=\'grouper_result\'><\/div><\/td><\/tr><\/tbody><\/table><\/div>',[['3','JKN',''],['71','JAMINAN COVID-19',''],['72','JAMINAN KIPI',''],['73','JAMINAN BAYI BARU LAHIR',''],['74','JAMINAN PERPANJANGAN MASA RAWAT',''],['75','JAMINAN CO-INSIDENSE',''],['76','JAMPERSAL',''],['5','JAMKESDA',''],['1','PASIEN BAYAR','']],'normal','6 Feb 2023','6 Feb 2023','-10',1,'738922',1,'19924.71625']